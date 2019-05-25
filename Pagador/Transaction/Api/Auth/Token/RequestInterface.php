<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2019 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Api\Auth\Token;

interface RequestInterface
{
    public function getAuthenticationBasicToken();

    public function getEstablishmentCode();

    public function getMerchantName();

    public function getMCC();
}
