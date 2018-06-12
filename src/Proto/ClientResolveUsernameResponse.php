<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientResolveUsername.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientResolveUsernameResponse</code>
 */
class ClientResolveUsernameResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>.proto.ClientResolveUsernameResponse.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     */
    private $room = null;

    public function __construct() {
        \GPBMetadata\ClientResolveUsername::initOnce();
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
     * Generated from protobuf field <code>.proto.ClientResolveUsernameResponse.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientResolveUsernameResponse.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientResolveUsernameResponse_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     * @return \Proto\RegisteredUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     * @param \Proto\RegisteredUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Proto\RegisteredUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     * @return \Proto\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     * @param \Proto\Room $var
     * @return $this
     */
    public function setRoom($var)
    {
        GPBUtil::checkMessage($var, \Proto\Room::class);
        $this->room = $var;

        return $this;
    }

}

