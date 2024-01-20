<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Http\Services\Aws;
use App\Models\AwsCustomer;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Services\Billing;
use App\Models\StripeCustomer;
use App\Mail\AWSCustomerCreated;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;


class AwsMarketplaceController extends Controller
{
    public function register () {
        return view('aws.register');
    }

    public function resolveCustomer (Request $request) {
        try {
            $validate = Validator::make($request->all(), [
                'x-amzn-marketplace-token' => 'required',
            ]);
        
            if ($validate->fails()) {
                return redirect()->back()->with('error', $messages->first());
            }
            
            $customer_results = \app(Aws::class)->resolveCustomer($request['x-amzn-marketplace-token']);
            if (!$customer_results || !isset($customer_results['CustomerIdentifier'])) {
                throw new Exception("Error resolving customer");
            }

            $entitlement_results = \app(Aws::class)->getEntitlements($customer_results['CustomerIdentifier'], $customer_results['ProductCode']);
            if (!count($entitlement_results['Entitlements'])) {
                return redirect()->back()->with('error', 'Could not find an active subscription. If you already registered please try again');    
            }

            $subscription = Subscription::where('name', $entitlement_results['Entitlements'][0]['Dimension'])->first();
            if (!(AWSCustomer::where('customer_id', $customer_results['CustomerIdentifier'])->first())) {
                AwsCustomer::create([
                    'subscription_id' => $subscription->id,
                    'customer_id' => $entitlement_results['Entitlements'][0]['CustomerIdentifier'],
                    'expiry_date' => $entitlement_results['Entitlements'][0]['ExpirationDate']
                ]);
            } 

            return redirect('/aws/register?customer_id='.$customer_results['CustomerIdentifier']);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong, please try again later.');
        }
    }

    public function registerCustomer (Request $request) {
        try {
            $customer_id = $request->customer_id;
            $aws_customer = AwsCustomer::where('customer_id', $customer_id)->first();
            if (!$aws_customer) {
                return redirect()->back()->with('error', 'Account not found. Please contact support if it persists');    
            }
            
            dd($aws_customer);
            //Generate new Name
            $name = bin2hex(random_bytes(6));
            
            //Generate new password
            $password = bin2hex(random_bytes(8));
            $user = User::create([
                'name' => $name,
                'email' => $request->email,
                'password' => Hash::make($password),
                'type' => 'admin',
                'lang' => 'english',
                'subscription' => $aws_customer->subscription_id,
                'subscription_expire_date' => $aws_customer->expiry_date,
                'email_verified_at' => now()
            ]);

            $aws_customer->user_id = $user->id;
            $aws_customer->save();

            $stripe_customer = Billing::createCustomer('stripe', $user);            
            StripeCustomer::create([
                'user_id' => $user->id,
                'customer_id' => $stripe_customer->id,
            ]);

            event(new Registered($user));
            $role_r = Role::findByName('owner');
            $user->assignRole($role_r);
            // Auth::login($user);

            Mail::to($user)->send(new AWSCustomerCreated($password));
            return redirect()->back()->with('success', 'Please check you email for account information');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong, please try again later.');
        }
    }

    public function handleNotification(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        switch ($data['Type']) {
            case 'SubscriptionConfirmation':
                Log::debug("Subscription Confirmation Test Working!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
                break;     
            default:
                Log::debug($data);
                Log::debug("Message type not handled: ${$data['type']}");
                break;
        }

        // $customerIdentifier = $message['Message']['CustomerIdentifier'];
        // $productCode = $message['Message']['ProductCode'];
        // $entitlementStatus = $message['Message']['EntitlementStatus'];
        // $expiryDate = $message['Message']['ExpiryDate'];

        // $aws_customer = AwsCustomer::where('customer_id', $customerIdentifier)->first();
        // if (!$aws_customer) {
        //     http_response_code(404);
        //     return;
        // }

        // $user = User::find($aws_customer->user_id);
        // // Handle subscription changes based on status
        // switch ($entitlementStatus) {
        //     case 'Cancelled':
        //         $user->subscription = null;
        //         break;
        //     case 'Renewed':
        //         $user->subscription_expire_date = $expiryDate = $message['Message']['ExpiryDate'];
        //         // Handle renewed subscription
        //         break;
        //     case 'Expired':
        //         $user->subscription = null;
        //         // Handle expired subscription
        //         break;
        //     default:
        //         http_response_code(404);
        //         return;
        // }
        // $user->save();
        http_response_code(200);
    }
}
