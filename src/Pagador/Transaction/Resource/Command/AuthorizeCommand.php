<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Command;


use Webjump\Braspag\Factories\SaleFactory;
use Webjump\Braspag\Factories\ApiServiceFactory;

class AuthorizeCommand extends CommandAbstract
{
    /**
     * @return $this
     */
    protected function execute()
    {
        $sale = SaleFactory::make($this->request->getParams());

        $credentials = [
            'merchantId' => $this->request->getData()->getMerchantId(),
            'merchantKey' => $this->request->getData()->getMerchantKey(),
        ];

        $service = ApiServiceFactory::make($credentials);
        $this->result = $service->authorize($sale);
        return $this;
    }
}
