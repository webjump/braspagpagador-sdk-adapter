<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\CreditCard\Avs;


interface RequestInterface
{
    public function getCpf();

    public function getZipCode();

    public function getStreet();

    public function getNumber();

    public function getComplement();

    public function getDistrict();
}
