<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoCountry.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.InfoCountry</code>
 */
class InfoCountry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>string iso_code = 2;</code>
     */
    private $iso_code = '';

    public function __construct() {
        \GPBMetadata\InfoCountry::initOnce();
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
     * Generated from protobuf field <code>string iso_code = 2;</code>
     * @return string
     */
    public function getIsoCode()
    {
        return $this->iso_code;
    }

    /**
     * Generated from protobuf field <code>string iso_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIsoCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iso_code = $var;

        return $this;
    }

}
