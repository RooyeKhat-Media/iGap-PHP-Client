<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientJoinByInviteLink.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientJoinByInviteLink</code>
 */
class ClientJoinByInviteLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>string invite_token = 2;</code>
     */
    private $invite_token = '';

    public function __construct() {
        \GPBMetadata\ClientJoinByInviteLink::initOnce();
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

