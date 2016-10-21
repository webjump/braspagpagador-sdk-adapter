<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\Billet\Send\Request;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as Data;

class BilletRequestFactory
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
