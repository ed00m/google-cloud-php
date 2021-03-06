<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the UpdateTopic method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.UpdateTopicRequest</code>
 */
class UpdateTopicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The updated topic object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Topic topic = 1;</code>
     */
    private $topic = null;
    /**
     * Indicates which fields in the provided topic to update. Must be specified
     * and non-empty. Note that if `update_mask` contains
     * "message_storage_policy" then the new value will be determined based on the
     * policy configured at the project or organization level. The
     * `message_storage_policy` must not be set in the `topic` provided above.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The updated topic object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Topic topic = 1;</code>
     * @return \Google\Cloud\PubSub\V1\Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The updated topic object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Topic topic = 1;</code>
     * @param \Google\Cloud\PubSub\V1\Topic $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\Topic::class);
        $this->topic = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided topic to update. Must be specified
     * and non-empty. Note that if `update_mask` contains
     * "message_storage_policy" then the new value will be determined based on the
     * policy configured at the project or organization level. The
     * `message_storage_policy` must not be set in the `topic` provided above.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Indicates which fields in the provided topic to update. Must be specified
     * and non-empty. Note that if `update_mask` contains
     * "message_storage_policy" then the new value will be determined based on the
     * policy configured at the project or organization level. The
     * `message_storage_policy` must not be set in the `topic` provided above.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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

