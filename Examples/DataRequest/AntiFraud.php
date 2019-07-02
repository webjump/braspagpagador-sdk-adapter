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


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\RequestInterface;

class AntiFraud implements RequestInterface
{

    public function getSequence()
    {
        return 'AnalyseFirst';
    }

    public function getSequenceCriteria()
    {
        return 'OnSuccess';
    }

    public function getFingerPrintId()
    {
        return '074c1ee676ed4998ab66491013c565e2';
    }

    public function getCaptureOnLowRisk()
    {
    }

    public function getVoidOnHighRisk()
    {
    }

    public function getBrowserCookiesAccepted()
    {
    }

    public function getBrowserEmail()
    {
    }

    public function getBrowserHostName()
    {
    }

    public function getBrowserIpAddress()
    {
        return '200.190.150.350';
    }

    public function getBrowserType()
    {
    }

    public function getCartIsGift()
    {
    }

    public function getCartReturnsAccepted()
    {
    }

    public function getCartItems()
    {
        return [
            new AntiFraudItems()
        ];
    }

    public function getMerchantDefinedFields()
    {
        return new GeneralMDD();
    }

    public function getCartShippingAddressee()
    {
    }

    public function getCartShippingMethod()
    {
    }

    public function getCartShippingPhone()
    {
        return '5511952224546';
    }
}
