<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * MobileApplication.
 *
 * A software application designed specifically to work well on a mobile device
 * such as a telephone.
 *
 * @see https://schema.org/MobileApplication
 */
class MobileApplication extends SoftwareApplication {

    public const SCHEMA_TYPE = 'MobileApplication';

    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an
     * application may only work on a specific carrier network).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/carrierRequirements
     */
    public string|array|null $carrierRequirements = null;
}
