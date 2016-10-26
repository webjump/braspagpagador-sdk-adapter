<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Actions;


interface RequestInterface
{
    public function getMerchantId();

    public function getMerchantKey();

    public function getPaymentId();

    public function getAdditionalRequest();
}
