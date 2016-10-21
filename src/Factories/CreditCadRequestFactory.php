<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Send\Request;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as Data;

class CreditCadRequestFactory
{
    /**
     * @param Data $data
     * @return Request
     */
    public static function make(Data $data)
    {
        return new Request($data);
    }
}
