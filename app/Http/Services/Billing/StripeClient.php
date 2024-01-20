<?php

namespace App\Http\Services\Billing;
use Stripe;

class StripeClient {
    public function __construct() {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));    
    }

    public function createCustomer ($name, $email) {
        return Stripe\Customer::create([
            'name' => $name,
            'email' => $email,
        ]);
    }

    public function listProducts () {
        return Stripe\Product::all();
    }

    public function createProduct ($name) {
        return Stripe\Product::create([
            'name' => $name
        ]);
    }

    public function createPlan ($duration, $price, $name) {
        return Stripe\Plan::create([
            'amount' => 100 * $price,
            'currency' => 'usd',
            'interval' => $duration,
            'product' => [
                'name' => $name,
            ],
        ]);
    }  

    public function createPaymentMethod () {
        
    }

    public function createSubscription ($customerId, $price, $product_id, $interval) {
        return Stripe\Subscription::create([
            'customer' => $customerId,
            'items' => [
                [
                    'price_data' => [
                        'unit_amount' => 100 * $price, 
                        'currency' => 'usd',
                        'product' => $product_id,
                        'recurring' => [
                            'interval' => $interval,
                        ]
                    ],
                ],
            ]
        ]);
    }


    public function cancelSubscription ($stripe_subscription_id) {
        return Stripe\Subscription::update(
            $stripe_subscription_id,
            [
                'cancel_at_period_end' => true,
            ]
        );
    }
}