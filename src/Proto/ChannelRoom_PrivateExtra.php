<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelRoom.PrivateExtra</code>
 */
class ChannelRoom_PrivateExtra extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string invite_link = 1;</code>
     */
    private $invite_link = '';
    /**
     * Generated from protobuf field <code>string invite_token = 2;</code>
     */
    private $invite_token = '';

    public function __construct() {
        \GPBMetadata\Global::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string invite_link = 1;</code>
     * @return string
     */
    public function getInviteLink()
    {
        return $this->invite_link;
    }

    /**
     * Generated from protobuf field <code>string invite_link = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInviteLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->invite_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string invite_token = 2;</code>
     * @return string
     */
    public function getInviteToken()
    {
        return $this->invite_token;
    }

    /**
     * Generated from protobuf field <code>string invite_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInviteToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->invite_token = $var;

        return $this;
    }

}

