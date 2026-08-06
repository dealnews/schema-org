<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PostalCodeRangeSpecification.
 *
 * Indicates a range of postal codes, usually defined as the set of valid codes
 * between [[postalCodeBegin]] and [[postalCodeEnd]], inclusively.
 *
 * @see https://schema.org/PostalCodeRangeSpecification
 */
class PostalCodeRangeSpecification extends StructuredValue {

    public const SCHEMA_TYPE = 'PostalCodeRangeSpecification';

    /**
     * First postal code in a range (included).
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/postalCodeBegin
     */
    public string|array|null $postalCodeBegin = null;

    /**
     * Last postal code in the range (included). Needs to be after
     * [[postalCodeBegin]].
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/postalCodeEnd
     */
    public string|array|null $postalCodeEnd = null;
}
