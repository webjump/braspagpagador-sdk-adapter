<?php

namespace Webjump\Braspag\Factories;

/**
 * 
 *
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 */
interface LoggerFactoryInterface
{
    public static function make($message);

    public static function makeLogRequest(\Psr\Http\Message\RequestInterface $request);

    public static function makeLogResponse(\Psr\Http\Message\ResponseInterface $response);
}
