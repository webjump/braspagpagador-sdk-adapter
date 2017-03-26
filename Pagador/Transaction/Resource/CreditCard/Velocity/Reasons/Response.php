<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Velocity\Reasons;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Velocity\Reasons\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getRuleId()
    {
        if (! isset($this->response['RuleId'])) {
            return false;
        }

        return $this->response['RuleId'];
    }

    public function getMessage()
    {
        if (! isset($this->response['Message'])) {
            return false;
        }

        return $this->response['Message'];
    }

    public function getHitsQuantity()
    {
        if (! isset($this->response['HitsQuantity'])) {
            return false;
        }

        return $this->response['HitsQuantity'];
    }

    public function getHitsTimeRangeInSeconds()
    {
        if (! isset($this->response['HitsTimeRangeInSeconds'])) {
            return false;
        }

        return $this->response['HitsTimeRangeInSeconds'];
    }

    public function getExpirationBlockTimeInSeconds()
    {
        if (! isset($this->response['ExpirationBlockTimeInSeconds'])) {
            return false;
        }

        return $this->response['ExpirationBlockTimeInSeconds'];
    }
}
