<?php

namespace Test\Test;

use Illuminate\Support\ServiceProvider;
use Test\Test\Domain\Cart;

class TestServiceProvider extends ServiceProvider
{
    public function register() : void
    {
        $this->app->bind('cart', function() {
            return new Cart();
        });
    }
}
