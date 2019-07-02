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

use Webjump\Braspag\Pagador\Transaction\Api\Auth3Ds20\Token\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getToken()
    {
        if (! isset($this->response['access_token'])) {
            return false;
        }
        
        return $this->response['access_token'];
    }

    public function getTokenType()
    {
        if (! isset($this->response['token_type'])) {
            return false;
        }
        return $this->response['token_type'];
    }

    public function getExpiresIn()
    {
        if (! isset($this->response['expires_in'])) {
            return false;
        }
        return $this->response['expires_in'];
    }
}
