<?php

namespace Webjump\Braspag\Factories;


use GuzzleHttp\Client as HttpClient;

class HttpFactory
{
    /**
     * @param array $config
     * @return HttpClient
     */
    public static function make(array $config = [])
    {
        return new HttpClient($config);
    }
}
