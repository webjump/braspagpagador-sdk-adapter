<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\TransactionPost;

use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\RequestInterface as Data;

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
        $splits = $this->data->getSplits();

        $subordinates = [];
        foreach ($splits->getSubordinates() as $subordinate) {

            $subordinates[] = [
                "SubordinateMerchantId" => $subordinate['subordinate_merchant_id'],
                "Amount" => $subordinate['amount'],
                "Fares" => [
                    "Mdr" => $subordinate['fares']['mdr'],
                    "Fee" => $subordinate['fares']['fee']
                ]
            ];
        }

        $this->params['body'] = ['SplitPayments' => $subordinates];

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
