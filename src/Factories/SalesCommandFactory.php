<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Command\SalesCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class SalesCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return SalesCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new SalesCommand($request);
    }
}
