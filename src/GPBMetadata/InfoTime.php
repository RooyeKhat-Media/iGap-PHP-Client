<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoTime.proto

namespace GPBMetadata;

class InfoTime
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
            "0ac7010a0e496e666f54696d652e70726f746f120570726f746f1a0e5265" .
            "73706f6e73652e70726f746f222b0a08496e666f54696d65121f0a077265" .
            "717565737418012001280b320e2e70726f746f2e5265717565737422480a" .
            "10496e666f54696d65526573706f6e736512210a08726573706f6e736518" .
            "012001280b320f2e70726f746f2e526573706f6e736512110a0974696d65" .
            "7374616d7018022001280d421f0a0e6e65742e694761702e70726f746f42" .
            "0d50726f746f496e666f54696d65620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

