<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\GetSubordinate;

use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\GetSubordinate\RequestInterface as Data;

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

        $this->params['subordinateMerchantId'] = $this->data->getSubordinateMerchantId();

        return $this;
    }
}
