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
use Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\AntiFraud\Response as CreditCardAntiFraudResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Actions\Response as ActionsCardResponse;
use Webjump\Braspag\Pagador\Transaction\Resource\Debit\Send\Response as DebitCardResponse;

class ResponseFactory
{
    const CLASS_TYPE_BILLET = 'billet';
    const CLASS_TYPE_CREDIT_CARD = 'creditCard';
    const CLASS_TYPE_ACTIONS = 'actions';
    const CLASS_TYPE_DEBIT_CARD = 'debitCard';
    const CLASS_TYPE_CREDIT_CART_ANTI_FRAUD = 'antiFraud';

    /**
     * /**
     * @param array $data
     * @param $type
     * @return ActionsCardResponse|BilletResponse|CreditCardResponse|DebitCardResponse
     */
    public static function make(array $data, $type)
    {
        if ($type === self::CLASS_TYPE_BILLET) {
            return new BilletResponse($data);
        }

        if ($type === self::CLASS_TYPE_CREDIT_CARD) {
            return new CreditCardResponse($data);
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
    }
}
