<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GamePlayMode.
 *
 * Indicates whether this game is multi-player, co-op or single-player.
 *
 * @see https://schema.org/GamePlayMode
 */
class GamePlayMode extends Enumeration {

    public const SCHEMA_TYPE = 'GamePlayMode';

    public const CO_OP = 'https://schema.org/CoOp';
    public const MULTI_PLAYER = 'https://schema.org/MultiPlayer';
    public const SINGLE_PLAYER = 'https://schema.org/SinglePlayer';
}
