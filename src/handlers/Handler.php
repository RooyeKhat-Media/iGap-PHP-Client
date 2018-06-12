<?php

namespace iGap\handlers;

use Google\Protobuf\Internal\Message;

interface Handler
{
    /**
     * Handler constructor.
     * @param Message $response
     * @param Message|null $request
     */
    public function __construct($response, $request);
}