<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PayoutCompletedCompletedBy extends \ArrayObject
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
     * Unique identifier of the the user that initiated the completion of the pay
     *
     * @var string
     */
    protected $id;
    /**
     * Username of the the user that initiated the completion of the payout
     *
     * @var string
     */
    protected $username;
    /**
     * Unique identifier of the the user that initiated the completion of the pay
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the the user that initiated the completion of the pay
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
     * Username of the the user that initiated the completion of the payout
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * Username of the the user that initiated the completion of the payout
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
}