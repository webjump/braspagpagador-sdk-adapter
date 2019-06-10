<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Http\Client;


use Webjump\Braspag\Pagador\Http\Services\ServiceInterface;

interface ClientInterface
{
    const API_URI               = 'https://api.braspag.com.br/v2';
    const API_CONSULT_URI       = 'https://apiquery.braspag.com.br/v2';
    const API_URI_TEST          = 'https://apisandbox.braspag.com.br/v2';
    const API_CONSULT_URI_TEST  = 'https://apiquerysandbox.braspag.com.br/v2';
    const API_URI_AUTH_3DS_20          = 'https://mpi.braspag.com.br/v2';
    const API_URI_AUTH_3DS_20_TEST     = 'https://mpisandbox.braspag.com.br/v2';

    public function request(ServiceInterface $service, $method = 'POST', $uriComplement = '');
}
