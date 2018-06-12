<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChatUpdateStatus.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChatUpdateStatusResponse</code>
 */
class ChatUpdateStatusResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint64 message_id = 3;</code>
     */
    private $message_id = 0;
    /**
     * Generated from protobuf field <code>.proto.RoomMessageStatus status = 4;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>uint64 status_version = 5;</code>
     */
    private $status_version = 0;
    /**
     * Generated from protobuf field <code>string updater_author_hash = 6;</code>
     */
    private $updater_author_hash = '';

    public function __construct() {
        \GPBMetadata\ChatUpdateStatus::initOnce();
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
     * Generated from protobuf field <code>uint64 message_id = 3;</code>
     * @return int|string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>uint64 message_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkUint64($var);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Proto\RoomMessageStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 status_version = 5;</code>
     * @return int|string
     */
    public function getStatusVersion()
    {
        return $this->status_version;
    }

    /**
     * Generated from protobuf field <code>uint64 status_version = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatusVersion($var)
    {
        GPBUtil::checkUint64($var);
        $this->status_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updater_author_hash = 6;</code>
     * @return string
     */
    public function getUpdaterAuthorHash()
    {
        return $this->updater_author_hash;
    }

    /**
     * Generated from protobuf field <code>string updater_author_hash = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdaterAuthorHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->updater_author_hash = $var;

        return $this;
    }

}
