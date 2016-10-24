<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Debit\Send;


interface ResponseInterface
{
    public function getMerchantOrderId();

    public function getCustomerName();

    public function PaymentUrl();

    public function PaymentPaymentId();

    public function PaymentType();

    public function PaymentAmount();

    public function PaymentReceivedDate();

    public function PaymentCurrency();

    public function PaymentCountry();

    public function PaymentProvider();

    public function PaymentReturnUrl();

    public function PaymentReasonCode();

    public function PaymentReasonMessage();

    public function PaymentStatus();

    public function PaymentLinks();
}
