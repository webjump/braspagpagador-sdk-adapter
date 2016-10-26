<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command\Sales;


use Webjump\Braspag\Factories\ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use \Psr\Http\Message\ResponseInterface;
use Webjump\Braspag\Factories\SalesFactory;
use Webjump\Braspag\Pagador\Transaction\Resource\Command\CommandAbstract;

class VoidCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = SalesFactory::make($this->request);
        $client = ClientHttpFactory::make();

        $params = $this->request->getParams();
        $uriComplement = sprintf('%s/void', $params['uriComplement']['payment_id']);

        if (isset($params['uriComplement']['additional'])) {
            $uriComplement .= '?' . \http_build_query($params['uriComplement']['additional']);
        }

        $response = $client->request($sales, 'PUT', $uriComplement);

        if(! ($response instanceof ResponseInterface)) {
            var_dump($response);
            return;
        }

        $this->result = ResponseFactory::make($response, 'actions');
    }
}
