<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/service.proto

namespace Google\Cloud\SecretManager\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SecretManagerService.UpdateSecret][google.cloud.secrets.v1beta1.SecretManagerService.UpdateSecret].
 *
 * Generated from protobuf message <code>google.cloud.secrets.v1beta1.UpdateSecretRequest</code>
 */
class UpdateSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. [Secret][google.cloud.secrets.v1beta1.Secret] with updated field values.
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.Secret secret = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $secret = null;
    /**
     * Required. Specifies the fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecretManager\V1beta1\Secret $secret
     *           Required. [Secret][google.cloud.secrets.v1beta1.Secret] with updated field values.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Specifies the fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secrets\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. [Secret][google.cloud.secrets.v1beta1.Secret] with updated field values.
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.Secret secret = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecretManager\V1beta1\Secret|null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    public function hasSecret()
    {
        return isset($this->secret);
    }

    public function clearSecret()
    {
        unset($this->secret);
    }

    /**
     * Required. [Secret][google.cloud.secrets.v1beta1.Secret] with updated field values.
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.Secret secret = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecretManager\V1beta1\Secret $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1beta1\Secret::class);
        $this->secret = $var;

        return $this;
    }

    /**
     * Required. Specifies the fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Specifies the fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

