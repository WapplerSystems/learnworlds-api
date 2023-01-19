<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class Enrollment extends ArrayObject
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
     * Date the enrollment was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Date the enrollment expires, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $expires;
    /**
     *
     *
     * @var Course
     */
    protected $course;

    /**
     * Date the enrollment was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the enrollment was created, in UNIX timestamp format
     *
     * @param float $created
     *
     * @return self
     */
    public function setCreated(float $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * Date the enrollment expires, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Date the enrollment expires, in UNIX timestamp format
     *
     * @param mixed $expires
     *
     * @return self
     */
    public function setExpires($expires): self
    {
        $this->initialized['expires'] = true;
        $this->expires = $expires;
        return $this;
    }

    /**
     *
     *
     * @return Course
     */
    public function getCourse(): Course
    {
        return $this->course;
    }

    /**
     *
     *
     * @param Course $course
     *
     * @return self
     */
    public function setCourse(Course $course): self
    {
        $this->initialized['course'] = true;
        $this->course = $course;
        return $this;
    }
}
