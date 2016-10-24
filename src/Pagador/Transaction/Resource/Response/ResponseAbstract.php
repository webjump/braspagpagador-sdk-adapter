<?php

namespace Webjump\Braspag\Pagador\Transaction\Resource\Response;


use \Psr\Http\Message\ResponseInterface;

abstract class ResponseAbstract
{
    protected $responseInstance;
    protected $response;

    /**
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->responseInstance = $response;
        $this->response = \json_decode($response->getBody()->getContents(), true);
    }
}
