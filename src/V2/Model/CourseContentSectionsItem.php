<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CourseContentSectionsItem extends \ArrayObject
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
    protected $id;
    /**
     * Title of the section
     *
     * @var string
     */
    protected $title;
    /**
     * Description of the section
     *
     * @var mixed
     */
    protected $description;
    /**
     * Access type of the section
     *
     * @var string
     */
    protected $access;
    /**
     * Drip feed details of the content. Null value indicates that the course has drip feed option as disabled
     *
     * @var mixed
     */
    protected $drip;
    /**
     * Learning activities of section
     *
     * @var CourseContentSectionsItemLearningUnitsItem[]
     */
    protected $learningUnits;
    /**
     * Unique identifier of the section
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the section
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
     * Title of the section
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the section
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
     * Description of the section
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Description of the section
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Access type of the section
     *
     * @return string
     */
    public function getAccess() : string
    {
        return $this->access;
    }
    /**
     * Access type of the section
     *
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access) : self
    {
        $this->initialized['access'] = true;
        $this->access = $access;
        return $this;
    }
    /**
     * Drip feed details of the content. Null value indicates that the course has drip feed option as disabled
     *
     * @return mixed
     */
    public function getDrip()
    {
        return $this->drip;
    }
    /**
     * Drip feed details of the content. Null value indicates that the course has drip feed option as disabled
     *
     * @param mixed $drip
     *
     * @return self
     */
    public function setDrip($drip) : self
    {
        $this->initialized['drip'] = true;
        $this->drip = $drip;
        return $this;
    }
    /**
     * Learning activities of section
     *
     * @return CourseContentSectionsItemLearningUnitsItem[]
     */
    public function getLearningUnits() : array
    {
        return $this->learningUnits;
    }
    /**
     * Learning activities of section
     *
     * @param CourseContentSectionsItemLearningUnitsItem[] $learningUnits
     *
     * @return self
     */
    public function setLearningUnits(array $learningUnits) : self
    {
        $this->initialized['learningUnits'] = true;
        $this->learningUnits = $learningUnits;
        return $this;
    }
}