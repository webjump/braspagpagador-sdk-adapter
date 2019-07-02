<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */

namespace Webjump\Braspag\Examples\DataRequest;


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Avs\RequestInterface;

class Avs implements RequestInterface
{

    public function getCpf()
    {
        return '41430366818';
    }

    public function getZipCode()
    {
        return '03313001';
    }

    public function getStreet()
    {
        return 'Rua Francisco Marengo';
    }

    public function getNumber()
    {
        return 1210;
    }

    public function getComplement()
    {
        return 'Conj 93 - Bloco C';
    }

    public function getDistrict()
    {
        return 'Tatuapé';
    }
}
