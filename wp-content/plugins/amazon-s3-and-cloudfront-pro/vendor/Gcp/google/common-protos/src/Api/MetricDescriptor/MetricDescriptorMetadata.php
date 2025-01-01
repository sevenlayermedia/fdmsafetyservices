<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/metric.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\MetricDescriptor;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Additional annotations that can be used to guide the usage of a metric.
 *
 * Generated from protobuf message <code>google.api.MetricDescriptor.MetricDescriptorMetadata</code>
 */
class MetricDescriptorMetadata extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. Must use the
     * [MetricDescriptor.launch_stage][google.api.MetricDescriptor.launch_stage]
     * instead.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $launch_stage = 0;
    /**
     * The sampling period of metric data points. For metrics which are written
     * periodically, consecutive data points are stored at this time interval,
     * excluding data loss due to errors. Metrics with a higher granularity have
     * a smaller sampling period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration sample_period = 2;</code>
     */
    protected $sample_period = null;
    /**
     * The delay of data points caused by ingestion. Data points older than this
     * age are guaranteed to be ingested and available to be read, excluding
     * data loss due to errors.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ingest_delay = 3;</code>
     */
    protected $ingest_delay = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $launch_stage
     *           Deprecated. Must use the
     *           [MetricDescriptor.launch_stage][google.api.MetricDescriptor.launch_stage]
     *           instead.
     *     @type \Google\Protobuf\Duration $sample_period
     *           The sampling period of metric data points. For metrics which are written
     *           periodically, consecutive data points are stored at this time interval,
     *           excluding data loss due to errors. Metrics with a higher granularity have
     *           a smaller sampling period.
     *     @type \Google\Protobuf\Duration $ingest_delay
     *           The delay of data points caused by ingestion. Data points older than this
     *           age are guaranteed to be ingested and available to be read, excluding
     *           data loss due to errors.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Metric::initOnce();
        parent::__construct($data);
    }
    /**
     * Deprecated. Must use the
     * [MetricDescriptor.launch_stage][google.api.MetricDescriptor.launch_stage]
     * instead.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 1 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getLaunchStage()
    {
        @\trigger_error('launch_stage is deprecated.', \E_USER_DEPRECATED);
        return $this->launch_stage;
    }
    /**
     * Deprecated. Must use the
     * [MetricDescriptor.launch_stage][google.api.MetricDescriptor.launch_stage]
     * instead.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 1 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setLaunchStage($var)
    {
        @\trigger_error('launch_stage is deprecated.', \E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\LaunchStage::class);
        $this->launch_stage = $var;
        return $this;
    }
    /**
     * The sampling period of metric data points. For metrics which are written
     * periodically, consecutive data points are stored at this time interval,
     * excluding data loss due to errors. Metrics with a higher granularity have
     * a smaller sampling period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration sample_period = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSamplePeriod()
    {
        return $this->sample_period;
    }
    public function hasSamplePeriod()
    {
        return isset($this->sample_period);
    }
    public function clearSamplePeriod()
    {
        unset($this->sample_period);
    }
    /**
     * The sampling period of metric data points. For metrics which are written
     * periodically, consecutive data points are stored at this time interval,
     * excluding data loss due to errors. Metrics with a higher granularity have
     * a smaller sampling period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration sample_period = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSamplePeriod($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Duration::class);
        $this->sample_period = $var;
        return $this;
    }
    /**
     * The delay of data points caused by ingestion. Data points older than this
     * age are guaranteed to be ingested and available to be read, excluding
     * data loss due to errors.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ingest_delay = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getIngestDelay()
    {
        return $this->ingest_delay;
    }
    public function hasIngestDelay()
    {
        return isset($this->ingest_delay);
    }
    public function clearIngestDelay()
    {
        unset($this->ingest_delay);
    }
    /**
     * The delay of data points caused by ingestion. Data points older than this
     * age are guaranteed to be ingested and available to be read, excluding
     * data loss due to errors.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ingest_delay = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIngestDelay($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Duration::class);
        $this->ingest_delay = $var;
        return $this;
    }
}
