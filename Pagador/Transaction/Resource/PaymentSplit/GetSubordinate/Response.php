<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\GetSubordinate;

use Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\GetSubordinate\ResponseInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\ResponseAbstract;

/**
 * Class Response
 * @package Webjump\Braspag\Pagador\Transaction\Resource\PaymentSplit\GetSubordinate
 */
class Response extends ResponseAbstract implements ResponseInterface
{
    /**
     * @return bool
     */
    public function getMasterMerchantId()
    {
        if (! isset($this->response['MasterMerchantId'])) {
            return false;
        }
        return $this->response['MasterMerchantId'];
    }

    /**
     * @return bool
     */
    public function getMerchantId()
    {
        if (! isset($this->response['MerchantId'])) {
            return false;
        }
        return $this->response['MerchantId'];
    }

    /**
     * @return bool
     */
    public function getBlocked()
    {
        if (! isset($this->response['Blocked'])) {
            return false;
        }
        return $this->response['Blocked'];
    }

    /**
     * @return bool
     */
    public function getAnalysis()
    {
        if (! isset($this->response['Analysis'])) {
            return false;
        }
        return $this->response['Analysis'];
    }

    /**
     * @return bool
     */
    public function getAnalysisStatus()
    {
        if (! isset($this->response['Analysis']['Status'])) {
            return false;
        }
        return $this->response['Analysis']['Status'];
    }

    /**
     * @return bool
     */
    public function getMerchantType()
    {
        if (! isset($this->response['MerchantType'])) {
            return false;
        }
        return $this->response['MerchantType'];
    }

    /**
     * @return bool
     */
    public function getContactName()
    {
        if (! isset($this->response['ContactName'])) {
            return false;
        }
        return $this->response['ContactName'];
    }

    /**
     * @return bool
     */
    public function getContactPhone()
    {
        if (! isset($this->response['ContactPhone'])) {
            return false;
        }
        return $this->response['ContactPhone'];
    }

    /**
     * @return bool
     */
    public function getCorporateName()
    {
        if (! isset($this->response['CorporateName'])) {
            return false;
        }
        return $this->response['CorporateName'];
    }

    /**
     * @return bool
     */
    public function getDocumentNumber()
    {
        if (! isset($this->response['DocumentNumber'])) {
            return false;
        }
        return $this->response['DocumentNumber'];
    }

    /**
     * @return bool
     */
    public function getDocumentType()
    {
        if (! isset($this->response['DocumentType'])) {
            return false;
        }
        return $this->response['DocumentType'];
    }

    /**
     * @return bool
     */
    public function getBirthdayDate()
    {
        if (! isset($this->response['BirthdayDate'])) {
            return false;
        }
        return $this->response['BirthdayDate'];
    }

    /**
     * @return bool
     */
    public function getFancyName()
    {
        if (! isset($this->response['FancyName'])) {
            return false;
        }
        return $this->response['FancyName'];
    }

    /**
     * @return bool
     */
    public function getMerchantCategoryCode()
    {
        if (! isset($this->response['MerchantCategoryCode'])) {
            return false;
        }
        return $this->response['MerchantCategoryCode'];
    }

    /**
     * @return bool
     */
    public function getWebsite()
    {
        if (! isset($this->response['Website'])) {
            return false;
        }
        return $this->response['Website'];
    }

    /**
     * @return bool
     */
    public function getMailAddress()
    {
        if (! isset($this->response['MailAddress'])) {
            return false;
        }
        return $this->response['MailAddress'];
    }

    /**
     * @return bool
     */
    public function getHolder()
    {
        if (! isset($this->response['Holder'])) {
            return false;
        }
        return $this->response['Holder'];
    }

    /**
     * @return bool
     */
    public function getAddress()
    {
        if (! isset($this->response['Address'])) {
            return false;
        }
        return $this->response['Address'];
    }

    /**
     * @return bool
     */
    public function getAddressStreet()
    {
        if (! isset($this->response['Address']['Street'])) {
            return false;
        }
        return $this->response['Address']['Street'];
    }

    /**
     * @return bool
     */
    public function getAddressNumber()
    {
        if (! isset($this->response['Address']['Number'])) {
            return false;
        }
        return $this->response['Address']['Number'];
    }

    /**
     * @return bool
     */
    public function getAddressComplement()
    {
        if (! isset($this->response['Address']['Complement'])) {
            return false;
        }
        return $this->response['Address']['Complement'];
    }

    /**
     * @return bool
     */
    public function getAddressNeighborhood()
    {
        if (! isset($this->response['Address']['Neighborhood'])) {
            return false;
        }
        return $this->response['Address']['Neighborhood'];
    }

