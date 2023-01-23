<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class BundleProducts extends \ArrayObject
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
     * Unique identifier of each course
     *
     * @var mixed[][]
     */
    protected $courses;
    /**
     * Unique identifier of each course
     *
     * @return mixed[][]
     */
    public function getCourses() : array
    {
        return $this->courses;
    }
    /**
     * Unique identifier of each course
     *
     * @param mixed[][] $courses
     *
     * @return self
     */
    public function setCourses(array $courses) : self
    {
        $this->initialized['courses'] = true;
        $this->courses = $courses;
        return $this;
    }
}