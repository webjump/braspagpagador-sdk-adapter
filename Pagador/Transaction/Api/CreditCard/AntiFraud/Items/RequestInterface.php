<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\Items;


interface RequestInterface
{
    public function getGiftCategory();

    public function getHostHedge();

    public function getNonSensicalHedge();

    public function getObscenitiesHedge();

    public function getPhoneHedge();

    public function getName();

    public function getQuantity();

    public function getSku();

    public function getUnitPrice();

    public function getRisk();

    public function getTimeHedge();

    public function getType();

    public function getVelocityHedge();

    public function getPassengerEmail();

    public function getPassengerIdentity();

    public function getPassengerName();

    public function getPassengerRating();

    public function getPassengerPhone();

    public function getPassengerStatus();
}
