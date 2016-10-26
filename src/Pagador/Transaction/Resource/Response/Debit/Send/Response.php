<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Response\Debit\Send;


use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\Response\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getPaymentAuthenticationUrl()
    {
        if (! isset($this->response['Payment']['AuthenticationUrl'])) {
            return '';
        }
        return $this->response['Payment']['AuthenticationUrl'];
    }

    public function getPaymentAcquirerTransactionId()
    {
        if (! isset($this->response['Payment']['AcquirerTransactionId'])) {
            return '';
        }
        return $this->response['Payment']['AcquirerTransactionId'];
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

    public function getPaymentReasonCode()
    {
        if (! isset($this->response['Payment']['PaymentReasonCode'])) {
            return '';
        }
        return $this->response['Payment']['PaymentReasonCode'];
    }

    public function getPaymentReasonMessage()
    {
        if (! isset($this->response['Payment']['PaymentReasonMessage'])) {
            return '';
        }
        return $this->response['Payment']['PaymentReasonMessage'];
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

    public function getPaymentLinks()
    {
        if (! isset($this->response['Payment']['Links'])) {
            return '';
        }
        return $this->response['Payment']['Links'];
    }
}
