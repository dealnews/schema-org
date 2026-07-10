<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * Landform.
 *
 * A landform or physical feature.  Landform elements include mountains,
 * plains, lakes, rivers, seascape and oceanic waterbody interface features
 * such as bays, peninsulas, seas and so forth, including sub-aqueous terrain
 * features such as submersed mountain ranges, volcanoes, and the great ocean
 * basins.
 *
 * @see https://schema.org/Landform
 */
class Landform extends Place {

    public const SCHEMA_TYPE = 'Landform';
}
