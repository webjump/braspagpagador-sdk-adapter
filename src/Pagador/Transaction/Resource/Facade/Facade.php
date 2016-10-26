<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Factories\BilletRequestFactory;
use Webjump\Braspag\Factories\PaymentRequestFactory;
use Webjump\Braspag\Factories\CreditCadRequestFactory;
use Webjump\Braspag\Factories\CaptureCommandFactory;
use Webjump\Braspag\Factories\DebitCardRequestFactory;
use Webjump\Braspag\Factories\GetCommandFactory;
use Webjump\Braspag\Factories\VoidCommandFactory;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Actions\RequestInterface as ActionsPaymentRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;
use Webjump\Braspag\Factories\SalesCommandFactory as Sales;


class Facade implements FacadeInterface
{
    /**
     * @param BilletRequest $request
     * @return BilletRequest
     */
    public function sendBillet(BilletRequest $request)
    {
        $request = Sales::make(BilletRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param CreditCardRequest $request
     * @return CreditCardRequest
     */
    public function sendCreditCard(CreditCardRequest $request)
    {
        $request = Sales::make(CreditCadRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param ActionsPaymentRequest $request
     * @return ActionsPaymentRequest
     */
    public function captureCreditCard(ActionsPaymentRequest $request)
    {
        $request = CaptureCommandFactory::make(PaymentRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param DebitRequest $request
     * @return DebitRequest
     */
    public function sendDebit(DebitRequest $request)
    {
        $request = Sales::make(DebitCardRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param ActionsPaymentRequest $request
     * @param $type
     * @return ActionsPaymentRequest
     */
    public function checkPaymentStatus(ActionsPaymentRequest $request, $type)
    {
        $request = GetCommandFactory::make(PaymentRequestFactory::make($request, $type))->getResult();
        return $request;
    }

    /**
     * @param ActionsPaymentRequest $request
     * @return ActionsPaymentRequest
     */
    public function voidPayment(ActionsPaymentRequest $request)
    {
        $request = VoidCommandFactory::make(PaymentRequestFactory::make($request))->getResult();
        return $request;
    }
}
