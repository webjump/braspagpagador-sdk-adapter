<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Capture\Request;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture\RequestInterface as Data;

class CaptureCreditCadRequestFactory
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
