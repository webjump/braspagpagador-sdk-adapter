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


use Webjump\Braspag\Factories\AuthTokenCommandFactory;
use Webjump\Braspag\Factories\AuthTokenRequestFactory;
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
use Webjump\Braspag\Pagador\Transaction\Api\Auth\Token\RequestInterface as AuthTokenRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface as DebitRequest;
use Webjump\Braspag\Factories\SalesCommandFactory;
use Webjump\Braspag\Pagador\Transaction\Command\Sales\CaptureCommand;
use Webjump\Braspag\Pagador\Transaction\Command\Sales\GetCommand;
use Webjump\Braspag\Pagador\Transaction\Command\Sales\VoidCommand;
use Webjump\Braspag\Pagador\Transaction\Command\SalesCommand;


class BraspagFacade implements FacadeInterface
{
    /**
     * @param ActionsAuthenticateRequest $request
     * @return AuthenticateCommand
     */
    public function getToken(AuthTokenRequest $request)
    {
        $request = AuthTokenCommandFactory::make(AuthTokenRequestFactory::make($request))->getResult();

        return $request;
    }

    /**
     * @param BilletRequest $request
     * @return SalesCommand
     */
    public function sendBillet(BilletRequest $request)
    {
        $request = SalesCommandFactory::make(BilletRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param CreditCardRequest $request
     * @return SalesCommand
     */
    public function sendCreditCard(CreditCardRequest $request)
    {
        $request = SalesCommandFactory::make(CreditCadRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param ActionsPaymentRequest $request
     * @return CaptureCommand
     */
    public function captureCreditCard(ActionsPaymentRequest $request)
    {
        $request = CaptureCommandFactory::make(PaymentRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param DebitRequest $request
     * @return SalesCommand
     */
    public function sendDebit(DebitRequest $request)
    {
        $request = SalesCommandFactory::make(DebitCardRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param ActionsPaymentRequest $request
     * @param $type
     * @return GetCommand
     */
    public function checkPaymentStatus(ActionsPaymentRequest $request, $type)
    {
        $request = GetCommandFactory::make(PaymentRequestFactory::make($request, $type))->getResult();
        return $request;
    }

    /**
     * @param ActionsPaymentRequest $request
     * @return VoidCommand
     */
    public function voidPayment(ActionsPaymentRequest $request)
    {
        $request = VoidCommandFactory::make(PaymentRequestFactory::make($request))->getResult();
        return $request;
    }
}
