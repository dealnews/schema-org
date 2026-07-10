<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * ImageObject.
 *
 * An image file.
 *
 * @see https://schema.org/ImageObject
 */
class ImageObject extends MediaObject {

    public const SCHEMA_TYPE = 'ImageObject';

    /**
     * The caption for this object. For downloadable machine formats (closed
     * caption, subtitles etc.) use MediaObject and indicate the
     * [[encodingFormat]].
     *
     * @var MediaObject|string|array|null
     *
     * @see https://schema.org/caption
     */
    public MediaObject|string|array|null $caption = null;

    /**
     * exif data for this object.
     *
     * @var PropertyValue|string|array|null
     *
     * @see https://schema.org/exifData
     */
    public PropertyValue|string|array|null $exifData = null;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @var bool|array|null
     *
     * @see https://schema.org/representativeOfPage
     */
    public bool|array|null $representativeOfPage = null;
}
