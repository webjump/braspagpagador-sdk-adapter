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

use Webjump\Braspag\Pagador\Transaction\Resource\Auth3Ds20\Token\Request;
use Webjump\Braspag\Pagador\Transaction\Api\Auth3Ds20\Token\RequestInterface as Data;

class Auth3Ds20TokenRequestFactory
{
    /**
     * @param Data $data
     * @param string $type
     * @return Request
     */
    public static function make(Data $data, $type = '')
    {
        return new Request($data, $type);
    }
}
