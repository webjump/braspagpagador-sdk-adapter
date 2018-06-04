<?php

namespace Webjump\Braspag\Factories;

use Webjump\Braspag\Factories\HandlerFactoryInterface;

/**
 *
 *
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 */
class HandlerFactory implements HandlerFactoryInterface
{
    public static function make()
    {
        $stack = \GuzzleHttp\HandlerStack::create();

        $stack->push(\GuzzleHttp\Middleware::mapRequest(function (\Psr\Http\Message\RequestInterface $request) {
            \Webjump\Braspag\Factories\LoggerFactory::make($request);
            return $request;
        }), 'format_request_log');

        $stack->push(\GuzzleHttp\Middleware::mapResponse(function (\Psr\Http\Message\ResponseInterface $response) {
            \Webjump\Braspag\Factories\LoggerFactory::make($response);
            return $response;
        }), 'format_response_log');

        return $stack;
    }
}