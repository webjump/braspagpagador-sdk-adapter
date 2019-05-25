<?php

namespace Webjump\Braspag\Examples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\MDD\GeneralRequestInterface;

class GeneralMDD implements GeneralRequestInterface
{
    public function getCustomerIsLogged()
    {
        return 'SIM';
    }

    public function getCustomerSinceDays()
    {
        return 10;
    }

    public function getQtyInstallmentsOrder()
    {
        return rand(1,6);
    }

    public function getSalesOrderChannel()
    {
        return (rand(0,1)) ? 'Web' : 'Movel';
    }

    public function getCouponCode()
    {
        return (rand(0,1)) ? 'ABC123' : false;
    }

    public function getLastOrderDate()
    {
        return date('m/d/Y');
    }

    public function getQtyTryOrder()
    {
        return rand(1,10);
    }

    public function getCustomerFetchSelf()
    {
        return (bool) rand(0,1);
    }

    public function getVerticalSegment()
    {
        return 'Generico';
    }

    public function getCreditCardBin()
    {
        return 411111;
    }

    public function getQtyTryCreditCardNumber()
    {
        return rand(1,10);
    }

    public function getEmailFillType()
    {
        return (rand(0,1)) ? 'Digitado' : 'Colado';
    }

    public function getCreditCardNumberFillType()
    {
        return (rand(0,1)) ? 'Digitado' : 'Colado';
    }

    public function getConfirmEmailAddress()
    {
        return ((bool) rand(0,1)) ? 'SIM' : false;
    }

    public function getHasGiftCard()
    {
        return ((bool) rand(0,1)) ? 'SIM' : false;
    }
}
