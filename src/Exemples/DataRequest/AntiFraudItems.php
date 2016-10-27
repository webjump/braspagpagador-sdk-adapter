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


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\Items\RequestInterface;

class AntiFraudItems implements RequestInterface
{
    public function getGiftCategory()
    {
        return 'Undefined';
    }

    public function getHostHedge()
    {
        return 'Off';
    }

    public function getNonSensicalHedge()

    {
        return 'Off';
    }

    public function getObscenitiesHedge()
    {
        return 'Off';
    }

    public function getPhoneHedge()

    {
        return 'Off';
    }

    public function getName()
    {
        return 'ItemTeste';
    }

    public function getQuantity()
    {
        return 1;
    }

    public function getSku()
    {
        return '201411170235134521346';
    }

    public function getUnitPrice()
    {
        return '123';
    }

    public function getRisk()
    {
        return 'High';
    }

    public function getTimeHedge()
    {
        return 'Normal';
    }

    public function getType()
    {
        return 'AdultContent';
    }

    public function getVelocityHedge()
    {
        return 'High';
    }

    public function getPassengerEmail()
    {
        return 'compradorteste@live.com';
    }

    public function getPassengerIdentity()
    {
        return '1234567890';
    }

    public function getPassengerName()
    {
        return 'Comprador accept';
    }

    public function getPassengerRating()
    {
        return 'Adult';
    }

    public function getPassengerPhone()
    {
        return '999994444';
    }

    public function getPassengerStatus()
    {
        return 'Accepted';
    }
}
