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

class TransactionPost extends ServiceAbstract implements ServiceInterface
{
    protected $endPoint = "api/transactions/%s/split";

    public function getEndPoint()
    {
        $params = $this->getRequest()->getParams();

        if (isset($params['orderPaymentTransactionId'])) {
            return sprintf($this->endPoint, $params['orderPaymentTransactionId']);
        }

        return $this->endPoint;
    }
}
