<?php

namespace Webjump\Braspag\Factories;
use Webjump\Braspag\Factories\LoggerFactoryInterface;

/**
 *
 *
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 */
class LoggerFactory implements LoggerFactoryInterface
{
    /**
     * @param $message
     */
    public static function make($message)
    {
        $streamHandler = new \Monolog\Handler\StreamHandler(BP . '/var/log/webjump-braspag-transaction-' . date('Y-m-d') . '.log');
        $logger = new \Monolog\Logger('logger');
        $logger->pushHandler($streamHandler);

        $log = "";
        if ($message instanceof \Psr\Http\Message\RequestInterface) {
            $log = static::makeLogRequest($message);
        }

        if ($message instanceof \Psr\Http\Message\ResponseInterface) {
            $log = static::makeLogResponse($message);
        }

        $logger->addInfo($log);
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @return string
     */
    public static function makeLogRequest(\Psr\Http\Message\RequestInterface $request)
    {
        $headers = "";
        foreach ($request->getHeaders() as $name => $values) {
            $headers .= $name ." : " . implode(", ", $values)." ";
        }
        $patterns = array('#\"cardNumber\"\:\"(.*?)(\d{4})\"\,#', '#\"securityCode\":\"(.*?)\"\,#');
        $replacements = array('"cardNumber":"************$2",', '"securityCode":"***",');

        $bodyString = preg_replace($patterns, $replacements, $request->getBody()->__toString());
        return $request->getRequestTarget()." >>>>>>>> ".$request->getMethod(). " " . $headers . " " .$bodyString."\n";
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return string
     */
    public static function makeLogResponse(\Psr\Http\Message\ResponseInterface $response)
    {
        $headers = "";
        foreach ($response->getHeaders() as $name => $values) {
            $headers .= $name ." : " . implode(", ", $values)." ";
        }
        return $response->getStatusCode()." <<<<<<<< ". " " . $headers . " " .$response->getBody()->__toString()."\n";
    }
}