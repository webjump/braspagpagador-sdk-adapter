<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Transaction\Command\PaymentSplit;

use Webjump\Braspag\Factories\PaymentSplitOnboardingClientHttpFactory;
use Webjump\Braspag\Factories\ResponseFactory;
use Webjump\Braspag\Factories\PaymentSplitCreateSubordinateFactory;
use Webjump\Braspag\Pagador\Transaction\Command\CommandAbstract;

/**
 * Class CreateSubordinateCommand
 * @package Webjump\Braspag\Pagador\Transaction\Command\PaymentSplit
 */
class CreateSubordinateCommand extends CommandAbstract
{
    /**
     * @return $this
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function execute()
    {
        $createSubordinate = PaymentSplitCreateSubordinateFactory::make($this->request);
        $client = PaymentSplitOnboardingClientHttpFactory::make();

        $isTestEnvironment =  (bool) $this->request->getData()->isTestEnvironment();

        $statusCode = 200;
        $errorData = [];

        try {
            $response = $client->request($createSubordinate, 'POST', '', $isTestEnvironment);

            $this->result = ResponseFactory::make(
                $this->getResponseToArray($response),
                'paymentSplitGetSubordinate'
            );

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if ($e->hasResponse()) {
                $statusCode = $e->getResponse()->getStatusCode();
                $errorData = $this->getNoClassResponseToArray($e->getResponse()->getBody()->getContents());
            }
        }

        if ($statusCode != 200) {
            $this->result = ResponseFactory::make([
                "statusCode" => $statusCode,
                "errorData" => $errorData
            ], 'paymentSplitGetSubordinate');
            return $this;
        }

        return $this;
    }

    /**
     * @param $responseStringJson
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    public function getNoClassResponseToArray($responseStringJson, $assoc = true, $depth = 512, $options = 0)
    {
        return \json_decode($responseStringJson, $assoc, $depth, $options);
    }
}
