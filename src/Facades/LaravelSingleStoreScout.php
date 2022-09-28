<?php

namespace Guywarner\LaravelSingleStoreScout\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Guywarner\LaravelSingleStoreScout\LaravelSingleStoreScout
 */
class LaravelSingleStoreScout extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Guywarner\LaravelSingleStoreScout\LaravelSingleStoreScout::class;
    }
}
