<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingGetLog.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingGetLog</code>
 */
class SignalingGetLog extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>.proto.Pagination pagination = 2;</code>
     */
    private $pagination = null;

    public function __construct() {
        \GPBMetadata\SignalingGetLog::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @return \Proto\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @param \Proto\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Proto\Request::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Pagination pagination = 2;</code>
     * @return \Proto\Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Generated from protobuf field <code>.proto.Pagination pagination = 2;</code>
     * @param \Proto\Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Proto\Pagination::class);
        $this->pagination = $var;

        return $this;
    }

}

