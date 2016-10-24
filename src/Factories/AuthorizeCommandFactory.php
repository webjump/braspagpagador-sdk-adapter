<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Command\AuthorizeCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class AuthorizeCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return AuthorizeCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new AuthorizeCommand($request);
    }
}
