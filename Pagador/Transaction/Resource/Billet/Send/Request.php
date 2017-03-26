<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Billet\Send;


use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as Data;

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
            'headers' => [
                'Content-Type' => self::CONTENT_TYPE_APPLICATION_JSON,
                'MerchantId' => $this->data->getMerchantId(),
                'MerchantKey' => $this->data->getMerchantKey()
            ],
            'body' => [
                'MerchantOrderId' => $this->data->getMerchantOrderId(),
                'Customer' => [
                    'Name' => $this->data->getCustomerName(),
                    'Identity' => $this->data->getCustomerIdentity(),
                    'IdentityType' => $this->data->getCustomerIdentityType(),
                    'Email' => $this->data->getCustomerEmail(),
                    'BirthDate' => $this->data->getCustomerBirthDate(),
                    'Address' => [
                        'Street' => $this->data->getCustomerAddressStreet(),
                        'Number' => $this->data->getCustomerAddressNumber(),
                        'Complement' => $this->data->getCustomerAddressComplement(),
                        'District' =>  $this->data->getCustomerAddressDistrict(),
                        'ZipCode' => $this->data->getCustomerAddressZipCode(),
                        'City' => $this->data->getCustomerAddressCity(),
                        'State' => $this->data->getCustomerAddressState(),
                        'Country' => $this->data->getCustomerAddressCountry(),
                    ]
                ],
                'Payment' => [
                    'Type' => Data::PAYMENT_TYPE,
                    'Amount' => $this->data->getPaymentAmount(),
                    'Provider' => $this->data->getPaymentProvider(),
                    'Address' => $this->data->getPaymentAddress(),
                    'BoletoNumber' => $this->data->getPaymentBoletoNumber(),
                    'Assignor' => $this->data->getPaymentAssignor(),
                    'Demonstrative' => $this->data->getPaymentDemonstrative(),
                    'ExpirationDate' => $this->data->getPaymentExpirationDate(),
                    'Identification' => $this->data->getPaymentIdentification(),
                    'Instructions' => $this->data->getPaymentInstructions()
                ]
            ]
        ];

        return $this;
    }
}
