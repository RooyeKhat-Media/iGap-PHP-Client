<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserRegister.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserRegister</code>
 */
class UserRegister extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>uint64 phone_number = 2;</code>
     */
    private $phone_number = 0;
    /**
     * Generated from protobuf field <code>string country_code = 3;</code>
     */
    private $country_code = '';

    public function __construct() {
        \GPBMetadata\UserRegister::initOnce();
        parent::__construct();
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
     * Generated from protobuf field <code>uint64 phone_number = 2;</code>
     * @return int|string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Generated from protobuf field <code>uint64 phone_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country_code = 3;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Generated from protobuf field <code>string country_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

}

