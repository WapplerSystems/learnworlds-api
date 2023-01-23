<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserProgressWithCourseProgressPerSectionUnitItem extends \ArrayObject
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
     * Unique identifier of the section
     *
     * @var string
     */
    protected $sectionId;
    /**
     * User progress data per unit
     *
     * @var UserProgressWithCourseProgressPerSectionUnitItemUnitsItem[]
     */
    protected $units;
    /**
     * Unique identifier of the section
     *
     * @return string
     */
    public function getSectionId() : string
    {
        return $this->sectionId;
    }
    /**
     * Unique identifier of the section
     *
     * @param string $sectionId
     *
     * @return self
     */
    public function setSectionId(string $sectionId) : self
    {
        $this->initialized['sectionId'] = true;
        $this->sectionId = $sectionId;
        return $this;
    }
    /**
     * User progress data per unit
     *
     * @return UserProgressWithCourseProgressPerSectionUnitItemUnitsItem[]
     */
    public function getUnits() : array
    {
        return $this->units;
    }
    /**
     * User progress data per unit
     *
     * @param UserProgressWithCourseProgressPerSectionUnitItemUnitsItem[] $units
     *
     * @return self
     */
    public function setUnits(array $units) : self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
}