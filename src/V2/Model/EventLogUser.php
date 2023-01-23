<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class EventLogUser extends \ArrayObject
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
     * Unique identifier of the user
     *
     * @var string
     */
    protected $id;
    /**
     * Username of the user
     *
     * @var string
     */
    protected $username;
    /**
     * Unique identifier of the user
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the user
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
     * Username of the user
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * Username of the user
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