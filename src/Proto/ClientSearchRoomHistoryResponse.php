<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientSearchRoomHistory.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientSearchRoomHistoryResponse</code>
 */
class ClientSearchRoomHistoryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>uint32 totalCount = 2;</code>
     */
    private $totalCount = 0;
    /**
     * Generated from protobuf field <code>uint32 notDeletedCount = 3;</code>
     */
    private $notDeletedCount = 0;
    /**
     * Generated from protobuf field <code>repeated .proto.RoomMessage result = 4;</code>
     */
    private $result;

    public function __construct() {
        \GPBMetadata\ClientSearchRoomHistory::initOnce();
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
     * Generated from protobuf field <code>uint32 totalCount = 2;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * Generated from protobuf field <code>uint32 totalCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->totalCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 notDeletedCount = 3;</code>
     * @return int
     */
    public function getNotDeletedCount()
    {
        return $this->notDeletedCount;
    }

    /**
     * Generated from protobuf field <code>uint32 notDeletedCount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNotDeletedCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->notDeletedCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.RoomMessage result = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.RoomMessage result = 4;</code>
     * @param \Proto\RoomMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\RoomMessage::class);
        $this->result = $arr;

        return $this;
    }

}

