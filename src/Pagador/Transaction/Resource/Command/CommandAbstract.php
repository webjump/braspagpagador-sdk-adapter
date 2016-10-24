<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

abstract class CommandAbstract
{
    protected $request;
    protected $result;

    abstract protected function execute();

    public function __construct(RequestAbstract $request)
    {
        $this->request = $request;
        $this->execute();
    }

    public function getResult()
    {
        return $this->result;
    }
}
