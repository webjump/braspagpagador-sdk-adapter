<?php

namespace Webjump\Braspag\Pagador\Facade;


use Webjump\Braspag\Pagador\Adapter\ApiService;
use Webjump\Braspag\Pagador\Auth\Auth;
use Webjump\Braspag\Pagador\Request\Billet as BilletRequest;
use Webjump\Braspag\Pagador\Adapter\Model\Sale\Sale;
use Webjump\Braspag\Pagador\Request\Data\BilletInterface as DataBillet;

class Billet implements FacadeInterface
{
    protected $request;
    protected $sale;
    protected $apiService;
    protected $auth;
    protected $response;

    /**
     * @param DataBillet $data
     */
    public function __construct(DataBillet $data)
    {
        $this->request = new BilletRequest($data);
        $this->sale = new Sale($this->request);

        $auth= new \stdClass();
        $auth->merchantId = $data->getMerchantId();
        $auth->merchantKey = $data->getMerchantKey();
        $this->auth = new Auth($auth);

        $this->apiService = new ApiService($this->auth);
    }

    /**
     * @return \Braspag\Model\Sale\Sale
     * @throws \Exception
     */
    public function request()
    {
        $result = $this->apiService->authorize($this->sale);

        if (!$result->isValid()) {
            throw new \Exception(var_export($result->getMessages()));
        }

        $this->response = $result;

        return $this->response;
    }
}
