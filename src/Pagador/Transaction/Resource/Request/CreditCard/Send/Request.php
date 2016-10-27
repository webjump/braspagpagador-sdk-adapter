<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Send;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\RequestInterface as AntiFraudRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\Items\RequestInterface as AntiFraudItemsRequest;
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

        /** @var AntiFraudRequest $antiFraudRequest */
        if ($antiFraudRequest = $this->data->getAntiFraudRequest()) {
            $this->params['body']['payment']['FraudAnalysis'] = [
                'Sequence' => $antiFraudRequest->getSequence(),
                'SequenceCriteria' =>$antiFraudRequest->getSequenceCriteria(),
                'FingerPrintId' => $antiFraudRequest->getFingerPrintId(),
                'CaptureOnLowRisk' => $antiFraudRequest->getCaptureOnLowRisk(),
                'VoidOnHighRisk' => $antiFraudRequest->getVoidOnHighRisk(),
                'Browser' => [
                    'CookiesAccepted' => $antiFraudRequest->getBrowserCookiesAccepted(),
                    'Email' => $antiFraudRequest->getBrowserEmail(),
                    'HostName' => $antiFraudRequest->getBrowserHostName(),
                    'IpAddress' => $antiFraudRequest->getBrowserIpAddress(),
                    'Type' => $antiFraudRequest->getBrowserType()
                ],
                'Cart' => [
                    'IsGift' => $antiFraudRequest->getCartIsGift(),
                    'ReturnsAccepted' => $antiFraudRequest->getCartReturnsAccepted(),
                    'Items' => $this->getItems($antiFraudRequest->getCartItems())
                ],
                'Shipping' => [
                    'Addressee' => $antiFraudRequest->getCartShippingAddressee(),
                    'Method' => $antiFraudRequest->getCartShippingMethod(),
                    'Phone' => $antiFraudRequest->getCartShippingPhone()
                ],
            ];
        }

        print_r(\json_encode($this->params['body']));

        return $this;
    }

    /**
     * @param array $items
     * @return array
     */
    private function getItems(array $items = [])
    {
        $result  = [];
        /** @var AntiFraudItemsRequest $item */
        foreach ($items as $item) {

            if (! $item instanceof AntiFraudItemsRequest) {
                var_dump('Tratar Erro em: ' . __CLASS__ . ' line: ' . __LINE__);
                exit();
            }

            $result[] = [
                'GiftCategory' => $item->getGiftCategory(),
                'HostHedge' => $item->getHostHedge(),
                'NonSensicalHedge' => $item->getNonSensicalHedge(),
                'ObscenitiesHedge' => $item->getObscenitiesHedge(),
                'PhoneHedge' => $item->getPhoneHedge(),
                'Name' => $item->getName(),
                'Quantity' => $item->getQuantity(),
                'Sku' => $item->getSku(),
                'UnitPrice' => $item->getUnitPrice(),
                'Risk' => $item->getRisk(),
                'TimeHedge' => $item->getTimeHedge(),
                'Type' => $item->getType(),
                'VelocityHedge' => $item->getVelocityHedge(),
                'Passenger' => [
                    'Email' => $item->getPassengerEmail(),
                    'Identity' => $item->getPassengerIdentity(),
                    'Name' => $item->getPassengerName(),
                    'Rating' => $item->getPassengerRating(),
                    'Phone' => $item->getPassengerPhone(),
                    'Status' => $item->getPassengerStatus()
                ]
            ];
        }

        return $result;
    }
}
