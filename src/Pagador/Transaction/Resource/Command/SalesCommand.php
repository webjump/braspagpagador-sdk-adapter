<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command;


use Webjump\Braspag\Factories\HttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\SalesCommandFactory;
use Webjump\Braspag\Pagador\Http\Client\Client;
use Webjump\Braspag\Pagador\Http\Services\Sales;

class SalesCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = new Sales($this->request);
        $client = new Client();
        $response = $client->request($sales);

        $this->result = ResponseFactory::make($response);
    }
}
