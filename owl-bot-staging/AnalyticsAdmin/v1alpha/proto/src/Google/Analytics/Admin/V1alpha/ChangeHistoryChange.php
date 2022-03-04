<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of a change to a single Google Analytics resource.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ChangeHistoryChange</code>
 */
class ChangeHistoryChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the resource whose changes are described by this entry.
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     */
    protected $resource = '';
    /**
     * The type of action that changed this resource.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ActionType action = 2;</code>
     */
    protected $action = 0;
    /**
     * Resource contents from before the change was made. If this resource was
     * created in this change, this field will be missing.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource resource_before_change = 3;</code>
     */
    protected $resource_before_change = null;
    /**
     * Resource contents from after the change was made. If this resource was
     * deleted in this change, this field will be missing.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource resource_after_change = 4;</code>
     */
    protected $resource_after_change = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           Resource name of the resource whose changes are described by this entry.
     *     @type int $action
     *           The type of action that changed this resource.
     *     @type \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource $resource_before_change
     *           Resource contents from before the change was made. If this resource was
     *           created in this change, this field will be missing.
     *     @type \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource $resource_after_change
     *           Resource contents from after the change was made. If this resource was
     *           deleted in this change, this field will be missing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the resource whose changes are described by this entry.
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Resource name of the resource whose changes are described by this entry.
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The type of action that changed this resource.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ActionType action = 2;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The type of action that changed this resource.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ActionType action = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\ActionType::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Resource contents from before the change was made. If this resource was
     * created in this change, this field will be missing.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource resource_before_change = 3;</code>
     * @return \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource|null
     */
    public function getResourceBeforeChange()
    {
        return $this->resource_before_change;
    }

    public function hasResourceBeforeChange()
    {
        return isset($this->resource_before_change);
    }

    public function clearResourceBeforeChange()
    {
        unset($this->resource_before_change);
    }

    /**
     * Resource contents from before the change was made. If this resource was
     * created in this change, this field will be missing.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource resource_before_change = 3;</code>
     * @param \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource $var
     * @return $this
     */
    public function setResourceBeforeChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource::class);
        $this->resource_before_change = $var;

        return $this;
    }

    /**
     * Resource contents from after the change was made. If this resource was
     * deleted in this change, this field will be missing.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource resource_after_change = 4;</code>
     * @return \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource|null
     */
    public function getResourceAfterChange()
    {
        return $this->resource_after_change;
    }

    public function hasResourceAfterChange()
    {
        return isset($this->resource_after_change);
    }

    public function clearResourceAfterChange()
    {
        unset($this->resource_after_change);
    }

    /**
     * Resource contents from after the change was made. If this resource was
     * deleted in this change, this field will be missing.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource resource_after_change = 4;</code>
     * @param \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource $var
     * @return $this
     */
    public function setResourceAfterChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ChangeHistoryChange\ChangeHistoryResource::class);
        $this->resource_after_change = $var;

        return $this;
    }

}

