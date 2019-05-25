<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
require_once("vendor/autoload.php");

use Webjump\Braspag\Examples\DataRequest\Billet;
use Webjump\Braspag\Examples\DataRequest\CreditCard;
use Webjump\Braspag\Examples\DataRequest\Actions;
use Webjump\Braspag\Examples\DataRequest\Debit;
use Webjump\Braspag\Pagador\Transaction\BraspagFacade;


$facade = new BraspagFacade();

function getData($response)
{
    if (! is_object($response)) {
        return '';
    }

    $result = [];
    foreach (get_class_methods($response) as $method) {
        if ($method === '__construct') {
            continue;
        }
        $result[$method] = $response->$method();
    }

    return $result;
}



//##
//## Boleto
//##
//echo '<h1>Boleto</h1>';
//$data = new Billet();
//$response = $facade->sendBillet($data);
//
//if (is_object($response)) {
//    echo "<a target='_blank' href='{$response->getPaymentUrl()}'>Gerar Boleto</a>";
//    echo '<pre>';
//    print_r($response);
//    echo '</pre>';
//} else {
//    echo '<pre>';
//    print_r($response);
//    echo '</pre>';
//
//}
//
//echo '<hr />';



##
## Cartão de Credito
##
echo '<h1>Cartão de Crédito</h1>';

$data = new CreditCard();
$response = $facade->sendCreditCard($data);
$paymentId = $response->getPaymentPaymentId();
$result = getData($response);
echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

//
//
//##
//## Captura Cartão de Credito
//##
//echo '<h1>Captura Cartão de Crédito</h1>';
//$data = new Actions($paymentId);
//$response = $facade->captureCreditCard($data);
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';
//
//
//
//##
//## Cartão de Débito
//##
//echo '<h1>Cartão de Débito</h1>';
//$data = new Debit();
//$response = $facade->sendDebit($data);
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';;
//
//echo '<hr />';
//
//
//
//
//##
//## Consulta Cartao de Credito Autorizado
//##
//echo '<h1>Consulta Cartao de Credito Autorizado</h1>';
//$data = new Actions('b2ab14aa-4c47-46af-a880-a3b5314c0a8b');
//$response = $facade->checkPaymentStatus($data, 'creditCard');
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';
//
//
//
//
//##
//## Consulta Cartao de Credito Capturado
//##
//echo '<h1>Consulta Cartao de Credito Capturado</h1>';
//$data = new Actions('df0bcef0-65d9-4bb2-abbd-48a3af6052e7');
//$response = $facade->checkPaymentStatus($data, 'creditCard');
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';
//
//
//
//
//##
//## Consulta Cartao de Credito Capturado
//##
//echo '<h1>Consulta Boleto</h1>';
//$data = new Actions('662e9450-0fc7-464f-aeed-5a81643e717a');
//$response = $facade->checkPaymentStatus($data, 'billet');
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';
//
//
//##
//## Consulta Cartao de Credito Capturado
//##
//echo '<h1>Consulta Cartão de Debito</h1>';
//$data = new Actions('0cf3ae14-05bc-4fab-8161-5093aef67246');
//$response = $facade->checkPaymentStatus($data, 'debitCard');
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';
//
//
//
//
//##
//## Cancelar Cartão de Credito Capturado
//##
//echo '<h1>Cancelar Cartão de Credito Capturado</h1>';
//$data = new Actions($paymentId);
//$response = $facade->voidPayment($data);
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';
//
//
//
//
//##
//## Consulta Cartao de Credito Capturado
//##
//echo '<h1>Consulta Cartao de Credito Cancelado</h1>';
//$data = new Actions($paymentId);
//$response = $facade->checkPaymentStatus($data, 'creditCard');
//$result = getData($response);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr />';