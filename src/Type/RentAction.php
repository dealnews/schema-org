<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RentAction.
 *
 * The act of giving money in return for temporary use, but not ownership, of
 * an object such as a vehicle or property. For example, an agent rents a
 * property from a landlord in exchange for a periodic payment.
 *
 * @see https://schema.org/RentAction
 */
class RentAction extends TradeAction {

    public const SCHEMA_TYPE = 'RentAction';

    /**
     * A sub property of participant. The owner of the real estate property.
     *
     * @var Organization|Person|array|null
     *
     * @see https://schema.org/landlord
     */
    public Organization|Person|array|null $landlord = null;

    /**
     * A sub property of participant. The real estate agent involved in the action.
     *
     * @var RealEstateAgent|array|null
     *
     * @see https://schema.org/realEstateAgent
     */
    public RealEstateAgent|array|null $realEstateAgent = null;
}
