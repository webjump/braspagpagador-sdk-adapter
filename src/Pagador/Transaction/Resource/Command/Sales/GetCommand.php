<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command\Sales;


use Webjump\Braspag\Factories\ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use \Psr\Http\Message\ResponseInterface;
use Webjump\Braspag\Factories\SalesFactory;
use Webjump\Braspag\Pagador\Transaction\Resource\Command\CommandAbstract;

class GetCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = SalesFactory::make($this->request);
        $client = ClientHttpFactory::make();

        $params = $this->request->getParams();
        $uriComplement = sprintf('%s/', $params['uriComplement']['payment_id']);

        $response = $client->request($sales, 'GET', $uriComplement);

        if(! ($response instanceof ResponseInterface)) {
            exit($response);
        }

        $this->result = ResponseFactory::make($response);
    }
}
