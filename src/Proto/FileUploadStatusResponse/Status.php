<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: FileUploadStatus.proto

namespace Proto\FileUploadStatusResponse;

/**
 * Protobuf type <code>proto.FileUploadStatusResponse.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UPLOADING = 0;</code>
     */
    const UPLOADING = 0;
    /**
     * Generated from protobuf enum <code>PROCESSING = 1;</code>
     */
    const PROCESSING = 1;
    /**
     * Generated from protobuf enum <code>PROCESSED = 2;</code>
     */
    const PROCESSED = 2;
    /**
     * Generated from protobuf enum <code>CORRUPTED = 3;</code>
     */
    const CORRUPTED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Proto\FileUploadStatusResponse_Status::class);

