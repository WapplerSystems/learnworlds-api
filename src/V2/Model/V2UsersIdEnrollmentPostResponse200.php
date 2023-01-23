<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2UsersIdEnrollmentPostResponse200 extends \ArrayObject
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
     * Indication about whether the action of the enrollment was successful; true if it was successful, or false if it was not.
     *
     * @var bool
     */
    protected $success;
    /**
     * Indication about whether the action of the enrollment was successful; true if it was successful, or false if it was not.
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * Indication about whether the action of the enrollment was successful; true if it was successful, or false if it was not.
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
}