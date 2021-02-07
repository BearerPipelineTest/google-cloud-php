<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Intent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�V
\'google/cloud/dialogflow/v2/intent.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/dialogflow/v2/audio_config.proto(google/cloud/dialogflow/v2/context.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.proto"�7
Intent
name (	B�A
display_name (	B�AK
webhook_state (2/.google.cloud.dialogflow.v2.Intent.WebhookStateB�A
priority (B�A
is_fallback (B�A
ml_disabled (B�A 
input_context_names (	B�A
events (	B�AP
training_phrases	 (21.google.cloud.dialogflow.v2.Intent.TrainingPhraseB�A
action
 (	B�AA
output_contexts (2#.google.cloud.dialogflow.v2.ContextB�A
reset_contexts (B�AE

parameters (2,.google.cloud.dialogflow.v2.Intent.ParameterB�AA
messages (2*.google.cloud.dialogflow.v2.Intent.MessageB�A\\
default_response_platforms (23.google.cloud.dialogflow.v2.Intent.Message.PlatformB�A!
root_followup_intent_name (	#
parent_followup_intent_name (	S
followup_intent_info (25.google.cloud.dialogflow.v2.Intent.FollowupIntentInfo�
TrainingPhrase
name (	I
type (26.google.cloud.dialogflow.v2.Intent.TrainingPhrase.TypeB�AJ
parts (26.google.cloud.dialogflow.v2.Intent.TrainingPhrase.PartB�A
times_added_count (B�A]
Part
text (	
entity_type (	B�A
alias (	B�A
user_defined (B�A";
Type
TYPE_UNSPECIFIED 
EXAMPLE
TEMPLATE�
	Parameter
name (	
display_name (	
value (	B�A
default_value (	B�A%
entity_type_display_name (	B�A
	mandatory (B�A
prompts (	B�A
is_list (B�A�*
Message?
text (2/.google.cloud.dialogflow.v2.Intent.Message.TextH A
image (20.google.cloud.dialogflow.v2.Intent.Message.ImageH P
quick_replies (27.google.cloud.dialogflow.v2.Intent.Message.QuickRepliesH ?
card (2/.google.cloud.dialogflow.v2.Intent.Message.CardH *
payload (2.google.protobuf.StructH V
simple_responses (2:.google.cloud.dialogflow.v2.Intent.Message.SimpleResponsesH J

basic_card (24.google.cloud.dialogflow.v2.Intent.Message.BasicCardH M
suggestions	 (26.google.cloud.dialogflow.v2.Intent.Message.SuggestionsH [
link_out_suggestion
 (2<.google.cloud.dialogflow.v2.Intent.Message.LinkOutSuggestionH L
list_select (25.google.cloud.dialogflow.v2.Intent.Message.ListSelectH T
carousel_select (29.google.cloud.dialogflow.v2.Intent.Message.CarouselSelectH ]
browse_carousel_card (2=.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCardH J

table_card (24.google.cloud.dialogflow.v2.Intent.Message.TableCardH P
media_content (27.google.cloud.dialogflow.v2.Intent.Message.MediaContentH J
platform (23.google.cloud.dialogflow.v2.Intent.Message.PlatformB�A
Text
text (	B�A@
Image
	image_uri (	B�A
accessibility_text (	B�A>
QuickReplies
title (	B�A
quick_replies (	B�A�
Card
title (	B�A
subtitle (	B�A
	image_uri (	B�AL
buttons (26.google.cloud.dialogflow.v2.Intent.Message.Card.ButtonB�A2
Button
text (	B�A
postback (	B�AQ
SimpleResponse
text_to_speech (	
ssml (	
display_text (	B�Ak
SimpleResponsesX
simple_responses (29.google.cloud.dialogflow.v2.Intent.Message.SimpleResponseB�A�
	BasicCard
title (	B�A
subtitle (	B�A
formatted_text (	D
image (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�AQ
buttons (2;.google.cloud.dialogflow.v2.Intent.Message.BasicCard.ButtonB�A�
Button
title (	g
open_uri_action (2I.google.cloud.dialogflow.v2.Intent.Message.BasicCard.Button.OpenUriActionB�A
OpenUriAction
uri (	 

Suggestion
title (	B�A^
SuggestionsO
suggestions (25.google.cloud.dialogflow.v2.Intent.Message.SuggestionB�AD
LinkOutSuggestion
destination_name (	B�A
uri (	B�A�

ListSelect
title (	B�AN
items (2:.google.cloud.dialogflow.v2.Intent.Message.ListSelect.ItemB�A
subtitle (	B�A�
ItemL
info (29.google.cloud.dialogflow.v2.Intent.Message.SelectItemInfoB�A
title (	B�A
description (	B�AD
image (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�A�
CarouselSelectR
items (2>.google.cloud.dialogflow.v2.Intent.Message.CarouselSelect.ItemB�A�
ItemL
info (29.google.cloud.dialogflow.v2.Intent.Message.SelectItemInfoB�A
title (	B�A
description (	B�AD
image (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�A9
SelectItemInfo
key (	B�A
synonyms (	B�A�
MediaContentb

media_type (2I.google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaTypeB�Ab
media_objects (2K.google.cloud.dialogflow.v2.Intent.Message.MediaContent.ResponseMediaObject�
ResponseMediaObject
name (	
description (	B�AL
large_image (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�AH E
icon (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�AH 
content_url (	B
image"C
ResponseMediaType#
RESPONSE_MEDIA_TYPE_UNSPECIFIED 	
AUDIO�
BrowseCarouselCardc
items (2T.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCard.BrowseCarouselCardItemu
image_display_options (2Q.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCard.ImageDisplayOptionsB�A�
BrowseCarouselCardItem{
open_uri_action (2b.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCard.BrowseCarouselCardItem.OpenUrlAction
title (	
description (	B�AD
image (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�A
footer (	B�A�
OpenUrlAction
url (	�
url_type_hint (2n.google.cloud.dialogflow.v2.Intent.Message.BrowseCarouselCard.BrowseCarouselCardItem.OpenUrlAction.UrlTypeHintB�A"M
UrlTypeHint
URL_TYPE_HINT_UNSPECIFIED 

AMP_ACTION
AMP_CONTENT"v
ImageDisplayOptions%
!IMAGE_DISPLAY_OPTIONS_UNSPECIFIED 
GRAY	
WHITE
CROPPED
BLURRED_BACKGROUND�
	TableCard
title (	
subtitle (	B�AD
image (20.google.cloud.dialogflow.v2.Intent.Message.ImageB�A[
column_properties (2;.google.cloud.dialogflow.v2.Intent.Message.ColumnPropertiesB�AJ
rows (27.google.cloud.dialogflow.v2.Intent.Message.TableCardRowB�AQ
buttons (2;.google.cloud.dialogflow.v2.Intent.Message.BasicCard.ButtonB�A�
ColumnProperties
header (	r
horizontal_alignment (2O.google.cloud.dialogflow.v2.Intent.Message.ColumnProperties.HorizontalAlignmentB�A"b
HorizontalAlignment$
 HORIZONTAL_ALIGNMENT_UNSPECIFIED 
LEADING

CENTER
TRAILINGx
TableCardRowL
cells (28.google.cloud.dialogflow.v2.Intent.Message.TableCardCellB�A
divider_after (B�A
TableCardCell
text (	"�
Platform
PLATFORM_UNSPECIFIED 
FACEBOOK	
SLACK
TELEGRAM
KIK	
SKYPE
LINE	
VIBER
ACTIONS_ON_GOOGLE
GOOGLE_HANGOUTSB	
messageW
FollowupIntentInfo
followup_intent_name (	#
parent_followup_intent_name (	"t
WebhookState
WEBHOOK_STATE_UNSPECIFIED 
WEBHOOK_STATE_ENABLED*
&WEBHOOK_STATE_ENABLED_FOR_SLOT_FILLING:P�AM
 dialogflow.googleapis.com/Intent)projects/{project}/agent/intents/{intent}"�
ListIntentsRequest8
parent (	B(�A�A" dialogflow.googleapis.com/Intent
language_code (	B�A@
intent_view (2&.google.cloud.dialogflow.v2.IntentViewB�A
	page_size (B�A

page_token (	B�A"c
ListIntentsResponse3
intents (2".google.cloud.dialogflow.v2.Intent
next_page_token (	"�
GetIntentRequest6
name (	B(�A�A"
 dialogflow.googleapis.com/Intent
language_code (	B�A@
intent_view (2&.google.cloud.dialogflow.v2.IntentViewB�A"�
CreateIntentRequest8
parent (	B(�A�A" dialogflow.googleapis.com/Intent7
intent (2".google.cloud.dialogflow.v2.IntentB�A
language_code (	B�A@
intent_view (2&.google.cloud.dialogflow.v2.IntentViewB�A"�
UpdateIntentRequest7
intent (2".google.cloud.dialogflow.v2.IntentB�A
language_code (	B�A4
update_mask (2.google.protobuf.FieldMaskB�A@
intent_view (2&.google.cloud.dialogflow.v2.IntentViewB�A"M
DeleteIntentRequest6
name (	B(�A�A"
 dialogflow.googleapis.com/Intent"�
BatchUpdateIntentsRequest8
parent (	B(�A�A" dialogflow.googleapis.com/Intent
intent_batch_uri (	H F
intent_batch_inline (2\'.google.cloud.dialogflow.v2.IntentBatchH 
language_code (	B�A4
update_mask (2.google.protobuf.FieldMaskB�A@
intent_view (2&.google.cloud.dialogflow.v2.IntentViewB�AB
intent_batch"Q
BatchUpdateIntentsResponse3
intents (2".google.cloud.dialogflow.v2.Intent"�
BatchDeleteIntentsRequest8
parent (	B(�A�A" dialogflow.googleapis.com/Intent8
intents (2".google.cloud.dialogflow.v2.IntentB�A"B
IntentBatch3
intents (2".google.cloud.dialogflow.v2.Intent*?

IntentView
INTENT_VIEW_UNSPECIFIED 
INTENT_VIEW_FULL2�
Intents�
ListIntents..google.cloud.dialogflow.v2.ListIntentsRequest/.google.cloud.dialogflow.v2.ListIntentsResponse"M���\'%/v2/{parent=projects/*/agent}/intents�Aparent�Aparent,language_code�
	GetIntent,.google.cloud.dialogflow.v2.GetIntentRequest".google.cloud.dialogflow.v2.Intent"I���\'%/v2/{name=projects/*/agent/intents/*}�Aname�Aname,language_code�
CreateIntent/.google.cloud.dialogflow.v2.CreateIntentRequest".google.cloud.dialogflow.v2.Intent"c���/"%/v2/{parent=projects/*/agent}/intents:intent�Aparent,intent�Aparent,intent,language_code�
UpdateIntent/.google.cloud.dialogflow.v2.UpdateIntentRequest".google.cloud.dialogflow.v2.Intent"v���62,/v2/{intent.name=projects/*/agent/intents/*}:intent�Aintent,language_code�A intent,language_code,update_mask�
DeleteIntent/.google.cloud.dialogflow.v2.DeleteIntentRequest.google.protobuf.Empty"4���\'*%/v2/{name=projects/*/agent/intents/*}�Aname�
BatchUpdateIntents5.google.cloud.dialogflow.v2.BatchUpdateIntentsRequest.google.longrunning.Operation"����6"1/v2/{parent=projects/*/agent}/intents:batchUpdate:*�Aparent,intent_batch_uri�Aparent,intent_batch_inline�AO
5google.cloud.dialogflow.v2.BatchUpdateIntentsResponsegoogle.protobuf.Struct�
BatchDeleteIntents5.google.cloud.dialogflow.v2.BatchDeleteIntentsRequest.google.longrunning.Operation"���6"1/v2/{parent=projects/*/agent}/intents:batchDelete:*�Aparent,intents�A/
google.protobuf.Emptygoogle.protobuf.Structx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BIntentProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

