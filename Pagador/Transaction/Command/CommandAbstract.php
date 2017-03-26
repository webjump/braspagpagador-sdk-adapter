<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command;


use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;
use \Psr\Http\Message\ResponseInterface;

abstract class CommandAbstract
{
    protected $request;
    protected $result;

    abstract protected function execute();

    public function __construct(RequestAbstract $request)
    {
        $this->request = $request;
        $this->execute();
    }

    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param ResponseInterface $response
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return array
     */
    public function getResponseToArray(ResponseInterface $response, $assoc = true, $depth = 512, $options = 0)
    {
        return \json_decode($response->getBody(), $assoc, $depth, $options);
    }
}
