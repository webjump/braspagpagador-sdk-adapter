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

use Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\CreateSubordinate\Request;
use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\CreateSubordinate\RequestInterface as Data;

class PaymentSplitCreateSubordinateRequestFactory
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
