<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GeoGetConfiguration.proto

namespace Proto\GeoGetConfigurationResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.GeoGetConfigurationResponse.TileServer</code>
 */
class TileServer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string base_url = 1;</code>
     */
    private $base_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GeoGetConfiguration::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string base_url = 1;</code>
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * Generated from protobuf field <code>string base_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_url = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TileServer::class, \Proto\GeoGetConfigurationResponse_TileServer::class);
