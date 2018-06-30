<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.Wallpaper</code>
 */
class Wallpaper extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.File file = 1;</code>
     */
    private $file = null;
    /**
     * Generated from protobuf field <code>string color = 2;</code>
     */
    private $color = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\File $file
     *     @type string $color
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.File file = 1;</code>
     * @return \Proto\File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>.proto.File file = 1;</code>
     * @param \Proto\File $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Proto\File::class);
        $this->file = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string color = 2;</code>
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Generated from protobuf field <code>string color = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->color = $var;

        return $this;
    }

}

