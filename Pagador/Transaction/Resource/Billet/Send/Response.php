<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Billet\Send;


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\ResponseInterface;
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
}
