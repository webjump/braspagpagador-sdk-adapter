<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\PaymentSplit\CreateSubordinate;

interface RequestInterface
{
    /**
     * @return mixed
     */
    public function getSubordinateCorporateName();

    /**
     * @param mixed $subordinateCorporateName
     */
    public function setSubordinateCorporateName($subordinateCorporateName);

    /**
     * @return mixed
     */
    public function getSubordinateFancyName();

    /**
     * @param mixed $subordinateFancyName
     */
    public function setSubordinateFancyName($subordinateFancyName);

    /**
     * @return mixed
     */
    public function getSubordinateDocumentNumber();

    /**
     * @param mixed $subordinateDocumentNumber
     */
    public function setSubordinateDocumentNumber($subordinateDocumentNumber);

    /**
     * @return mixed
     */
    public function getSubordinateDocumentType();

    /**
     * @param mixed $subordinateDocumentType
     */
    public function setSubordinateDocumentType($subordinateDocumentType);

    /**
     * @return mixed
     */
    public function getSubordinateMerchantCategoryCode();

    /**
     * @param mixed $subordinateMerchantCategoryCode
     */
    public function setSubordinateMerchantCategoryCode($subordinateMerchantCategoryCode);

    /**
     * @return mixed
     */
    public function getSubordinateContactName();

    /**
     * @param mixed $subordinateContactName
     */
    public function setSubordinateContactName($subordinateContactName);

    /**
     * @return mixed
     */
    public function getSubordinateContactPhone();

    /**
     * @param mixed $subordinateContactPhone
     */
    public function setSubordinateContactPhone($subordinateContactPhone);

    /**
     * @return mixed
     */
    public function getSubordinateMailAddress();

    /**
     * @param mixed $subordinateMailAddress
     */
    public function setSubordinateMailAddress($subordinateMailAddress);

    /**
     * @return mixed
     */
    public function getSubordinateWebsite();

    /**
     * @param mixed $subordinateWebsite
     */
    public function setSubordinateWebsite($subordinateWebsite);

    /**
     * @return mixed
     */
    public function getBankAccountBank();

    /**
     * @param mixed $bankAccountBank
     */
    public function setBankAccountBank($bankAccountBank);

    /**
     * @return mixed
     */
    public function getBankAccountType();

    /**
     * @param mixed $bankAccountType
     */
    public function setBankAccountType($bankAccountType);

    /**
     * @return mixed
     */
    public function getBankAccountNumber();

    /**
     * @param mixed $bankAccountNumber
     */
    public function setBankAccountNumber($bankAccountNumber);

    /**
     * @return mixed
     */
    public function getBankAccountOperation();

    /**
     * @param mixed $bankAccountOperation
     */
    public function setBankAccountOperation($bankAccountOperation);

    /**
     * @return mixed
     */
    public function getBankAccountVerifierDigit();

    /**
     * @param mixed $bankAccountVerifierDigit
     */
    public function setBankAccountVerifierDigit($bankAccountVerifierDigit);

    /**
     * @return mixed
     */
    public function getBankAccountAgencyNumber();

    /**
     * @param mixed $bankAccountAgencyNumber
     */
    public function setBankAccountAgencyNumber($bankAccountAgencyNumber);

    /**
     * @return mixed
     */
    public function getBankAccountAgencyDigit();

    /**
     * @param mixed $bankAccountAgencyDigit
     */
    public function setBankAccountAgencyDigit($bankAccountAgencyDigit);

    /**
     * @return mixed
     */
    public function getBankAccountDocumentNumber();

    /**
     * @param mixed $bankAccountDocumentNumber
     */
    public function setBankAccountDocumentNumber($bankAccountDocumentNumber);

    /**
     * @return mixed
     */
    public function getBankAccountDocumentType();

    /**
     * @param mixed $bankAccountDocumentType
     */
    public function setBankAccountDocumentType($bankAccountDocumentType);

    /**
     * @return mixed
     */
    public function getAddressStreet();

    /**
     * @param mixed $addressStreet
     */
    public function setAddressStreet($addressStreet);

    /**
     * @return mixed
     */
    public function getAddressNumber();

    /**
     * @param mixed $addressNumber
     */
    public function setAddressNumber($addressNumber);

    /**
     * @return mixed
     */
    public function getAddressComplement();

    /**
     * @param mixed $addressComplement
     */
    public function setAddressComplement($addressComplement);

    /**
     * @return mixed
     */
    public function getAddressNeighborhood();

    /**
     * @param mixed $addressNeighborhood
     */
    public function setAddressNeighborhood($addressNeighborhood);

    /**
     * @return mixed
     */
    public function getAddressCity();

    /**
     * @param mixed $addressCity
     */
    public function setAddressCity($addressCity);

    /**
     * @return mixed
     */
    public function getAddressState();

    /**
     * @param mixed $addressState
     */
    public function setAddressState($addressState);

    /**
     * @return mixed
     */
    public function getAddressZipCode();

    /**
     * @param mixed $addressZipCode
     */
    public function setAddressZipCode($addressZipCode);

    /**
     * @return mixed
     */
    public function getAttachmentProofOfBankDomicile();

    /**
     * @param mixed $attachmentProofOfBankDomicile
     */
    public function setAttachmentProofOfBankDomicile($attachmentProofOfBankDomicile);

    /**
     * @return mixed
     */
    public function getAttachmentModelOfAdhesionTerm();

    /**
     * @param mixed $attachmentModelOfAdhesionTerm
     */
    public function setAttachmentModelOfAdhesionTerm($attachmentModelOfAdhesionTerm);
    /**
     * @return mixed
     */
    public function getPaymentSplitMdrMultipleData();

    /**
     * @param $paymentSplitMdrMultipleData
     * @return mixed
     */
    public function setPaymentSplitMdrMultipleData($paymentSplitMdrMultipleData);
}
