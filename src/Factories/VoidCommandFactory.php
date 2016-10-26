<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Command\Sales\VoidCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class VoidCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return VoidCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new VoidCommand($request);
    }
}
