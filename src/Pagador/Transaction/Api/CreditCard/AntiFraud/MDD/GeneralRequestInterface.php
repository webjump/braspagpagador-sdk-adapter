<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\MDD;


interface GeneralRequestInterface
{
    const MDD_KEY_CUSTOMER_IS_LOGGED = 6;
    const MDD_KEY_CUSTOMER_SINCE_DAYS = 7;
    const MDD_KEY_QTY_INSTALLMENTS_ORDER = 8;
    const MDD_KEY_SALES_ORDER_CHANNEL = 9;
    const MDD_KEY_COUPON_CODE = 10;
    const MDD_KEY_LAST_ORDER_DATE = 11;
    const MDD_KEY_QTY_TRY_ORDER = 13;
    const MDD_KEY_CUSTOMER_FETCH_SELF = 14;
    const MDD_KEY_VERTICAL_SEGMENT = 30;
    const MDD_KEY_CREDIT_CARD_BIN = 31;
    const MDD_KEY_QTY_TRY_CREDIT_CARD_NUMBER = 36;
    const MDD_KEY_EMAIL_FILL_TYPE = 37;
    const MDD_KEY_CREDIT_CARD_NUMBER_FILL_TYPE = 38;
    const MDD_KEY_CONFIRM_EMAIL_ADDRESS = 39;
    const MDD_KEY_HAS_GIFT_CARD = 41;

    public function getCustomerIsLogged();

    public function getCustomerSinceDays();

    public function getQtyInstallmentsOrder();

    public function getSalesOrderChannel();

    public function getCouponCode();

    public function getLastOrderDate();

    public function getQtyTryOrder();

    public function getCustomerFetchSelf();

    public function getVerticalSegment();

    public function getCreditCardBin();

    public function getQtyTryCreditCardNumber();

    public function getEmailFillType();

    public function getCreditCardNumberFillType();

    public function getConfirmEmailAddress();

    public function getHasGiftCard();
}
