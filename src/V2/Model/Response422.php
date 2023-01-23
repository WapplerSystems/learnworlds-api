<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Response422 extends \ArrayObject
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
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var Response422Errors
     */
    protected $errors;
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
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return Response422Errors
     */
    public function getErrors() : Response422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param Response422Errors $errors
     *
     * @return self
     */
    public function setErrors(Response422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}