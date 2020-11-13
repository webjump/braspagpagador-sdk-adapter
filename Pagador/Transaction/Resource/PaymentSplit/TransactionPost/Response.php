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

use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
    public function getSplits()
    {
        if (!isset($this->response['SplitPayments'])) {
            return $this->response;
        }
        return $this->response['SplitPayments'];
    }

    public function getPaymentId()
    {
        if (!isset($this->response['PaymentId'])) {
            return false;
        }
        return $this->response['PaymentId'];
    }
}
