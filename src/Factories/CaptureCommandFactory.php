<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Command\Sales\CaptureCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class CaptureCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return CaptureCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new CaptureCommand($request);
    }
}
