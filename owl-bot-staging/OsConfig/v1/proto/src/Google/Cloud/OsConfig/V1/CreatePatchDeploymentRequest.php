<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for creating a patch deployment.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.CreatePatchDeploymentRequest</code>
 */
class CreatePatchDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to apply this patch deployment to in the form
     * `projects/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. A name for the patch deployment in the project. When creating a
     * name the following rules apply:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the project.
     *
     * Generated from protobuf field <code>string patch_deployment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $patch_deployment_id = '';
    /**
     * Required. The patch deployment to create.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchDeployment patch_deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $patch_deployment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project to apply this patch deployment to in the form
     *           `projects/&#42;`.
     *     @type string $patch_deployment_id
     *           Required. A name for the patch deployment in the project. When creating a
     *           name the following rules apply:
     *           * Must contain only lowercase letters, numbers, and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-63 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the project.
     *     @type \Google\Cloud\OsConfig\V1\PatchDeployment $patch_deployment
     *           Required. The patch deployment to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to apply this patch deployment to in the form
     * `projects/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project to apply this patch deployment to in the form
     * `projects/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. A name for the patch deployment in the project. When creating a
     * name the following rules apply:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the project.
     *
     * Generated from protobuf field <code>string patch_deployment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPatchDeploymentId()
    {
        return $this->patch_deployment_id;
    }

    /**
     * Required. A name for the patch deployment in the project. When creating a
     * name the following rules apply:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the project.
     *
     * Generated from protobuf field <code>string patch_deployment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPatchDeploymentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->patch_deployment_id = $var;

        return $this;
    }

    /**
     * Required. The patch deployment to create.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchDeployment patch_deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\PatchDeployment|null
     */
    public function getPatchDeployment()
    {
        return $this->patch_deployment;
    }

    public function hasPatchDeployment()
    {
        return isset($this->patch_deployment);
    }

    public function clearPatchDeployment()
    {
        unset($this->patch_deployment);
    }

    /**
     * Required. The patch deployment to create.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchDeployment patch_deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\PatchDeployment $var
     * @return $this
     */
    public function setPatchDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\PatchDeployment::class);
        $this->patch_deployment = $var;

        return $this;
    }

}

