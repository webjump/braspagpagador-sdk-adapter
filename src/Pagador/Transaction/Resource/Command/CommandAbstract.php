<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Resource\Command;


use Webjump\Braspag\Pagador\Transaction\Resource\Request\RequestAbstract;

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
}
