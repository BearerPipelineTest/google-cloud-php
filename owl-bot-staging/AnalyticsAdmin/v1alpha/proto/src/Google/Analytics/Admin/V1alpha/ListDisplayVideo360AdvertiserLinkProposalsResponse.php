<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListDisplayVideo360AdvertiserLinkProposals RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListDisplayVideo360AdvertiserLinkProposalsResponse</code>
 */
class ListDisplayVideo360AdvertiserLinkProposalsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of DisplayVideo360AdvertiserLinkProposals.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkProposal display_video_360_advertiser_link_proposals = 1;</code>
     */
    private $display_video_360_advertiser_link_proposals;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal[]|\Google\Protobuf\Internal\RepeatedField $display_video_360_advertiser_link_proposals
     *           List of DisplayVideo360AdvertiserLinkProposals.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * List of DisplayVideo360AdvertiserLinkProposals.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkProposal display_video_360_advertiser_link_proposals = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisplayVideo360AdvertiserLinkProposals()
    {
        return $this->display_video_360_advertiser_link_proposals;
    }

    /**
     * List of DisplayVideo360AdvertiserLinkProposals.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkProposal display_video_360_advertiser_link_proposals = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisplayVideo360AdvertiserLinkProposals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal::class);
        $this->display_video_360_advertiser_link_proposals = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

