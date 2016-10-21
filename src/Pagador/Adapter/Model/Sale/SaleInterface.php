<?php

namespace Webjump\Braspag\Pagador\Adapter\Model\Sale;


interface SaleInterface
{
    public function toArray();

    public function isValid();

    public function getPayment();

    public function getCustomer();

    public function getMessages();
}
