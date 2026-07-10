<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * HowToDirection.
 *
 * A direction indicating a single action to do in the instructions for how to
 * achieve a result.
 *
 * @see https://schema.org/HowToDirection
 */
class HowToDirection extends CreativeWork {

    public const SCHEMA_TYPE = 'HowToDirection';

    /**
     * A media object representing the circumstances after performing this
     * direction.
     *
     * @var MediaObject|string|array|null
     *
     * @see https://schema.org/afterMedia
     */
    public MediaObject|string|array|null $afterMedia = null;

    /**
     * A media object representing the circumstances before performing this
     * direction.
     *
     * @var MediaObject|string|array|null
     *
     * @see https://schema.org/beforeMedia
     */
    public MediaObject|string|array|null $beforeMedia = null;

    /**
     * A media object representing the circumstances while performing this
     * direction.
     *
     * @var MediaObject|string|array|null
     *
     * @see https://schema.org/duringMedia
     */
    public MediaObject|string|array|null $duringMedia = null;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist'
     * in a list of 'artists').
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/item
     */
    public Thing|array|null $item = null;

    /**
     * A link to the ListItem that follows the current one.
     *
     * @var ListItem|array|null
     *
     * @see https://schema.org/nextItem
     */
    public ListItem|array|null $nextItem = null;

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|array|null
     *
     * @see https://schema.org/performTime
     */
    public string|array|null $performTime = null;

    /**
     * The length of time it takes to prepare the items to be used in instructions
     * or a direction, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|array|null
     *
     * @see https://schema.org/prepTime
     */
    public string|array|null $prepTime = null;

    /**
     * A link to the ListItem that precedes the current one.
     *
     * @var ListItem|array|null
     *
     * @see https://schema.org/previousItem
     */
    public ListItem|array|null $previousItem = null;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions
     * or a direction.
     *
     * @var HowToSupply|string|array|null
     *
     * @see https://schema.org/supply
     */
    public HowToSupply|string|array|null $supply = null;

    /**
     * A sub property of instrument. An object used (but not consumed) when
     * performing instructions or a direction.
     *
     * @var HowToTool|string|array|null
     *
     * @see https://schema.org/tool
     */
    public HowToTool|string|array|null $tool = null;

    /**
     * The total time required to perform instructions or a direction (including
     * time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var string|array|null
     *
     * @see https://schema.org/totalTime
     */
    public string|array|null $totalTime = null;
}
