<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserContactsEdit.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserContactsEdit</code>
 */
class UserContactsEdit extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>uint64 phone = 2;</code>
     */
    private $phone = 0;
    /**
     * Generated from protobuf field <code>string first_name = 3;</code>
     */
    private $first_name = '';
    /**
     * Generated from protobuf field <code>string last_name = 4;</code>
     */
    private $last_name = '';

    public function __construct() {
        \GPBMetadata\UserContactsEdit::initOnce();
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
     * Generated from protobuf field <code>uint64 phone = 2;</code>
     * @return int|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>uint64 phone = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkUint64($var);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_name = 3;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Generated from protobuf field <code>string first_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_name = 4;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Generated from protobuf field <code>string last_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name = $var;

        return $this;
    }

}

