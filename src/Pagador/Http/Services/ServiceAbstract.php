<?php

namespace Webjump\Braspag\Pagador\Http\Services;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

abstract class ServiceAbstract
{
    protected $endPoint = '';
    protected $request;

    /**
     * @param RequestAbstract $request
     */
    public function __construct(RequestAbstract $request)
    {
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * @return RequestAbstract
     */
    public function getRequest()
    {
        return $this->request;
    }
}
