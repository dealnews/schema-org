<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Dataset.
 *
 * A body of structured information describing some topic(s) of interest.
 *
 * @see https://schema.org/Dataset
 */
class Dataset extends CreativeWork {

    public const SCHEMA_TYPE = 'Dataset';

    /**
     * A downloadable form of this dataset, at a specific location, in a specific
     * format. This property can be repeated if different variations are available.
     * There is no expectation that different downloadable distributions must
     * contain exactly equivalent information (see also
     * [DCAT](https://www.w3.org/TR/vocab-dcat-3/#Class:Distribution) on this
     * point). Different distributions might include or exclude different subsets
     * of the entire dataset, for example.
     *
     * @var DataDownload|DataDownload[]|null
     *
     * @see https://schema.org/distribution
     */
    public DataDownload|array|null $distribution = null;

    /**
     * A data catalog which contains this dataset.
     *
     * @var DataCatalog|DataCatalog[]|null
     *
     * @see https://schema.org/includedInDataCatalog
     */
    public DataCatalog|array|null $includedInDataCatalog = null;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/issn
     */
    public string|array|null $issn = null;
}
