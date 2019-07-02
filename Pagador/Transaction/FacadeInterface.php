<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction;

use Webjump\Braspag\Pagador\Transaction\Api\Auth3Ds20\Token\RequestInterface as ActionsAuthRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Actions\RequestInterface as ActionsPaymentRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;
use Webjump\Braspag\Pagador\Transaction\Command\Sales\CaptureCommand;
use Webjump\Braspag\Pagador\Transaction\Command\Sales\GetCommand;
use Webjump\Braspag\Pagador\Transaction\Command\Sales\VoidCommand;
use Webjump\Braspag\Pagador\Transaction\Command\SalesCommand;

interface FacadeInterface
{
    /**
     * @param ActionsAuthRequest $request
     * @return mixed
     */
    public function getToken(ActionsAuthRequest $request);
    
    /**
     * @param BilletRequest $request
     * @return SalesCommand
     */
    public function sendBillet(BilletRequest $request);

    /**
     * @param CreditCardRequest $request
     * @return SalesCommand
     */
    public function sendCreditCard(CreditCardRequest $request);

    /**
     * @param ActionsPaymentRequest $request
     * @return CaptureCommand
     */
    public function captureCreditCard(ActionsPaymentRequest $request);

    /**
     * @param DebitRequest $request
     * @return SalesCommand
     */
    public function sendDebit(DebitRequest $request);

    /**
     * @param ActionsPaymentRequest $request
     * @param $type
     * @return GetCommand
     */
    public function checkPaymentStatus(ActionsPaymentRequest $request, $type);

    /**
     * @param ActionsPaymentRequest $request
     * @return VoidCommand
     */
    public function voidPayment(ActionsPaymentRequest $request);
}
