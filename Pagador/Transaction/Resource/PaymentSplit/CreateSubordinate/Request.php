<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\CreateSubordinate;

use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\CreateSubordinate\RequestInterface as Data;

class Request extends RequestAbstract
{
    /**
     * Request constructor.
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
        $this->params['headers'] = [
            'Content-Type' => "application/json",
            'Authorization' => "Bearer ".$this->data->getAccessToken()
        ];

        $this->params['body'] = [
            "CorporateName" => $this->data->getSubordinateCorporateName(),
            "FancyName" => $this->data->getSubordinateFancyName(),
            "DocumentNumber" => $this->data->getSubordinateDocumentNumber(),
            "DocumentType" => $this->data->getSubordinateDocumentType(),
            "MerchantCategoryCode" => $this->data->getSubordinateMerchantCategoryCode(),
            "ContactName" => $this->data->getSubordinateContactName(),
            "ContactPhone" => $this->data->getSubordinateContactPhone(),
            "MailAddress" => $this->data->getSubordinateMailAddress(),
            "Website" => $this->data->getSubordinateWebsite(),
            "BankAccount" => [
                "Bank" => $this->data->getBankAccountBank(),
                "BankAccountType" => $this->data->getBankAccountType(),
                "Number" => $this->data->getBankAccountNumber(),
                "VerifierDigit" => $this->data->getBankAccountVerifierDigit(),
                "AgencyNumber" => $this->data->getBankAccountAgencyNumber(),
                "AgencyDigit" => $this->data->getBankAccountAgencyDigit(),
                "DocumentNumber" => $this->data->getBankAccountDocumentNumber(),
                "DocumentType" => $this->data->getBankAccountDocumentType(),
            ],
            "Address" => [
                "Street" => $this->data->getAddressStreet(),
                "Number" => $this->data->getAddressNumber(),
                "Complement" => $this->data->getAddressComplement(),
                "Neighborhood" => $this->data->getAddressNeighborhood(),
                "City" => $this->data->getAddressCity(),
                "State" => $this->data->getAddressState(),
                "ZipCode" => $this->data->getAddressZipCode(),
            ],
            "Agreement" => [
                "Fee" => $this->data->getConfig()->getPaymentSplitMarketPlaceGeneralPaymentSplitFee(),
            ],
            "Notification" => [
                "Url" => "https://{$this->data->getHttpHost()}/rest/V1/braspag/subordinate_approval_notification/save",
                "Headers" => [
                    [
                        "Key" => "application/type",
                        "Value" => "json"
                    ]
                ]
            ]
        ];

        if (!empty($this->data->getBankAccountOperation())) {
            $this->params['body']['BankAccount']['Operation'] = $this->data->getBankAccountOperation();
        }

        if ($this->data->getConfig()->getPaymentSplitMarketPlaceGeneralPaymentSplitMdrType() == '1') {
            $this->params['body']['Agreement']['MdrPercentage'] = $this->data->getConfig()->getPaymentSplitMarketPlaceGeneralPaymentSplitMdrUnique();
        }

        if ($this->data->getConfig()->getPaymentSplitMarketPlaceGeneralPaymentSplitMdrType() == '2') {
            $this->params['body']['Agreement']['MerchantDiscountRates'] = $this->data->getPaymentSplitMdrMultipleData();
        }

        return $this;
    }
}
