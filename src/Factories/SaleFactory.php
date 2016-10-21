<?php

namespace Webjump\Braspag\Factories;


use Braspag\Model\Sale\Sale;

class SaleFactory
{
    /**
     * @param array $data
     * @return Sale
     */
    public static function make(array $data = [])
    {
        return new Sale($data);
    }
}
