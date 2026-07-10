<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * DataCatalog.
 *
 * A collection of datasets.
 *
 * @see https://schema.org/DataCatalog
 */
class DataCatalog extends CreativeWork {

    public const SCHEMA_TYPE = 'DataCatalog';

    /**
     * A dataset contained in this catalog.
     *
     * @var Dataset|array|null
     *
     * @see https://schema.org/dataset
     */
    public Dataset|array|null $dataset = null;
}
