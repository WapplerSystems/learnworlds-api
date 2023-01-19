<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class SubscriptionPlanProducts extends ArrayObject
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
     * Unique identifier of each course
     *
     * @var string[]
     */
    protected $courses;

    /**
     * Unique identifier of each course
     *
     * @return string[]
     */
    public function getCourses(): array
    {
        return $this->courses;
    }

    /**
     * Unique identifier of each course
     *
     * @param string[] $courses
     *
     * @return self
     */
    public function setCourses(array $courses): self
    {
        $this->initialized['courses'] = true;
        $this->courses = $courses;
        return $this;
    }
}
