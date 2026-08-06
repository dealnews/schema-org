<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Book.
 *
 * A book.
 *
 * @see https://schema.org/Book
 */
class Book extends CreativeWork {

    public const SCHEMA_TYPE = 'Book';

    /**
     * The edition of the book.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/bookEdition
     */
    public string|array|null $bookEdition = null;

    /**
     * The format of the book.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/bookFormat
     */
    public string|array|null $bookFormat = null;

    /**
     * The illustrator of the book.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/illustrator
     */
    public Person|array|null $illustrator = null;

    /**
     * The ISBN of the book.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/isbn
     */
    public string|array|null $isbn = null;

    /**
     * The number of pages in the book.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/numberOfPages
     */
    public int|array|null $numberOfPages = null;
}
