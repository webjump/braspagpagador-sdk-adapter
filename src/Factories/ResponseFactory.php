<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Response\Billet\Send\Response as BilletResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Response\CreditCard\Send\Response as CreditCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Response\Actions\Response as CaptureCreditCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Response\Debit\Send\Response as DebitCardResponse;

use \Psr\Http\Message\ResponseInterface;

class ResponseFactory
{
    /**
     * @param ResponseInterface $request
     * @param string $type
     * @return BilletResponse|CreditCardResponse|CaptureCreditCardResponse|DebitCardResponse
     */
    public static function make(ResponseInterface $request, $type)
    {
        if ($type === 'billet') {
            return new BilletResponse($request);
        }

        if ($type === 'creditCard') {
            return new CreditCardResponse($request);
        }

        if ($type === 'actions') {
            return new CaptureCreditCardResponse($request);
        }

        if ($type === 'debitCard') {
            return new DebitCardResponse($request);
        }
    }
}
