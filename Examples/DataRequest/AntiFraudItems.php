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


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\Items\RequestInterface;

class AntiFraudItems implements RequestInterface
{
    public function getGiftCategory()
    {
    }

    public function getHostHedge()
    {
    }

    public function getNonSensicalHedge()
    {
    }

    public function getObscenitiesHedge()
    {
    }

    public function getPhoneHedge()

    {
    }

    public function getName()
    {
        return 'Aim Analog Watch';
    }

    public function getQuantity()
    {
        return 3;
    }

    public function getSku()
    {
        return '24-MG04';
    }

    public function getUnitPrice()
    {
        return '45';
    }

    public function getRisk()
    {
    }

    public function getTimeHedge()
    {
    }

    public function getType()
    {
    }

    public function getVelocityHedge()
    {
    }

    public function getPassengerEmail()
    {
        return 'leandro@mailinator.com';
    }

    public function getPassengerIdentity()
    {
        return '41430366818';
    }

    public function getPassengerName()
    {
        return 'Leandro Rosa';
    }

    public function getPassengerRating()
    {
    }

    public function getPassengerPhone()
    {
    }

    public function getPassengerStatus()
    {
    }
}
