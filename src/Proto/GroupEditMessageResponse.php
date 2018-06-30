<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupEditMessage.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.GroupEditMessageResponse</code>
 */
class GroupEditMessageResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint64 message_version = 4;</code>
     */
    private $message_version = 0;
    /**
     * Generated from protobuf field <code>string message = 5;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>.proto.RoomMessageType message_type = 6;</code>
     */
    private $message_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int|string $room_id
     *     @type int|string $message_id
     *     @type int|string $message_version
     *     @type string $message
     *     @type int $message_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GroupEditMessage::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>uint64 message_version = 4;</code>
     * @return int|string
     */
    public function getMessageVersion()
    {
        return $this->message_version;
    }

    /**
     * Generated from protobuf field <code>uint64 message_version = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMessageVersion($var)
    {
        GPBUtil::checkUint64($var);
        $this->message_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 5;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageType message_type = 6;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageType message_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Proto\RoomMessageType::class);
        $this->message_type = $var;

        return $this;
    }

}

