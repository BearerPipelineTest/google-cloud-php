<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/package.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details on how a particular software package was installed on a system.
 *
 * Generated from protobuf message <code>grafeas.v1.PackageOccurrence</code>
 */
class PackageOccurrence extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the installed package.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. All of the places within the filesystem versions of this package
     * have been found.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Location location = 2;</code>
     */
    private $location;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the installed package.
     *     @type \Grafeas\V1\Location[]|\Google\Protobuf\Internal\RepeatedField $location
     *           Required. All of the places within the filesystem versions of this package
     *           have been found.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Package::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the installed package.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the installed package.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. All of the places within the filesystem versions of this package
     * have been found.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Location location = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. All of the places within the filesystem versions of this package
     * have been found.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Location location = 2;</code>
     * @param \Grafeas\V1\Location[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\Location::class);
        $this->location = $arr;

        return $this;
    }

}

