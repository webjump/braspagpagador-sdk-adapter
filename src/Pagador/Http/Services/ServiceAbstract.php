<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Http\Services;


use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;

abstract class ServiceAbstract
{
    protected $endPoint = '';
    protected $request;

    /**
     * @param RequestAbstract $request
     */
    public function __construct(RequestAbstract $request)
    {
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * @return RequestAbstract
     */
    public function getRequest()
    {
        return $this->request;
    }
}
