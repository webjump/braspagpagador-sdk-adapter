<?php

namespace Webjump\Braspag\Exemples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface;
use Braspag\Model\Payment\Payment;

class CreditCard implements RequestInterface
{
    public function getMerchantId()
    {
        return '3c9afd87-adb5-4264-a9c2-73fe61df779a';
    }

    public function getMerchantKey()
    {
        return 'UJITPIATNINTONQFHRYRLTHLCEGHHLHJWIZBLUZV';
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
        return 'CreditCard';
    }

    public function getPaymentAmount()
    {
        return 100;
    }

    public function getPaymentCurrency()
    {
        return 'BRL';
    }

    public function getPaymentCountry()
    {
        return 'BRA';
    }

    public function getPaymentProvider()
    {
        return 'Simulado';
    }

    public function getPaymentServiceTaxAmount()
    {
        return 0;
    }

    public function getPaymentInstallments()
    {
        return 1;
    }

    public function getPaymentInterest()
    {
        return Payment::InterestByMerchant;
    }

    public function getPaymentCapture()
    {
        return 'false';
    }

    public function getPaymentAuthenticate()
    {
        return 'false';
    }

    public function getPaymentSoftDescriptor()
    {
        return 'tst';
    }

    public function getPaymentCreditCardCardNumber()
    {
        return '0000000000000001';
    }


    public function getPaymentCreditCardHolder()
    {
        return 'Test T S Testando';
    }

    public function getPaymentCreditCardExpirationDate()
    {
        return '12/2021';
    }

    public function getPaymentCreditCardSecurityCode()
    {
        return '000';
    }

    public function getPaymentCreditCardSaveCard()
    {
        return false;
    }

    public function getPaymentCreditCardBrand()
    {
        return 'Visa';
    }

    public function getPaymentExtraDataCollection()
    {
        return [
            [
                'name' => 'NomeDoCampo',
                'value' => '1234567'
            ]
        ];
    }
}
