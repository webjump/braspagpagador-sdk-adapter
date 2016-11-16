<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send;


interface ResponseInterface
{
    public function getPaymentProofOfSale();

    public function getPaymentAcquirerTransactionId();

    public function getPaymentAuthorizationCode();

    public function getPaymentPaymentId();

    public function getPaymentReceivedDate();

    public function getPaymentCapturedDate();

    public function getPaymentStatus();

    public function getPaymentProviderReturnCode();

    public function getPaymentProviderReturnMessage();

    public function getPaymentLinks();

    public function getPaymentFraudAnalysis();

    public function getPaymentCardToken();

    public function getPaymentCardNumberEncrypted();
}
