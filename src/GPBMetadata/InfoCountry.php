<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoCountry.proto

namespace GPBMetadata;

class InfoCountry
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
            "0a96020a11496e666f436f756e7472792e70726f746f120570726f746f1a" .
            "0e526573706f6e73652e70726f746f22400a0b496e666f436f756e747279" .
            "121f0a077265717565737418012001280b320e2e70726f746f2e52657175" .
            "65737412100a0869736f5f636f6465180220012809227c0a13496e666f43" .
            "6f756e747279526573706f6e736512210a08726573706f6e736518012001" .
            "280b320f2e70726f746f2e526573706f6e736512140a0c63616c6c696e67" .
            "5f636f646518022001280d120c0a046e616d65180320012809120f0a0770" .
            "61747465726e180420012809120d0a05726567657818052001280942220a" .
            "0e6e65742e694761702e70726f746f421050726f746f496e666f436f756e" .
            "747279620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

