<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * VisualArtwork.
 *
 * A work of art that is primarily visual in character.
 *
 * @see https://schema.org/VisualArtwork
 */
class VisualArtwork extends CreativeWork {

    public const SCHEMA_TYPE = 'VisualArtwork';

    /**
     * The number of copies when multiple copies of a piece of artwork are produced
     * - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total
     * number of copies (in this example "20").
     *
     * @var int|string|int[]|string[]|null
     *
     * @see https://schema.org/artEdition
     */
    public int|string|array|null $artEdition = null;

    /**
     * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
     * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil,
     * Mixed Media, etc.)
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/artMedium
     */
    public string|array|null $artMedium = null;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage,
     * etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/artform
     */
    public string|array|null $artform = null;

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board,
     * etc.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/artworkSurface
     */
    public string|array|null $artworkSurface = null;

    /**
     * The depth of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/depth
     */
    public string|QuantitativeValue|array|null $depth = null;

    /**
     * The height of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/height
     */
    public string|QuantitativeValue|array|null $height = null;

    /**
     * The weight of the product or person.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/weight
     */
    public string|QuantitativeValue|array|null $weight = null;

    /**
     * The width of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/width
     */
    public string|QuantitativeValue|array|null $width = null;
}
