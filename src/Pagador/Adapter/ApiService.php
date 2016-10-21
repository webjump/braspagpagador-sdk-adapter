<?php

namespace Webjump\Braspag\Pagador\Adapter;


use Braspag\ApiService as ApiServiceAdapter;
use Webjump\Braspag\Pagador\Auth\AuthAbstract;

class ApiService extends ApiServiceAdapter implements ApiServiceInterface
{
    public function __construct(AuthAbstract $auth)
    {
        parent::__construct([
            'merchantId' => $auth->getMerchantId(),
            'merchantKey' => $auth->getMerchantKey(),
        ]);
    }
}
