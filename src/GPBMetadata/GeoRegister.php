<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GeoRegister.proto

namespace GPBMetadata;

class GeoRegister
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
            "0ae0010a1147656f52656769737465722e70726f746f120570726f746f1a" .
            "0e526573706f6e73652e70726f746f223e0a0b47656f5265676973746572" .
            "121f0a077265717565737418012001280b320e2e70726f746f2e52657175" .
            "657374120e0a06656e61626c6518022001280822480a1347656f52656769" .
            "73746572526573706f6e736512210a08726573706f6e736518012001280b" .
            "320f2e70726f746f2e526573706f6e7365120e0a06656e61626c65180220" .
            "01280842220a0e6e65742e694761702e70726f746f421050726f746f4765" .
            "6f5265676973746572620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

