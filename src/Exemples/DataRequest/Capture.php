<?php

namespace Webjump\Braspag\Exemples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture\RequestInterface;

class Capture implements RequestInterface
{
    public function getMerchantId()
    {
//        return 'BC5D3432-527F-40C6-84BF-C549285536BE';
        return '3c9afd87-adb5-4264-a9c2-73fe61df779a';
    }

    public function getMerchantKey()
    {
//        return 'WEEzLFrBegE1d4RoTjhWIxZHR0Eu1Jyf3ZXVGAaq';
        return 'UJITPIATNINTONQFHRYRLTHLCEGHHLHJWIZBLUZV';
    }

    public function getPaymentId()
    {
        return '5eef0322-4ee2-4fa4-b137-9b7ff93d2293';
    }

    public function getCaptureRequest()
    {
        return [
            'amount' => 100,
            'serviceTaxAmount' => 100
        ];
    }

}
