<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\BillingPlan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Services\Billing;
use App\Models\BillingProduct;
use App\Models\BillingTransaction;
use Illuminate\Support\Facades\Crypt;

class SubscriptionController extends Controller
{

    public function index()
    {
        if (\Auth::user()->type == 'super admin' || \Auth::user()->type == 'admin') {
            $subscriptions = Subscription::get();

            return view('subscription.index', compact('subscriptions'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied!'));
        }
    }


    public function create()
    {
        $durations = Subscription::$duration;

        return view('subscription.create', compact('durations'));
    }


    public function store(Request $request)
    {
        try {
            if (\Auth::user()->type == 'super admin' ) {
                $validator = \Validator::make(
                    $request->all(), [
                    'name' => 'required|regex:/^[\s\w-]*$/',
                    'price' => 'required',
                    'duration' => 'required',
                    'total_user' => 'required',
                    'total_document' => 'required',
                ], [
                        'regex' => __('The Name format is invalid, Contains letter, number and only alphanum'),
                    ]
                );
                if ($validator->fails()) {
                    $messages = $validator->getMessageBag();
    
                    return redirect()->back()->with('error', $messages->first());
                }
    
                $subscription = Subscription::create(
                    [
                        'name' => $request->name,
                        'price' => $request->price,
                        'duration' => $request->duration,
                        'total_user' => $request->total_user,
                        'total_document' => $request->total_document,
                        'enabled_document_history' => isset($request->enabled_document_history)?1:0,
                        'enabled_logged_history' => isset($request->enabled_logged_history)?1:0,
                        'description' => $request->description,
                    ]
                );
    
                $stripe_plan_id = Billing::createPlan('stripe', $subscription);
                $paypal_plan_id =  Billing::createPlan('paypal', $subscription);
                
                BillingPlan::create([
                    'provider' => 'paypal',
                    'plan_id' => $paypal_plan_id,
                    'subscription_id' => $subscription->id
                ], [
                    'provider' => 'stripe',
                    'plan_id' => $stripe_plan_id,
                    'subscription_id' => $subscription->id
                ]);

                $stripe_billing_product = Billing::createProduct('stripe', $subscription->name);
                BillingProduct::create([
                    'provider' => "stripe",
                    'subscription_id' => $subscription->id,
                    'product_id' => $stripe_billing_product->id
                ]);

                return redirect()->route('subscriptions.index')->with('success', __('Subscription successfully created!'));
            } else {
                return redirect()->back()->with('error', __('Permission Denied!'));
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error', __('Something went wrong, Please try again!'));
        }
    }


    public function show($ids)
    {
        if (\Auth::user()->type == 'admin') {
            $id = Crypt::decrypt($ids);
            $subscription = Subscription::find($id);

            return view('subscription.show', compact('subscription'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied!'));
        }
    }


    public function edit(subscription $subscription)
    {
        $durations = Subscription::$duration;

        return view('subscription.edit', compact('durations', 'subscription'));
    }


    public function update(Request $request, subscription $subscription)
    {

        if (\Auth::user()->type == 'super admin') {
            $validator = \Validator::make(
                $request->all(), [
                'name' => 'required|regex:/^[\s\w-]*$/',
                'price' => 'required',
                'duration' => 'required',
                'total_user' => 'required',
                'total_document' => 'required',
            ], [
                    'regex' => __('The Name format is invalid, Contains letter, number and only alphanum'),
                ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }


            $subscription->name = $request->name;
            $subscription->price = $request->price;
            $subscription->duration = $request->duration;
            $subscription->total_user = $request->total_user;
            $subscription->total_document = $request->total_document;
            $subscription->enabled_document_history = isset($request->enabled_document_history)?1:0;
            $subscription->enabled_logged_history = isset($request->enabled_logged_history)?1:0;
            $subscription->description = $request->description;
            $subscription->save();

            return redirect()->route('subscriptions.index')->with('success', __('Subscription successfully updated!'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied!'));
        }
    }


    public function destroy(subscription $subscription)
    {
        if (\Auth::user()->type == 'super admin') {
            $subscription->delete();

            return redirect()->route('subscriptions.index')->with('success', __('Subscription successfully deleted!'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied!'));
        }
    }

    public function transaction()
    {
        if (\Auth::user()->type == 'admin' || \Auth::user()->type == 'super admin') {
            $transactions = Order::select(
                [
                    'orders.*',
                    'users.name as user_name',
                ]
            )->join('users', 'orders.user_id', '=', 'users.id')->orderBy('orders.created_at', 'DESC')->get();

            return view('subscription.transaction', compact('transactions'));
        } else {
            return redirect()->back()->with('error', __('Permission Denied!'));
        }
    }

    public function stripePayment(Request $request, $ids)
    {
        if (\Auth::user()->type == 'admin') {
            $authUser = \Auth::user();
            $id = \Illuminate\Support\Facades\Crypt::decrypt($ids);
            $subscription = Subscription::find($id);
    
            if ($subscription) {
                try {
                    $orderID = uniqid('', true);
                    if ($subscription->price > 0.0) {
                        $transaction = new BillingTransaction();
                        switch ($request->payment_type) {
                            case 'stripe':
                                $billingProduct = BillingProduct::where('provider', 'stripe')->first();
                                
                                $data = Billing::createSubscription('stripe', $subscription, ['product_id' => $billingProduct->product_id, 'duration' => $subscription->duration === 'MONTHLY' ? 'month' : 'year']);
                                $transaction_resp = BillingHelper::handleStripeTransaction($data, $subscription, $orderID);
                                $transaction->provider = 'stripe';
                                break;
                            case 'paypal':
                                $data = Billing::createSubscription('paypal', $subscription, ['token' => $request->stripeToken, 'orderID' => $orderID]);
                                $transaction_resp = BillingHelper::handlePaypalTransaction($data, $subscription, $orderID);
                                $transaction->provider = 'paypal';
                                break;
                            default:
                                return redirect()->route('subscriptions.index')->with('error', __('Unsupported Payment Gateway'));
                        }
                    } else {
                        $data['amount_refunded'] = 0;
                        $data['failure_code'] = '';
                        $data['paid'] = 1;
                        $data['captured'] = 1;
                        $data['status'] = 'succeeded';
                    }

                    if ($transaction_resp['status']) {
                        $transaction->order_id = $orderID;
                        $transaction->transaction_id = $data['id'];
                        $transaction->save();
                        return redirect()->route('subscriptions.index')->with('success', __('Transaction Successfully complete'));
                    } else {
                        return redirect()->route('subscriptions.index')->with('error', __($transaction_resp['message']));
                    }
                } catch (\Exception $e) {
                    return redirect()->route('subscriptions.index')->with('error', __($e->getMessage()));
                }
            } else {
                return redirect()->route('subscriptions.index')->with('error', __('Subscription is deleted.'));
            }
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }

    }

    public function cancel (Request $request, $ids) {
        if (\Auth::user()->type == 'admin') { 
            $id = \Illuminate\Support\Facades\Crypt::decrypt($ids);
            $subscription = Subscription::find($id);

            $transaction = BillingTransaction::where('subscription_id', $subscription->id)->first();
            switch ($transaction->provider) {
                case 'stripe':
                    Billing::cancelSubscription('stripe', $subscription->id);
                    break;
                case 'paypal':
                    Billing::cancelSubscription('stripe', $subscription->id);
                    break;
                default:
                    return redirect()->route('subscriptions.index')->with('error', __('Unsupported Payment Gateway'));
            }
            return redirect()->route('subscriptions.index')->with('success', __('Subscription Cancelled Successfully'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }
}
