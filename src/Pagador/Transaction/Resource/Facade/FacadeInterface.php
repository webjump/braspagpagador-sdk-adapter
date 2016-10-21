<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;

interface FacadeInterface
{
    public function sendBillet(BilletRequest $request);

    public function sendCreditCard(CreditCardRequest $request);
}
