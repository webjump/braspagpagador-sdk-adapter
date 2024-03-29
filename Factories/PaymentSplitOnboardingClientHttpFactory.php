<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Factories;

use Webjump\Braspag\Pagador\Http\Client\PaymentSplitOnboardingClient as ClientHttp;

class PaymentSplitOnboardingClientHttpFactory
{
    /**
     * @return ClientHttp
     */
    public static function make()
    {
        return new ClientHttp();
    }
}
