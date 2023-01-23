<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserSegment extends \ArrayObject
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
     * Unique identifier of the segment
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the segment
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the segment
     *
     * @var mixed
     */
    protected $description;
    /**
     * Unique identifier of the segment
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the segment
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
     * Name of the segment
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the segment
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Description of the segment
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Description of the segment
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
}