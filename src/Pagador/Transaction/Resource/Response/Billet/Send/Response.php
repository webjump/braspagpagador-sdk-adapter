<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Response\Billet\Send;


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\Response\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getMerchantOrderId()
    {
        if (! isset($this->response['MerchantOrderId'])) {
            return '';
        }

        return $this->response['MerchantOrderId'];
    }

    public function getCustomerName()
    {
        if (! isset($this->response['Customer']['Name'])) {
            return '';
        }

        return $this->response['Customer']['Name'];
    }

    public function getPaymentInstructions()
    {
        if (! isset($this->response['Payment']['Instructions'])) {
            return '';
        }
        return $this->response['Payment']['Instructions'];
    }

    public function getPaymentExpirationDate()
    {
        if (! isset($this->response['Payment']['ExpirationDate'])) {
            return '';
        }
        return $this->response['Payment']['ExpirationDate'];
    }

    public function getPaymentUrl()
    {
        if (! isset($this->response['Payment']['Url'])) {
            return '';
        }
        return $this->response['Payment']['Url'];
    }

    public function getPaymentBoletoNumber()
    {
        if (! isset($this->response['Payment']['BoletoNumber'])) {
            return '';
        }
        return $this->response['Payment']['BoletoNumber '];
    }

    public function getPaymentBarCodeNumber()
    {
        if (! isset($this->response['Payment']['BarCodeNumber'])) {
            return '';
        }
        return $this->response['Payment']['BarCodeNumber '];
    }

    public function getPaymentDigitableLine()
    {
        if (! isset($this->response['Payment']['DigitableLine'])) {
            return '';
        }
        return $this->response['Payment']['DigitableLine'];
    }

    public function getPaymentAssignor()
    {
        if (! isset($this->response['Payment']['Assignor'])) {
            return '';
        }
        return $this->response['Payment']['Assignor'];
    }

    public function getPaymentAddress()
    {
        if (! isset($this->response['Payment']['Address'])) {
            return '';
        }
        return $this->response['Payment']['Address'];
    }

    public function getPaymentIdentification()
    {
        if (! isset($this->response['Payment']['Identification'])) {
            return '';
        }
        return $this->response['Payment']['Identification'];
    }

    public function getPaymentPaymentId()
    {
        if (! isset($this->response['Payment']['PaymentId'])) {
            return '';
        }
        return $this->response['Payment']['PaymentId'];
    }

    public function getPaymentType()
    {
        if (! isset($this->response['Payment']['Type'])) {
            return '';
        }
        return $this->response['Payment']['Type'];
    }

    public function getPaymentAmount()
    {
        if (! isset($this->response['Payment']['Amount'])) {
            return '';
        }
        return $this->response['Payment']['Amount'];
    }

    public function getPaymentReceivedDate()
    {
        if (! isset($this->response['Payment']['ReceivedDate'])) {
            return '';
        }
        return $this->response['Payment']['ReceivedDate'];
    }

    public function getPaymentCurrency()
    {
        if (! isset($this->response['Payment']['Currency'])) {
            return '';
        }
        return $this->response['Payment']['Currency'];
    }

    public function getPaymentCountry()
    {
        if (! isset($this->response['Payment']['Country'])) {
            return '';
        }
        return $this->response['Payment']['Country'];
    }

    public function getPaymentProvider()
    {
        if (! isset($this->response['Payment']['Provider'])) {
            return '';
        }
        return $this->response['Payment']['Provider'];
    }

    public function getPaymentReasonCode()
    {
        if (! isset($this->response['Payment']['ReasonCode'])) {
            return '';
        }
        return $this->response['Payment']['ReasonCode'];
    }

    public function getPaymentReasonMessage()
    {
        if (! isset($this->response['Payment']['ReasonMessage'])) {
            return '';
        }
        return $this->response['Payment']['ReasonMessage'];
    }

    public function getPaymentStatus()
    {
        if (! isset($this->response['Payment']['Status'])) {
            return '';
        }
        return $this->response['Payment']['Status'];
    }

    public function getPaymentLinks()
    {
        if (! isset($this->response['Payment']['Links'])) {
            return '';
        }
        return $this->response['Payment']['Links'];
    }
}
