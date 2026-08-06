<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * VoteAction.
 *
 * The act of expressing a preference from a fixed/finite/structured set of
 * choices/options.
 *
 * @see https://schema.org/VoteAction
 */
class VoteAction extends ChooseAction {

    public const SCHEMA_TYPE = 'VoteAction';

    /**
     * A sub property of object. The candidate subject of this action.
     *
     * @var Person|Person[]|null
     *
     * @see https://schema.org/candidate
     */
    public Person|array|null $candidate = null;
}
