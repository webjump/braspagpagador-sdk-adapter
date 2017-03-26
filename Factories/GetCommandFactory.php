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


use Webjump\Braspag\Pagador\Transaction\Command\Sales\GetCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;

class GetCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return GetCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new GetCommand($request);
    }
}
