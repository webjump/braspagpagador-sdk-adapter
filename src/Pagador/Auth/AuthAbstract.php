<?php

namespace Webjump\Braspag\Pagador\Auth;


abstract class AuthAbstract
{
    protected $merchantId;
    protected $merchantKey;
    protected $data;

    abstract function prepareAuth();

    /**
     * @param \stdClass $data
     */
    public function __construct(\stdClass $data)
    {
        $this->data = $data;
        $this->prepareAuth();
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @return string
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }
}
