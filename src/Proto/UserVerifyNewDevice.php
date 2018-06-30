<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserVerifyNewDevice.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserVerifyNewDevice</code>
 */
class UserVerifyNewDevice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>string token = 2;</code>
     */
    private $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserVerifyNewDevice::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @return \Proto\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @param \Proto\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Proto\Request::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

