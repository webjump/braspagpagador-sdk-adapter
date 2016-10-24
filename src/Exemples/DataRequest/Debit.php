<?php

namespace Webjump\Braspag\Exemples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface;
use Braspag\Model\Payment\Payment;

class Debit implements RequestInterface
{
    public function getMerchantId()
    {
        return '00000000-0000-0000-0000-000000000000';
    }

    public function getMerchantKey()
    {
        return '0000000000000000000000000000000000000000';
    }

    public function getMerchantOrderId()
    {
        return '2016060900';
    }

    public function getCustomerName()
    {
        return 'Comprador de Testes';
    }

    public function getCustomerIdentity()
    {
        return '11225468954';
    }

    public function getCustomerIdentityType()
    {
        return 'CPF';
    }

    public function getCustomerEmail()
    {
        return 'compradordetestes@braspag.com.br';
    }

    public function getCustomerBirthDate()
    {
        return '1991-01-02';
    }

    public function getCustomerAddressStreet()
    {
        return 'Av. Marechal Câmara';
    }

    public function getCustomerAddressNumber()
    {
        return 160;
    }

    public function getCustomerAddressComplement()
    {
        return 'Sala 934';
    }

    public function getCustomerAddressZipCode()
    {
        return '20020-080';
    }

    public function getCustomerAddressDistrict()
    {
        return 'Centro';
    }

    public function getCustomerAddressCity()
    {
        return 'Rio de Janeiro';
    }

    public function getCustomerAddressState()
    {
        return 'RJ';
    }

    public function getCustomerAddressCountry()
    {
        return 'BRA';
    }

    public function getCustomerDeliveryAddressStreet()
    {
        return 'Av. Marechal Câmara';
    }

    public function getCustomerDeliveryAddressNumber()
    {
        return 160;
    }

    public function getCustomerDeliveryAddressComplement()
    {
        return 'Sala 934';
    }

    public function getCustomerDeliveryAddressZipCode()
    {
        return '20020-080';
    }

    public function getCustomerDeliveryAddressDistrict()
    {
        return 'Centro';
    }

    public function getCustomerDeliveryAddressCity()
    {
        return 'Rio de Janeiro';
    }

    public function getCustomerDeliveryAddressState()
    {
        return 'RJ';
    }

    public function getCustomerDeliveryAddressCountry()
    {
        return 'BRA';
    }

    public function getPaymentType()
    {
        return 'DebitCard';
    }

    public function getPaymentAmount()
    {
        return 100;
    }

    public function getPaymentProvider()
    {
        return 'Cielo';
    }

    public function getPaymentReturnUrl()
    {
        return 'http://www.braspag.com.br';
    }

    public function getPaymentDebitCardCardNumber()
    {
        return '1234123412341231';
    }

    public function getPaymentDebitCardHolder()
    {
        return 'Teste Holder';
    }

    public function getPaymentDebitCardExpirationDate()
    {
        return '12/2021';
    }

    public function getPaymentDebitCardSecurityCode()
    {
        return '123';
    }

    public function getPaymentDebitCardBrand()
    {
        return 'Visa';
    }
}
