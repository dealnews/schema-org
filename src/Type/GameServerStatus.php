<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GameServerStatus.
 *
 * Status of a game server.
 *
 * @see https://schema.org/GameServerStatus
 */
class GameServerStatus extends StatusEnumeration {

    public const SCHEMA_TYPE = 'GameServerStatus';

    public const OFFLINE_PERMANENTLY = 'https://schema.org/OfflinePermanently';
    public const OFFLINE_TEMPORARILY = 'https://schema.org/OfflineTemporarily';
    public const ONLINE = 'https://schema.org/Online';
    public const ONLINE_FULL = 'https://schema.org/OnlineFull';
}
