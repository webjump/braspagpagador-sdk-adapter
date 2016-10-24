<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Billet\Send;


interface ResponseInterface
{
    public function getMerchantOrderId();

    public function getCustomerName();

    public function getPaymentInstructions();

    public function getPaymentExpirationDate();

    public function getPaymentUrl();

    public function getPaymentBoletoNumber();

    public function getPaymentBarCodeNumber();

    public function getPaymentDigitableLine();

    public function getPaymentAssignor();

    public function getPaymentAddress();

    public function getPaymentIdentification();

    public function getPaymentPaymentId();

    public function getPaymentType();

    public function getPaymentAmount();

    public function getPaymentReceivedDate();

    public function getPaymentCurrency();

    public function getPaymentCountry();

    public function getPaymentProvider();

    public function getPaymentReasonCode();

    public function getPaymentReasonMessage();

    public function getPaymentStatus();

    public function getPaymentLinks();
}
