<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Person.
 *
 * A person (alive, dead, undead, or fictional).
 *
 * @see https://schema.org/Person
 */
class Person extends Thing {

    public const SCHEMA_TYPE = 'Person';

    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/additionalName
     */
    public string|array|null $additionalName = null;

    /**
     * Physical address of the item.
     *
     * @var PostalAddress|string|PostalAddress[]|string[]|null
     *
     * @see https://schema.org/address
     */
    public PostalAddress|string|array|null $address = null;

    /**
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     *
     * @var Organization|Organization[]|null
     *
     * @see https://schema.org/affiliation
     */
    public Organization|array|null $affiliation = null;

    /**
     * An organization that the person is an alumni of.
     *
     * @var EducationalOrganization|Organization|EducationalOrganization[]|Organization[]|null
     *
     * @see https://schema.org/alumniOf
     */
    public EducationalOrganization|Organization|array|null $alumniOf = null;

    /**
     * An award won by or for this item.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/award
     */
    public string|array|null $award = null;

    /**
     * Date of birth.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/birthDate
     */
    public string|array|null $birthDate = null;

    /**
     * The place where the person was born.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/birthPlace
     */
    public Place|array|null $birthPlace = null;

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
     * A child of the person.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/children
     */
    public Person|array|null $children = null;

    /**
     * A colleague of the person.
     *
     * @var Person|string|Person[]|string[]|null
     *
     * @see https://schema.org/colleague
     */
    public Person|string|array|null $colleague = null;

    /**
     * A contact point for a person or organization.
     *
     * @var ContactPoint|ContactPoint[]|null
     *
     * @see https://schema.org/contactPoint
     */
    public ContactPoint|array|null $contactPoint = null;

    /**
     * Date of death.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/deathDate
     */
    public string|array|null $deathDate = null;

    /**
     * The place where the person died.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/deathPlace
     */
    public Place|array|null $deathPlace = null;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business
     * person.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/duns
     */
    public string|array|null $duns = null;

    /**
     * Email address.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/email
     */
    public string|array|null $email = null;

    /**
     * Family name. In the U.S., the last name of a Person.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/familyName
     */
    public string|array|null $familyName = null;

    /**
     * The fax number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/faxNumber
     */
    public string|array|null $faxNumber = null;

    /**
     * The most generic uni-directional social relation.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/follows
     */
    public Person|array|null $follows = null;

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/funder
     */
    public Organization|Person|array|null $funder = null;

    /**
     * Given name. In the U.S., the first name of a Person.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/givenName
     */
    public string|array|null $givenName = null;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/globalLocationNumber
     */
    public string|array|null $globalLocationNumber = null;

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
     * The Person's occupation. For past professions, use Role for expressing
     * dates.
     *
     * @var Occupation|Occupation[]|null
     *
     * @see https://schema.org/hasOccupation
     */
    public Occupation|array|null $hasOccupation = null;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @var OfferCatalog|OfferCatalog[]|null
     *
     * @see https://schema.org/hasOfferCatalog
     */
    public OfferCatalog|array|null $hasOfferCatalog = null;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @var Place|Place[]|null
     *
     * @see https://schema.org/hasPOS
     */
    public Place|array|null $hasPOS = null;

    /**
     * The height of the item.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/height
     */
    public string|QuantitativeValue|array|null $height = null;

    /**
     * A contact location for a person's residence.
     *
     * @var ContactPoint|Place|ContactPoint[]|Place[]|null
     *
     * @see https://schema.org/homeLocation
     */
    public ContactPoint|Place|array|null $homeLocation = null;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/honorificPrefix
     */
    public string|array|null $honorificPrefix = null;

    /**
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/honorificSuffix
     */
    public string|array|null $honorificSuffix = null;

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @var InteractionCounter|InteractionCounter[]|null
     *
     * @see https://schema.org/interactionStatistic
     */
    public InteractionCounter|array|null $interactionStatistic = null;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/isicV4
     */
    public string|array|null $isicV4 = null;

    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @var DefinedTerm|string|DefinedTerm[]|string[]|null
     *
     * @see https://schema.org/jobTitle
     */
    public DefinedTerm|string|array|null $jobTitle = null;

