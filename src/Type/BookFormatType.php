<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * BookFormatType.
 *
 * The publication format of the book.
 *
 * @see https://schema.org/BookFormatType
 */
class BookFormatType extends Enumeration {

    public const SCHEMA_TYPE = 'BookFormatType';

    public const AUDIOBOOK_FORMAT = 'https://schema.org/AudiobookFormat';
    public const E_BOOK = 'https://schema.org/EBook';
    public const HARDCOVER = 'https://schema.org/Hardcover';
    public const PAMPHLET = 'https://schema.org/Pamphlet';
    public const PAPERBACK = 'https://schema.org/Paperback';
}
