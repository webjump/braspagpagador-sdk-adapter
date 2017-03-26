<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Factories;


use GuzzleHttp\Client as HttpClient;

class HttpFactory
{
    /**
     * @param array $config
     * @return HttpClient
     */
    public static function make(array $config = [])
    {
        return new HttpClient($config);
    }
}
