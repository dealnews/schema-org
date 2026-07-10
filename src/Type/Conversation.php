<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Conversation.
 *
 * One or more messages between organizations or people on a particular topic.
 * Individual messages can be linked to the conversation with isPartOf or
 * hasPart properties.
 *
 * @see https://schema.org/Conversation
 */
class Conversation extends CreativeWork {

    public const SCHEMA_TYPE = 'Conversation';
}
