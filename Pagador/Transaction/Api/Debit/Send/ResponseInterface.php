<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\Debit\Send;


interface ResponseInterface
{
    public function getPaymentAuthenticationUrl();

    public function getPaymentAcquirerTransactionId();

    public function getPaymentPaymentId();

    public function getPaymentReceivedDate();

    public function getPaymentReasonCode();

    public function getPaymentReasonMessage();

    public function getPaymentStatus();

    public function getPaymentAuthenticate();

    public function getPaymentProviderReturnCode();

    public function getPaymentProviderReturnMessage();

    public function getPaymentLinks();
    
    public function getPaymentCardProvider();
}
