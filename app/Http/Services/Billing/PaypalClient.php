<?php

namespace App\Http\Services\Billing;
use Srmklive\PayPal\Services\PayPal;
// use App\Http\Services\Billing\PaypalClient;

class PaypalClient
{
    protected $provider;

    public function __construct() {
        $this->provider = new Paypal;
        $this->provider->getAccessToken();
    }

    public function createProduct ($product_name, $product_type, $description, $category, $url) {
        return $this->provider->addProduct($product_name, $description, $product_type, $category);
    }

    public function listProducts () {
        return $this->provider->listProducts();        
    }


    public function createPlan ($product_id, $name, $price, $duration) {
        switch ($duration) {
            case 'Monthly':
                return $this->provider->addProductById($product_id)->addMonthlyPlan($name, $name, $price);
            case 'Yearly':
                return $this->provider->addProductById($product_id)->addAnnualPlan($name, $name, $price);
            default:
                return null;
        }
        // return $this->provider->createPlan(json_encode([
        //     "product_id" => $product_id,
        //     "name" => $name,
        //     "status" => "ACTIVE",
        //     "billing_cycles" => [
        //         [
        //             "frequency" => [
        //                 "interval_unit" => $duration,
        //                 "interval_count" => 1
        //             ],
        //             "tenure_type" => "REGULAR",
        //             "sequence" => 1,
        //             "total_cycles" => $duration === 'MONTH' ? 12 : 1,
        //             "pricing_scheme" => [
        //                 "fixed_price" => [
        //                     "value" => $subscription->price,
        //                     "currency_code" => "USD"
        //                 ]
        //             ]
        //         ]
        //     ],
        //     "payment_preferences" => [
        //         "auto_bill_outstanding" => true,
        //         "setup_fee" => [
        //             "value" => $subscription->price,
        //             "currency_code" => "USD"
        //         ],
        //         "setup_fee_failure_action" => "CONTINUE",
        //         "payment_failure_threshold" => 3
        //     ]
        // ]));
    }  

    public function listPlans () {
        return $this->provider->listPlans();
    }

    public function createSubscription ($product_id, $plan_id, $name, $email) {
        // Send the request to create the subscription
        $response = $this->provider->addProductById($product_id)->addBillingPlanById($plan_id)->setupSubscription($name, $email);

        if (isset($response['id']) && $response['id'] != null) {
            // Redirect to PayPal approval URL
            // foreach ($response['links'] as $link) {
            //     if ($link['rel'] == 'approve') {
            //         return redirect()->away($link['href']);
            //     }
            // }

            // return redirect()
            //     ->route('home')
            //     ->with('error', 'Something went wrong.');
        
            return $response['links'];
        } else {
            return null;
        }
    }

    public function cancelSubscription ($subscription_id, $reason = 'No reason provided') {
        $this->provider->cancelSubscription($subscription_id, $reason);
    }
}
