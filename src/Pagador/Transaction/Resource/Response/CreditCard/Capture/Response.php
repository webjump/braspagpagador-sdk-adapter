<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Response\CreditCard\Capture;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\Response\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getStatus()
    {
        if (! isset($this->response['Status'])) {
            return '';
        }
        return $this->response['Status'];
    }

    public function getReasonCode()
    {
        if (! isset($this->response['ReasonCode'])) {
            return '';
        }
        return $this->response['ReasonCode'];
    }

    public function getReasonMessage()
    {
        if (! isset($this->response['ReasonMessage'])) {
            return '';
        }
        return $this->response['ReasonMessage'];
    }

    public function getProviderReturnCode()
    {
        if (! isset($this->response['ProviderReturnCode'])) {
            return '';
        }
        return $this->response['ProviderReturnCode'];
    }

    public function getProviderReturnMessage()
    {
        if (! isset($this->response['ProviderReturnMessage'])) {
            return '';
        }
        return $this->response['ProviderReturnMessage'];
    }

    public function getLinks()
    {
        if (! isset($this->response['Links'])) {
            return '';
        }
        return $this->response['Links'];
    }
}
