<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2AffiliatesIdPayoutsUpcomingGetResponse200 extends \ArrayObject
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
     * @var PayoutDueUpcoming[]
     */
    protected $data;
    /**
     * 
     *
     * @return PayoutDueUpcoming[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PayoutDueUpcoming[] $data
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