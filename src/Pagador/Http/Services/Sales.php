<?php

namespace Webjump\Braspag\Pagador\Http\Services;


use Webjump\Braspag\Factories\HttpFactory;
use Webjump\Braspag\Pagador\Http\Client\Client;
use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Capture\RequestInterface;
use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

class Sales extends ServiceAbstract implements ServiceInterface
{
    protected $endPoint = '/sales/';

    /**
     * @param RequestInterface $request
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function capture(RequestInterface $request)
    {
        $uri = $this->getServiceUri() . \sprintf('%s/capture', $request->getPaymentId());

        if ($request->getCaptureRequest()) {
//            $uri .= '?' . \http_build_query($request->getCaptureRequest());
        }

        try {
            $response = HttpFactory::make()->request('PUT', $uri, [
                'headers' => [
                    'Content-Type' => RequestAbstract::CONTENT_TYPE_APPLICATION_JSON,
                    'MerchantId' => $request->getMerchantId(),
                    'MerchantKey' => $request->getMerchantKey()
                ]
            ]);

        } catch (\Exception $e) {
            exit($e->getMessage());
        }

        return $response;
    }

    /**
     * @return string
     */
    public function getServiceUri()
    {
        return Client::API_URI . $this->endPoint;
    }
}
