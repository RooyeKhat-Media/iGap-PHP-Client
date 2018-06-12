<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientCountRoomHistory.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientCountRoomHistoryResponse</code>
 */
class ClientCountRoomHistoryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>uint32 media = 2;</code>
     */
    private $media = 0;
    /**
     * Generated from protobuf field <code>uint32 image = 3;</code>
     */
    private $image = 0;
    /**
     * Generated from protobuf field <code>uint32 video = 4;</code>
     */
    private $video = 0;
    /**
     * Generated from protobuf field <code>uint32 audio = 5;</code>
     */
    private $audio = 0;
    /**
     * Generated from protobuf field <code>uint32 voice = 6;</code>
     */
    private $voice = 0;
    /**
     * Generated from protobuf field <code>uint32 gif = 7;</code>
     */
    private $gif = 0;
    /**
     * Generated from protobuf field <code>uint32 file = 8;</code>
     */
    private $file = 0;
    /**
     * Generated from protobuf field <code>uint32 url = 9;</code>
     */
    private $url = 0;

    public function __construct() {
        \GPBMetadata\ClientCountRoomHistory::initOnce();
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
     * Generated from protobuf field <code>uint32 media = 2;</code>
     * @return int
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Generated from protobuf field <code>uint32 media = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMedia($var)
    {
        GPBUtil::checkUint32($var);
        $this->media = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 image = 3;</code>
     * @return int
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>uint32 image = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkUint32($var);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 video = 4;</code>
     * @return int
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Generated from protobuf field <code>uint32 video = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setVideo($var)
    {
        GPBUtil::checkUint32($var);
        $this->video = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 audio = 5;</code>
     * @return int
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Generated from protobuf field <code>uint32 audio = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkUint32($var);
        $this->audio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 voice = 6;</code>
     * @return int
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * Generated from protobuf field <code>uint32 voice = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setVoice($var)
    {
        GPBUtil::checkUint32($var);
        $this->voice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gif = 7;</code>
     * @return int
     */
    public function getGif()
    {
        return $this->gif;
    }

    /**
     * Generated from protobuf field <code>uint32 gif = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGif($var)
    {
        GPBUtil::checkUint32($var);
        $this->gif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 file = 8;</code>
     * @return int
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>uint32 file = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkUint32($var);
        $this->file = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 url = 9;</code>
     * @return int
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>uint32 url = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkUint32($var);
        $this->url = $var;

        return $this;
    }

}

