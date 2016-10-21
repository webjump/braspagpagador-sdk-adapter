<?php

namespace Webjump\Braspag\Pagador\Request;


use Webjump\Braspag\Pagador\RequestAbstract;

class Billet extends RequestAbstract
{
    /**
     * @return $this
     */
    public function prepareParams()
    {
        $this->params = [
            'merchantOrderId' => $this->dataRequest->getMerchantOrderId(),
            'customer' => [
                'name' => $this->dataRequest->getCustomerName(),
                'identity' => $this->dataRequest->getCustomerIdentity(),
                'identityType' => $this->dataRequest->getCustomerIdentityType(),
                'email' => $this->dataRequest->getCustomerEmail(),
                'birthDate' => $this->dataRequest->getCustomerBirthDate(),
                'address' => [
                    'street' => $this->dataRequest->getCustomerAddressStreet(),
                    'number' => $this->dataRequest->getCustomerAddressNumber(),
                    'complement' => $this->dataRequest->getCustomerAddressComplement(),
                    'zipCode' => $this->dataRequest->getCustomerAddressZipCode(),
                    'district' => $this->dataRequest->getCustomerAddressDistrict(),
                    'city' => $this->dataRequest->getCustomerAddressCity(),
                    'state' => $this->dataRequest->getCustomerAddressState(),
                    'country' => $this->dataRequest->getCustomerAddressCountry(),
                ],
                'deliveryAddress' => [
                    'street' => $this->dataRequest->getCustomerDeliveryAddressStreet(),
                    'number' => $this->dataRequest->getCustomerDeliveryAddressNumber(),
                    'complement' => $this->dataRequest->getCustomerDeliveryAddressComplement(),
                    'zipCode' => $this->dataRequest->getCustomerDeliveryAddressZipCode(),
                    'district' => $this->dataRequest->getCustomerDeliveryAddressDistrict(),
                    'city' => $this->dataRequest->getCustomerDeliveryAddressCity(),
                    'state' => $this->dataRequest->getCustomerDeliveryAddressState(),
                    'country' => $this->dataRequest->getCustomerDeliveryAddressCountry(),
                ]
            ],
            'payment' => [
                'type' => $this->dataRequest->getPaymentType(),
                'amount' => $this->dataRequest->getPaymentAmount(),
                'provider' => $this->dataRequest->getPaymentProvider(),
                'address' => $this->dataRequest->getPaymentAddress(),
                'boletoNumber' => $this->dataRequest->getPaymentBoletoNumber(),
                'assignor' => $this->dataRequest->getPaymentAssignor(),
                'demonstrative' => $this->dataRequest->getPaymentDemonstrative(),
                'expirationDate' => $this->dataRequest->getPaymentExpirationDate(),
                'identification' => $this->dataRequest->getPaymentIdentification(),
                'instructions' => $this->dataRequest->getPaymentInstructions()
            ]
        ];

        return $this;
    }
}
