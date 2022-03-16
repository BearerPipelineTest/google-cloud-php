<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The environment values to set at runtime.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.RuntimeEnvironment</code>
 */
class RuntimeEnvironment extends \Google\Protobuf\Internal\Message
{
    /**
     * The initial number of Google Compute Engine instnaces for the job.
     *
     * Generated from protobuf field <code>int32 num_workers = 11;</code>
     */
    protected $num_workers = 0;
    /**
     * The maximum number of Google Compute Engine instances to be made
     * available to your pipeline during execution, from 1 to 1000.
     *
     * Generated from protobuf field <code>int32 max_workers = 1;</code>
     */
    protected $max_workers = 0;
    /**
     * The Compute Engine [availability
     * zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     * for launching worker instances to run your pipeline.
     * In the future, worker_zone will take precedence.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    protected $zone = '';
    /**
     * The email address of the service account to run the job as.
     *
     * Generated from protobuf field <code>string service_account_email = 3;</code>
     */
    protected $service_account_email = '';
    /**
     * The Cloud Storage path to use for temporary files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string temp_location = 4;</code>
     */
    protected $temp_location = '';
    /**
     * Whether to bypass the safety checks for the job's temporary directory.
     * Use with caution.
     *
     * Generated from protobuf field <code>bool bypass_temp_dir_validation = 5;</code>
     */
    protected $bypass_temp_dir_validation = false;
    /**
     * The machine type to use for the job. Defaults to the value from the
     * template if not specified.
     *
     * Generated from protobuf field <code>string machine_type = 6;</code>
     */
    protected $machine_type = '';
    /**
     * Additional experiment flags for the job, specified with the
     * `--experiments` option.
     *
     * Generated from protobuf field <code>repeated string additional_experiments = 7;</code>
     */
    private $additional_experiments;
    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 8;</code>
     */
    protected $network = '';
    /**
     * Subnetwork to which VMs will be assigned, if desired. You can specify a
     * subnetwork using either a complete URL or an abbreviated path. Expected to
     * be of the form
     * "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     * or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     * a Shared VPC network, you must use the complete URL.
     *
     * Generated from protobuf field <code>string subnetwork = 9;</code>
     */
    protected $subnetwork = '';
    /**
     * Additional user labels to be specified for the job.
     * Keys and values should follow the restrictions specified in the [labeling
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * page.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> additional_user_labels = 10;</code>
     */
    private $additional_user_labels;
    /**
     * Name for the Cloud KMS key for the job.
     * Key format is:
     * projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *
     * Generated from protobuf field <code>string kms_key_name = 12;</code>
     */
    protected $kms_key_name = '';
    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 14;</code>
     */
    protected $ip_configuration = 0;
    /**
     * The Compute Engine region
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1". Mutually exclusive
     * with worker_zone. If neither worker_region nor worker_zone is specified,
     * default to the control plane's region.
     *
     * Generated from protobuf field <code>string worker_region = 15;</code>
     */
    protected $worker_region = '';
    /**
     * The Compute Engine zone
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     * with worker_region. If neither worker_region nor worker_zone is specified,
     * a zone in the control plane's region is chosen based on available capacity.
     * If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *
     * Generated from protobuf field <code>string worker_zone = 16;</code>
     */
    protected $worker_zone = '';
    /**
     * Whether to enable Streaming Engine for the job.
     *
     * Generated from protobuf field <code>bool enable_streaming_engine = 17;</code>
     */
    protected $enable_streaming_engine = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_workers
     *           The initial number of Google Compute Engine instnaces for the job.
     *     @type int $max_workers
     *           The maximum number of Google Compute Engine instances to be made
     *           available to your pipeline during execution, from 1 to 1000.
     *     @type string $zone
     *           The Compute Engine [availability
     *           zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     *           for launching worker instances to run your pipeline.
     *           In the future, worker_zone will take precedence.
     *     @type string $service_account_email
     *           The email address of the service account to run the job as.
     *     @type string $temp_location
     *           The Cloud Storage path to use for temporary files.
     *           Must be a valid Cloud Storage URL, beginning with `gs://`.
     *     @type bool $bypass_temp_dir_validation
     *           Whether to bypass the safety checks for the job's temporary directory.
     *           Use with caution.
     *     @type string $machine_type
     *           The machine type to use for the job. Defaults to the value from the
     *           template if not specified.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $additional_experiments
     *           Additional experiment flags for the job, specified with the
     *           `--experiments` option.
     *     @type string $network
     *           Network to which VMs will be assigned.  If empty or unspecified,
     *           the service will use the network "default".
     *     @type string $subnetwork
     *           Subnetwork to which VMs will be assigned, if desired. You can specify a
     *           subnetwork using either a complete URL or an abbreviated path. Expected to
     *           be of the form
     *           "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     *           or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     *           a Shared VPC network, you must use the complete URL.
     *     @type array|\Google\Protobuf\Internal\MapField $additional_user_labels
     *           Additional user labels to be specified for the job.
     *           Keys and values should follow the restrictions specified in the [labeling
     *           restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     *           page.
     *           An object containing a list of "key": value pairs.
     *           Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *     @type string $kms_key_name
     *           Name for the Cloud KMS key for the job.
     *           Key format is:
     *           projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *     @type int $ip_configuration
     *           Configuration for VM IPs.
     *     @type string $worker_region
     *           The Compute Engine region
     *           (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     *           which worker processing should occur, e.g. "us-west1". Mutually exclusive
     *           with worker_zone. If neither worker_region nor worker_zone is specified,
     *           default to the control plane's region.
     *     @type string $worker_zone
     *           The Compute Engine zone
     *           (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     *           which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     *           with worker_region. If neither worker_region nor worker_zone is specified,
     *           a zone in the control plane's region is chosen based on available capacity.
     *           If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *     @type bool $enable_streaming_engine
     *           Whether to enable Streaming Engine for the job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * The initial number of Google Compute Engine instnaces for the job.
     *
     * Generated from protobuf field <code>int32 num_workers = 11;</code>
     * @return int
     */
    public function getNumWorkers()
    {
        return $this->num_workers;
    }

    /**
     * The initial number of Google Compute Engine instnaces for the job.
     *
     * Generated from protobuf field <code>int32 num_workers = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNumWorkers($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_workers = $var;

        return $this;
    }

    /**
     * The maximum number of Google Compute Engine instances to be made
     * available to your pipeline during execution, from 1 to 1000.
     *
     * Generated from protobuf field <code>int32 max_workers = 1;</code>
     * @return int
     */
    public function getMaxWorkers()
    {
        return $this->max_workers;
    }

    /**
     * The maximum number of Google Compute Engine instances to be made
     * available to your pipeline during execution, from 1 to 1000.
     *
     * Generated from protobuf field <code>int32 max_workers = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxWorkers($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_workers = $var;

        return $this;
    }

    /**
     * The Compute Engine [availability
     * zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     * for launching worker instances to run your pipeline.
     * In the future, worker_zone will take precedence.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The Compute Engine [availability
     * zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     * for launching worker instances to run your pipeline.
     * In the future, worker_zone will take precedence.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The email address of the service account to run the job as.
     *
     * Generated from protobuf field <code>string service_account_email = 3;</code>
     * @return string
     */
    public function getServiceAccountEmail()
    {
        return $this->service_account_email;
    }

    /**
     * The email address of the service account to run the job as.
     *
     * Generated from protobuf field <code>string service_account_email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_email = $var;

        return $this;
    }

    /**
     * The Cloud Storage path to use for temporary files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string temp_location = 4;</code>
     * @return string
     */
    public function getTempLocation()
    {
        return $this->temp_location;
    }

    /**
     * The Cloud Storage path to use for temporary files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string temp_location = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTempLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->temp_location = $var;

        return $this;
    }

    /**
     * Whether to bypass the safety checks for the job's temporary directory.
     * Use with caution.
     *
     * Generated from protobuf field <code>bool bypass_temp_dir_validation = 5;</code>
     * @return bool
     */
    public function getBypassTempDirValidation()
    {
        return $this->bypass_temp_dir_validation;
    }

    /**
     * Whether to bypass the safety checks for the job's temporary directory.
     * Use with caution.
     *
     * Generated from protobuf field <code>bool bypass_temp_dir_validation = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setBypassTempDirValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->bypass_temp_dir_validation = $var;

        return $this;
    }

    /**
     * The machine type to use for the job. Defaults to the value from the
     * template if not specified.
     *
     * Generated from protobuf field <code>string machine_type = 6;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * The machine type to use for the job. Defaults to the value from the
     * template if not specified.
     *
     * Generated from protobuf field <code>string machine_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Additional experiment flags for the job, specified with the
     * `--experiments` option.
     *
     * Generated from protobuf field <code>repeated string additional_experiments = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalExperiments()
    {
        return $this->additional_experiments;
    }

    /**
     * Additional experiment flags for the job, specified with the
     * `--experiments` option.
     *
     * Generated from protobuf field <code>repeated string additional_experiments = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalExperiments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_experiments = $arr;

        return $this;
    }

    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 8;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Subnetwork to which VMs will be assigned, if desired. You can specify a
     * subnetwork using either a complete URL or an abbreviated path. Expected to
     * be of the form
     * "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     * or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     * a Shared VPC network, you must use the complete URL.
     *
     * Generated from protobuf field <code>string subnetwork = 9;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Subnetwork to which VMs will be assigned, if desired. You can specify a
     * subnetwork using either a complete URL or an abbreviated path. Expected to
     * be of the form
     * "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     * or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     * a Shared VPC network, you must use the complete URL.
     *
     * Generated from protobuf field <code>string subnetwork = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Additional user labels to be specified for the job.
     * Keys and values should follow the restrictions specified in the [labeling
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * page.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> additional_user_labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAdditionalUserLabels()
    {
        return $this->additional_user_labels;
    }

    /**
     * Additional user labels to be specified for the job.
     * Keys and values should follow the restrictions specified in the [labeling
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * page.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> additional_user_labels = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAdditionalUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_user_labels = $arr;

        return $this;
    }

    /**
     * Name for the Cloud KMS key for the job.
     * Key format is:
     * projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *
     * Generated from protobuf field <code>string kms_key_name = 12;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Name for the Cloud KMS key for the job.
     * Key format is:
     * projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *
     * Generated from protobuf field <code>string kms_key_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 14;</code>
     * @return int
     */
    public function getIpConfiguration()
    {
        return $this->ip_configuration;
    }

    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setIpConfiguration($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\WorkerIPAddressConfiguration::class);
        $this->ip_configuration = $var;

        return $this;
    }

    /**
     * The Compute Engine region
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1". Mutually exclusive
     * with worker_zone. If neither worker_region nor worker_zone is specified,
     * default to the control plane's region.
     *
     * Generated from protobuf field <code>string worker_region = 15;</code>
     * @return string
     */
    public function getWorkerRegion()
    {
        return $this->worker_region;
    }

    /**
     * The Compute Engine region
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1". Mutually exclusive
     * with worker_zone. If neither worker_region nor worker_zone is specified,
     * default to the control plane's region.
     *
     * Generated from protobuf field <code>string worker_region = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_region = $var;

        return $this;
    }

    /**
     * The Compute Engine zone
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     * with worker_region. If neither worker_region nor worker_zone is specified,
     * a zone in the control plane's region is chosen based on available capacity.
     * If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *
     * Generated from protobuf field <code>string worker_zone = 16;</code>
     * @return string
     */
    public function getWorkerZone()
    {
        return $this->worker_zone;
    }

    /**
     * The Compute Engine zone
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     * with worker_region. If neither worker_region nor worker_zone is specified,
     * a zone in the control plane's region is chosen based on available capacity.
     * If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *
     * Generated from protobuf field <code>string worker_zone = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_zone = $var;

        return $this;
    }

    /**
     * Whether to enable Streaming Engine for the job.
     *
     * Generated from protobuf field <code>bool enable_streaming_engine = 17;</code>
     * @return bool
     */
    public function getEnableStreamingEngine()
    {
        return $this->enable_streaming_engine;
    }

    /**
     * Whether to enable Streaming Engine for the job.
     *
     * Generated from protobuf field <code>bool enable_streaming_engine = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableStreamingEngine($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_streaming_engine = $var;

        return $this;
    }

}

