<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command\OAuth2;

use Webjump\Braspag\Factories\OAuth2ClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\OAuth2TokenFactory;
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
        $auth = OAuth2TokenFactory::make($this->request);
        $client = OAuth2ClientHttpFactory::make();

        $params = $this->request->getParams();
        $isTestEnvironment =  (bool) $this->request->getData()->getIsTestEnvironment();

        $response = $client->request($auth, 'POST', '', $isTestEnvironment);

        $this->result = ResponseFactory::make($this->getResponseToArray($response), 'oauth2-token');

        return $this;
    }
}
