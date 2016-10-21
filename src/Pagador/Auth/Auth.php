<?php

namespace Webjump\Braspag\Pagador\Auth;


class Auth extends AuthAbstract
{
    public function prepareAuth()
    {
        $this->merchantId = $this->data->merchantId;
        $this->merchantKey = $this->data->merchantKey;
    }
}
