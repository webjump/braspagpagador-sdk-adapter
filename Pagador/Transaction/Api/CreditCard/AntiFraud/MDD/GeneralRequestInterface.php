<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\AntiFraud\MDD;


interface GeneralRequestInterface
{
    const MDD_KEY_CUSTOMER_NAME = 6;
    const MDD_KEY_CUSTOMER_IS_LOGGED = 7;
    const MDD_KEY_PURCHASE_BY_THIRD = 8;
    const MDD_KEY_SALES_ORDER_CHANNEL = 9;
    const MDD_KEY_PRODUCT_CATEGORY = 10;
    const MDD_KEY_SHIPPING_METHOD = 12;
    const MDD_KEY_CUSTOMER_FETCH_SELF = 14;
    const MDD_KEY_STORE_CODE = 15;
    const MDD_KEY_COUPON_CODE = 17;
    const MDD_KEY_HAS_GIFT_CARD = 18;
    const MDD_KEY_SECOND_PAYMENT_METHOD = 19;
    const MDD_KEY_PAYMENT_METHOD_QTY = 20;
    const MDD_KEY_SHIPPING_METHOD_AMOUNT = 21;
    const MDD_KEY_SECOND_PAYMENT_METHOD_AMOUNT = 22;
    const MDD_KEY_SALES_ORDER_AMOUNT = 23;
    const MDD_KEY_QTY_INSTALLMENTS_ORDER = 24;
    const MDD_KEY_CREDIT_CARD_IS_PRIVATE_LABEL = 25;
    const MDD_KEY_CUSTOMER_IDENTITY = 26;
    const MDD_KEY_CUSTOMER_TELEPHONE = 27;
    const MDD_KEY_STORE_IDENTITY = 28;
    const MDD_KEY_PROVIDER = 29;
    const MDD_KEY_CUSTOMER_IS_RISK = 30;
    const MDD_KEY_CUSTOMER_IS_VIP = 31;

    public function getCustomerName();

    public function getCustomerIsLogged();

    public function getPurchaseByThird();

    public function getSalesOrderChannel();

    public function getProductCategory();

    public function getShippingMethod();

    public function getCustomerFetchSelf();

    public function getStoreCode();

    public function getCouponCode();

    public function getHasGiftCard();

    public function getSecondPaymentMethod();

    public function getPaymentMethodQTY();

    public function getShippingMethodAmount();

    public function getSecondPaymentMethodAmount();

    public function getSalesOrderAmount();

    public function getQtyInstallmentsOrder();

    public function getCreditCardIsPrivateLabel();

    public function getCustomerIdentity();

    public function getCustomerTelephone();

    public function getStoreIdentity();

    public function getProvider();

    public function getCustomerIsRisk();

    public function getCustomerIsVIP();
}
