<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\CreditCard\AntiFraud;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

class Response extends ResponseAbstract implements ResponseInterface
{
     public function getId()
     {
         if (! isset($this->response['Id'])) {
             return false;
         }
         return $this->response['Id'];
     }

    public function getStatus()
    {
        if (! isset($this->response['Status'])) {
            return false;
        }
        return $this->response['Status'];
    }

    public function getCaptureOnLowRisk()
    {
        if (! isset($this->response['CaptureOnLowRisk'])) {
            return false;
        }
        return $this->response['CaptureOnLowRisk'];
    }

    public function getVoidOnHighRisk()
    {
        if (! isset($this->response['VoidOnHighRisk'])) {
            return false;
        }
        return $this->response['VoidOnHighRisk'];
    }

    public function getFraudAnalysisReasonCode()
    {
        if (! isset($this->response['FraudAnalysisReasonCode'])) {
            return false;
        }
        return $this->response['FraudAnalysisReasonCode'];
    }

    public function getReplyDataAddressInfoCode()
    {
        if (! isset($this->response['ReplyData']['AddressInfoCode'])) {
            return false;
        }
        return $this->response['ReplyData']['AddressInfoCode'];
    }

    public function getReplyDataFactorCode()
    {
        if (! isset($this->response['ReplyData']['FactorCode'])) {
            return false;
        }
        return $this->response['ReplyData']['FactorCode'];
    }

    public function getReplyDataScore()
    {
        if (! isset($this->response['ReplyData']['Score'])) {
            return false;
        }
        return $this->response['ReplyData']['Score'];
    }

    public function getReplyDataBinCountry()
    {
        if (! isset($this->response['ReplyData']['BinCountry'])) {
            return false;
        }
        return $this->response['ReplyData']['BinCountry'];
    }

    public function getReplyDataCardIssuer()
    {
        if (! isset($this->response['ReplyData']['CardIssuer'])) {
            return false;
        }
        return $this->response['ReplyData']['CardIssuer'];
    }

    public function getReplyDataCardScheme()
    {
        if (! isset($this->response['ReplyData']['CardScheme'])) {
            return false;
        }
        return $this->response['ReplyData']['CardScheme'];
    }

    public function getReplyDataHostSeverity()
    {
        if (! isset($this->response['ReplyData']['HostSeverity'])) {
            return false;
        }
        return $this->response['ReplyData']['HostSeverity'];
    }

    public function getReplyDataInternetInfoCode()
    {
        if (! isset($this->response['ReplyData']['InternetInfoCode'])) {
            return false;
        }
        return $this->response['ReplyData']['InternetInfoCode'];
    }

    public function getReplyDataIpRoutingMethod()
    {
        if (! isset($this->response['ReplyData']['IpRoutingMethod'])) {
            return false;
        }
        return $this->response['ReplyData']['IpRoutingMethod'];
    }

    public function getReplyDataScoreModelUsed()
    {
        if (! isset($this->response['ReplyData']['ScoreModelUsed'])) {
            return false;
        }
        return $this->response['ReplyData']['ScoreModelUsed'];
    }

    public function getReplyDataCasePriority()
    {
        if (! isset($this->response['ReplyData']['CasePriority'])) {
            return false;
        }
        return $this->response['ReplyData']['CasePriority'];
    }
}
