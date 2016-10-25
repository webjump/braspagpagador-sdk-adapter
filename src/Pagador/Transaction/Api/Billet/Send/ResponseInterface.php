<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Billet\Send;


interface ResponseInterface
{
    public function getPaymentUrl();

    public function getPaymentBoletoNumber();

    public function getPaymentBarCodeNumber();

    public function getPaymentPaymentId();

    public function getPaymentReceivedDate();

    public function getPaymentReasonCode();

    public function getPaymentReasonMessage();

    public function getPaymentStatus();

    public function getPaymentLinks();
}
