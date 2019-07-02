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
    public function getPayment();

    public function getPaymentProofOfSale();

    public function getPaymentAcquirerTransactionId();

    public function getPaymentAuthorizationCode();

    public function getPaymentPaymentId();

    public function getPaymentReceivedDate();

    public function getPaymentCapturedDate();

    public function getPaymentStatus();

    public function getPaymentAuthenticate();

    public function getPaymentReasonCode();

    public function getPaymentReasonMessage();

    public function getPaymentProviderReturnCode();

    public function getPaymentProviderReturnMessage();

    public function getPaymentLinks();

    public function getPaymentFraudAnalysis();

    public function getPaymentCardToken();

    public function getPaymentCardNumberEncrypted();

    public function getPaymentCardBrand();

    public function getAuthenticationUrl();

    public function getPaymentCardProvider();

    public function getVelocityAnalysis();

    public function getAvs();
}
