<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Request\Debit\Send;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as Data;

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
    public function prepareParams()
    {
        $this->params = [
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
                'provider' => $this->data->getPaymentProvider(),
                'returnUrl' => $this->data->getPaymentReturnUrl(),
                'debitCard' => [
                    'CardNumber' => $this->data->getPaymentDebitCardCardNumber(),
                    'Holder' => $this->data->getPaymentDebitCardHolder(),
                    'ExpirationDate' => $this->data->getPaymentDebitCardExpirationDate(),
                    'SecurityCode' => $this->data->getPaymentDebitCardSecurityCode(),
                    'Brand' => $this->data->getPaymentDebitCardBrand(),
                ]
            ]
        ];

        return $this;
    }
}
