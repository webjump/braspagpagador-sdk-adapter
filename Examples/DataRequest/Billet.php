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


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface;

class Billet implements RequestInterface
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
        return 15700;
    }

    public function getPaymentProvider()
    {
        return 'Simulado';
    }

    public function getPaymentAddress()
    {
        return 'Rua Teste';
    }

    public function getPaymentBoletoNumber()
    {
        return '2016060901';
    }

    public function getPaymentAssignor()
    {
        return 'Empresa Teste';
    }

    public function getPaymentDemonstrative()
    {
        return 'Desmonstrative Teste';
    }

    public function getPaymentExpirationDate()
    {
        return '2016-10-30';
    }

    public function getPaymentIdentification()
    {
        return '11884926754';
    }
    public function getPaymentInstructions()
    {
        return 'Aceitar somente até a data de vencimento, após essa data juros de 1% dia.';
    }
}
