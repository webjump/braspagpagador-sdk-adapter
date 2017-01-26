<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\AntiFraud;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\Items\RequestInterface as AntiFraudItemsRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\MDD\GeneralRequestInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\RequestInterface as Data;

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
            'Sequence' => $this->data->getSequence(),
            'SequenceCriteria' =>$this->data->getSequenceCriteria(),
            'FingerPrintId' => $this->data->getFingerPrintId(),
            'CaptureOnLowRisk' => $this->data->getCaptureOnLowRisk(),
            'VoidOnHighRisk' => $this->data->getVoidOnHighRisk(),
            'Browser' => [
                'CookiesAccepted' => $this->data->getBrowserCookiesAccepted(),
                'Email' => $this->data->getBrowserEmail(),
                'HostName' => $this->data->getBrowserHostName(),
                'IpAddress' => $this->data->getBrowserIpAddress(),
                'Type' => $this->data->getBrowserType()
            ],
            'Cart' => [
                'IsGift' => $this->data->getCartIsGift(),
                'ReturnsAccepted' => $this->data->getCartReturnsAccepted(),
                'Items' => $this->getItems($this->data->getCartItems())
            ],
            'MerchantDefinedFields' => $this->getMDDs($this->data->getMerchantDefinedFields()),
            'Shipping' => [
                'Addressee' => $this->data->getCartShippingAddressee(),
                'Method' => $this->data->getCartShippingMethod(),
                'Phone' => $this->data->getCartShippingPhone()
            ],
        ];

        return $this;
    }

    /**
     * @param array $items
     * @return array
     * @throws \Exception
     */
    private function getItems(array $items = [])
    {
        $result  = [];
        /** @var AntiFraudItemsRequest $item */
        foreach ($items as $item) {

            if (! $item instanceof AntiFraudItemsRequest) {
                throw new \Exception ('items params not valid, is have must instance of "\Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\Items\RequestInterface"');
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

    private function getMDDs(GeneralRequestInterface $data)
    {
        $mddCollection = [
            [
                'Id' => GeneralRequestInterface::MDD_KEY_CUSTOMER_IS_LOGGED,
                'Value' => $data->getCustomerIsLogged()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_CUSTOMER_SINCE_DAYS,
                'Value' => $data->getCustomerSinceDays()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_QTY_INSTALLMENTS_ORDER,
                'Value' => $data->getQtyInstallmentsOrder()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_SALES_ORDER_CHANNEL,
                'Value' => $data->getSalesOrderChannel()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_COUPON_CODE,
                'Value' => $data->getCouponCode()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_LAST_ORDER_DATE,
                'Value' => $data->getLastOrderDate()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_QTY_TRY_ORDER,
                'Value' => $data->getQtyTryOrder()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_CUSTOMER_FETCH_SELF,
                'Value' => $data->getCustomerFetchSelf()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_VERTICAL_SEGMENT,
                'Value' => $data->getVerticalSegment()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_CREDIT_CARD_BIN,
                'Value' => $data->getCreditCardBin()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_QTY_TRY_CREDIT_CARD_NUMBER,
                'Value' => $data->getQtyTryCreditCardNumber()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_EMAIL_FILL_TYPE,
                'Value' => $data->getEmailFillType()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_CREDIT_CARD_NUMBER_FILL_TYPE,
                'Value' => $data->getCreditCardNumberFillType()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_CONFIRM_EMAIL_ADDRESS,
                'Value' => $data->getConfirmEmailAddress()
            ],
            [
                'Id' => GeneralRequestInterface::MDD_KEY_HAS_GIFT_CARD,
                'Value' => $data->getHasGiftCard()
            ]
        ];

        $result = [];
        foreach ($mddCollection as $mdd) {
            if ($mdd['Value']) {
                $result[] = $mdd;
            }
        }

        return $result;
    }
}
