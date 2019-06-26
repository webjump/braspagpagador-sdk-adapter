<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command\Auth3Ds20;

use Webjump\Braspag\Factories\Auth3Ds20ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\Auth3Ds20TokenFactory;
use Webjump\Braspag\Pagador\Transaction\Command\CommandAbstract;

/**
 * Class TokenCommand
 * @package Webjump\Braspag\Pagador\Transaction\Command\Auth3Ds20
 */
class TokenCommand extends CommandAbstract
{
    /**
     * @return $this
     */
    protected function execute()
    {
        $auth = Auth3Ds20TokenFactory::make($this->request);
        $client = Auth3Ds20ClientHttpFactory::make();

        $params = $this->request->getParams();
        $isTestEnvironment =  (bool) $this->request->getData()->getIsTestEnvironment();

        $response = $client->request($auth, 'POST', '', $isTestEnvironment);

        $this->result = ResponseFactory::make($this->getResponseToArray($response), 'auth-token');

        return $this;
    }
}
