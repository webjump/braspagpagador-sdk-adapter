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


use Webjump\Braspag\Pagador\Transaction\Api\AuthRequestInterface;

interface RequestInterface extends AuthRequestInterface
{
    const PAYMENT_TYPE = 'Boleto';
    
    public function getMerchantOrderId();

    public function getCustomerName();

    public function getCustomerIdentity();

    public function getCustomerIdentityType();

    public function getCustomerEmail();

    public function getCustomerBirthDate();

    public function getCustomerAddressStreet();

    public function getCustomerAddressNumber();

    public function getCustomerAddressComplement();

    public function getCustomerAddressDistrict();

    public function getCustomerAddressZipCode();

    public function getCustomerAddressCity();

    public function getCustomerAddressState();

    public function getCustomerAddressCountry();

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
