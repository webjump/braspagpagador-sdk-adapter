<?php

namespace Webjump\Braspag\Pagador;


interface RequestInterface
{
    public function prepareParams();

    public function getParams();
}
