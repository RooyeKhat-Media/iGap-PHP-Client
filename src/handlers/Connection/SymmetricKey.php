<?php

namespace iGap\handlers\Connection;

use iGap\Api;
use iGap\handlers\Handler;
use Proto\ConnectionSymmetricKeyResponse;
use Proto\ConnectionSymmetricKeyResponse_Status;

class SymmetricKey implements Handler
{
    /**
     * SymmetricKey constructor.
     * @param ConnectionSymmetricKeyResponse $response
     * @param SymmetricKey $request
     * @throws \Exception
     */
    public function __construct($response, $request)
    {
        if ($response->getStatus() !== ConnectionSymmetricKeyResponse_Status::ACCEPTED)
            throw new \Exception('Securing failed');

        Api::getInstance()->setSymmetricMethod($response->getSymmetricMethod());
        Api::getInstance()->setSymmetricIvSize($response->getSymmetricIvSize());
        Api::getInstance()->setAsSecure();

        Api::getInstance()->getLogger()->debug('Secured');
    }

}