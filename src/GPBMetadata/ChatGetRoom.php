<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChatGetRoom.proto

namespace GPBMetadata;

class ChatGetRoom
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        \GPBMetadata\Global::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afa010a1143686174476574526f6f6d2e70726f746f120570726f746f1a" .
            "0e526573706f6e73652e70726f746f1a0c476c6f62616c2e70726f746f22" .
            "3f0a0b43686174476574526f6f6d121f0a07726571756573741801200128" .
            "0b320e2e70726f746f2e52657175657374120f0a07706565725f69641802" .
            "2001280422530a1343686174476574526f6f6d526573706f6e736512210a" .
            "08726573706f6e736518012001280b320f2e70726f746f2e526573706f6e" .
            "736512190a04726f6f6d18022001280b320b2e70726f746f2e526f6f6d42" .
            "220a0e6e65742e694761702e70726f746f421050726f746f436861744765" .
            "74526f6f6d620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
