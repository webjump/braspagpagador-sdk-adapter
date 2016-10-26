<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\Debit\Send\Request;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as Data;

class DebitCardRequestFactory
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
