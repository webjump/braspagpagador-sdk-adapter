<?php

require_once("vendor/autoload.php");


use Webjump\Braspag\Exemples\DataRequest\Billet;
use Webjump\Braspag\Exemples\DataRequest\CreditCard;
use Webjump\Braspag\Exemples\DataRequest\Debit;
use Webjump\Braspag\Pagador\Transaction\Resource\Facade\Facade as Facade;

$data = new Billet();

$facade = new Facade();

/** @var Webjump\Braspag\Pagador\Transaction\Api\Billet\Send\ResponseInterface $response */
$response = $facade->sendBillet($data);
echo "<a target='_blank' href='{$response->getPaymentUrl()}'>Gerar Boleto</a>";
