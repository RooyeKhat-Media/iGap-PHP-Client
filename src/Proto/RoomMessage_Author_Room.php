<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomMessage.Author.Room</code>
 */
class RoomMessage_Author_Room extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 room_id = 1;</code>
     */
    private $room_id = 0;

    public function __construct() {
        \GPBMetadata\Global::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 1;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->room_id = $var;

        return $this;
    }

}

