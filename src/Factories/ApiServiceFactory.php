<?php

namespace Webjump\Braspag\Factories;


use Braspag\ApiService;

class ApiServiceFactory
{
    /**
     * @param array $credentials
     * @return ApiService
     */
    public static function make(array $credentials = [])
    {
        return new ApiService($credentials);
    }
}
