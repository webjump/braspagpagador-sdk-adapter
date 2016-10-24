<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Request;


abstract class RequestAbstract
{
    protected $data;
    protected $params = [];

    abstract protected function prepareParams();

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    public function getData()
    {
        return $this->data;
    }
}
