<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserProfileGetGender.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserProfileGetGenderResponse</code>
 */
class UserProfileGetGenderResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>.proto.Gender gender = 2;</code>
     */
    private $gender = 0;

    public function __construct() {
        \GPBMetadata\UserProfileGetGender::initOnce();
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
     * Generated from protobuf field <code>.proto.Gender gender = 2;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>.proto.Gender gender = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Proto\Gender::class);
        $this->gender = $var;

        return $this;
    }

}

