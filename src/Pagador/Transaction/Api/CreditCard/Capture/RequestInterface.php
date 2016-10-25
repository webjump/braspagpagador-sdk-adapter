<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture;


interface RequestInterface
{
    public function getMerchantId();

    public function getMerchantKey();

    public function getPaymentId();

    public function getCaptureRequest();
}
