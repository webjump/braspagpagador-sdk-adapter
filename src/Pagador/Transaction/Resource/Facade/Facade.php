<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Facade;


use Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\RequestInterface as BilletRequest;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Send\RequestInterface as CreditCardRequest;
use Webjump\Braspag\Factories\CreditCadRequestFactory;
use Webjump\Braspag\Factories\SaleFactory;
use Webjump\Braspag\Factories\ApiServiceFactory;
use Webjump\Braspag\Factories\BilletRequestFactory;

class Facade implements FacadeInterface
{
    /**
     * @param BilletRequest $request
     */
    public function sendBillet(BilletRequest $request)
    {
        $data = BilletRequestFactory::make($request);
        $sale = SaleFactory::make($data->getParams());

        $credentials = [
            'merchantId' => $request->getMerchantId(),
            'merchantKey' => $request->getMerchantKey(),
        ];

        $service = ApiServiceFactory::make($credentials);
        $result = $service->authorize($sale);

        if (! $result->isValid()) {
            return $result->getMessages();
        }

        return $result->toArray();
    }

    /**
     * @param CreditCardRequest $request
     */
    public function sendCreditCard(CreditCardRequest $request)
    {
        $data = CreditCadRequestFactory::make($request);
        $sale = SaleFactory::make($data->getParams());

        $credentials = [
            'merchantId' => $request->getMerchantId(),
            'merchantKey' => $request->getMerchantKey(),
        ];

        $service = ApiServiceFactory::make($credentials);
        $result = $service->authorize($sale);

        if (! $result->isValid()) {
            var_dump($result->getMessages());
            die();
        }

        var_dump($result->toArray());
    }
}
