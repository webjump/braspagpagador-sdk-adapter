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
                $streamHandler = new \Monolog\Handler\StreamHandler(getcwd() . '/var/log/webjump-braspag-transaction-' . date('Y-m-d') . '.log');
                $logger = new \Monolog\Logger('logger');
                $logger->pushHandler($streamHandler);
                $messageFormatter = new \GuzzleHttp\MessageFormatter(\GuzzleHttp\MessageFormatter::CLF . "\n" . \GuzzleHttp\MessageFormatter::DEBUG);
                $guzzleMiddleware = \GuzzleHttp\Middleware::log($logger, $messageFormatter);
                $stack->push($guzzleMiddleware);

                return $stack;
        }
}