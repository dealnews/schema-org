<?php

declare(strict_types=1);

namespace DealNews\SchemaOrg\Type;

/**
 * GameServer.
 *
 * Server that provides game interaction in a multiplayer game.
 *
 * @see https://schema.org/GameServer
 */
class GameServer extends Intangible {

    public const SCHEMA_TYPE = 'GameServer';

    /**
     * Video game which is played on this server.
     *
     * @var VideoGame|VideoGame[]|null
     *
     * @see https://schema.org/game
     */
    public VideoGame|array|null $game = null;

    /**
     * Number of players on the server.
     *
     * @var int|int[]|null
     *
     * @see https://schema.org/playersOnline
     */
    public int|array|null $playersOnline = null;

    /**
     * Status of a game server.
     *
     * @var string|string[]|null
     *
     * @see https://schema.org/serverStatus
     */
    public string|array|null $serverStatus = null;
}
