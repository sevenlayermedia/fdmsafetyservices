<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitored_resource.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Api;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * An object that describes the schema of a
 * [MonitoredResource][google.api.MonitoredResource] object using a type name
 * and a set of labels.  For example, the monitored resource descriptor for
 * Google Compute Engine VM instances has a type of
 * `"gce_instance"` and specifies the use of the labels `"instance_id"` and
 * `"zone"` to identify particular VM instances.
 * Different APIs can support different monitored resource types. APIs generally
 * provide a `list` method that returns the monitored resource descriptors used
 * by the API.
 *
 * Generated from protobuf message <code>google.api.MonitoredResourceDescriptor</code>
 */
class MonitoredResourceDescriptor extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Optional. The resource name of the monitored resource descriptor:
     * `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     * {type} is the value of the `type` field in this object and
     * {project_id} is a project ID that provides API-specific context for
     * accessing the type.  APIs that do not use project information can use the
     * resource name format `"monitoredResourceDescriptors/{type}"`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';
    /**
     * Required. The monitored resource type. For example, the type
     * `"cloudsql_database"` represents databases in Google Cloud SQL.
     *  For a list of types, see [Monitoring resource
     *  types](https://cloud.google.com/monitoring/api/resources)
     * and [Logging resource
     * types](https://cloud.google.com/logging/docs/api/v2/resource-list).
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Optional. A concise name for the monitored resource type that might be
     * displayed in user interfaces. It should be a Title Cased Noun Phrase,
     * without any article or other determiners. For example,
     * `"Google Cloud SQL Database"`.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Optional. A detailed description of the monitored resource type that might
     * be used in documentation.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Required. A set of labels used to describe instances of this monitored
     * resource type. For example, an individual Google Cloud SQL database is
     * identified by values for the labels `"database_id"` and `"zone"`.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     */
    private $labels;
    /**
     * Optional. The launch stage of the monitored resource definition.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 7;</code>
     */
    protected $launch_stage = 0;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The resource name of the monitored resource descriptor:
     *           `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     *           {type} is the value of the `type` field in this object and
     *           {project_id} is a project ID that provides API-specific context for
     *           accessing the type.  APIs that do not use project information can use the
     *           resource name format `"monitoredResourceDescriptors/{type}"`.
     *     @type string $type
     *           Required. The monitored resource type. For example, the type
     *           `"cloudsql_database"` represents databases in Google Cloud SQL.
     *            For a list of types, see [Monitoring resource
     *            types](https://cloud.google.com/monitoring/api/resources)
     *           and [Logging resource
     *           types](https://cloud.google.com/logging/docs/api/v2/resource-list).
     *     @type string $display_name
     *           Optional. A concise name for the monitored resource type that might be
     *           displayed in user interfaces. It should be a Title Cased Noun Phrase,
     *           without any article or other determiners. For example,
     *           `"Google Cloud SQL Database"`.
     *     @type string $description
     *           Optional. A detailed description of the monitored resource type that might
     *           be used in documentation.
     *     @type array<\Google\Api\LabelDescriptor>|\Google\Protobuf\Internal\RepeatedField $labels
     *           Required. A set of labels used to describe instances of this monitored
     *           resource type. For example, an individual Google Cloud SQL database is
     *           identified by values for the labels `"database_id"` and `"zone"`.
     *     @type int $launch_stage
     *           Optional. The launch stage of the monitored resource definition.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\MonitoredResource::initOnce();
        parent::__construct($data);
    }
    /**
     * Optional. The resource name of the monitored resource descriptor:
     * `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     * {type} is the value of the `type` field in this object and
     * {project_id} is a project ID that provides API-specific context for
     * accessing the type.  APIs that do not use project information can use the
     * resource name format `"monitoredResourceDescriptors/{type}"`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Optional. The resource name of the monitored resource descriptor:
     * `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     * {type} is the value of the `type` field in this object and
     * {project_id} is a project ID that provides API-specific context for
     * accessing the type.  APIs that do not use project information can use the
     * resource name format `"monitoredResourceDescriptors/{type}"`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        return $this;
    }
    /**
     * Required. The monitored resource type. For example, the type
     * `"cloudsql_database"` represents databases in Google Cloud SQL.
     *  For a list of types, see [Monitoring resource
     *  types](https://cloud.google.com/monitoring/api/resources)
     * and [Logging resource
     * types](https://cloud.google.com/logging/docs/api/v2/resource-list).
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Required. The monitored resource type. For example, the type
     * `"cloudsql_database"` represents databases in Google Cloud SQL.
     *  For a list of types, see [Monitoring resource
     *  types](https://cloud.google.com/monitoring/api/resources)
     * and [Logging resource
     * types](https://cloud.google.com/logging/docs/api/v2/resource-list).
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
        return $this;
    }
    /**
     * Optional. A concise name for the monitored resource type that might be
     * displayed in user interfaces. It should be a Title Cased Noun Phrase,
     * without any article or other determiners. For example,
     * `"Google Cloud SQL Database"`.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }
    /**
     * Optional. A concise name for the monitored resource type that might be
     * displayed in user interfaces. It should be a Title Cased Noun Phrase,
     * without any article or other determiners. For example,
     * `"Google Cloud SQL Database"`.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
        return $this;
    }
    /**
     * Optional. A detailed description of the monitored resource type that might
     * be used in documentation.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Optional. A detailed description of the monitored resource type that might
     * be used in documentation.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
        return $this;
    }
    /**
     * Required. A set of labels used to describe instances of this monitored
     * resource type. For example, an individual Google Cloud SQL database is
     * identified by values for the labels `"database_id"` and `"zone"`.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * Required. A set of labels used to describe instances of this monitored
     * resource type. For example, an individual Google Cloud SQL database is
     * identified by values for the labels `"database_id"` and `"zone"`.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     * @param array<\Google\Api\LabelDescriptor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\LabelDescriptor::class);
        $this->labels = $arr;
        return $this;
    }
    /**
     * Optional. The launch stage of the monitored resource definition.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 7;</code>
     * @return int
     */
    public function getLaunchStage()
    {
        return $this->launch_stage;
    }
    /**
     * Optional. The launch stage of the monitored resource definition.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLaunchStage($var)
    {
        GPBUtil::checkEnum($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\LaunchStage::class);
        $this->launch_stage = $var;
        return $this;
    }
}
