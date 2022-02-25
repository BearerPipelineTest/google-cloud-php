<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/common.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MUST match
 * https://github.com/secure-systems-lab/dsse/blob/master/envelope.proto. An
 * authenticated message of arbitrary type.
 *
 * Generated from protobuf message <code>grafeas.v1.Envelope</code>
 */
class Envelope extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes payload = 1;</code>
     */
    protected $payload = '';
    /**
     * Generated from protobuf field <code>string payload_type = 2;</code>
     */
    protected $payload_type = '';
    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.EnvelopeSignature signatures = 3;</code>
     */
    private $signatures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payload
     *     @type string $payload_type
     *     @type \Grafeas\V1\EnvelopeSignature[]|\Google\Protobuf\Internal\RepeatedField $signatures
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes payload = 1;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payload_type = 2;</code>
     * @return string
     */
    public function getPayloadType()
    {
        return $this->payload_type;
    }

    /**
     * Generated from protobuf field <code>string payload_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayloadType($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.EnvelopeSignature signatures = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignatures()
    {
        return $this->signatures;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.EnvelopeSignature signatures = 3;</code>
     * @param \Grafeas\V1\EnvelopeSignature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\EnvelopeSignature::class);
        $this->signatures = $arr;

        return $this;
    }

}

