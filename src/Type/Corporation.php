<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Corporation.
 *
 * Organization: A business corporation.
 *
 * @see https://schema.org/Corporation
 */
class Corporation extends Organization {

    public const SCHEMA_TYPE = 'Corporation';

    /**
     * The exchange traded instrument associated with a Corporation object. The
     * tickerSymbol is expressed as an exchange and an instrument name separated by
     * a space character. For the exchange component of the tickerSymbol attribute,
     * we recommend using the controlled vocabulary of Market Identifier Codes
     * (MIC) specified in ISO 15022.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/tickerSymbol
     */
    public string|array|null $tickerSymbol = null;
}
