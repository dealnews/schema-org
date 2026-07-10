<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * TextObject.
 *
 * A text file. The text can be unformatted or contain markup, html, etc.
 *
 * @see https://schema.org/TextObject
 */
class TextObject extends MediaObject {

    public const SCHEMA_TYPE = 'TextObject';
}
