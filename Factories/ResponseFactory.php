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

use Webjump\Braspag\Pagador\Transaction\Resource\Boleto\Send\Response as BoletoResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Send\Response as CreditCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\AntiFraud\Response as CreditCardAntiFraudResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Velocity\Response as CreditCardVelocityResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Avs\Response as CreditCardVAvsResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\Velocity\Reasons\Response as CreditCardVelocityReasonsResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Actions\Response as ActionsCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Auth3Ds20\Token\Response as Auth3Ds20TokenResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\OAuth2\Token\Response as OAuth2TokenResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\DebitCard\Send\Response as DebitCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\Response as PaymentSplitResponse;

class ResponseFactory
{
    const CLASS_TYPE_AUTH_TOKEN = 'auth-token';
    const CLASS_TYPE_OAUTH2_TOKEN = 'oauth2-token';
    const CLASS_TYPE_BOLETO = 'boleto';
    const CLASS_TYPE_CREDIT_CARD = 'creditCard';
    const CLASS_TYPE_ACTIONS = 'actions';
    const CLASS_TYPE_DEBIT_CARD = 'debitCard';
    const CLASS_TYPE_DEBIT_CARD_PAYMENT_SPLIT = 'debitCardPaymentSplit';
    const CLASS_TYPE_CREDIT_CART_ANTI_FRAUD = 'antiFraud';
    const CLASS_TYPE_CREDIT_CART_PAYMENT_SPLIT = 'paymentSplit';
    const CLASS_TYPE_CREDIT_CART_VELOCITY = 'velocity';
    const CLASS_TYPE_CREDIT_CART_VELOCITY_REASONS = 'velocityReasons';
    const CLASS_TYPE_CREDIT_CART_AVS = 'avs';
    const CLASS_TYPE_BOLETO_PAYMENT_SPLIT = 'boletoPaymentSplit';

    public static function make(array $data, $type)
    {
        if ($type === self::CLASS_TYPE_BOLETO) {
            return new BoletoResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CARD) {
            return new CreditCardResponse($data);
        }

        if ($type === self::CLASS_TYPE_AUTH_TOKEN) {
            return new Auth3Ds20TokenResponse($data);
        }

        if ($type === self::CLASS_TYPE_OAUTH2_TOKEN) {
            return new OAuth2TokenResponse($data);
        }

        if ($type === self::CLASS_TYPE_ACTIONS) {
            return new ActionsCardResponse($data);
        }

        if ($type === self::CLASS_TYPE_DEBIT_CARD) {
            return new DebitCardResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CART_ANTI_FRAUD) {
            return new CreditCardAntiFraudResponse($data);
        }

        if ($type === self::CLASS_TYPE_DEBIT_CARD_PAYMENT_SPLIT) {
            return new PaymentSplitResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CART_PAYMENT_SPLIT) {
            return new PaymentSplitResponse($data);
        }

        if ($type === self::CLASS_TYPE_BOLETO_PAYMENT_SPLIT) {
            return new PaymentSplitResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CART_VELOCITY) {
            return new CreditCardVelocityResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CART_VELOCITY_REASONS) {
            return new CreditCardVelocityReasonsResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CART_AVS) {
            return new CreditCardVAvsResponse($data);
        }
    }
}
