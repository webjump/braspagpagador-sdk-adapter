<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\OAuth2\Token;

use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\OAuth2\Token\RequestInterface as Data;

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
                'Content-Type' => self::CONTENT_TYPE_APPLICATION_X_WWW_FORM_URLENCODED,
                'Authorization' => "Basic ".$this->data->getAccessToken()
            ],
            'form_params' => [
                'grant_type' => 'client_credentials'
            ]
        ];

        return $this;
    }
}
