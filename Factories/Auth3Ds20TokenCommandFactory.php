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

use Webjump\Braspag\Pagador\Transaction\Command\Auth3Ds20\TokenCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;

class Auth3Ds20TokenCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return GetTokenCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new TokenCommand($request);
    }
}
