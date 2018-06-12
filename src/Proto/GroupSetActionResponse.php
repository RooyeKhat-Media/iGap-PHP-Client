<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupSetAction.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.GroupSetActionResponse</code>
 */
class GroupSetActionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     */
    private $room_id = 0;
    /**
     * Generated from protobuf field <code>.proto.ClientAction action = 3;</code>
     */
    private $action = 0;
    /**
     * Generated from protobuf field <code>uint64 user_id = 4;</code>
     */
    private $user_id = 0;

    public function __construct() {
        \GPBMetadata\GroupSetAction::initOnce();
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
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->room_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientAction action = 3;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientAction action = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 4;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

}

