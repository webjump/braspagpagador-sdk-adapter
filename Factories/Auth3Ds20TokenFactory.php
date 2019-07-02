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

use Webjump\Braspag\Pagador\Http\Services\Auth3Ds20\Token as Token;
use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;

class Auth3Ds20TokenFactory
{
    /**
     * @param RequestAbstract $request
     * @return Sales
     */
    public static function make(RequestAbstract $request)
    {
        return new Token($request);
    }
}
