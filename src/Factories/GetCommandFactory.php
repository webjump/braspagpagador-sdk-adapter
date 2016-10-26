<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Command\Sales\GetCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class GetCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return GetCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new GetCommand($request);
    }
}
