<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Actions\RequestInterface as CapturePaymentRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;

interface FacadeInterface
{
    /**
     * @param BilletRequest $request
     * @return BilletRequest
     */
    public function sendBillet(BilletRequest $request);

    /**
     * @param CreditCardRequest $request
     * @return CreditCardRequest
     */
    public function sendCreditCard(CreditCardRequest $request);

    /**
     * @param CapturePaymentRequest $request
     * @return CapturePaymentRequest
     */
    public function captureCreditCard(CapturePaymentRequest $request);

    /**
     * @param CapturePaymentRequest $request
     * @param string $type
     * @return CapturePaymentRequest
     */
    public function checkPaymentStatus(CapturePaymentRequest $request, $type);

    /**
     * @param DebitRequest $request
     * @return DebitRequest
     */
    public function sendDebit(DebitRequest $request);
}
