<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChatUpdateDraft.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChatUpdateDraftResponse</code>
 */
class ChatUpdateDraftResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.proto.RoomDraft draft = 3;</code>
     */
    private $draft = null;

    public function __construct() {
        \GPBMetadata\ChatUpdateDraft::initOnce();
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
     * Generated from protobuf field <code>.proto.RoomDraft draft = 3;</code>
     * @return \Proto\RoomDraft
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomDraft draft = 3;</code>
     * @param \Proto\RoomDraft $var
     * @return $this
     */
    public function setDraft($var)
    {
        GPBUtil::checkMessage($var, \Proto\RoomDraft::class);
        $this->draft = $var;

        return $this;
    }

}

