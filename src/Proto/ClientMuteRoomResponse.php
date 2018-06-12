<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMuteRoom.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientMuteRoomResponse</code>
 */
class ClientMuteRoomResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.proto.RoomMute room_mute = 3;</code>
     */
    private $room_mute = 0;

    public function __construct() {
        \GPBMetadata\ClientMuteRoom::initOnce();
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
     * Generated from protobuf field <code>.proto.RoomMute room_mute = 3;</code>
     * @return int
     */
    public function getRoomMute()
    {
        return $this->room_mute;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMute room_mute = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomMute($var)
    {
        GPBUtil::checkEnum($var, \Proto\RoomMute::class);
        $this->room_mute = $var;

        return $this;
    }

}
