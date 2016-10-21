<?php

namespace Webjump\Braspag\Pagador\Adapter;


use Braspag\Model\Sale\Sale;

interface ApiServiceInterface
{
    public function authorize(Sale $sale);
}
