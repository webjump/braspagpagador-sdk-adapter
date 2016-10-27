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
use Webjump\Braspag\Pagador\Exception\DefaultException;
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
     * @param string $uriComplement
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function request(ServiceInterface $service, $method = 'POST', $uriComplement = '')
    {
        $params = $service->getRequest()->getParams();

        $uri = self::API_URI . $service->getEndPoint() . $uriComplement;

        if ($method === 'GET') {
            $uri = self::API_CONSULT_URI . $service->getEndPoint() . $uriComplement;
        }

        $headers = isset($params['headers']) ? $params['headers'] : [];
        $body = isset($params['body']) ? $params['body'] : [];
        return $this->client->request(
            $method,
            $uri,
            [
                'headers' => $headers,
                'body' => \json_encode($body)
            ]
        );
    }

    public function getClient()
    {
        return $this->client;
    }
}
