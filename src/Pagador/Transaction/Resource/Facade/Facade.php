<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Factories\BilletRequestFactory;
use Webjump\Braspag\Factories\CreditCadRequestFactory;
use Webjump\Braspag\Factories\DebitRequestFactory;
use Webjump\Braspag\Pagador\Http\Services\ServiceAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;
use Webjump\Braspag\Factories\SalesCommandFactory as Sales;


class Facade implements FacadeInterface
{
    public function sendBillet(BilletRequest $request)
    {
        /** @var ServiceAbstract $request */
        $request = Sales::make(BilletRequestFactory::make($request))->getResult();

        return $request;
    }

    public function sendCreditCard(CreditCardRequest $request)
    {
        /** @var ServiceAbstract $request */
        $request = Sales::make(BilletRequestFactory::make($request))->getResult();
        return $request;
    }

    public function sendDebit(DebitRequest $request)
    {
    }
}