    /**
     * @return bool
     */
    public function getAddressCity()
    {
        if (! isset($this->response['Address']['City'])) {
            return false;
        }
        return $this->response['Address']['City'];
    }

    /**
     * @return bool
     */
    public function getAddressState()
    {
        if (! isset($this->response['Address']['State'])) {
            return false;
        }
        return $this->response['Address']['State'];
    }

    /**
     * @return bool
     */
    public function getAddressZipCode()
    {
        if (! isset($this->response['Address']['ZipCode'])) {
            return false;
        }
        return $this->response['Address']['ZipCode'];
    }

    /**
     * @return bool
     */
    public function getBankAccount()
    {
        if (! isset($this->response['BankAccount'])) {
            return false;
        }
        return $this->response['BankAccount'];
    }

    /**
     * @return bool
     */
    public function getBankAccountBank()
    {
        if (! isset($this->response['BankAccount']['Bank'])) {
            return false;
        }
        return $this->response['BankAccount']['Bank'];
    }

    /**
     * @return bool
     */
    public function getBankAccountBankAccountType()
    {
        if (! isset($this->response['BankAccount']['BankAccountType'])) {
            return false;
        }
        return $this->response['BankAccount']['BankAccountType'];
    }

    /**
     * @return bool
     */
    public function getBankAccountNumber()
    {
        if (! isset($this->response['BankAccount']['Number'])) {
            return false;
        }
        return $this->response['BankAccount']['Number'];
    }

    /**
     * @return bool
     */
    public function getBankAccountVerifierDigit()
    {
        if (! isset($this->response['BankAccount']['VerifierDigit'])) {
            return false;
        }
        return $this->response['BankAccount']['VerifierDigit'];
    }

    /**
     * @return bool
     */
    public function getBankAccountAgencyDigit()
    {
        if (! isset($this->response['BankAccount']['AgencyDigit'])) {
            return false;
        }
        return $this->response['BankAccount']['AgencyDigit'];
    }

    /**
     * @return bool
     */
    public function getBankAccountOperation()
    {
        if (! isset($this->response['BankAccount']['Operation'])) {
            return false;
        }
        return $this->response['BankAccount']['Operation'];
    }

    /**
     * @return bool
     */
    public function getBankAccountAgencyNumber()
    {
        if (! isset($this->response['BankAccount']['AgencyNumber'])) {
            return false;
        }
        return $this->response['BankAccount']['AgencyNumber'];
    }

    /**
     * @return bool
     */
    public function getBankAccountDocumentNumber()
    {
        if (! isset($this->response['BankAccount']['DocumentNumber'])) {
            return false;
        }
        return $this->response['BankAccount']['DocumentNumber'];
    }

    /**
     * @return bool
     */
    public function getBankAccountDocumentType()
    {
        if (! isset($this->response['BankAccount']['DocumentType'])) {
            return false;
        }
        return $this->response['BankAccount']['DocumentType'];
    }

    /**
     * @return bool
     */
    public function getAgreement()
    {
        if (! isset($this->response['Agreement'])) {
            return false;
        }
        return $this->response['Agreement'];
    }

    /**
     * @return bool
     */
    public function getAgreementFee()
    {
        if (! isset($this->response['Agreement']['Fee'])) {
            return false;
        }
        return $this->response['Agreement']['Fee'];
    }

    /**
     * @return bool
     */
    public function getAgreementAntiFraudFee()
    {
        if (! isset($this->response['Agreement']['AntiFraudFee'])) {
            return false;
        }
        return $this->response['Agreement']['AntiFraudFee'];
    }

    /**
     * @return bool
     */
    public function getAgreementAntiFraudFeeWithReview()
    {
        if (! isset($this->response['Agreement']['AntiFraudFeeWithReview'])) {
            return false;
        }
        return $this->response['Agreement']['AntiFraudFeeWithReview'];
    }

    /**
     * @return bool
     */
    public function getAgreementMerchantDiscountRates()
    {
        if (! isset($this->response['Agreement']['MerchantDiscountRates'])) {
            return false;
        }
        return $this->response['Agreement']['MerchantDiscountRates'];
    }

    /**
     * @return bool
     */
    public function getStatusCode()
    {
        if (! isset($this->response['statusCode'])) {
            return false;
        }
        return $this->response['statusCode'];
    }

    /**
     * @return bool
     */
    public function getErrorData()
    {
        if (! isset($this->response['errorData'])) {
            return false;
        }
        return $this->response['errorData'];
    }
}
