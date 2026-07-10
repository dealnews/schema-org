<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RsvpResponseType.
 *
 * RsvpResponseType is an enumeration type whose instances represent responding
 * to an RSVP request.
 *
 * @see https://schema.org/RsvpResponseType
 */
class RsvpResponseType extends Enumeration {

    public const SCHEMA_TYPE = 'RsvpResponseType';

    public const RSVP_RESPONSE_MAYBE = 'https://schema.org/RsvpResponseMaybe';
    public const RSVP_RESPONSE_NO = 'https://schema.org/RsvpResponseNo';
    public const RSVP_RESPONSE_YES = 'https://schema.org/RsvpResponseYes';
}
