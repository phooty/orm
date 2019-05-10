<?php
namespace Phooty\Orm\Entities;

use Phooty\Orm\Support\Traits\HasUuid;
use Phooty\Orm\Support\Traits\WasCreatedOn;

/**
 * @Entity @Table(name="teams")
 */
class Team
{
    use HasUuid, WasCreatedOn;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $city;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @Column(type="string", unique=true)
     * @var string
     */
    protected $short;

    /**
     * The team's rostered players.
     *
     * @OneToMany(targetEntity="RosterPlayer", mappedBy="team", indexBy="symbol")
     * @var RosterPlayer[]
     */
    protected $players;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    /**
     * Get the value of city
     *
     * @return  string
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param  string  $city
     *
     * @return  self
     */ 
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of short
     *
     * @return  string
     */ 
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set the value of short
     *
     * @param  string  $short
     *
     * @return  self
     */ 
    public function setShort(string $short)
    {
        $this->short = $short;

        return $this;
    }
}
