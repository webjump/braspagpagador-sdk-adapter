<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\Lock;

use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\Lock\RequestInterface as Data;

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
        $subordinates = $this->data->getSubordinates();
        $isLocked = $this->data->isLocked();

        $this->params = $subordinatesRequest = [];
        foreach ($subordinates as $subordinate) {

            $subordinatesRequest[] = [
                "SubordinateMerchantId" => $subordinate,
                "Locked" => (bool) $isLocked
            ];
        }

        $this->params['body'] = \json_encode($subordinatesRequest);

        if (!empty($this->data->getOrderTransactionId())) {
            $this->params['headers'] = [
                'Content-Type' => "application/json",
                'Authorization' => "Bearer ".$this->data->getAccessToken(),
            ];

            $this->params['orderPaymentTransactionId'] = $this->data->getOrderTransactionId();
        }

        return $this;
    }
}
