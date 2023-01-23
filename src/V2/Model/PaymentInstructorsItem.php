<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PaymentInstructorsItem extends \ArrayObject
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
     * Unique identifiers of the instructor
     *
     * @var string
     */
    protected $id;
    /**
     * Percentage of the revenue for the instructor
     *
     * @var mixed
     */
    protected $percentage;
    /**
     * Unique identifiers of the instructor
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifiers of the instructor
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
     * Percentage of the revenue for the instructor
     *
     * @return mixed
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
    /**
     * Percentage of the revenue for the instructor
     *
     * @param mixed $percentage
     *
     * @return self
     */
    public function setPercentage($percentage) : self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}