<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserProgressProgressPerSectionUnitItem extends \ArrayObject
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
     * @var UserProgressProgressPerSectionUnitItemUnitsItem[]
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
     * @return UserProgressProgressPerSectionUnitItemUnitsItem[]
     */
    public function getUnits() : array
    {
        return $this->units;
    }
    /**
     * User progress data per unit
     *
     * @param UserProgressProgressPerSectionUnitItemUnitsItem[] $units
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