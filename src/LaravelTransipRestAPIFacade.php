<?php

namespace Smart48\LaravelTransipRestAPI;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Smart48\LaravelTransipRestAPI\LaravelTransipRestAPI
 */
class LaravelTransipRestAPIFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-transip-rest-api';
    }
}
