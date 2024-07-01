<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Product;
use Session;
use App\Models\PrivacyAndPolicy;
use Illuminate\Support\ServiceProvider;
use View;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('*', function ($view) {
             $view->with('products', Product::all());
         });

        View::composer('*', function ($view) {
            $view->with('policy', PrivacyAndPolicy::latest()->first());
        });

        View::composer('*', function ($view) {
            $view->with('cartsProduct', Cart::content());
        });

        // View::composer('*', function ($view) {
        //     $view->with('customerInfo', Customer::find(Session::get('customer_id')));
        // });
    }
}
