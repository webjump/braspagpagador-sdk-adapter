<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\GetSubordinate;

interface RequestInterface
{
    /**
     * @return mixed
     */
    public function getSubordinateId();

    /**
     * @param mixed $subordinateId
     */
    public function setSubordinateId($subordinateId);

    /**
     * @return mixed
     */
    public function getSubordinateMerchantId();

    /**
     * @param mixed $subordinateMerchantId
     */
    public function setSubordinateMerchantId($subordinateMerchantId);
}
