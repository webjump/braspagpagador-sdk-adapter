<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Request;


abstract class RequestAbstract
{
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    
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
