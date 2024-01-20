<?php
namespace App\Http\Services;
use Aws\Sns\SnsClient;
use Aws\MarketplaceMetering\MarketplaceMeteringClient;
use Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient;

class Aws {
    public $metering_client;
    public $entitlement_client;
    public $sns_client;

    private $topicArn = 'arn:aws:sns:your_region:your_account_id:your_entitlement_topic';
    private $endpoint;
    
    public function __construct() {
        $this->endpoint = url("/aws/entitlement/web-hook");

        $this->metering_client = new MarketplaceMeteringClient([
            'version' => 'latest',
            'region' => 'us-east-1',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $this->entitlement_client = new MarketplaceEntitlementServiceClient([
            'version' => '2017-01-11',
            'region' => 'latest',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $this->sns_client = new SnsClient([
            'profile' => 'default',
            'region' => 'us-east-1',
            'version' => 'latest',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $this->sns_client->subscribe([
            'Protocol' => 'http',
            'Endpoint' => $this->endpoint,
            'TopicArn' => $this->topic
        ]);
    }

    public function resolveCustomer($token) {        
        $result = $this->metering_client->resolveCustomer([
            'RegistrationToken' => $token,
        ]);

        return $result;
    }

    public function getEntitlements($customer_id, $product_code) {
        $result = $this->entitlement_client->getEntitlements([
            'CustomerIdentifier' => $customer_id,
            'ProductCode' => $product_code,
        ]);

        return $result;
    }
}