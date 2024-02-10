<?php
namespace App\Providers;

use App\Http\Services\Aws;
use App\Models\BillingProduct;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Services\Billing\PaypalClient;
use App\Http\Services\Billing\StripeClient;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            Schema::defaultStringLength(191);

            $this->app->singleton(PaypalClient::class, function () { 
                $client = new PaypalClient();
                $paypalProduct = BillingProduct::where('provider', 'paypal')->first();
                if (!$paypalProduct) {
                    $product = $client->createProduct(
                        'DRMS Vault',
                        'SERVICE',
                        'DRMS Vault. Digital Record Management System',
                        'SOFTWARE',
                        'https://drmsvault.com'
                    );             
                    BillingProduct::create([
                        'product_id' => $client->listProducts()['products'][0]['id'],
                        'provider' => 'paypal',
                    ]);
                }
                return $client;
            });

            $this->app->singleton(StripeClient::class, function () {
                $client = new StripeClient();
                $stripeProduct = BillingProduct::where('provider', 'stripe')->first();
                if (!$stripeProduct) {
                    $product_id = $client->createProduct('DRMS Vault. Digital Record Management System')->id;
                    BillingProduct::create([
                        'product_id' => $product_id,
                        'provider' => 'stripe',
                    ]);   
                }

                return $client;
            });

            $this->app->singleton(Aws::class, function () {
                return new Aws();
            });
    }
}
