<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Velocity;


use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Velocity\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
     public function getId()
     {
         if (! isset($this->response['Id'])) {
             return false;
         }
         return $this->response['Id'];
     }

    public function getResultMessage()
    {
        if (! isset($this->response['ResultMessage'])) {
            return false;
        }

        return $this->response['ResultMessage'];
    }

    public function getScore()
    {
        if (! isset($this->response['Score'])) {
            return false;
        }

        return $this->response['Score'];
    }

    public function getRejectReasons()
    {
        if (! isset($this->response['RejectReasons']) || ! is_array($this->response['RejectReasons'])) {
            return [];
        }

        $result = [];

        foreach ($this->response['RejectReasons'] as $reason) {
            $result[] = ResponseFactory::make($reason, 'velocityReasons');
        }

        return $result;
    }
}
