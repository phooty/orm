<?php
namespace Phooty\Orm\Entities;

use Phooty\Orm\Support\Traits\HasUuid;
use Phooty\Orm\Support\Traits\WasCreatedOn;

/**
 * @Entity @Table(name="roster_players")
 */
class RosterPlayer
{
    use HasUuid, WasCreatedOn;

    /**
     * The Player entity
     *
     * @ManyToOne(targetEntity="Player", inversedBy="rosters")
     * @var Player
     */
    protected $player;

    /**
     * The Team the player belongs to
     *
     * @ManyToOne(targetEntity="Team", inversedBy="players")
     * @var Team
     */
    protected $team;

    /**
     * The RosterPlayer's season stats
     *
     * @OneToOne(targetEntity="SeasonStats")
     * @JoinColumn(name="season_stats_id", referencedColumnName="id")
     * @var SeasonStats
     */
    protected $season_stats;

    /**
     * The season the player is rostered for
     *
     * @Column(type="integer")
     * @var int
     */
    protected $season;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    /**
     * Get the Player entity
     *
     * @return  Player
     */ 
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set the Player entity
     *
     * @param  Player  $player  The Player entity
     *
     * @return  self
     */ 
    public function setPlayer(Player $player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get the Roster the player belongs to
     *
     * @return  Team
     */ 
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set the Team the player belongs to
     *
     * @param  Team  $Team  The Team the player belongs to
     *
     * @return  self
     */ 
    public function setTeam(Team $team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get the season the player is rostered for
     *
     * @return  int
     */ 
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set the season the player is rostered for
     *
     * @param  int  $season  The season the player is rostered for
     *
     * @return  self
     */ 
    public function setSeason(int $season)
    {
        $this->season = $season;

        return $this;
    }
}