    /**
     * The most generic bi-directional social/work relation.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/knows
     */
    public Person|array|null $knows = null;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a
     * topic that is known about - suggesting possible expertise but not implying
     * it. We do not distinguish skill levels here, or relate this to educational
     * content, events, objectives or [[JobPosting]] descriptions.
     *
     * @var string|Thing|string[]|Thing[]|null
     *
     * @see https://schema.org/knowsAbout
     */
    public string|Thing|array|null $knowsAbout = null;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @var Offer|Offer[]|null
     *
     * @see https://schema.org/makesOffer
     */
    public Offer|array|null $makesOffer = null;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization
     * belongs.
     *
     * @var string|Organization|ProgramMembership|string[]|Organization[]|ProgramMembership[]|null
     *
     * @see https://schema.org/memberOf
     */
    public string|Organization|ProgramMembership|array|null $memberOf = null;

    /**
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/naics
     */
    public string|array|null $naics = null;

    /**
     * Nationality of the person.
     *
     * @var Country|Country[]|null
     *
     * @see https://schema.org/nationality
     */
    public Country|array|null $nationality = null;

    /**
     * The total financial value of the person as calculated by subtracting the
     * total value of liabilities from the total value of assets.
     *
     * @var MonetaryAmount|PriceSpecification|MonetaryAmount[]|PriceSpecification[]|null
     *
     * @see https://schema.org/netWorth
     */
    public MonetaryAmount|PriceSpecification|array|null $netWorth = null;

    /**
     * Things owned by the organization or person.
     *
     * @var Thing|Thing[]|null
     *
     * @see https://schema.org/owns
     */
    public Thing|array|null $owns = null;

    /**
     * A parent of this person.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/parent
     */
    public Person|array|null $parent = null;

    /**
     * Event that this person is a performer or participant in.
     *
     * @var Event|Event[]|null
     *
     * @see https://schema.org/performerIn
     */
    public Event|array|null $performerIn = null;

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
     * @var CreativeWork|string|CreativeWork[]|string[]|null
     *
     * @see https://schema.org/publishingPrinciples
     */
    public CreativeWork|string|array|null $publishingPrinciples = null;

    /**
     * The most generic familial relation.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/relatedTo
     */
    public Person|array|null $relatedTo = null;

    /**
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @var Demand|Demand[]|null
     *
     * @see https://schema.org/seeks
     */
    public Demand|array|null $seeks = null;

    /**
     * A sibling of the person.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/sibling
     */
    public Person|array|null $sibling = null;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion
     * expressing a competency that is either claimed by a person, an organization
     * or desired or required to fulfill a role or to work in an occupation.
     *
     * @var DefinedTerm|string|DefinedTerm[]|string[]|null
     *
     * @see https://schema.org/skills
     */
    public DefinedTerm|string|array|null $skills = null;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate
     * sponsor of an event.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/sponsor
     */
    public Organization|Person|array|null $sponsor = null;

    /**
     * The person's spouse.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/spouse
     */
    public Person|array|null $spouse = null;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or
     * the CIF/NIF in Spain.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/taxID
     */
    public string|array|null $taxID = null;

    /**
     * The telephone number.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/telephone
     */
    public string|array|null $telephone = null;

    /**
     * The value-added Tax ID of the organization or person with national prefix
     * (for example IT123456789). Can also be described as [[iso6523Code]] with
     * proper prefix.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/vatID
     */
    public string|array|null $vatID = null;

    /**
     * The weight of the product or person.
     *
     * @var string|QuantitativeValue|string[]|QuantitativeValue[]|null
     *
     * @see https://schema.org/weight
     */
    public string|QuantitativeValue|array|null $weight = null;

    /**
     * A contact location for a person's place of work.
     *
     * @var ContactPoint|Place|ContactPoint[]|Place[]|null
     *
     * @see https://schema.org/workLocation
     */
    public ContactPoint|Place|array|null $workLocation = null;

    /**
     * Organizations that the person works for.
     *
     * @var Organization|Organization[]|null
     *
     * @see https://schema.org/worksFor
     */
    public Organization|array|null $worksFor = null;
}
