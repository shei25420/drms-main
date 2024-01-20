<?php

namespace App\Http\Services;

use App\Models\BillingProduct;
use App\Models\StripeCustomer;
use App\Http\Interfaces\Subscription;
use App\Http\Services\Billing\PaypalClient;
use App\Http\Services\Billing\StripeClient;

class Billing implements Subscription {
    public static function createPlan ($paymentType, $subscription) {
        $billing_product = BillingProduct::where('provider', $paymentType)->first();
        switch ($paymentType) {
            case 'paypal':
                $plan  = \app(PaypalClient::class)->createPlan($billing_product->product_id, $subscription->name, $subscription->price, $subscription->duration);
                $listedPlans = \app(PaypalClient::class)->listPlans();
                return $listedPlans['plans'][$listedPlans['total_items'] - 1]['id'];
            case 'stripe':
                return \app(StripeClient::class)->createPlan($subscription->duration === 'Monthly' ? 'month' : 'year', $subscription->price, $subscription->name)->id;
            default:
                return null;
        }
    }
    
    public static function createProduct ($paymentType, $name) {
        switch ($paymentType) {
            case 'stripe':
                return \app(StripeClient::class)->createProduct($name);
            default:
                # code...
                break;
        }
        return null;
    }

    public static function createSubscription($paymentType, $subscription, $extraData = null) {
        switch ($paymentType) {
            case 'paypal':
                $billing_plan = BillingPlan::where('provider', $paymentType)->where('subscription_id', $subscription->id)->first();
                return \app(PaypalClient::class)->createSubscription($billing_plan->plan_id);
            case 'stripe':
                // Fetch Customer
                $customer = StripeCustomer::where('user_id', auth()->id())->firstOrFail();
                return \app(StripeClient::class)->createSubscription($customer->customer_id, $subscription->price, $extraData['product_id'], $extraData['duration']);
            default:
                return null;
        }
    }

    public static function cancelSubscription ($paymentType, $subscription_id) {
        $billing_plan = BillingPlan::where('provider', $paymentType)->where('subscription_id', $subscription_id)->first();
        switch ($paymentType) {
            case 'paypal':
                return \app(PaypalClient::class)->cancelSubscription($billing_plan->plan_id);
            case 'stripe':
                return \app(StripeClient::class)->cancelSubscription($billing_plan->plan_id);
            default:
                return null;
        }
 
    }

    public static function createCustomer ($paymentType, $user) {
        switch ($paymentType) {
            // case 'paypal':
                // return \app(PaypalClient::class)->cancelSubscription($billing_plan->plan_id);
            case 'stripe':
                return \app(StripeClient::class)->createCustomer($user->name, $user->email);
            default:
                return null;
        }
    }

}