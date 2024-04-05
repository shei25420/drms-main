<?php

namespace App\Http\Helpers;

use App\Models\AwsSubscription;
use Error;
use App\Models\User;
use App\Models\AwsCustomer;
use App\Models\Subscription;

class AwsHelper {
    public static function handleActiveSubscription (string $awsCustomerId, string $dimension, string $expiryDate, int $quantity)
    {
        if ($dimension === "Intermediate") $dimension = "Standard";
        $subscription = Subscription::where('name', $dimension)->first();
        if (!$subscription) throw new Error("Could not find a package with provided dimensions: ".$dimension);

        return AwsSubscription::create([
            'subscription_id' => $subscription->id,
            'aws_customer_id' => $awsCustomerId,
            'quantity' => $quantity,
            'expiry_date' => $expiryDate
        ]);
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