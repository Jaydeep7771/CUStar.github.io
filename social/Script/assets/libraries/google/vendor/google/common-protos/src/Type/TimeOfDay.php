<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/timeofday.proto

namespace Google\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a time of day. The date and time zone are either not significant
 * or are specified elsewhere. An API may chose to allow leap seconds. Related
 * types are [google.type.Date][google.type.Date] and `google.protobuf.Timestamp`.
 *
 * Generated from protobuf message <code>google.type.TimeOfDay</code>
 */
class TimeOfDay extends \Google\Protobuf\Internal\Message
{
    /**
     * Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     * to allow the value "24:00:00" for scenarios like business closing time.
     *
     * Generated from protobuf field <code>int32 hours = 1;</code>
     */
    private $hours = 0;
    /**
     * Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 2;</code>
     */
    private $minutes = 0;
    /**
     * Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     * allow the value 60 if it allows leap-seconds.
     *
     * Generated from protobuf field <code>int32 seconds = 3;</code>
     */
    private $seconds = 0;
    /**
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 4;</code>
     */
    private $nanos = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hours
     *           Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     *           to allow the value "24:00:00" for scenarios like business closing time.
     *     @type int $minutes
     *           Minutes of hour of day. Must be from 0 to 59.
     *     @type int $seconds
     *           Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     *           allow the value 60 if it allows leap-seconds.
     *     @type int $nanos
     *           Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        parent::__construct($data);
    }

    /**
     * Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     * to allow the value "24:00:00" for scenarios like business closing time.
     *
     * Generated from protobuf field <code>int32 hours = 1;</code>
     * @return int
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     * to allow the value "24:00:00" for scenarios like business closing time.
     *
     * Generated from protobuf field <code>int32 hours = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHours($var)
    {
        GPBUtil::checkInt32($var);
        $this->hours = $var;

        return $this;
    }

    /**
     * Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 2;</code>
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->minutes = $var;

        return $this;
    }

    /**
     * Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     * allow the value 60 if it allows leap-seconds.
     *
     * Generated from protobuf field <code>int32 seconds = 3;</code>
     * @return int
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     * allow the value 60 if it allows leap-seconds.
     *
     * Generated from protobuf field <code>int32 seconds = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->seconds = $var;

        return $this;
    }

    /**
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 4;</code>
     * @return int
     */
    public function getNanos()
    {
        return $this->nanos;
    }

    /**
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNanos($var)
    {
        GPBUtil::checkInt32($var);
        $this->nanos = $var;

        return $this;
    }

}

