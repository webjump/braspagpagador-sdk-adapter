<?php

namespace Webjump\Braspag\Pagador\Adapter\Model\Sale;


use Braspag\Model\Sale\Sale as SaleAdapter;
use Webjump\Braspag\Pagador\RequestInterface;

class Sale extends SaleAdapter implements SaleInterface
{
    public function __construct(RequestInterface $request)
    {
        parent::__construct($request->getParams());
    }
}
