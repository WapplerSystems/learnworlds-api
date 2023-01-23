<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Response404 extends \ArrayObject
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
     * @var float
     */
    protected $statusCode;
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @return float
     */
    public function getStatusCode() : float
    {
        return $this->statusCode;
    }
    /**
     * 
     *
     * @param float $statusCode
     *
     * @return self
     */
    public function setStatusCode(float $statusCode) : self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}