<?php
namespace Phooty\Orm\Support\Traits;

trait AggregatesStats
{
    /**
     * Total kicks
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $kicks;

    /**
     * Total marks
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $marks;

    /**
     * Total handballs
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $handballs;

    /**
     * Total disposals
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $disposals;

    /**
     * Total goals
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $goals;

    /**
     * Total behinds
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $behinds;

    /**
     * Total hitouts
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $hitouts;

    /**
     * Total tackles
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $tackles;

    /**
     * Total rebound_50
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $rebound_50;

    /**
     * Total inside_50
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $inside_50;

    /**
     * Total clearances
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $clearances;

    /**
     * Total clangers
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $clangers;

    /**
     * Total frees_for
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $frees_for;

    /**
     * Total frees_against
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $frees_against;

    /**
     * Total brownlow_votes
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $brownlow_votes;

    /**
     * Total contested_possessions
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $contested_possessions;

    /**
     * Total uncontested_possessions
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $uncontested_possessions;

    /**
     * Total contested_marks
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $contested_marks;

    /**
     * Total marks_inside_50
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $marks_inside_50;

    /**
     * Total one_percenters
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $one_percenters;

    /**
     * Total bounces
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $bounces;

    /**
     * Total goal_assists
     * 
     * @Column(type="integer", options={"default": 0})
     * @var int
     */
    protected $goal_assists;

    /**
     * Time on ground
     * 
     * @Column(type="decimal", options={"default": 0})
     * @var int
     */
    protected $time_on_ground;
}
