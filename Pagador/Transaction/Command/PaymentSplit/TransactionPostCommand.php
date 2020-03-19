<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command\PaymentSplit;

use Webjump\Braspag\Factories\PaymentSplitClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\PaymentSplitTransactionPostFactory;
use Webjump\Braspag\Pagador\Transaction\Command\CommandAbstract;

/**
 * Class TokenCommand
 * @package Webjump\Braspag\Pagador\Transaction\Command\Auth3Ds20
 */
class TransactionPostCommand extends CommandAbstract
{
    /**
     * @return $this
     */
    protected function execute()
    {
        $splitTransactionPost = PaymentSplitTransactionPostFactory::make($this->request);
        $client = PaymentSplitClientHttpFactory::make();

        $params = $this->request->getParams();
        $isTestEnvironment =  (bool) $this->request->getData()->isTestEnvironment();
        $orderTransactionId =  $this->request->getData()->getOrderTransactionId();

        $response = $client->request($splitTransactionPost, 'PUT', '', $isTestEnvironment);

        $this->result = ResponseFactory::make($this->getResponseToArray($response), 'paymentSplit');

        return $this;
    }
}
