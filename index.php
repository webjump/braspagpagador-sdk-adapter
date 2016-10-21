<?php

require_once("vendor/autoload.php");


use Webjump\Braspag\Exemples\DataRequest\Billet;
use Webjump\Braspag\Pagador\Facade\Billet as Facade;

$data = new Billet();

$facade = new Facade($data);
$response = $facade->request();
var_dump($response);