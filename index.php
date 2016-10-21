<?php

require_once("vendor/autoload.php");


use Webjump\Braspag\Exemples\DataRequest\Billet;
use Webjump\Braspag\Exemples\DataRequest\CreditCard;
use Webjump\Braspag\Pagador\Transaction\Resource\Facade\Facade as Facade;

$data = new Billet();

$facade = new Facade();
$response = $facade->sendBillet($data);

var_dump($response);


echo '<hr />';

$data = new CreditCard();
$response = $facade->sendCreditCard($data);

var_dump($response);