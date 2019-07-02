<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Auth3Ds20\Token;

use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\Auth3Ds20\Token\RequestInterface as Data;

class Request extends RequestAbstract
{
    protected $type;

    /**
     * @param Data $data
     * @param string $type
     */
    public function __construct(Data $data, $type = '')
    {
        $this->type = $type;
        $this->data = $data;
        $this->prepareParams();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     */
    protected function prepareParams()
    {
        $this->params = [
            'headers' => [
                'Content-Type' => self::CONTENT_TYPE_APPLICATION_JSON,
                'Authorization' => "Bearer ".$this->data->getAccessToken()
            ],
            'body' => [
                'EstablishmentCode' => $this->data->getEstablishmentCode(),
                'MerchantName' => $this->data->getMerchantName(),
                'MCC' => $this->data->getMCC()
            ]
        ];

        return $this;
    }
}
