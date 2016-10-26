<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Debit\Send;


interface ResponseInterface
{
    public function getPaymentAuthenticationUrl();

    public function getPaymentAcquirerTransactionId();

    public function getPaymentPaymentId();

    public function getPaymentReceivedDate();

    public function getPaymentReasonCode();

    public function getPaymentReasonMessage();

    public function getPaymentStatus();

    public function getPaymentProviderReturnCode();

    public function getPaymentLinks();
}
