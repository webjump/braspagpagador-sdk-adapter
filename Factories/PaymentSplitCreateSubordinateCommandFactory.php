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

use Webjump\Braspag\Pagador\Transaction\Command\PaymentSplit\CreateSubordinateCommand;
use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;

class PaymentSplitCreateSubordinateCommandFactory
{
    /**
     * @param RequestAbstract $request
     * @return CreateSubordinateCommand
     */
    public static function make(RequestAbstract $request)
    {
        return new CreateSubordinateCommand($request);
    }
}
