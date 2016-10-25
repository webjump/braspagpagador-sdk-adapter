<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command\Sales;


use Webjump\Braspag\Factories\ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use \Psr\Http\Message\ResponseInterface;
use Webjump\Braspag\Factories\SalesFactory;
use Webjump\Braspag\Pagador\Transaction\Resource\Command\CommandAbstract;

class CaptureCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = SalesFactory::make($this->request);
        $client = ClientHttpFactory::make();

        $params = $this->request->getParams();
        $uriComplement = sprintf('%s/capture/', $params['uriComplement']['payment_id']);

        if (isset($params['uriComplement']['capture_request'])) {
            $uriComplement .= '?' . \http_build_query($params['uriComplement']['capture_request']);
        }

        $response = $client->request($sales, 'PUT', $uriComplement);

        if(! ($response instanceof ResponseInterface)) {
            exit($response);
        }

        $this->result = ResponseFactory::make($response);
    }
}
