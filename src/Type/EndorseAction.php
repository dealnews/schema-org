<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * EndorseAction.
 *
 * An agent approves/certifies/likes/supports/sanctions an object.
 *
 * @see https://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction {

    public const SCHEMA_TYPE = 'EndorseAction';

    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @var Organization|Person|Organization[]|Person[]|null
     *
     * @see https://schema.org/endorsee
     */
    public Organization|Person|array|null $endorsee = null;
}
