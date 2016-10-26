<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\Actions\Request;
use Webjump\Braspag\Pagador\Transaction\Api\Actions\RequestInterface as Data;

class PaymentRequestFactory
{
    /**
     * @param Data $data
     * @param string $type
     * @return Request
     */
    public static function make(Data $data, $type = '')
    {
        return new Request($data, $type);
    }
}
