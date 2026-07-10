<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Organization.
 *
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @see https://schema.org/Organization
 */
class Organization extends Thing {

    public const SCHEMA_TYPE = 'Organization';

    /**
     * The payment method(s) that are accepted in general by an organization, or
     * for some specific demand or offer.
     *
     * @var LoanOrCredit|PaymentMethod|string|array|null
     *
     * @see https://schema.org/acceptedPaymentMethod
     */
    public LoanOrCredit|PaymentMethod|string|array|null $acceptedPaymentMethod = null;

    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string|array|null
     *
     * @see https://schema.org/address
     */
    public PostalAddress|string|array|null $address = null;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var AggregateRating|array|null
     *
     * @see https://schema.org/aggregateRating
     */
    public AggregateRating|array|null $aggregateRating = null;

    /**
     * Alumni of an organization.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/alumni
     */
    public Person|array|null $alumni = null;

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @var AdministrativeArea|GeoShape|Place|string|array|null
     *
     * @see https://schema.org/areaServed
     */
    public AdministrativeArea|GeoShape|Place|string|array|null $areaServed = null;

    /**
     * An award won by or for this item.
     *
     * @var string|array|null
     *
     * @see https://schema.org/award
     */
    public string|array|null $award = null;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @var Brand|Organization|array|null
     *
     * @see https://schema.org/brand
     */
    public Brand|Organization|array|null $brand = null;

    /**
     * The official registration information of a business including the
     * organization that issued it such as Company House or Chamber of Commerce in
     * form of a Certification.
     *
     * @var string|array|null
     *
     * @see https://schema.org/companyRegistration
     */
    public string|array|null $companyRegistration = null;

    /**
     * A contact point for a person or organization.
     *
     * @var ContactPoint|array|null
     *
     * @see https://schema.org/contactPoint
     */
    public ContactPoint|array|null $contactPoint = null;

    /**
     * A relationship between an organization and a department of that
     * organization, also described as an organization (allowing different urls,
     * logos, opening hours). For example: a store with a pharmacy, or a bakery
     * with a cafe.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/department
     */
    public Organization|array|null $department = null;

    /**
     * The date that this organization was dissolved.
     *
     * @var string|array|null
     *
     * @see https://schema.org/dissolutionDate
     */
    public string|array|null $dissolutionDate = null;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business
     * person.
     *
     * @var string|array|null
     *
     * @see https://schema.org/duns
     */
    public string|array|null $duns = null;

    /**
     * Email address.
     *
     * @var string|array|null
     *
     * @see https://schema.org/email
     */
    public string|array|null $email = null;

    /**
     * Someone working for this organization.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/employee
     */
    public Person|array|null $employee = null;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @var Event|array|null
     *
     * @see https://schema.org/event
     */
    public Event|array|null $event = null;

    /**
     * The fax number.
     *
     * @var string|array|null
     *
     * @see https://schema.org/faxNumber
     */
    public string|array|null $faxNumber = null;

    /**
     * A person or organization who founded this organization.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/founder
     */
    public Organization|Person|array|null $founder = null;

    /**
     * The date that this organization was founded.
     *
     * @var string|array|null
     *
     * @see https://schema.org/foundingDate
     */
    public string|array|null $foundingDate = null;

    /**
     * The place where the Organization was founded.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/foundingLocation
     */
    public Place|array|null $foundingLocation = null;

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/funder
     */
    public Organization|Person|array|null $funder = null;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @var string|array|null
     *
     * @see https://schema.org/globalLocationNumber
     */
    public string|array|null $globalLocationNumber = null;

    /**
     * Certification information about a product, organization, service, place, or
     * person.
     *
     * @var string|array|null
     *
     * @see https://schema.org/hasCertification
     */
    public string|array|null $hasCertification = null;

    /**
     * MemberProgram offered by an Organization, for example an eCommerce merchant
     * or an airline.
     *
     * @var string|array|null
     *
     * @see https://schema.org/hasMemberProgram
     */
    public string|array|null $hasMemberProgram = null;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog|array|null
     *
     * @see https://schema.org/hasOfferCatalog
     */
    public OfferCatalog|array|null $hasOfferCatalog = null;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Place|array|null
     *
     * @see https://schema.org/hasPOS
     */
    public Place|array|null $hasPOS = null;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @var InteractionCounter|array|null
     *
     * @see https://schema.org/interactionStatistic
     */
    public InteractionCounter|array|null $interactionStatistic = null;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var string|array|null
     *
     * @see https://schema.org/isicV4
     */
    public string|array|null $isicV4 = null;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @var string|array|null
     *
     * @see https://schema.org/keywords
     */
    public string|array|null $keywords = null;

