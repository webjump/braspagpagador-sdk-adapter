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


use Webjump\Braspag\Pagador\Transaction\Api\CreditCard\PaymentSplit\RequestInterface;

class PaymentSplit implements RequestInterface
{

    public function getSplits()
    {
        return [
            [
                "SubordinateMerchantId" => "f2d6eb34-2c6b-4948-8fff-51facdd2a28f",
                "Amount" => 10000,
                "Fares" => [
                "Mdr" => 5,
                    "Fee" => 0
                ]
            ]
        ];
    }
}
