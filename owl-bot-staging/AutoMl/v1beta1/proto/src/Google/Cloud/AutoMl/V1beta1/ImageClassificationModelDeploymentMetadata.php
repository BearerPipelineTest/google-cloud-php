<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/image.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model deployment metadata specific to Image Classification.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ImageClassificationModelDeploymentMetadata</code>
 */
class ImageClassificationModelDeploymentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. The number of nodes to deploy the model on. A node is an
     * abstraction of a machine resource, which can handle online prediction QPS
     * as given in the model's
     * [node_qps][google.cloud.automl.v1beta1.ImageClassificationModelMetadata.node_qps].
     * Must be between 1 and 100, inclusive on both ends.
     *
     * Generated from protobuf field <code>int64 node_count = 1;</code>
     */
    protected $node_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $node_count
     *           Input only. The number of nodes to deploy the model on. A node is an
     *           abstraction of a machine resource, which can handle online prediction QPS
     *           as given in the model's
     *           [node_qps][google.cloud.automl.v1beta1.ImageClassificationModelMetadata.node_qps].
     *           Must be between 1 and 100, inclusive on both ends.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. The number of nodes to deploy the model on. A node is an
     * abstraction of a machine resource, which can handle online prediction QPS
     * as given in the model's
     * [node_qps][google.cloud.automl.v1beta1.ImageClassificationModelMetadata.node_qps].
     * Must be between 1 and 100, inclusive on both ends.
     *
     * Generated from protobuf field <code>int64 node_count = 1;</code>
     * @return int|string
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * Input only. The number of nodes to deploy the model on. A node is an
     * abstraction of a machine resource, which can handle online prediction QPS
     * as given in the model's
     * [node_qps][google.cloud.automl.v1beta1.ImageClassificationModelMetadata.node_qps].
     * Must be between 1 and 100, inclusive on both ends.
     *
     * Generated from protobuf field <code>int64 node_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNodeCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->node_count = $var;

        return $this;
    }

}

