<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/struct.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * `ListValue` is a wrapper around a repeated field of values.
 * The JSON representation for `ListValue` is JSON array.
 *
 * Generated from protobuf message <code>google.protobuf.ListValue</code>
 */
class ListValue extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Repeated field of dynamically typed values.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value values = 1;</code>
     */
    private $values;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Protobuf\Value>|\Google\Protobuf\Internal\RepeatedField $values
     *           Repeated field of dynamically typed values.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Struct::initOnce();
        parent::__construct($data);
    }
    /**
     * Repeated field of dynamically typed values.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * Repeated field of dynamically typed values.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value values = 1;</code>
     * @param array<\Google\Protobuf\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Value::class);
        $this->values = $arr;
        return $this;
    }
}
