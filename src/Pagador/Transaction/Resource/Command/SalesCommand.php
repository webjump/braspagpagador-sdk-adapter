<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command;


use Webjump\Braspag\Factories\ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\SalesFactory;
use \Psr\Http\Message\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\Billet\Send\Request as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Send\Request as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\CreditCard\Capture\Request as CaptureCreditCardRequest;


class SalesCommand extends CommandAbstract
{
    protected function execute()
    {
        $sales = SalesFactory::make($this->request);
        $client = ClientHttpFactory::make();
        $response = $client->request($sales);

        if(! ($response instanceof ResponseInterface)) {
            exit($response);
        }

        $type = '';

        if ($this->request instanceof BilletRequest ) {
            $type = 'billet';
        }

        if ($this->request instanceof CreditCardRequest) {
            $type = 'creditCard';
        }

        $this->result = ResponseFactory::make($response, $type);
    }
}
