<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\Billet\Send;


interface RequestInterface
{
    public function getMerchantId();

    public function getMerchantKey();

    public function getMerchantOrderId();

    public function getCustomerName();

    public function getPaymentType();

    public function getPaymentAmount();

    public function getPaymentProvider();

    public function getPaymentAddress();

    public function getPaymentBoletoNumber();

    public function getPaymentAssignor();

    public function getPaymentDemonstrative();

    public function getPaymentExpirationDate();

    public function getPaymentIdentification();

    public function getPaymentInstructions();
}
