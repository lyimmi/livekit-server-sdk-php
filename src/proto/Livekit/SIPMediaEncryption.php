<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.SIPMediaEncryption</code>
 */
class SIPMediaEncryption
{
    /**
     * do not enable encryption
     *
     * Generated from protobuf enum <code>SIP_MEDIA_ENCRYPT_DISABLE = 0;</code>
     */
    const SIP_MEDIA_ENCRYPT_DISABLE = 0;
    /**
     * use encryption if available
     *
     * Generated from protobuf enum <code>SIP_MEDIA_ENCRYPT_ALLOW = 1;</code>
     */
    const SIP_MEDIA_ENCRYPT_ALLOW = 1;
    /**
     * require encryption
     *
     * Generated from protobuf enum <code>SIP_MEDIA_ENCRYPT_REQUIRE = 2;</code>
     */
    const SIP_MEDIA_ENCRYPT_REQUIRE = 2;

    private static $valueToName = [
        self::SIP_MEDIA_ENCRYPT_DISABLE => 'SIP_MEDIA_ENCRYPT_DISABLE',
        self::SIP_MEDIA_ENCRYPT_ALLOW => 'SIP_MEDIA_ENCRYPT_ALLOW',
        self::SIP_MEDIA_ENCRYPT_REQUIRE => 'SIP_MEDIA_ENCRYPT_REQUIRE',
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

