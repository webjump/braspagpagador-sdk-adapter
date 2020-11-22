<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\Lock;

interface RequestInterface
{
    /**
     * @param $isLocked
     * @return mixed
     */
    public function setIsLocked($isLocked);

    public function isLocked();
}
