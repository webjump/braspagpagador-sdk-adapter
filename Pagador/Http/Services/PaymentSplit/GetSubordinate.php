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

class GetSubordinate extends ServiceAbstract implements ServiceInterface
{
    protected $endPoint = "api/subordinates/%s";

    public function getEndPoint()
    {
        $params = $this->getRequest()->getParams();

        if (isset($params['subordinateMerchantId'])) {
            return sprintf($this->endPoint, $params['subordinateMerchantId']);
        }

        return $this->endPoint;
    }
}
