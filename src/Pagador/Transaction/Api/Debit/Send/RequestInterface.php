<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Debit\Send;


interface RequestInterface
{
    public function getMerchantId();

    public function getMerchantKey();

    public function getMerchantOrderId();

    public function getCustomerName();

    public function getPaymentType();

    public function getPaymentAmount();

    public function getPaymentProvider();

    public function getPaymentReturnUrl();

    public function getPaymentDebitCardCardNumber();

    public function getPaymentDebitCardHolder();

    public function getPaymentDebitCardExpirationDate();

    public function getPaymentDebitCardSecurityCode();

    public function getPaymentDebitCardBrand();
}
