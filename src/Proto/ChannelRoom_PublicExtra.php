<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelRoom.PublicExtra</code>
 */
class ChannelRoom_PublicExtra extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string username = 1;</code>
     */
    private $username = '';

    public function __construct() {
        \GPBMetadata\Global::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string username = 1;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

}

