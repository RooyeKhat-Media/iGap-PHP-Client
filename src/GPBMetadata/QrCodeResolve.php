<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QrCodeResolve.proto

namespace GPBMetadata;

class QrCodeResolve
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
            "0a85020a135172436f64655265736f6c76652e70726f746f120570726f74" .
            "6f1a0e526573706f6e73652e70726f746f22560a0d5172436f6465526573" .
            "6f6c7665121f0a077265717565737418012001280b320e2e70726f746f2e" .
            "5265717565737412100a08757365726e616d6518022001280912120a0a6d" .
            "6573736167655f696418032001280422510a155172436f64655265736f6c" .
            "7665526573706f6e736512210a08726573706f6e736518012001280b320f" .
            "2e70726f746f2e526573706f6e736512150a0d71725f636f64655f696d61" .
            "676518022001280c42240a0e6e65742e694761702e70726f746f42125072" .
            "6f746f5172436f64655265736f6c7665620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
