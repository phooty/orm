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
     * @var float
     */
    protected $time_on_ground;

    /**
     * Get total kicks
     *
     * @return  int
     */ 
    public function getKicks()
    {
        return $this->kicks;
    }

    /**
     * Set total kicks
     *
     * @param  int  $kicks  Total kicks
     *
     * @return  self
     */ 
    public function setKicks(int $kicks)
    {
        $this->kicks = $kicks;

        return $this;
    }

    /**
     * Get total marks
     *
     * @return  int
     */ 
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Set total marks
     *
     * @param  int  $marks  Total marks
     *
     * @return  self
     */ 
    public function setMarks(int $marks)
    {
        $this->marks = $marks;

        return $this;
    }

    /**
     * Get total handballs
     *
     * @return  int
     */ 
    public function getHandballs()
    {
        return $this->handballs;
    }

    /**
     * Set total handballs
     *
     * @param  int  $handballs  Total handballs
     *
     * @return  self
     */ 
    public function setHandballs(int $handballs)
    {
        $this->handballs = $handballs;

        return $this;
    }

    /**
     * Get total disposals
     *
     * @return  int
     */ 
    public function getDisposals()
    {
        return $this->disposals;
    }

    /**
     * Set total disposals
     *
     * @param  int  $disposals  Total disposals
     *
     * @return  self
     */ 
    public function setDisposals(int $disposals)
    {
        $this->disposals = $disposals;

        return $this;
    }

    /**
     * Get total goals
     *
     * @return  int
     */ 
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set total goals
     *
     * @param  int  $goals  Total goals
     *
     * @return  self
     */ 
    public function setGoals(int $goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get total behinds
     *
     * @return  int
     */ 
    public function getBehinds()
    {
        return $this->behinds;
    }

    /**
     * Set total behinds
     *
     * @param  int  $behinds  Total behinds
     *
     * @return  self
     */ 
    public function setBehinds(int $behinds)
    {
        $this->behinds = $behinds;

        return $this;
    }

    /**
     * Get total hitouts
     *
     * @return  int
     */ 
    public function getHitouts()
    {
        return $this->hitouts;
    }

    /**
     * Set total hitouts
     *
     * @param  int  $hitouts  Total hitouts
     *
     * @return  self
     */ 
    public function setHitouts(int $hitouts)
    {
        $this->hitouts = $hitouts;

        return $this;
    }

    /**
     * Get total tackles
     *
     * @return  int
     */ 
    public function getTackles()
    {
        return $this->tackles;
    }

    /**
     * Set total tackles
     *
     * @param  int  $tackles  Total tackles
     *
     * @return  self
     */ 
    public function setTackles(int $tackles)
    {
        $this->tackles = $tackles;

        return $this;
    }

    /**
     * Get total rebound_50
     *
     * @return  int
     */ 
    public function getRebound50()
    {
        return $this->rebound_50;
    }

    /**
     * Set total rebound_50
     *
     * @param  int  $rebound_50  Total rebound_50
     *
     * @return  self
     */ 
    public function setRebound50(int $rebound_50)
    {
        $this->rebound_50 = $rebound_50;

        return $this;
    }

    /**
     * Get total inside_50
     *
     * @return  int
     */ 
    public function getInside50()
    {
        return $this->inside_50;
    }

    /**
     * Set total inside_50
     *
     * @param  int  $inside_50  Total inside_50
     *
     * @return  self
     */ 
    public function setInside50(int $inside_50)
    {
        $this->inside_50 = $inside_50;

        return $this;
    }

    /**
     * Get total clearances
     *
     * @return  int
     */ 
    public function getClearances()
    {
        return $this->clearances;
    }

    /**
     * Set total clearances
     *
     * @param  int  $clearances  Total clearances
     *
     * @return  self
     */ 
    public function setClearances(int $clearances)
    {
        $this->clearances = $clearances;

        return $this;
    }

    /**
     * Get total clangers
     *
     * @return  int
     */ 
    public function getClangers()
    {
        return $this->clangers;
    }

    /**
     * Set total clangers
     *
     * @param  int  $clangers  Total clangers
     *
     * @return  self
     */ 
    public function setClangers(int $clangers)
    {
        $this->clangers = $clangers;

        return $this;
    }

    /**
     * Get total frees_for
     *
     * @return  int
     */ 
    public function getFreesFor()
    {
        return $this->frees_for;
    }

    /**
     * Set total frees_for
     *
     * @param  int  $frees_for  Total frees_for
     *
     * @return  self
     */ 
    public function setFreesFor(int $frees_for)
    {
        $this->frees_for = $frees_for;

        return $this;
    }

    /**
     * Get total frees_against
     *
     * @return  int
     */ 
    public function getFreesAgainst()
    {
        return $this->frees_against;
    }

    /**
     * Set total frees_against
     *
     * @param  int  $frees_against  Total frees_against
     *
     * @return  self
     */ 
    public function setFreesAgainst(int $frees_against)
    {
        $this->frees_against = $frees_against;

        return $this;
    }

    /**
     * Get total brownlow_votes
     *
     * @return  int
     */ 
    public function getBrownlowVotes()
    {
        return $this->brownlow_votes;
    }

    /**
     * Set total brownlow_votes
     *
     * @param  int  $brownlow_votes  Total brownlow_votes
     *
     * @return  self
     */ 
    public function setBrownlowVotes(int $brownlow_votes)
    {
        $this->brownlow_votes = $brownlow_votes;

        return $this;
    }

    /**
     * Get total contested_possessions
     *
     * @return  int
     */ 
    public function getContestedPossessions()
    {
        return $this->contested_possessions;
    }

    /**
     * Set total contested_possessions
     *
     * @param  int  $contested_possessions  Total contested_possessions
     *
     * @return  self
     */ 
    public function setContestedPossessions(int $contested_possessions)
    {
        $this->contested_possessions = $contested_possessions;

        return $this;
    }

    /**
     * Get total uncontested_possessions
     *
     * @return  int
     */ 
    public function getUncontestedPossessions()
    {
        return $this->uncontested_possessions;
    }

    /**
     * Set total uncontested_possessions
     *
     * @param  int  $uncontested_possessions  Total uncontested_possessions
     *
     * @return  self
     */ 
    public function setUncontestedPossessions(int $uncontested_possessions)
    {
        $this->uncontested_possessions = $uncontested_possessions;

        return $this;
    }

    /**
     * Get total contested_marks
     *
     * @return  int
     */ 
    public function getContestedMarks()
    {
        return $this->contested_marks;
    }

    /**
     * Set total contested_marks
     *
     * @param  int  $contested_marks  Total contested_marks
     *
     * @return  self
     */ 
    public function setContestedMarks(int $contested_marks)
    {
        $this->contested_marks = $contested_marks;

        return $this;
    }

    /**
     * Get total marks_inside_50
     *
     * @return  int
     */ 
    public function getMarksInside50()
    {
        return $this->marks_inside_50;
    }

    /**
     * Set total marks_inside_50
     *
     * @param  int  $marks_inside_50  Total marks_inside_50
     *
     * @return  self
     */ 
    public function setMarksInside50(int $marks_inside_50)
    {
        $this->marks_inside_50 = $marks_inside_50;

        return $this;
    }

    /**
     * Get total one_percenters
     *
     * @return  int
     */ 
    public function getOnePercenters()
    {
        return $this->one_percenters;
    }

    /**
     * Set total one_percenters
     *
     * @param  int  $one_percenters  Total one_percenters
     *
     * @return  self
     */ 
    public function setOnePercenters(int $one_percenters)
    {
        $this->one_percenters = $one_percenters;

        return $this;
    }

    /**
     * Get total bounces
     *
     * @return  int
     */ 
    public function getBounces()
    {
        return $this->bounces;
    }

    /**
     * Set total bounces
     *
     * @param  int  $bounces  Total bounces
     *
     * @return  self
     */ 
    public function setBounces(int $bounces)
    {
        $this->bounces = $bounces;

        return $this;
    }

    /**
     * Get total goal_assists
     *
     * @return  int
     */ 
    public function getGoalAssists()
    {
        return $this->goal_assists;
    }

    /**
     * Set total goal_assists
     *
     * @param  int  $goal_assists  Total goal_assists
     *
     * @return  self
     */ 
    public function setGoalAssists(int $goal_assists)
    {
        $this->goal_assists = $goal_assists;

        return $this;
    }

    /**
     * Get time on ground
     *
     * @return  float
     */ 
    public function getTimeOnGround()
    {
        return $this->time_on_ground;
    }

    /**
     * Set time on ground
     *
     * @param  float  $time_on_ground  Time on ground
     *
     * @return  self
     */ 
    public function setTimeOnGround(float $time_on_ground)
    {
        $this->time_on_ground = $time_on_ground;

        return $this;
    }
}
