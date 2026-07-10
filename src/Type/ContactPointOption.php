<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ContactPointOption.
 *
 * Enumerated options related to a ContactPoint.
 *
 * @see https://schema.org/ContactPointOption
 */
class ContactPointOption extends Enumeration {

    public const SCHEMA_TYPE = 'ContactPointOption';

    public const HEARING_IMPAIRED_SUPPORTED = 'https://schema.org/HearingImpairedSupported';
    public const TOLL_FREE = 'https://schema.org/TollFree';
}
