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

use Webjump\Braspag\Factories\Auth3Ds20TokenCommandFactory;
use Webjump\Braspag\Factories\OAuth2TokenCommandFactory;
use Webjump\Braspag\Factories\PaymentSplitTransactionPostCommandFactory;
use Webjump\Braspag\Factories\Auth3Ds20TokenRequestFactory;
use Webjump\Braspag\Factories\OAuth2TokenRequestFactory;
use Webjump\Braspag\Factories\BoletoRequestFactory;
use Webjump\Braspag\Factories\PaymentRequestFactory;
use Webjump\Braspag\Factories\CreditCardRequestFactory;
use Webjump\Braspag\Factories\PaymentSplitRequestFactory;
use Webjump\Braspag\Factories\CaptureCommandFactory;
use Webjump\Braspag\Factories\DebitCardRequestFactory;
use Webjump\Braspag\Factories\GetCommandFactory;
use Webjump\Braspag\Factories\VoidCommandFactory;
use Webjump\Braspag\Pagador\Transaction\Api\Boleto\Send\RequestInterface as BoletoRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Actions\RequestInterface as ActionsPaymentRequest;
use Webjump\Braspag\Pagador\Transaction\Api\Auth3Ds20\Token\RequestInterface as Auth3Ds20TokenRequest;
use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\RequestInterface as PaymentSplitTransactionPostRequest;
use Webjump\Braspag\Pagador\Transaction\Api\OAuth2\Token\RequestInterface as OAuth2TokenRequest;
use Webjump\Braspag\Pagador\Transaction\Api\DebitCard\Send\RequestInterface as DebitRequest;
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
    public function getToken(Auth3Ds20TokenRequest $request)
    {
        $request = Auth3Ds20TokenCommandFactory::make(Auth3Ds20TokenRequestFactory::make($request))->getResult();

        return $request;
    }

    /**
     * @param ActionsAuthenticateRequest $request
     * @return AuthenticateCommand
     */
    public function getOAuth2Token(OAuth2TokenRequest $request)
    {
        $request = OAuth2TokenCommandFactory::make(OAuth2TokenRequestFactory::make($request))->getResult();

        return $request;
    }

    /**
     * @param BoletoRequest $request
     * @return SalesCommand
     */
    public function sendBoleto(BoletoRequest $request)
    {
        $request = SalesCommandFactory::make(BoletoRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param CreditCardRequest $request
     * @return SalesCommand
     */
    public function sendCreditCard(CreditCardRequest $request)
    {
        $request = SalesCommandFactory::make(CreditCardRequestFactory::make($request))->getResult();
        return $request;
    }

    /**
     * @param PaymentSplitTransactionPostRequest $request
     * @return PaymentSplitTransactionPostRequest|SalesCommand
     */
    public function sendSplitPaymentTransactionPost(PaymentSplitTransactionPostRequest $request)
    {
        $request = PaymentSplitTransactionPostCommandFactory::make(PaymentSplitRequestFactory::make($request))->getResult();
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
