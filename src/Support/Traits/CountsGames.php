<?php
namespace Phooty\Orm\Support\Traits;

/**
 * Tracks games played
 */
trait CountsGames
{
    /**
     * Total games
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $games;

    /**
     * Get total games
     *
     * @return  int
     */ 
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Set total games
     *
     * @param  int  $games  Total games
     *
     * @return  self
     */ 
    public function setGames(int $games)
    {
        $this->games = $games;

        return $this;
    }
}
