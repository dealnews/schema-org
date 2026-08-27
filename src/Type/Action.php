<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Action.
 *
 * An action performed by a direct agent and indirect participants upon a
 * direct object. Optionally happens at a location with the help of an
 * inanimate instrument. The execution of the action may produce a result.
 * Specific action sub-type documentation specifies the exact expectation of
 * each argument/role.
 *
 * See also [blog
 * post](https://blog.schema.org/2014/04/16/announcing-schema-org-actions/) and
 * [Actions overview document](https://schema.org/docs/actions.html).
 *
 * @see https://schema.org/Action
 */
class Action extends Thing {

    public const SCHEMA_TYPE = 'Action';

    /**
     * Description of the process by which the action was performed.
     *
     * @var HowTo|HowTo[]|null
     *
     * @see https://schema.org/actionProcess
     */
    public HowTo|array|null $actionProcess = null;

    /**
     * Indicates the current disposition of the Action.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/actionStatus
     */
    public string|array|null $actionStatus = null;

    /**
     * The direct performer or driver of the action (animate or inanimate). E.g.
     * *John* wrote a book.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/agent
     */
    public Organization|Person|array|null $agent = null;

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
     * @var string|string[]|null
     *
     * @see https://schema.org/endTime
     */
    public string|array|null $endTime = null;

    /**
     * For failed actions, more information on the cause of the failure. Consider
     * using the Error type.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/error
     */
    public Thing|array|null $error = null;

    /**
     * The object that helped the agent perform the action. E.g. John wrote a book
     * with *a pen*.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/instrument
     */
    public Thing|array|null $instrument = null;

    /**
     * The location of, for example, where an event is happening, where an
     * organization is located, or where an action takes place.
     *
     * @var Place|PostalAddress|string|VirtualLocation|Place[]|PostalAddress[]|string[]|VirtualLocation[]|null
     *
     * @see https://schema.org/location
     */
    public Place|PostalAddress|string|VirtualLocation|array|null $location = null;

    /**
     * The object upon which the action is carried out, whose state is kept intact
     * or changed. Also known as the semantic roles patient, affected or undergoer
     * (which change their state) or theme (which doesn't). E.g. John read *a
     * book*.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/object
     */
    public Thing|array|null $object = null;

    /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote
     * a book with *Steve*.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/participant
     */
    public Organization|Person|array|null $participant = null;

    /**
     * The result produced in the action. E.g. John wrote *a book*.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/result
     */
    public Thing|array|null $result = null;

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
     * @var string|string[]|null
     *
     * @see https://schema.org/startTime
     */
    public string|array|null $startTime = null;

    /**
     * Indicates a target EntryPoint, or url, for an Action.
     *
     * @var EntryPoint|string|EntryPoint[]|string[]|null
     *
     * @see https://schema.org/target
     */
    public EntryPoint|string|array|null $target = null;
}