    /**
     * The legal address of an organization which acts as the officially registered
     * address used for legal and tax purposes. The legal address can be different
     * from the place of operations of a business and other addresses can be part
     * of an organization.
     *
     * @var PostalAddress|array|null
     *
     * @see https://schema.org/legalAddress
     */
    public PostalAddress|array|null $legalAddress = null;

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @var string|array|null
     *
     * @see https://schema.org/legalName
     */
    public string|array|null $legalName = null;

    /**
     * One or multiple persons who represent this organization legally such as CEO
     * or sole administrator.
     *
     * @var Person|array|null
     *
     * @see https://schema.org/legalRepresentative
     */
    public Person|array|null $legalRepresentative = null;

    /**
     * An organization identifier that uniquely identifies a legal entity as
     * defined in ISO 17442.
     *
     * @var string|array|null
     *
     * @see https://schema.org/leiCode
     */
    public string|array|null $leiCode = null;

    /**
     * The location of, for example, where an event is happening, where an
     * organization is located, or where an action takes place.
     *
     * @var Place|PostalAddress|string|array|null
     *
     * @see https://schema.org/location
     */
    public Place|PostalAddress|string|array|null $location = null;

    /**
     * An associated logo.
     *
     * @var ImageObject|string|array|null
     *
     * @see https://schema.org/logo
     */
    public ImageObject|string|array|null $logo = null;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Offer|array|null
     *
     * @see https://schema.org/makesOffer
     */
    public Offer|array|null $makesOffer = null;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/member
     */
    public Organization|Person|array|null $member = null;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization
     * belongs.
     *
     * @var string|Organization|ProgramMembership|array|null
     *
     * @see https://schema.org/memberOf
     */
    public string|Organization|ProgramMembership|array|null $memberOf = null;

    /**
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @var string|array|null
     *
     * @see https://schema.org/naics
     */
    public string|array|null $naics = null;

    /**
     * The number of employees in an organization, e.g. business.
     *
     * @var QuantitativeValue|array|null
     *
     * @see https://schema.org/numberOfEmployees
     */
    public QuantitativeValue|array|null $numberOfEmployees = null;

    /**
     * Things owned by the organization or person.
     *
     * @var Thing|array|null
     *
     * @see https://schema.org/owns
     */
    public Thing|array|null $owns = null;

    /**
     * The larger organization that this organization is a [[subOrganization]] of,
     * if any.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/parentOrganization
     */
    public Organization|array|null $parentOrganization = null;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a
     * document describing the editorial principles of an [[Organization]] (or
     * individual, e.g. a [[Person]] writing a blog) that relate to their
     * activities as a publisher, e.g. ethics or diversity policies. When applied
     * to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the
     * party primarily responsible for the creation of the [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language,
     * sometimes related information (e.g. indicating a [[funder]]) can be
     * expressed using schema.org terminology.
     *
     * @var CreativeWork|string|array|null
     *
     * @see https://schema.org/publishingPrinciples
     */
    public CreativeWork|string|array|null $publishingPrinciples = null;

    /**
     * A review of the item.
     *
     * @var Review|array|null
     *
     * @see https://schema.org/review
     */
    public Review|array|null $review = null;

    /**
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @var Demand|array|null
     *
     * @see https://schema.org/seeks
     */
    public Demand|array|null $seeks = null;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion
     * expressing a competency that is either claimed by a person, an organization
     * or desired or required to fulfill a role or to work in an occupation.
     *
     * @var string|array|null
     *
     * @see https://schema.org/skills
     */
    public string|array|null $skills = null;

    /**
     * A slogan or motto associated with the item.
     *
     * @var string|array|null
     *
     * @see https://schema.org/slogan
     */
    public string|array|null $slogan = null;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate
     * sponsor of an event.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/sponsor
     */
    public Organization|Person|array|null $sponsor = null;

    /**
     * A relationship between two organizations where the first includes the
     * second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     *
     * @var Organization|array|null
     *
     * @see https://schema.org/subOrganization
     */
    public Organization|array|null $subOrganization = null;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or
     * the CIF/NIF in Spain.
     *
     * @var string|array|null
     *
     * @see https://schema.org/taxID
     */
    public string|array|null $taxID = null;

    /**
     * The telephone number.
     *
     * @var string|array|null
     *
     * @see https://schema.org/telephone
     */
    public string|array|null $telephone = null;

    /**
     * The value-added Tax ID of the organization or person with national prefix
     * (for example IT123456789). Can also be described as [[iso6523Code]] with
     * proper prefix.
     *
     * @var string|array|null
     *
     * @see https://schema.org/vatID
     */
    public string|array|null $vatID = null;
}
