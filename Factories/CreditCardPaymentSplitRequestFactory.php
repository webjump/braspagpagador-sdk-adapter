<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Factories;

use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\PaymentSplit\Request;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\PaymentSplit\RequestInterface as Data;

class CreditCardPaymentSplitRequestFactory
{
    /**
     * @param Data $data
     * @return Request
     */
    public static function make(Data $data)
    {
        return new Request($data);
    }
}
