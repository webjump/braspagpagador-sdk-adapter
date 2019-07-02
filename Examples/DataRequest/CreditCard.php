<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Examples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface;
use Braspag\Model\Payment\Payment;

class CreditCard implements RequestInterface
{
    public function getMerchantId()
    {
        return Auth::MERCHANT_ID;
    }

    public function getMerchantKey()
    {
        return Auth::MERCHANT_KEY;
    }

    public function getMerchantOrderId()
    {
        return (string) rand(1000000000, 9999999999);
    }

    public function getCustomerName()
    {
        return 'Leandro Rosa';
    }

    public function getCustomerIdentity()
    {
        return '41430366818';
    }

    public function getCustomerIdentityType()
    {
        return 'CPF';
    }

    public function getCustomerEmail()
    {
        return 'leandro@mailinator.com';
    }

    public function getCustomerBirthDate()
    {
    }

    public function getCustomerAddressStreet()
    {
        return 'Francisco Marengo';
    }

    public function getCustomerAddressNumber()
    {
        return 1210;
    }

    public function getCustomerAddressComplement()
    {
    }

    public function getCustomerAddressZipCode()
    {
        return '03313001';
    }

    public function getCustomerAddressDistrict()
    {
        return 'Tatuapé';
    }

    public function getCustomerAddressCity()
    {
        return 'São Paulo';
    }

    public function getCustomerAddressState()
    {
        return 'SP';
    }

    public function getCustomerAddressCountry()
    {
        return 'BRA';
    }

    public function getCustomerDeliveryAddressStreet()
    {
        return 'Francisco Marengo';
    }

    public function getCustomerDeliveryAddressNumber()
    {
        return 1210;
    }

    public function getCustomerDeliveryAddressComplement()
    {
        return '';
    }

    public function getCustomerDeliveryAddressZipCode()
    {
        return '20020-080';
    }

    public function getCustomerDeliveryAddressDistrict()
    {
        return 'Tatuapé';
    }

    public function getCustomerDeliveryAddressCity()
    {
        return 'São Paulo';
    }

    public function getCustomerDeliveryAddressState()
    {
        return 'SP';
    }

    public function getCustomerDeliveryAddressCountry()
    {
        return 'BRA';
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
        return 2;
    }
    public function getPaymentInterest()
    {
        return 'ByMerchant';
    }

    public function getPaymentCapture()
    {
        return false;
    }

    public function getPaymentAuthenticate()
    {
        return false;
    }

    public function getPaymentSoftDescriptor()
    {
    }

    public function getPaymentCreditCardCardNumber()
    {
        return '4539088235753081';
    }


    public function getPaymentCreditCardHolder()
    {
        return 'Leandro Rosa';
    }

    public function getPaymentCreditCardExpirationDate()
    {
        return '08/2020';
    }

    public function getPaymentCreditCardSecurityCode()
    {
        return '999';
    }

    public function getPaymentCreditCardSaveCard()
    {
    }

    public function getPaymentCreditCardBrand()
    {
        return 'Visa';
    }

    public function getPaymentExtraDataCollection()
    {
    }

    public function getAntiFraudRequest()
    {
//        return false;
        return new AntiFraud();
    }

    public function getPaymentCreditCardCardToken()
    {
        return null;
    }

    public function getPaymentCreditSoptpaymenttoken()
    {
        return null;
    }

    public function getAvsRequest()
    {
        return new Avs();
    }

    public function getReturnUrl()
    {
        return 'http://braspag.dev';
    }
}
