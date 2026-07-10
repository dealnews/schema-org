<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Answer.
 *
 * An answer offered to a question; perhaps correct, perhaps opinionated or
 * wrong.
 *
 * @see https://schema.org/Answer
 */
class Answer extends Comment {

    public const SCHEMA_TYPE = 'Answer';
}
