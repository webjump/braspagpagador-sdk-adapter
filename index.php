<?php

require_once("vendor/autoload.php");


use Webjump\Braspag\Exemples\DataRequest\Billet;
use Webjump\Braspag\Exemples\DataRequest\CreditCard;
use Webjump\Braspag\Exemples\DataRequest\Capture;
use Webjump\Braspag\Exemples\DataRequest\Debit;
use Webjump\Braspag\Pagador\Transaction\Resource\Facade\Facade as Facade;



function getData($response)
{
    $result = [];
    foreach (get_class_methods($response) as $method) {
        if ($method === '__construct') {
            continue;
        }
        $result[$method] = $response->$method();
    }

    return $result;
}

$facade = new Facade();

$data = new Billet();
$response = $facade->sendBillet($data);
echo "<a target='_blank' href='{$response->getPaymentUrl()}'>Gerar Boleto</a>";

echo '<hr />';

$data = new CreditCard();
$response = $facade->sendCreditCard($data);
$result = getData($response);
var_dump($result);

echo '<hr />';

$data = new Capture();
$response = $facade->captureCreditCard($data);
$result = getData($response);
var_dump($result);
