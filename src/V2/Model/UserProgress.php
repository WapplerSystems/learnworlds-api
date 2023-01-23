<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserProgress extends \ArrayObject
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
     * Status of user progress
     *
     * @var string
     */
    protected $status;
    /**
     * Progress rate (%)
     *
     * @var float
     */
    protected $progressRate;
    /**
     * Average score percentage
     *
     * @var float
     */
    protected $averageScoreRate;
    /**
     * Time spent on the course in seconds
     *
     * @var int
     */
    protected $timeOnCourse;
    /**
     * Total number of course learning activities 
     *
     * @var int
     */
    protected $totalUnits;
    /**
     * Total number of completed course learning activities by the user 
     *
     * @var int
     */
    protected $completedUnits;
    /**
     * User progress data per section/learning activity
     *
     * @var UserProgressProgressPerSectionUnitItem[]
     */
    protected $progressPerSectionUnit;
    /**
     * Status of user progress
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Status of user progress
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Progress rate (%)
     *
     * @return float
     */
    public function getProgressRate() : float
    {
        return $this->progressRate;
    }
    /**
     * Progress rate (%)
     *
     * @param float $progressRate
     *
     * @return self
     */
    public function setProgressRate(float $progressRate) : self
    {
        $this->initialized['progressRate'] = true;
        $this->progressRate = $progressRate;
        return $this;
    }
    /**
     * Average score percentage
     *
     * @return float
     */
    public function getAverageScoreRate() : float
    {
        return $this->averageScoreRate;
    }
    /**
     * Average score percentage
     *
     * @param float $averageScoreRate
     *
     * @return self
     */
    public function setAverageScoreRate(float $averageScoreRate) : self
    {
        $this->initialized['averageScoreRate'] = true;
        $this->averageScoreRate = $averageScoreRate;
        return $this;
    }
    /**
     * Time spent on the course in seconds
     *
     * @return int
     */
    public function getTimeOnCourse() : int
    {
        return $this->timeOnCourse;
    }
    /**
     * Time spent on the course in seconds
     *
     * @param int $timeOnCourse
     *
     * @return self
     */
    public function setTimeOnCourse(int $timeOnCourse) : self
    {
        $this->initialized['timeOnCourse'] = true;
        $this->timeOnCourse = $timeOnCourse;
        return $this;
    }
    /**
     * Total number of course learning activities 
     *
     * @return int
     */
    public function getTotalUnits() : int
    {
        return $this->totalUnits;
    }
    /**
     * Total number of course learning activities 
     *
     * @param int $totalUnits
     *
     * @return self
     */
    public function setTotalUnits(int $totalUnits) : self
    {
        $this->initialized['totalUnits'] = true;
        $this->totalUnits = $totalUnits;
        return $this;
    }
    /**
     * Total number of completed course learning activities by the user 
     *
     * @return int
     */
    public function getCompletedUnits() : int
    {
        return $this->completedUnits;
    }
    /**
     * Total number of completed course learning activities by the user 
     *
     * @param int $completedUnits
     *
     * @return self
     */
    public function setCompletedUnits(int $completedUnits) : self
    {
        $this->initialized['completedUnits'] = true;
        $this->completedUnits = $completedUnits;
        return $this;
    }
    /**
     * User progress data per section/learning activity
     *
     * @return UserProgressProgressPerSectionUnitItem[]
     */
    public function getProgressPerSectionUnit() : array
    {
        return $this->progressPerSectionUnit;
    }
    /**
     * User progress data per section/learning activity
     *
     * @param UserProgressProgressPerSectionUnitItem[] $progressPerSectionUnit
     *
     * @return self
     */
    public function setProgressPerSectionUnit(array $progressPerSectionUnit) : self
    {
        $this->initialized['progressPerSectionUnit'] = true;
        $this->progressPerSectionUnit = $progressPerSectionUnit;
        return $this;
    }
}