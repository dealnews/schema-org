<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Audience.
 *
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see https://schema.org/Audience
 */
class Audience extends Intangible {

    public const SCHEMA_TYPE = 'Audience';

    /**
     * The target group associated with a given audience (e.g. veterans, car
     * owners, musicians, etc.).
     *
     * @var string|array|null
     *
     * @see https://schema.org/audienceType
     */
    public string|array|null $audienceType = null;

    /**
     * The geographic area associated with the audience.
     *
     * @var AdministrativeArea|array|null
     *
     * @see https://schema.org/geographicArea
     */
    public AdministrativeArea|array|null $geographicArea = null;
}
