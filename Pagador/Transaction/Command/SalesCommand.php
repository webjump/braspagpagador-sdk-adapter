<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command;

use Webjump\Braspag\Factories\ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\SalesFactory;
use Webjump\Braspag\Pagador\Transaction\Resource\Boleto\Send\Request as BoletoRequest;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Send\Request as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\PaymentSplit\Request as SplitPaymentTransactionPostRequest;
use Webjump\Braspag\Pagador\Transaction\Resource\DebitCard\Send\Request as DebitRequest;

class SalesCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = SalesFactory::make($this->request);
        $client = ClientHttpFactory::make();

        $isTestEnvironment =  (bool) $this->request->getData()->isTestEnvironment();

        $response = $client->request($sales, 'POST', '', $isTestEnvironment);

        $type = '';

        if ($this->request instanceof BoletoRequest ) {
            $type = ResponseFactory::CLASS_TYPE_BOLETO;
        }

        if ($this->request instanceof CreditCardRequest) {
            $type = ResponseFactory::CLASS_TYPE_CREDIT_CARD;
        }

        if ($this->request instanceof SplitPaymentTransactionPostRequest) {
            $type = ResponseFactory::CLASS_TYPE_CREDIT_CART_PAYMENT_SPLIT;
        }

        if ($this->request instanceof DebitRequest) {
            $type = ResponseFactory::CLASS_TYPE_DEBIT_CARD;
        }

        $this->result = ResponseFactory::make($this->getResponseToArray($response), $type);
    }
}
