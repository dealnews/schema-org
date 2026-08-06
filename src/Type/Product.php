<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Product.
 *
 * Any offered product or service. For example: a pair of shoes; a concert
 * ticket; the rental of a car; a haircut; or an episode of a TV show streamed
 * online.
 *
 * @see https://schema.org/Product
 */
class Product extends Thing {

    public const SCHEMA_TYPE = 'Product';

    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there is
     * no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @var PropertyValue|PropertyValue[]|null
     *
     * @see https://schema.org/additionalProperty
     */
    public PropertyValue|array|null $additionalProperty = null;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var AggregateRating|AggregateRating[]|null
     *
     * @see https://schema.org/aggregateRating
     */
    public AggregateRating|array|null $aggregateRating = null;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience|Audience[]|null
     *
     * @see https://schema.org/audience
     */
    public Audience|array|null $audience = null;

    /**
     * An award won by or for this item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/award
     */
    public string|array|null $award = null;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @var Brand|Organization|Brand[]|Organization[]|null
     *
     * @see https://schema.org/brand
     */
    public Brand|Organization|array|null $brand = null;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var string|Thing|string[]|Thing[]|null
     *
     * @see https://schema.org/category
     */
    public string|Thing|array|null $category = null;

    /**
     * The color of the product.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/color
     */
    public string|array|null $color = null;

    /**
     * The country of origin of something, including products as well as creative
     * works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle
     * offices of the production company or individual responsible for the movie.
     * For other kinds of [[CreativeWork]] it is difficult to provide fully general
     * guidance, and properties such as [[contentLocation]] and [[locationCreated]]
     * may be more applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot be
     * fully enumerated here.
     *
     * @var Country|Country[]|null
     *
     * @see https://schema.org/countryOfOrigin
     */
    public Country|array|null $countryOfOrigin = null;

    /**
     * The depth of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/depth
     */
    public string|QuantitativeValue|array|null $depth = null;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers.
     * The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C.
     * Company Prefix, Item Reference, and Check Digit used to identify trade
     * items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin12
     */
    public string|array|null $gtin12 = null;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers.
     * This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit
     * UPC codes can be converted into a GTIN-13 code by simply adding a preceding
     * zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin13
     */
    public string|array|null $gtin13 = null;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers.
     * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin)
     * for more details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin14
     */
    public string|array|null $gtin14 = null;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/gtin8
     */
    public string|array|null $gtin8 = null;

    /**
     * Certification information about a product, organization, service, place, or
     * person.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/hasCertification
     */
    public string|array|null $hasCertification = null;

    /**
     * The height of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/height
     */
    public string|QuantitativeValue|array|null $height = null;

    /**
     * A pointer to another product (or multiple products) for which this product
     * is an accessory or spare part.
     *
     * @var Product|Product[]|null
     *
     * @see https://schema.org/isAccessoryOrSparePartFor
     */
    public Product|array|null $isAccessoryOrSparePartFor = null;

    /**
     * A pointer to another product (or multiple products) for which this product
     * is a consumable.
     *
     * @var Product|Product[]|null
     *
     * @see https://schema.org/isConsumableFor
     */
    public Product|array|null $isConsumableFor = null;

    /**
     * Indicates whether this content is family friendly.
     *
     * @var bool|bool[]|null
     *
     * @see https://schema.org/isFamilyFriendly
     */
    public bool|array|null $isFamilyFriendly = null;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product|Service|Product[]|Service[]|null
     *
     * @see https://schema.org/isRelatedTo
     */
    public Product|Service|array|null $isRelatedTo = null;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product|Service|Product[]|Service[]|null
     *
     * @see https://schema.org/isSimilarTo
     */
    public Product|Service|array|null $isSimilarTo = null;

    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base product
     * from which this product is a variant. It is safe to infer that the variant
     * inherits all product features from the base model, unless defined locally.
     * This is not transitive. In the case of a [[ProductGroup]], the group
     * description also serves as a template, representing a set of Products that
     * vary on explicitly defined, specific dimensions only (so it defines both a
     * set of variants, as well as which values distinguish amongst those
     * variants). When used with [[ProductGroup]], this property can apply to any
     * [[Product]] included in the group.
     *
     * @var string|ProductModel|string[]|ProductModel[]|null
     *
     * @see https://schema.org/isVariantOf
     */
    public string|ProductModel|array|null $isVariantOf = null;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the
     * product or service, or the products or services included in the offer. Also
     * used for product return policies to specify the condition of products
     * accepted for returns.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/itemCondition
     */
    public string|array|null $itemCondition = null;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/keywords
     */
    public string|array|null $keywords = null;

    /**
     * An associated logo.
     *
     * @var ImageObject|string|ImageObject[]|string[]|null
     *
     * @see https://schema.org/logo
     */
    public ImageObject|string|array|null $logo = null;

    /**
     * The manufacturer of the product.
     *
     * @var Organization|Organization[]|null
     *
     * @see https://schema.org/manufacturer
     */
    public Organization|array|null $manufacturer = null;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @var Product|string|Product[]|string[]|null
     *
     * @see https://schema.org/material
     */
    public Product|string|array|null $material = null;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can be
     * from an external source. It is recommended to additionally provide strong
     * product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @var ProductModel|string|ProductModel[]|string[]|null
     *
     * @see https://schema.org/model
     */
    public ProductModel|string|array|null $model = null;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which
     * the offer refers.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/mpn
     */
    public string|array|null $mpn = null;

    /**
     * An offer to provide this item—for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an
     * event. Use [[businessFunction]] to indicate the kind of transaction offered,
     * i.e. sell, lease, etc. This property can also be used to describe a
     * [[Demand]]. While this property is listed as expected on a number of common
     * types, it can be used in others. In that case, using a second type, such as
     * Product or a subtype of Product, can clarify the nature of the offer.
     *
     * @var Demand|Offer|Demand[]|Offer[]|null
     *
     * @see https://schema.org/offers
     */
    public Demand|Offer|array|null $offers = null;

    /**
     * The product identifier, such as ISBN. For example: ``` meta
     * itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/productID
     */
    public string|array|null $productID = null;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/productionDate
     */
    public string|array|null $productionDate = null;

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/purchaseDate
     */
    public string|array|null $purchaseDate = null;

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/releaseDate
     */
    public string|array|null $releaseDate = null;

    /**
     * A review of the item.
     *
     * @var Review|Review[]|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/sku
     */
    public string|array|null $sku = null;

    /**
     * A slogan or motto associated with the item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/slogan
     */
    public string|array|null $slogan = null;

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
