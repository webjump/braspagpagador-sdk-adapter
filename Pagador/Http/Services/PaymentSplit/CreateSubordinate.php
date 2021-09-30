<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2019 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Http\Services\PaymentSplit;

use Webjump\Braspag\Pagador\Http\Services\ServiceAbstract;
use Webjump\Braspag\Pagador\Http\Services\ServiceInterface;

class CreateSubordinate extends ServiceAbstract implements ServiceInterface
{
    protected $endPoint = "api/subordinates";

    public function getEndPoint()
    {
        return $this->endPoint;
    }
}
