<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserContactsGetBlockedList.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserContactsGetBlockedListResponse</code>
 */
class UserContactsGetBlockedListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>repeated .proto.UserContactsGetBlockedListResponse.User user = 2;</code>
     */
    private $user;

    public function __construct() {
        \GPBMetadata\UserContactsGetBlockedList::initOnce();
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
     * Generated from protobuf field <code>repeated .proto.UserContactsGetBlockedListResponse.User user = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.UserContactsGetBlockedListResponse.User user = 2;</code>
     * @param \Proto\UserContactsGetBlockedListResponse_User[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUser($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\UserContactsGetBlockedListResponse_User::class);
        $this->user = $arr;

        return $this;
    }

}

