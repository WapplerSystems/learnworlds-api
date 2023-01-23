<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Response422Errors extends \ArrayObject
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
     * @var Response422ErrorsCompanyItem[]
     */
    protected $company;
    /**
     * 
     *
     * @return Response422ErrorsCompanyItem[]
     */
    public function getCompany() : array
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param Response422ErrorsCompanyItem[] $company
     *
     * @return self
     */
    public function setCompany(array $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
}