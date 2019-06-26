<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Send;


use Webjump\Braspag\Factories\CreditCardAntiFraudRequestFactory;
use Webjump\Braspag\Factories\CreditCardAvsRequestFactory;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\RequestInterface as AntiFraudRequest;
use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
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
        $creditCardParamKey = 'creditCard';
        if ($this->data->getPaymentType() === 'PrivateLabelCard') {
            $creditCardParamKey = 'PrivateLabelCard';
        }

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
                    'phone' => $this->data->getCustomerAddressPhone(),
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
                    'type' => ($this->data->getPaymentType()) ?: Data::PAYMENT_TYPE,
                    'amount' => $this->data->getPaymentAmount(),
                    'currency' => $this->data->getPaymentCurrency(),
                    'country' => $this->data->getPaymentCountry(),
                    'provider' => $this->data->getPaymentProvider(),
                    'serviceTaxAmount' => $this->data->getPaymentServiceTaxAmount(),
                    'installments' => $this->data->getPaymentInstallments(),
                    'interest' => $this->data->getPaymentInterest(),
                    'capture' => $this->data->getPaymentCapture(),
                    'authenticate' => $this->data->getPaymentAuthenticate(),
                    'returnUrl' => $this->data->getReturnUrl(),
                    'softDescriptor' => $this->data->getPaymentSoftDescriptor(),
                    $creditCardParamKey => $this->getCreditCardParams(),
                    'extraDataCollection' => $this->data->getPaymentExtraDataCollection()
                ]
            ]
        ];

        if (($antiFraudRequest = $this->data->getAntiFraudRequest()) && !$this->data->getPaymentAuthenticate()) {
            $antiFraud = CreditCardAntiFraudRequestFactory::make($antiFraudRequest);
            $this->params['body']['payment']['FraudAnalysis'] = $antiFraud->getParams();
        }

        if ($avsRequest = $this->data->getAvsRequest()) {
            $avs = CreditCardAvsRequestFactory::make($avsRequest);
            $this->params['body']['payment']['creditCard']['Avs'] = $avs->getParams();
        }

        if ($this->data->getPaymentAuthenticate()) {
            $this->params['body']['payment']['externalAuthentication'] = $this->getExternalAuthenticationParams();
        }

        return $this;
    }

    protected function getCreditCardParams()
    {
        if ($this->data->getPaymentCreditCardCardToken()) {
            return $this->getCreditCardTokenParams();
        }

        if ($this->data->getPaymentCreditSoptpaymenttoken()) {
            return $this->getCreditCardSilentOrderPostParams();
        }

        return [
            'cardNumber' => $this->data->getPaymentCreditCardCardNumber(),
            'holder' => $this->data->getPaymentCreditCardHolder(),
            'expirationDate' => $this->data->getPaymentCreditCardExpirationDate(),
            'securityCode' => $this->data->getPaymentCreditCardSecurityCode(),
            'saveCard' => $this->data->getPaymentCreditCardSaveCard(),
            'brand' => $this->data->getPaymentCreditCardBrand(),
        ];
    }

    protected function getExternalAuthenticationParams()
    {
        return [
           "Cavv" => $this->data->getPaymentExternalAuthenticationCavv(),
           "Xid" => $this->data->getPaymentExternalAuthenticationXid(),
           "Eci" => $this->data->getPaymentExternalAuthenticationEci(),
           "Version" => $this->data->getPaymentCardExternalAuthenticationVersion(),
           "ReferenceID" => $this->data->getPaymentExternalAuthenticationReferenceId()
        ];
    }

    protected function getCreditCardSilentOrderPostParams()
    {
        return [
            'paymentToken' => $this->data->getPaymentCreditSoptpaymenttoken(),
            'brand' => $this->data->getPaymentCreditCardBrand(),
            'saveCard' => $this->data->getPaymentCreditCardSaveCard(),
        ];
    }

    protected function getCreditCardTokenParams()
    {
        return [
            'cardToken' => $this->data->getPaymentCreditCardCardToken(),
            'securityCode' => $this->data->getPaymentCreditCardSecurityCode(),
            'brand' => $this->data->getPaymentCreditCardBrand(),
        ];
    }
}
