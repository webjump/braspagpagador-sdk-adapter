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


use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getPaymentProofOfSale()
    {
        if (! isset($this->response['Payment']['ProofOfSale'])) {
            return false;
        }
        return $this->response['Payment']['ProofOfSale'];
    }

    public function getPaymentAcquirerTransactionId()
    {
        if (! isset($this->response['Payment']['AcquirerTransactionId'])) {
            return false;
        }
        return $this->response['Payment']['AcquirerTransactionId'];
    }

    public function getPaymentAuthorizationCode()
    {
        if (! isset($this->response['Payment']['AuthorizationCode'])) {
            return false;
        }
        return $this->response['Payment']['AuthorizationCode'];
    }

    public function getPaymentPaymentId()
    {
        if (! isset($this->response['Payment']['PaymentId'])) {
            return false;
        }
        return $this->response['Payment']['PaymentId'];
    }

    public function getPaymentReceivedDate()
    {
        if (! isset($this->response['Payment']['ReceivedDate'])) {
            return false;
        }
        return $this->response['Payment']['ReceivedDate'];
    }

    public function getPaymentCapturedDate()
    {
        if (! isset($this->response['Payment']['CapturedDate'])) {
            return false;
        }
        return $this->response['Payment']['CapturedDate'];
    }

    public function getPaymentStatus()
    {
        if (! isset($this->response['Payment']['Status'])) {
            return false;
        }
        return $this->response['Payment']['Status'];
    }

    public function getPaymentProviderReturnCode()
    {
        if (! isset($this->response['Payment']['ProviderReturnCode'])) {
            return false;
        }
        return $this->response['Payment']['ProviderReturnCode'];
    }

    public function getPaymentProviderReturnMessage()
    {
        if (! isset($this->response['Payment']['ProviderReturnMessage'])) {
            return false;
        }
        return $this->response['Payment']['ProviderReturnMessage'];
    }

    public function getPaymentLinks()
    {
        if (! isset($this->response['Payment']['Links'])) {
            return false;
        }
        return $this->response['Payment']['Links'];
    }

    public function getPaymentFraudAnalysis()
    {
        if (! isset($this->response['Payment']['FraudAnalysis'])) {
            return false;
        }

        if (! is_array($this->response['Payment']['FraudAnalysis'])) {
            return false;
        }

        return ResponseFactory::make($this->response['Payment']['FraudAnalysis'], 'antiFraud');
    }
}
