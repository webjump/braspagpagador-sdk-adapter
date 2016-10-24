<?php

namespace Webjump\Braspag\Pagador\Http\Services;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

interface ServiceInterface
{
    public function getEndPoint();

    /**
     * @return RequestAbstract
     */
    public function getRequest();
}
