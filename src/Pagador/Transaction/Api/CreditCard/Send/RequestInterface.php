<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send;


interface RequestInterface
{
    public function getMerchantId();

    public function getMerchantKey();

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

    public function getCustomerDeliveryAddressStreet();

    public function getCustomerDeliveryAddressNumber();

    public function getCustomerDeliveryAddressComplement();

    public function getCustomerDeliveryAddressZipCode();

    public function getCustomerDeliveryAddressDistrict();

    public function getCustomerDeliveryAddressCity();

    public function getCustomerDeliveryAddressState();

    public function getCustomerDeliveryAddressCountry();

    public function getPaymentType();

    public function getPaymentAmount();

    public function getPaymentCurrency();

    public function getPaymentCountry();

    public function getPaymentProvider();

    public function getPaymentServiceTaxAmount();

    public function getPaymentInstallments();

    public function getPaymentInterest();

    public function getPaymentCapture();

    public function getPaymentAuthenticate();

    public function getPaymentSoftDescriptor();

    public function getPaymentCreditCardCardNumber();

    public function getPaymentCreditCardHolder();

    public function getPaymentCreditCardExpirationDate();

    public function getPaymentCreditCardSecurityCode();

    public function getPaymentCreditCardSaveCard();

    public function getPaymentCreditCardBrand();

    public function getPaymentExtraDataCollection();
}
