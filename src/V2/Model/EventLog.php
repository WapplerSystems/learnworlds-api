<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class EventLog extends \ArrayObject
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
     * User details related to event log
     *
     * @var EventLogUser
     */
    protected $user;
    /**
     * Date the event log was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Name of the activity
     *
     * @var string
     */
    protected $activity;
    /**
     * Description of the activity
     *
     * @var string
     */
    protected $description;
    /**
     * Type of the activity
     *
     * @var mixed
     */
    protected $type;
    /**
     * Additional info related to the activity
     *
     * @var mixed
     */
    protected $additionalInfo;
    /**
     * User details related to event log
     *
     * @return EventLogUser
     */
    public function getUser() : EventLogUser
    {
        return $this->user;
    }
    /**
     * User details related to event log
     *
     * @param EventLogUser $user
     *
     * @return self
     */
    public function setUser(EventLogUser $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * Date the event log was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated() : float
    {
        return $this->created;
    }
    /**
     * Date the event log was created, in UNIX timestamp format
     *
     * @param float $created
     *
     * @return self
     */
    public function setCreated(float $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * Name of the activity
     *
     * @return string
     */
    public function getActivity() : string
    {
        return $this->activity;
    }
    /**
     * Name of the activity
     *
     * @param string $activity
     *
     * @return self
     */
    public function setActivity(string $activity) : self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * Description of the activity
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the activity
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Type of the activity
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Type of the activity
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Additional info related to the activity
     *
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    /**
     * Additional info related to the activity
     *
     * @param mixed $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo($additionalInfo) : self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}