<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send;


interface ResponseInterface
{
    public function getPaymentProofOfSale();

    public function getPaymentAcquirerTransactionId();

    public function getPaymentAuthorizationCode();

    public function getPaymentPaymentId();

    public function getPaymentReceivedDate();

    public function getPaymentCapturedDate();

    public function getPaymentStatus();

    public function getPaymentProviderReturnCode();

    public function getPaymentProviderReturnMessage();

    public function getPaymentLinks();
}
