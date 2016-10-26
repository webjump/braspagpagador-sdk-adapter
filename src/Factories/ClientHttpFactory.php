<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Http\Client\Client as ClientHttp;

class ClientHttpFactory
{
    /**
     * @return ClientHttp
     */
    public static function make()
    {
        return new ClientHttp();
    }
}
