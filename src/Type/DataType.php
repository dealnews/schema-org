<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

use DealNews\SchemaOrg\JsonLdNode;

/**
 * DataType.
 *
 * The basic data types such as Integers, Strings, etc.
 *
 * @see https://schema.org/DataType
 */
class DataType extends JsonLdNode {

    public const SCHEMA_TYPE = 'DataType';

    public const BOOLEAN = 'https://schema.org/Boolean';
    public const DATE = 'https://schema.org/Date';
    public const DATE_TIME = 'https://schema.org/DateTime';
    public const NUMBER = 'https://schema.org/Number';
    public const QUANTITY = 'https://schema.org/Quantity';
    public const TEXT = 'https://schema.org/Text';
    public const TIME = 'https://schema.org/Time';
}
