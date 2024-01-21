<?php

namespace App\Http\Helpers;

use Error;
use App\Models\User;
use App\Models\AwsCustomer;
use App\Models\Subscription;

class AwsHelper {
    public static function handleActiveSubscription ($customerId, $dimension) {
        $subscription = Subscription::where('name', $dimension)->first();
        if (!$subscription) throw new Error("Could not find a package with provided dimensions");
        
        $aws_customer = AwsCustomer::where('customer_id', $customerId)->first();
        if (!$aws_customer) {
            $aws_customer = AwsCustomer::create([
                'subscription_id' => $subscription->id,
                'customer_id' => $entitlement_results['Entitlements'][0]['CustomerIdentifier'],
                'expiry_date' => $entitlement_results['Entitlements'][0]['ExpirationDate']
            ]);
        } else if ($aws_customer->subscription_id !== $subscription->id) {
            //Update Subscription
            $user = User::find($aws_customer->user_id);
            $user->subscription = $subscription->id;
            $user->save();
        }
    }

    public static function handlePendingSubscription ($customerId) {
        //Send reminder email maybe
        $aws_customer = AwsCustomer::where('user_id', $customerId)->firstOrFail();
        self::cancelSubscription($aws_customer->user_id);
    }

    public static function handleUnsubscribe ($customerId) {
        $aws_customer = AwsCustomer::where('user_id', $customerId)->firstOrFail();
        self::cancelSubscription($aws_customer->user_id);
    }

    private static function cancelSubscription ($userId) {
        $user = User::find($userId);
        $user->subscription = null;
        $user->subscription_expire_date = null;
        $user->save();
    }

}