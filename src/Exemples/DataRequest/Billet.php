<?php

namespace Webjump\Braspag\Exemples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface;

class Billet implements RequestInterface
{
    public function getMerchantId()
    {
        return '3c9afd87-adb5-4264-a9c2-73fe61df779a';
    }

    public function getMerchantKey()
    {
        return 'UJITPIATNINTONQFHRYRLTHLCEGHHLHJWIZBLUZV';
    }

    public function getMerchantOrderId()
    {
        return '2016060901';
    }

    public function getCustomerName()
    {
        return 'Comprador de Testes';
    }

    public function getPaymentType()
    {
        return 'Boleto';
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
