<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Boleto\Send;


use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Pagador\Transaction\Api\Boleto\Send\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getPaymentUrl()
    {
        if (! isset($this->response['Payment']['Url'])) {
            return false;
        }
        return $this->response['Payment']['Url'];
    }

    public function getPaymentBoletoNumber()
    {
        if (! isset($this->response['Payment']['BoletoNumber'])) {
            return false;
        }
        return $this->response['Payment']['BoletoNumber'];
    }

    public function getPaymentBarCodeNumber()
    {
        if (! isset($this->response['Payment']['BarCodeNumber'])) {
            return false;
        }
        return $this->response['Payment']['BarCodeNumber'];
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

    public function getPaymentReasonCode()
    {
        if (! isset($this->response['Payment']['ReasonCode'])) {
            return false;
        }
        return $this->response['Payment']['ReasonCode'];
    }

    public function getPaymentReasonMessage()
    {
        if (! isset($this->response['Payment']['ReasonMessage'])) {
            return false;
        }
        return $this->response['Payment']['ReasonMessage'];
    }

    public function getPaymentStatus()
    {
        if (! isset($this->response['Payment']['Status'])) {
            return false;
        }
        return $this->response['Payment']['Status'];
    }

    public function getPaymentLinks()
    {
        if (! isset($this->response['Payment']['Links'])) {
            return false;
        }
        return $this->response['Payment']['Links'];
    }

    public function getDigitableLine()
    {
        if (! isset($this->response['Payment']['DigitableLine'])) {
            return false;
        }
        return $this->response['Payment']['DigitableLine'];
    }

    public function getExpirationDate()
    {
        if (! isset($this->response['Payment']['ExpirationDate'])) {
            return false;
        }
        return $this->response['Payment']['ExpirationDate'];
    }


    /**
     * @return bool|\Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Avs\Response|\Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Velocity\Reasons\Response|\Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Velocity\Response|\Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\Response
     */
    public function getPaymentSplitPayments()
    {
        if (! isset($this->response['Payment']['SplitPayments'])) {
            return false;
        }

        if (! is_array($this->response['Payment']['SplitPayments'])) {
            return false;
        }

        return ResponseFactory::make($this->response['Payment']['SplitPayments'], 'boletoPaymentSplit');
    }
}
