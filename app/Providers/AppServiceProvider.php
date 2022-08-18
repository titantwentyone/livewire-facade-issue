<?php

namespace App\Providers;

use App\Facades\Cart;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind('cart', function ($app) {
            return new \App\Domain\Cart();
        });

        //Cart::doSomething();

    }
}
