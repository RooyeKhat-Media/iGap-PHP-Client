<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelAddModerator.proto

namespace GPBMetadata;

class ChannelAddModerator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa8020a194368616e6e656c4164644d6f64657261746f722e70726f746f" .
            "120570726f746f1a0e526573706f6e73652e70726f746f225a0a13436861" .
            "6e6e656c4164644d6f64657261746f72121f0a0772657175657374180120" .
            "01280b320e2e70726f746f2e52657175657374120f0a07726f6f6d5f6964" .
            "18022001280412110a096d656d6265725f696418032001280422640a1b43" .
            "68616e6e656c4164644d6f64657261746f72526573706f6e736512210a08" .
            "726573706f6e736518012001280b320f2e70726f746f2e526573706f6e73" .
            "65120f0a07726f6f6d5f696418022001280412110a096d656d6265725f69" .
            "64180320012804422a0a0e6e65742e694761702e70726f746f421850726f" .
            "746f4368616e6e656c4164644d6f64657261746f72620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
