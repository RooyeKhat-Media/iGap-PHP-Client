<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserInfo.proto

namespace GPBMetadata;

class UserInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        \GPBMetadata\PBGlobal::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af8010a0e55736572496e666f2e70726f746f120570726f746f1a0e5265" .
            "73706f6e73652e70726f746f1a0c476c6f62616c2e70726f746f223c0a08" .
            "55736572496e666f121f0a077265717565737418012001280b320e2e7072" .
            "6f746f2e52657175657374120f0a07757365725f6964180320012804225a" .
            "0a1055736572496e666f526573706f6e736512210a08726573706f6e7365" .
            "18012001280b320f2e70726f746f2e526573706f6e736512230a04757365" .
            "7218022001280b32152e70726f746f2e5265676973746572656455736572" .
            "421f0a0e6e65742e694761702e70726f746f420d50726f746f5573657249" .
            "6e666f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

