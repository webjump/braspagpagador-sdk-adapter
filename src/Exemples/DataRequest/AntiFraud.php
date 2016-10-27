<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */

namespace Webjump\Braspag\Exemples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\RequestInterface;

class AntiFraud implements RequestInterface
{

    public function getSequence()
    {
        return 'AnalyseFirst';
    }

    public function getSequenceCriteria()
    {
        return 'Always';
    }

    public function getFingerPrintId()
    {
        return '074c1ee676ed4998ab66491013c565e2';
    }

    public function getCaptureOnLowRisk()
    {
        return false;
    }

    public function getVoidOnHighRisk()
    {
        return false;
    }

    public function getBrowserCookiesAccepted()
    {
        return false;
    }

    public function getBrowserEmail()
    {
        return 'compradorteste@live.com';
    }

    public function getBrowserHostName()
    {
        return 'Teste';
    }

    public function getBrowserIpAddress()
    {
        return '200.190.150.350';
    }

    public function getBrowserType()
    {
        return 'Chrome';
    }

    public function getCartIsGift()
    {
        return false;
    }

    public function getCartReturnsAccepted()
    {
        return true;
    }

    public function getCartItems()
    {
        return [
            new AntiFraudItems()
        ];
    }

    public function getCartShippingAddressee()
    {
        return 'Sr Comprador Teste';
    }

    public function getCartShippingMethod()
    {
        return 'LowCost';
    }

    public function getCartShippingPhone()
    {
        return '21114740';
    }
}
