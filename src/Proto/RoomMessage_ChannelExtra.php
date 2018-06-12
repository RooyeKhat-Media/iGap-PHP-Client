<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomMessage.ChannelExtra</code>
 */
class RoomMessage_ChannelExtra extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string signature = 1;</code>
     */
    private $signature = '';
    /**
     * Generated from protobuf field <code>string views_label = 2;</code>
     */
    private $views_label = '';
    /**
     * Generated from protobuf field <code>string thumbs_up_label = 3;</code>
     */
    private $thumbs_up_label = '';
    /**
     * Generated from protobuf field <code>string thumbs_down_label = 4;</code>
     */
    private $thumbs_down_label = '';

    public function __construct() {
        \GPBMetadata\Global::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string signature = 1;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>string signature = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string views_label = 2;</code>
     * @return string
     */
    public function getViewsLabel()
    {
        return $this->views_label;
    }

    /**
     * Generated from protobuf field <code>string views_label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setViewsLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->views_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string thumbs_up_label = 3;</code>
     * @return string
     */
    public function getThumbsUpLabel()
    {
        return $this->thumbs_up_label;
    }

    /**
     * Generated from protobuf field <code>string thumbs_up_label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbsUpLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbs_up_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string thumbs_down_label = 4;</code>
     * @return string
     */
    public function getThumbsDownLabel()
    {
        return $this->thumbs_down_label;
    }

    /**
     * Generated from protobuf field <code>string thumbs_down_label = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbsDownLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbs_down_label = $var;

        return $this;
    }

}

