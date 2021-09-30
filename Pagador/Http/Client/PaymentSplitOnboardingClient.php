<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Http\Client;

use Webjump\Braspag\Factories\HttpFactory as HttpClient;
use Webjump\Braspag\Pagador\Http\Services\ServiceInterface;
use Webjump\Braspag\Factories\HandlerFactory;

class PaymentSplitOnboardingClient implements ClientInterface
{
    protected $client;

    protected $handler;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->client = HttpClient::make();
        $this->handler = HandlerFactory::make();
    }

    /**
     * @param ServiceInterface $service
     * @param string $method
     * @param string $uriComplement
     * @param bool $isTestEnvironment
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(
        ServiceInterface $service,
        $method = 'POST',
        $uriComplement = '',
        $isTestEnvironment = false
    ) {
        $params = $service->getRequest()->getParams();

        $apiURI = self::API_URI_PAYMENT_SPLIT_ONBOARDING;

        if ($isTestEnvironment === true) {
            $apiURI = self::API_URI_PAYMENT_SPLIT_ONBOARDING_TEST;
        }

        $uri = $apiURI . $service->getEndPoint() . $uriComplement;

        $headers = isset($params['headers']) ? $params['headers'] : [];
        $body = isset($params['body']) ? $params['body'] : [];

        return $this->client->request(
            $method,
            $uri,
            [
                'headers' => $headers,
                'body' => \json_encode($body),
                'handler' => $this->handler
            ]
        );
    }

    public function getClient()
    {
        return $this->client;
    }
}
