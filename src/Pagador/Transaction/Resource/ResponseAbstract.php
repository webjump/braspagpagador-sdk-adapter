<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource;


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
        $this->response = \json_decode($this->responseInstance->getBody()->getContents(), true);
    }
}
