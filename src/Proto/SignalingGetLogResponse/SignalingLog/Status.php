<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingGetLog.proto

namespace Proto\SignalingGetLogResponse\SignalingLog;

/**
 * Protobuf type <code>proto.SignalingGetLogResponse.SignalingLog.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>MISSED = 0;</code>
     */
    const MISSED = 0;
    /**
     * Generated from protobuf enum <code>CANCELED = 1;</code>
     */
    const CANCELED = 1;
    /**
     * Generated from protobuf enum <code>INCOMING = 2;</code>
     */
    const INCOMING = 2;
    /**
     * Generated from protobuf enum <code>OUTGOING = 3;</code>
     */
    const OUTGOING = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Proto\SignalingGetLogResponse_SignalingLog_Status::class);

