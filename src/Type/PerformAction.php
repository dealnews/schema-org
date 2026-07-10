<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * PerformAction.
 *
 * The act of participating in performance arts.
 *
 * @see https://schema.org/PerformAction
 */
class PerformAction extends PlayAction {

    public const SCHEMA_TYPE = 'PerformAction';

    /**
     * A sub property of location. The entertainment business where the action
     * occurred.
     *
     * @var EntertainmentBusiness|array|null
     *
     * @see https://schema.org/entertainmentBusiness
     */
    public EntertainmentBusiness|array|null $entertainmentBusiness = null;
}
