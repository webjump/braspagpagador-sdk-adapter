<?php

namespace Webjump\Braspag\Pagador\Transaction\Api\Actions\Capture;


interface ResponseInterface
{
    public function getStatus();

    public function getReasonCode();

    public function getReasonMessage();

    public function getProviderReturnCode();

    public function getProviderReturnMessage();

    public function getLinks();
}
