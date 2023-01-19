<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class UserProgressWithCourseProgressPerSectionUnitItemUnitsItem extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Name of the section where the learning activity belongs
     *
     * @var string
     */
    protected $unitSectionName;
    /**
     * Unique identifier of the learning activity
     *
     * @var string
     */
    protected $unitId;
    /**
     * Name of the learning activity
     *
     * @var string
     */
    protected $unitName;
    /**
     * Type of the learning activity
     *
     * @var string
     */
    protected $unitType;
    /**
     * Status of the learning activity
     *
     * @var string
     */
    protected $unitStatus;
    /**
     * Duration of the learning activity in seconds
     *
     * @var mixed
     */
    protected $unitDuration;
    /**
     * Time spend by user on learning activity in seconds
     *
     * @var int
     */
    protected $timeOnUnit;
    /**
     * User score on learning activity
     *
     * @var mixed
     */
    protected $scoreOnUnit;
    /**
     * Progress rate of user on learning activity
     *
     * @var int
     */
    protected $unitProgressRate;

    /**
     * Name of the section where the learning activity belongs
     *
     * @return string
     */
    public function getUnitSectionName(): string
    {
        return $this->unitSectionName;
    }

    /**
     * Name of the section where the learning activity belongs
     *
     * @param string $unitSectionName
     *
     * @return self
     */
    public function setUnitSectionName(string $unitSectionName): self
    {
        $this->initialized['unitSectionName'] = true;
        $this->unitSectionName = $unitSectionName;
        return $this;
    }

    /**
     * Unique identifier of the learning activity
     *
     * @return string
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }

    /**
     * Unique identifier of the learning activity
     *
     * @param string $unitId
     *
     * @return self
     */
    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;
        return $this;
    }

    /**
     * Name of the learning activity
     *
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * Name of the learning activity
     *
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * Type of the learning activity
     *
     * @return string
     */
    public function getUnitType(): string
    {
        return $this->unitType;
    }

    /**
     * Type of the learning activity
     *
     * @param string $unitType
     *
     * @return self
     */
    public function setUnitType(string $unitType): self
    {
        $this->initialized['unitType'] = true;
        $this->unitType = $unitType;
        return $this;
    }

    /**
     * Status of the learning activity
     *
     * @return string
     */
    public function getUnitStatus(): string
    {
        return $this->unitStatus;
    }

    /**
     * Status of the learning activity
     *
     * @param string $unitStatus
     *
     * @return self
     */
    public function setUnitStatus(string $unitStatus): self
    {
        $this->initialized['unitStatus'] = true;
        $this->unitStatus = $unitStatus;
        return $this;
    }

    /**
     * Duration of the learning activity in seconds
     *
     * @return mixed
     */
    public function getUnitDuration()
    {
        return $this->unitDuration;
    }

    /**
     * Duration of the learning activity in seconds
     *
     * @param mixed $unitDuration
     *
     * @return self
     */
    public function setUnitDuration($unitDuration): self
    {
        $this->initialized['unitDuration'] = true;
        $this->unitDuration = $unitDuration;
        return $this;
    }

    /**
     * Time spend by user on learning activity in seconds
     *
     * @return int
     */
    public function getTimeOnUnit(): int
    {
        return $this->timeOnUnit;
    }

    /**
     * Time spend by user on learning activity in seconds
     *
     * @param int $timeOnUnit
     *
     * @return self
     */
    public function setTimeOnUnit(int $timeOnUnit): self
    {
        $this->initialized['timeOnUnit'] = true;
        $this->timeOnUnit = $timeOnUnit;
        return $this;
    }

    /**
     * User score on learning activity
     *
     * @return mixed
     */
    public function getScoreOnUnit()
    {
        return $this->scoreOnUnit;
    }

    /**
     * User score on learning activity
     *
     * @param mixed $scoreOnUnit
     *
     * @return self
     */
    public function setScoreOnUnit($scoreOnUnit): self
    {
        $this->initialized['scoreOnUnit'] = true;
        $this->scoreOnUnit = $scoreOnUnit;
        return $this;
    }

    /**
     * Progress rate of user on learning activity
     *
     * @return int
     */
    public function getUnitProgressRate(): int
    {
        return $this->unitProgressRate;
    }

    /**
     * Progress rate of user on learning activity
     *
     * @param int $unitProgressRate
     *
     * @return self
     */
    public function setUnitProgressRate(int $unitProgressRate): self
    {
        $this->initialized['unitProgressRate'] = true;
        $this->unitProgressRate = $unitProgressRate;
        return $this;
    }
}
