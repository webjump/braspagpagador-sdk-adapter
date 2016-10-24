<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send;


interface ResponseInterface
{
    public function getMerchantOrderId();

    public function getCustomer();

    public function getCustomerName();

    public function getCustomerIdentity();

    public function getCustomerEmail();

    public function getCustomerBirthdate();

    public function getCustomerAddressStreet();

    public function getCustomerAddressNumber();

    public function getCustomerAddressComplement();

    public function getCustomerAddressZipCode();

    public function getCustomerAddressCity();

    public function getCustomerAddressState();

    public function getCustomerAddressCountry();

    public function getCustomerDeliveryAddressStreet();

    public function getCustomerDeliveryAddressNumber();

    public function getCustomerDeliveryAddressComplement();

    public function getCustomerDeliveryAddressZipCode();

    public function getCustomerDeliveryAddressCity();

    public function getCustomerDeliveryAddressState();

    public function getCustomerDeliveryAddressCountry();

    public function getPaymentServiceTaxAmount();

    public function getPaymentInstallments();

    public function getPaymentInterest();

    public function getPaymentCapture();

    public function getPaymentAuthenticate();

    public function getPaymentRecurrent();

    public function getPaymentCreditCardCardNumber();

    public function getPaymentCreditCardHolder();

    public function getPaymentCreditCardExpirationDate();

    public function getPaymentCreditCardSaveCard();

    public function getPaymentCreditCardBrand();

    public function getPaymentProofOfSale();

    public function getPaymentAcquirerTransactionId();

    public function getPaymentAuthorizationCode();

    public function getPaymentSoftDescriptor();

    public function getPaymentPaymentId();

    public function getPaymentType();

    public function getPaymentAmount();

    public function getPaymentReceivedDate();

    public function getPaymentCapturedAmount();

    public function getPaymentCapturedDate();

    public function getPaymentCurrency();

    public function getPaymentCountry();

    public function getPaymentProvider();

    public function getPaymentExtraDataCollection();

    public function getPaymentReasonCode();

    public function getPaymentReasonMessage();

    public function getPaymentStatus();

    public function getPaymentProviderReturnCode();

    public function getPaymentProviderReturnMessage();

    public function getPaymentLinks();
}
