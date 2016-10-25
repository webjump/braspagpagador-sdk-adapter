<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Capture;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture\RequestInterface as Data;

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
            'uriComplement' => [
                'payment_id' => $this->data->getPaymentId(),
                'capture_request' => $this->data->getCaptureRequest()
            ]
        ];

        return $this;
    }
}
