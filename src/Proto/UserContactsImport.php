<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserContactsImport.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserContactsImport</code>
 */
class UserContactsImport extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>repeated .proto.UserContactsImport.Contact contacts = 2;</code>
     */
    private $contacts;
    /**
     * Generated from protobuf field <code>bool force = 3;</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type \Proto\UserContactsImport\Contact[]|\Google\Protobuf\Internal\RepeatedField $contacts
     *     @type bool $force
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserContactsImport::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>repeated .proto.UserContactsImport.Contact contacts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.UserContactsImport.Contact contacts = 2;</code>
     * @param \Proto\UserContactsImport\Contact[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\UserContactsImport\Contact::class);
        $this->contacts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool force = 3;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Generated from protobuf field <code>bool force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

