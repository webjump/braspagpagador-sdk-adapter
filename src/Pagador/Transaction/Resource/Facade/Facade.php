<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Factories\BilletRequestFactory;
use Webjump\Braspag\Factories\CaptureCreditCadRequestFactory;
use Webjump\Braspag\Factories\CreditCadRequestFactory;
use Webjump\Braspag\Factories\CaptureCommandFactory;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture\RequestInterface as CaptureCreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;
use Webjump\Braspag\Factories\SalesCommandFactory as Sales;


class Facade implements FacadeInterface
{
    public function sendBillet(BilletRequest $request)
    {
        $request = Sales::make(BilletRequestFactory::make($request))->getResult();
        return $request;
    }

    public function sendCreditCard(CreditCardRequest $request)
    {
        $request = Sales::make(CreditCadRequestFactory::make($request))->getResult();
        return $request;
    }

    public function captureCreditCard(CaptureCreditCardRequest $request)
    {
        $request = CaptureCommandFactory::make(CaptureCreditCadRequestFactory::make($request))->getResult();
        return $request;
    }

    public function sendDebit(DebitRequest $request)
    {

    }
}
