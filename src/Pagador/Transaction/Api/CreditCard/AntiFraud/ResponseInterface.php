<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud;


interface ResponseInterface
{
    public function getId();

    public function getStatus();

    public function getCaptureOnLowRisk();

    public function getVoidOnHighRisk();

    public function getFraudAnalysisReasonCode();

    public function getReplyDataAddressInfoCode();

    public function getReplyDataFactorCode();

    public function getReplyDataScore();

    public function getReplyDataBinCountry();

    public function getReplyDataCardIssuer();

    public function getReplyDataCardScheme();

    public function getReplyDataHostSeverity();

    public function getReplyDataInternetInfoCode();

    public function getReplyDataIpRoutingMethod();

    public function getReplyDataScoreModelUsed();

    public function getReplyDataCasePriority();
}
