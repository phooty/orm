<?php
namespace Phooty\Orm\Entities;

use Phooty\Orm\Support\Traits\HasUuid;
use Phooty\Orm\Support\Traits\WasCreatedOn;

/**
 * @Entity @Table(name="players")
 */
class Player
{
    use HasUuid, WasCreatedOn;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $surname;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $given_names;

    /**
     * Prior players with the same name
     *
     * @Column(type="integer")
     * @var int
     */
    protected $prior_players;

    /**
     * The Player's roster assignments
     * 
     * @OneToMany(targetEntity="RosterPlayer", mappedBy="player", indexBy="symbol")
     * @var RosterPlayer[]
     */
    protected $rosters;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    /**
     * Get the value of surname
     *
     * @return  string
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @param  string  $surname
     *
     * @return  self
     */ 
    public function setSurname(string $surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of given_names
     *
     * @return  string
     */ 
    public function getGivenNames()
    {
        return $this->given_names;
    }

    /**
     * Set the value of given_names
     *
     * @param  string  $given_names
     *
     * @return  self
     */ 
    public function setGivenNames(string $given_names)
    {
        $this->given_names = $given_names;

        return $this;
    }

    /**
     * Get prior players with the same name
     *
     * @return  int
     */ 
    public function getPriorPlayers()
    {
        return $this->prior_players;
    }

    /**
     * Set prior players with the same name
     *
     * @param  int  $prior_players  Prior players with the same name
     *
     * @return  self
     */ 
    public function setPriorPlayers(int $prior_players)
    {
        $this->prior_players = $prior_players;

        return $this;
    }

    /**
     * Get the Player's roster assignments
     *
     * @return  RosterPlayer[]
     */ 
    public function getRosters()
    {
        return $this->rosters;
    }
}
