<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command\Sales;


use Webjump\Braspag\Factories\ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\SalesFactory;
use Webjump\Braspag\Pagador\Transaction\Command\CommandAbstract;

class GetCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = SalesFactory::make($this->request);
        $client = ClientHttpFactory::make();

        $params = $this->request->getParams();
        $uriComplement = $params['uriComplement']['payment_id'];

        $response = $client->request($sales, 'GET', $uriComplement);

        $type = '';
        if ($this->request->getType()) {
            $type = $this->request->getType();
        }

        $this->result = ResponseFactory::make($response, $type);
    }

    protected function getType(array $data)
    {
        $type = '';

        if ($data['Payment']['Type'] === 'CreditCard') {
            $type = 'creditCard';
        }

        if ($data['Payment']['Type'] === 'Boleto') {
            $type = 'billet';
        }

        return $type;
    }
}
