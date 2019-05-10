<?php
namespace Phooty\Orm\Entities;

use Phooty\Orm\Support\Traits\HasUuid;
use Phooty\Orm\Support\Traits\WasCreatedOn;
use Phooty\Orm\Support\Traits\AggregatesStats;

/**
 * @Entity @Table(name="season_stats")
 */
class SeasonStats
{
    use HasUuid, WasCreatedOn, AggregatesStats;

    /**
     * The RosterPlayer the stats belong to
     *
     * @OneToOne(targetEntity="RosterPlayer")
     * @JoinColumn(name="roster_player_id", referencedColumnName="id")
     * @var RosterPlayer
     */
    protected $roster_player;
}