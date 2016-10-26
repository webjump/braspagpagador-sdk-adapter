<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Http\Services\Sales;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class SalesFactory
{
    /**
     * @param RequestAbstract $request
     * @return Sales
     */
    public static function make(RequestAbstract $request)
    {
        return new Sales($request);
    }
}
