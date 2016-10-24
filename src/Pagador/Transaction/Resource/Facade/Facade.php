<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Factories\BilletRequestFactory;
use Webjump\Braspag\Factories\CreditCadRequestFactory;
use Webjump\Braspag\Factories\DebitRequestFactory;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;
use Webjump\Braspag\Factories\AuthorizeCommandFactory as Authorize;


class Facade implements FacadeInterface
{
    /**
     * @param BilletRequest $request
     * @return array
     */
    public function sendBillet(BilletRequest $request)
    {
        $authorize = $this->authorize(BilletRequestFactory::make($request));
        return $authorize;
    }

    /**
     * @param CreditCardRequest $request
     * @return array
     */
    public function sendCreditCard(CreditCardRequest $request)
    {
        $authorize = $this->authorize(CreditCadRequestFactory::make($request));
        return $authorize;
    }

    /**
     * @param DebitRequest $request
     * @return array
     */
    public function sendDebit(DebitRequest $request)
    {
        $authorize = $this->authorize(DebitRequestFactory::make($request));
        return $authorize;
    }

    /**
     * @param RequestAbstract $request
     * @return array
     */
    private function authorize(RequestAbstract $request)
    {
        $authorize = Authorize::make($request)->getResult();

        if (! $authorize->isValid()) {
            return $authorize->getMessages();
        }

        return $authorize->toArray();
    }
}
