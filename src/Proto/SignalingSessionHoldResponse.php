<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingSessionHold.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingSessionHoldResponse</code>
 */
class SignalingSessionHoldResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>bool hold = 2;</code>
     */
    private $hold = false;

    public function __construct() {
        \GPBMetadata\SignalingSessionHold::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @return \Proto\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @param \Proto\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Proto\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hold = 2;</code>
     * @return bool
     */
    public function getHold()
    {
        return $this->hold;
    }

    /**
     * Generated from protobuf field <code>bool hold = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHold($var)
    {
        GPBUtil::checkBool($var);
        $this->hold = $var;

        return $this;
    }

}
