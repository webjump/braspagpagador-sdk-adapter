<?php

namespace Webjump\Braspag\Factories;


use Webjump\Braspag\Pagador\Transaction\Resource\Response\Billet\Send\Response;
use \Psr\Http\Message\ResponseInterface;

class ResponseFactory
{
    /**
     * @param ResponseInterface $request
     * @return Response
     */
    public static function make(ResponseInterface $request)
    {
        return new Response($request);
    }
}
