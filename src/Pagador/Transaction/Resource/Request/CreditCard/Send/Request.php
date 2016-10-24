<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Send;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as Data;

class Request extends RequestAbstract
{
    /**
     * @param Data $data
     */
    public function __construct(Data $data)
    {
        $this->data = $data;
        $this->prepareParams();
    }

    /**
     * @return $this
     */
    protected function prepareParams()
    {
        $this->params = [
            'headers' => [
                'Content-Type' => self::CONTENT_TYPE_APPLICATION_JSON,
                'MerchantId' => $this->data->getMerchantId(),
                'MerchantKey' => $this->data->getMerchantKey()
            ],
            'body' => [
                'merchantOrderId' => $this->data->getMerchantOrderId(),
                'customer' => [
                    'name' => $this->data->getCustomerName(),
                    'identity' => $this->data->getCustomerIdentity(),
                    'identityType' => $this->data->getCustomerIdentityType(),
                    'email' => $this->data->getCustomerEmail(),
                    'birthDate' => $this->data->getCustomerBirthDate(),
                    'address' => [
                        'street' => $this->data->getCustomerAddressStreet(),
                        'number' => $this->data->getCustomerAddressNumber(),
                        'complement' => $this->data->getCustomerAddressComplement(),
                        'zipCode' => $this->data->getCustomerAddressZipCode(),
                        'district' => $this->data->getCustomerAddressDistrict(),
                        'city' => $this->data->getCustomerAddressCity(),
                        'state' => $this->data->getCustomerAddressState(),
                        'country' => $this->data->getCustomerAddressCountry(),
                    ],
                    'deliveryAddress' => [
                        'street' => $this->data->getCustomerDeliveryAddressStreet(),
                        'number' => $this->data->getCustomerDeliveryAddressNumber(),
                        'complement' => $this->data->getCustomerDeliveryAddressComplement(),
                        'zipCode' => $this->data->getCustomerDeliveryAddressZipCode(),
                        'district' => $this->data->getCustomerDeliveryAddressDistrict(),
                        'city' => $this->data->getCustomerDeliveryAddressCity(),
                        'state' => $this->data->getCustomerDeliveryAddressState(),
                        'country' => $this->data->getCustomerDeliveryAddressCountry(),
                    ]
                ],
                'payment' => [
                    'type' => $this->data->getPaymentType(),
                    'amount' => $this->data->getPaymentAmount(),
                    'currency' => $this->data->getPaymentCurrency(),
                    'country' => $this->data->getPaymentCountry(),
                    'provider' => $this->data->getPaymentProvider(),
                    'serviceTaxAmount' => $this->data->getPaymentServiceTaxAmount(),
                    'installments' => $this->data->getPaymentInstallments(),
                    'interest' => $this->data->getPaymentInterest(),
                    'capture' => $this->data->getPaymentCapture(),
                    'authenticate' => $this->data->getPaymentAuthenticate(),
                    'softDescriptor' => $this->data->getPaymentSoftDescriptor(),
                    'creditCard' => [
                        'cardNumber' => $this->data->getPaymentCreditCardCardNumber(),
                        'holder' => $this->data->getPaymentCreditCardHolder(),
                        'expirationDate' => $this->data->getPaymentCreditCardExpirationDate(),
                        'securityCode' => $this->data->getPaymentCreditCardSecurityCode(),
                        'saveCard' => $this->data->getPaymentCreditCardSaveCard(),
                        'brand' => $this->data->getPaymentCreditCardBrand(),
                    ],
                    'extraDataCollection' => $this->data->getPaymentExtraDataCollection()
                ]
            ]
        ];

        return $this;
    }
}
