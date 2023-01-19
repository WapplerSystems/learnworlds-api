<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class UserProgressProgressPerSectionUnitItem extends ArrayObject
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
    public function getSectionId(): string
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
    public function setSectionId(string $sectionId): self
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
    public function getUnits(): array
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
    public function setUnits(array $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
}
