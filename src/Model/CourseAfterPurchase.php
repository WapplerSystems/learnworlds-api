<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class CourseAfterPurchase extends ArrayObject
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
     * Type of the after purchase navigation
     *
     * @var string
     */
    protected $type;
    /**
     * After purchase navigation URL for this course, leading to a school page or a given URL
     *
     * @var CourseAfterPurchaseSettings
     */
    protected $settings;

    /**
     * Type of the after purchase navigation
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the after purchase navigation
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * After purchase navigation URL for this course, leading to a school page or a given URL
     *
     * @return CourseAfterPurchaseSettings
     */
    public function getSettings(): CourseAfterPurchaseSettings
    {
        return $this->settings;
    }

    /**
     * After purchase navigation URL for this course, leading to a school page or a given URL
     *
     * @param CourseAfterPurchaseSettings $settings
     *
     * @return self
     */
    public function setSettings(CourseAfterPurchaseSettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}
