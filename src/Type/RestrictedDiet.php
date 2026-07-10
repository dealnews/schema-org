<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * RestrictedDiet.
 *
 * A diet restricted to certain foods or preparations for cultural, religious,
 * health or lifestyle reasons.
 *
 * @see https://schema.org/RestrictedDiet
 */
class RestrictedDiet extends Enumeration {

    public const SCHEMA_TYPE = 'RestrictedDiet';

    public const DIABETIC_DIET = 'https://schema.org/DiabeticDiet';
    public const GLUTEN_FREE_DIET = 'https://schema.org/GlutenFreeDiet';
    public const HALAL_DIET = 'https://schema.org/HalalDiet';
    public const HINDU_DIET = 'https://schema.org/HinduDiet';
    public const KOSHER_DIET = 'https://schema.org/KosherDiet';
    public const LOW_CALORIE_DIET = 'https://schema.org/LowCalorieDiet';
    public const LOW_FAT_DIET = 'https://schema.org/LowFatDiet';
    public const LOW_LACTOSE_DIET = 'https://schema.org/LowLactoseDiet';
    public const LOW_SALT_DIET = 'https://schema.org/LowSaltDiet';
    public const VEGAN_DIET = 'https://schema.org/VeganDiet';
    public const VEGETARIAN_DIET = 'https://schema.org/VegetarianDiet';
}
