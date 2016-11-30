<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Avs;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Avs\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
     public function getStatus()
     {
         if (! isset($this->response['Status'])) {
             return false;
         }
         return $this->response['Status'];
     }

    public function getReturnCode()
    {
        if (! isset($this->response['ReturnCode'])) {
            return false;
        }
        return $this->response['ReturnCode'];
    }
}
