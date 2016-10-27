<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Billet\Send\Response as BilletResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Send\Response as CreditCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Actions\Response as CaptureCreditCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Debit\Send\Response as DebitCardResponse;

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
