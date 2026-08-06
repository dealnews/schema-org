<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RsvpAction.
 *
 * The act of notifying an event organizer as to whether you expect to attend
 * the event.
 *
 * @see https://schema.org/RsvpAction
 */
class RsvpAction extends InformAction {

    public const SCHEMA_TYPE = 'RsvpAction';

    /**
     * If responding yes, the number of guests who will attend in addition to the
     * invitee.
     *
     * @var int|float|int[]|float[]|null
     *
     * @see https://schema.org/additionalNumberOfGuests
     */
    public int|float|array|null $additionalNumberOfGuests = null;

    /**
     * Comments, typically from users.
     *
     * @var Comment|Comment[]|null
     *
     * @see https://schema.org/comment
     */
    public Comment|array|null $comment = null;

    /**
     * The response (yes, no, maybe) to the RSVP.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/rsvpResponse
     */
    public string|array|null $rsvpResponse = null;
}
