<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Send;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getPaymentProofOfSale()
    {
        if (! isset($this->response['Payment']['ProofOfSale'])) {
            return '';
        }
        return $this->response['Payment']['ProofOfSale'];
    }

    public function getPaymentAcquirerTransactionId()
    {
        if (! isset($this->response['Payment']['AcquirerTransactionId'])) {
            return '';
        }
        return $this->response['Payment']['AcquirerTransactionId'];
    }

    public function getPaymentAuthorizationCode()
    {
        if (! isset($this->response['Payment']['AuthorizationCode'])) {
            return '';
        }
        return $this->response['Payment']['AuthorizationCode'];
    }

    public function getPaymentPaymentId()
    {
        if (! isset($this->response['Payment']['PaymentId'])) {
            return '';
        }
        return $this->response['Payment']['PaymentId'];
    }

    public function getPaymentReceivedDate()
    {
        if (! isset($this->response['Payment']['ReceivedDate'])) {
            return '';
        }
        return $this->response['Payment']['ReceivedDate'];
    }

    public function getPaymentCapturedDate()
    {
        if (! isset($this->response['Payment']['CapturedDate'])) {
            return '';
        }
        return $this->response['Payment']['CapturedDate'];
    }

    public function getPaymentStatus()
    {
        if (! isset($this->response['Payment']['Status'])) {
            return '';
        }
        return $this->response['Payment']['Status'];
    }

    public function getPaymentProviderReturnCode()
    {
        if (! isset($this->response['Payment']['ProviderReturnCode'])) {
            return '';
        }
        return $this->response['Payment']['ProviderReturnCode'];
    }

    public function getPaymentProviderReturnMessage()
    {
        if (! isset($this->response['Payment']['ProviderReturnMessage'])) {
            return '';
        }
        return $this->response['Payment']['ProviderReturnMessage'];
    }

    public function getPaymentLinks()
    {
        if (! isset($this->response['Payment']['Links'])) {
            return '';
        }
        return $this->response['Payment']['Links'];
    }
}
