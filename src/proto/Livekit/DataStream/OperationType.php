<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit\DataStream;

use UnexpectedValueException;

/**
 * enum for operation types (specific to TextHeader)
 *
 * Protobuf type <code>livekit.DataStream.OperationType</code>
 */
class OperationType
{
    /**
     * Generated from protobuf enum <code>CREATE = 0;</code>
     */
    const CREATE = 0;
    /**
     * Generated from protobuf enum <code>UPDATE = 1;</code>
     */
    const UPDATE = 1;
    /**
     * Generated from protobuf enum <code>DELETE = 2;</code>
     */
    const DELETE = 2;
    /**
     * Generated from protobuf enum <code>REACTION = 3;</code>
     */
    const REACTION = 3;

    private static $valueToName = [
        self::CREATE => 'CREATE',
        self::UPDATE => 'UPDATE',
        self::DELETE => 'DELETE',
        self::REACTION => 'REACTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationType::class, \Livekit\DataStream_OperationType::class);

