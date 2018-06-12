<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Error.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ErrorResponse</code>
 */
class ErrorResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>uint32 major_code = 2;</code>
     */
    private $major_code = 0;
    /**
     * Generated from protobuf field <code>uint32 minor_code = 3;</code>
     */
    private $minor_code = 0;
    /**
     * Generated from protobuf field <code>uint32 wait = 4;</code>
     */
    private $wait = 0;
    /**
     * Generated from protobuf field <code>string message = 5;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\Error::initOnce();
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
     * Generated from protobuf field <code>uint32 major_code = 2;</code>
     * @return int
     */
    public function getMajorCode()
    {
        return $this->major_code;
    }

    /**
     * Generated from protobuf field <code>uint32 major_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMajorCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->major_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 minor_code = 3;</code>
     * @return int
     */
    public function getMinorCode()
    {
        return $this->minor_code;
    }

    /**
     * Generated from protobuf field <code>uint32 minor_code = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMinorCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->minor_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wait = 4;</code>
     * @return int
     */
    public function getWait()
    {
        return $this->wait;
    }

    /**
     * Generated from protobuf field <code>uint32 wait = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWait($var)
    {
        GPBUtil::checkUint32($var);
        $this->wait = $var;

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

}

