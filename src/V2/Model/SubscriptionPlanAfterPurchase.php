<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class SubscriptionPlanAfterPurchase extends \ArrayObject
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
     * Type of the after purchase navigation
     *
     * @var string
     */
    protected $type;
    /**
     * After purchase navigation URL for this subscription: leading to a school page or a given URL
     *
     * @var SubscriptionPlanAfterPurchaseSettings
     */
    protected $settings;
    /**
     * Type of the after purchase navigation
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of the after purchase navigation
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * After purchase navigation URL for this subscription: leading to a school page or a given URL
     *
     * @return SubscriptionPlanAfterPurchaseSettings
     */
    public function getSettings() : SubscriptionPlanAfterPurchaseSettings
    {
        return $this->settings;
    }
    /**
     * After purchase navigation URL for this subscription: leading to a school page or a given URL
     *
     * @param SubscriptionPlanAfterPurchaseSettings $settings
     *
     * @return self
     */
    public function setSettings(SubscriptionPlanAfterPurchaseSettings $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}