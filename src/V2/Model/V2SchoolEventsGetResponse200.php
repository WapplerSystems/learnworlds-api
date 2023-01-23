<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2SchoolEventsGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var SchoolEvent[]
     */
    protected $data;
    /**
     * 
     *
     * @return SchoolEvent[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param SchoolEvent[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}