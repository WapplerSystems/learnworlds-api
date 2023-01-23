<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UnitAnalytics extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Type of the learning activity
     *
     * @var string
     */
    protected $type;
    /**
     * Name of the learning activity
     *
     * @var string
     */
    protected $name;
    /**
     * Number of users that have completed this learning activity
     *
     * @var int
     */
    protected $usersCompleted;
    /**
     * Number of users that have viewed this learning activity
     *
     * @var int
     */
    protected $viewers;
    /**
     * Average study time in seconds
     *
     * @var float
     */
    protected $avgStudyTime;
    /**
     * Total study time in seconds
     *
     * @var float
     */
    protected $totalStudyTime;
    /**
     * Average score (%)
     *
     * @var float
     */
    protected $avgScoreRate;
    /**
     * Type of the learning activity
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of the learning activity
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Name of the learning activity
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the learning activity
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Number of users that have completed this learning activity
     *
     * @return int
     */
    public function getUsersCompleted() : int
    {
        return $this->usersCompleted;
    }
    /**
     * Number of users that have completed this learning activity
     *
     * @param int $usersCompleted
     *
     * @return self
     */
    public function setUsersCompleted(int $usersCompleted) : self
    {
        $this->initialized['usersCompleted'] = true;
        $this->usersCompleted = $usersCompleted;
        return $this;
    }
    /**
     * Number of users that have viewed this learning activity
     *
     * @return int
     */
    public function getViewers() : int
    {
        return $this->viewers;
    }
    /**
     * Number of users that have viewed this learning activity
     *
     * @param int $viewers
     *
     * @return self
     */
    public function setViewers(int $viewers) : self
    {
        $this->initialized['viewers'] = true;
        $this->viewers = $viewers;
        return $this;
    }
    /**
     * Average study time in seconds
     *
     * @return float
     */
    public function getAvgStudyTime() : float
    {
        return $this->avgStudyTime;
    }
    /**
     * Average study time in seconds
     *
     * @param float $avgStudyTime
     *
     * @return self
     */
    public function setAvgStudyTime(float $avgStudyTime) : self
    {
        $this->initialized['avgStudyTime'] = true;
        $this->avgStudyTime = $avgStudyTime;
        return $this;
    }
    /**
     * Total study time in seconds
     *
     * @return float
     */
    public function getTotalStudyTime() : float
    {
        return $this->totalStudyTime;
    }
    /**
     * Total study time in seconds
     *
     * @param float $totalStudyTime
     *
     * @return self
     */
    public function setTotalStudyTime(float $totalStudyTime) : self
    {
        $this->initialized['totalStudyTime'] = true;
        $this->totalStudyTime = $totalStudyTime;
        return $this;
    }
    /**
     * Average score (%)
     *
     * @return float
     */
    public function getAvgScoreRate() : float
    {
        return $this->avgScoreRate;
    }
    /**
     * Average score (%)
     *
     * @param float $avgScoreRate
     *
     * @return self
     */
    public function setAvgScoreRate(float $avgScoreRate) : self
    {
        $this->initialized['avgScoreRate'] = true;
        $this->avgScoreRate = $avgScoreRate;
        return $this;
    }
}