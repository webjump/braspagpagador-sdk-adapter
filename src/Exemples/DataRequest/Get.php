<?php

namespace Webjump\Braspag\Exemples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\Actions\RequestInterface;

class Get implements RequestInterface
{
    protected $paymentId;

    public function __construct($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    public function getMerchantId()
    {
        return Auth::MERCHANT_ID;
    }

    public function getMerchantKey()
    {
        return Auth::MERCHANT_KEY;
    }

    public function getPaymentId()
    {
        return $this->paymentId;
    }
    
    public function getAdditionalRequest()
    {
    }
}
