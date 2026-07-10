<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * InteractionCounter.
 *
 * A summary of how users have interacted with this CreativeWork. In most
 * cases, authors will use a subtype to specify the specific type of
 * interaction.
 *
 * @see https://schema.org/InteractionCounter
 */
class InteractionCounter extends StructuredValue {

    public const SCHEMA_TYPE = 'InteractionCounter';

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from January to *December*. For media, including audio and
     * video, it's the time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string|array|null
     *
     * @see https://schema.org/endTime
     */
    public string|array|null $endTime = null;

    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     * @var SoftwareApplication|WebSite|array|null
     *
     * @see https://schema.org/interactionService
     */
    public SoftwareApplication|WebSite|array|null $interactionService = null;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use
     * [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the
     * most specific Action.
     *
     * @var Action|array|null
     *
     * @see https://schema.org/interactionType
     */
    public Action|array|null $interactionType = null;

    /**
     * The location of, for example, where an event is happening, where an
     * organization is located, or where an action takes place.
     *
     * @var Place|PostalAddress|string|array|null
     *
     * @see https://schema.org/location
     */
    public Place|PostalAddress|string|array|null $location = null;

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from *January* to December. For media, including audio and
     * video, it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @var string|array|null
     *
     * @see https://schema.org/startTime
     */
    public string|array|null $startTime = null;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication.
     *
     * @var int|array|null
     *
     * @see https://schema.org/userInteractionCount
     */
    public int|array|null $userInteractionCount = null;
}
