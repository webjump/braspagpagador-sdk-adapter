<?php

namespace Webjump\Braspag\Pagador\Http\Client;


use Webjump\Braspag\Factories\HttpFactory as HttpClient;
use Webjump\Braspag\Pagador\Http\Services\ServiceInterface;

class Client implements ClientInterface
{
    protected $client;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->client = HttpClient::make();
    }

    /**
     * @param ServiceInterface $service
     * @param string $method
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function request(ServiceInterface $service, $method = 'POST')
    {
        $params = $service->getRequest()->getParams();

        $headers = isset($params['headers']) ? $params['headers'] : [];
        $body = isset($params['body']) ? $params['body'] : [];
        try {
            return $this->client->request(
                $method,
                self::API_URI . $service->getEndPoint(),
                [
                    'headers' => $headers,
                    'body' => \json_encode($body)
                ]
            );
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }
}
