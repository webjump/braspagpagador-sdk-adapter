<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Actions;


use Webjump\Braspag\Pagador\Transaction\Api\Actions\Capture\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getStatus()
    {
        if (! isset($this->response['Status'])) {
            return false;
        }
        
        return $this->response['Status'];
    }

    public function getReasonCode()
    {
        if (! isset($this->response['ReasonCode'])) {
            return false;
        }
        return $this->response['ReasonCode'];
    }

    public function getPaymentAuthenticate()
    {
        if (! isset($this->response['Authenticate'])) {
            return false;
        }
        return $this->response['Authenticate'];
    }

    public function getReasonMessage()
    {
        if (! isset($this->response['ReasonMessage'])) {
            return false;
        }
        return $this->response['ReasonMessage'];
    }

    public function getProviderReturnCode()
    {
        if (! isset($this->response['ProviderReturnCode'])) {
            return false;
        }
        return $this->response['ProviderReturnCode'];
    }

    public function getProviderReturnMessage()
    {
        if (! isset($this->response['ProviderReturnMessage'])) {
            return false;
        }
        return $this->response['ProviderReturnMessage'];
    }

    public function getLinks()
    {
        if (! isset($this->response['Links'])) {
            return false;
        }
        return $this->response['Links'];
    }
}
