<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send;


use Webjump\Braspag\Pagador\Transaction\Api\AuthRequestInterface;

interface RequestInterface extends AuthRequestInterface
{
    CONST PAYMENT_TYPE = 'CreditCard';

    public function getMerchantOrderId();

    public function getCustomerName();

    public function getCustomerIdentity();

    public function getCustomerIdentityType();

    public function getCustomerEmail();

    public function getCustomerBirthDate();

    public function getCustomerAddressStreet();

    public function getCustomerAddressNumber();

    public function getCustomerAddressComplement();

    public function getCustomerAddressZipCode();

    public function getCustomerAddressDistrict();

    public function getCustomerAddressCity();

    public function getCustomerAddressState();

    public function getCustomerAddressCountry();

    public function getCustomerAddressPhone();

    public function getCustomerDeliveryAddressStreet();

    public function getCustomerDeliveryAddressNumber();

    public function getCustomerDeliveryAddressComplement();

    public function getCustomerDeliveryAddressZipCode();

    public function getCustomerDeliveryAddressDistrict();

    public function getCustomerDeliveryAddressCity();

    public function getCustomerDeliveryAddressState();

    public function getCustomerDeliveryAddressCountry();

    public function getCustomerDeliveryAddressPhone();

    public function getPaymentAmount();

    public function getPaymentCurrency();

    public function getPaymentCountry();

    public function getPaymentProvider();

    public function getPaymentServiceTaxAmount();

    public function getPaymentInstallments();

    public function getPaymentInterest();

    public function getPaymentCapture();

    public function getPaymentAuthenticate();
    
    public function getReturnUrl();

    public function getPaymentType();

    public function getPaymentSoftDescriptor();

    public function getPaymentCreditCardCardNumber();

    public function getPaymentCreditCardHolder();

    public function getPaymentCreditCardExpirationDate();

    public function getPaymentCreditCardSecurityCode();

    public function getPaymentCreditCardSaveCard();

    public function getPaymentCreditCardBrand();

    public function getPaymentExternalAuthenticationFailureType();

    public function getPaymentExternalAuthenticationCavv();

    public function getPaymentExternalAuthenticationXid();

    public function getPaymentExternalAuthenticationEci();

    public function getPaymentCardExternalAuthenticationVersion();

    public function getPaymentExternalAuthenticationReferenceId();

    public function getPaymentExtraDataCollection();

    public function getAntiFraudRequest();

    public function getPaymentCreditCardCardToken();

    public function getPaymentCreditSoptpaymenttoken();
    
    public function getAvsRequest();
}
