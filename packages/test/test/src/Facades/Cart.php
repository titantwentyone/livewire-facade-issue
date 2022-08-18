<?php

namespace Test\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'cart';
    }
}
