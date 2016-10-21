<?php

namespace Webjump\Braspag\Pagador;


use \Webjump\Braspag\Pagador\Request\Data\BilletInterface;

abstract class RequestAbstract implements RequestInterface
{
    protected $dataRequest;
    protected $params = [];

    /**
     * @param BilletInterface $dataRequest
     */
    public function __construct(BilletInterface $dataRequest)
    {
        $this->dataRequest = $dataRequest;
        $this->prepareParams();
    }

    public function getParams()
    {
      return $this->params;
    }
}
