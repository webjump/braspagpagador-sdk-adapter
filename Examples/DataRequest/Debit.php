<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Examples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\Debit\Send\RequestInterface;

class Debit implements RequestInterface
{
    public function getMerchantId()
    {
        return Auth::MERCHANT_ID;
    }

    public function getMerchantKey()
    {
        return Auth::MERCHANT_KEY;
    }

    public function getMerchantOrderId()
    {
        return (string) rand(1000000000, 9999999999);
    }

    public function getCustomerName()
    {
        return 'Comprador de Testes';
    }

    public function getPaymentAmount()
    {
        return 100;
    }

    public function getPaymentProvider()
    {
        return 'Cielo';
    }

    public function getPaymentReturnUrl()
    {
        return 'http://www.braspag.com.br';
    }

    public function getPaymentDebitCardCardNumber()
    {
        return '1234123412341231';
    }

    public function getPaymentDebitCardHolder()
    {
        return 'Teste Holder';
    }

    public function getPaymentDebitCardExpirationDate()
    {
        return '12/2021';
    }

    public function getPaymentDebitCardSecurityCode()
    {
        return '123';
    }

    public function getPaymentDebitCardBrand()
    {
        return 'Visa';
    }
}
