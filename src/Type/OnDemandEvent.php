<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * OnDemandEvent.
 *
 * A publication event, e.g. catch-up TV or radio podcast, during which a
 * program is available on-demand.
 *
 * @see https://schema.org/OnDemandEvent
 */
class OnDemandEvent extends PublicationEvent {

    public const SCHEMA_TYPE = 'OnDemandEvent';
}
