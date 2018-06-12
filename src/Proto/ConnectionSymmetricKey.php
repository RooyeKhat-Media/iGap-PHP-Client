<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ConnectionSecuring.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ConnectionSymmetricKey</code>
 */
class ConnectionSymmetricKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>bytes symmetric_key = 2;</code>
     */
    private $symmetric_key = '';
    /**
     * Generated from protobuf field <code>uint32 version = 3;</code>
     */
    private $version = 0;

    public function __construct() {
        \GPBMetadata\ConnectionSecuring::initOnce();
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
     * Generated from protobuf field <code>bytes symmetric_key = 2;</code>
     * @return string
     */
    public function getSymmetricKey()
    {
        return $this->symmetric_key;
    }

    /**
     * Generated from protobuf field <code>bytes symmetric_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSymmetricKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->symmetric_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 version = 3;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>uint32 version = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

}
