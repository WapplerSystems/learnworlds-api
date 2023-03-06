<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CourseContent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier of the course
     *
     * @var string
     */
    protected $id;
    /**
     * Title of the course
     *
     * @var string
     */
    protected $title;
    /**
     * Sections of the course
     *
     * @var CourseContentSectionsItem[]
     */
    protected $sections;
    /**
     * Unique identifier of the course
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the course
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Title of the course
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the course
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Sections of the course
     *
     * @return CourseContentSectionsItem[]
     */
    public function getSections() : array
    {
        return $this->sections;
    }
    /**
     * Sections of the course
     *
     * @param CourseContentSectionsItem[] $sections
     *
     * @return self
     */
    public function setSections(array $sections) : self
    {
        $this->initialized['sections'] = true;
        $this->sections = $sections;
        return $this;
    }
}
