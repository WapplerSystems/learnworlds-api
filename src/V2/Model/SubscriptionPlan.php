<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class SubscriptionPlan extends \ArrayObject
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
     * Unique identifier of the subscription plan
     *
     * @var string
     */
    protected $id;
    /**
     * Title of the subscription plan
     *
     * @var string
     */
    protected $title;
    /**
     * Stripe's plan Id
     *
     * @var string
     */
    protected $stripePlanId;
    /**
     * Description of the subscription
     *
     * @var mixed
     */
    protected $description;
    /**
     * Products in the subsription
     *
     * @var SubscriptionPlanProducts
     */
    protected $products;
    /**
     * Subscription plan image (full URL)
     *
     * @var mixed
     */
    protected $image;
    /**
     * Billing interval value
     *
     * @var int
     */
    protected $interval;
    /**
     * Billing interval type
     *
     * @var string
     */
    protected $intervalType;
    /**
     * Number of days the trial subscription plan lasts
     *
     * @var int
     */
    protected $trialPeriodDays;
    /**
     * After purchase navigation settings for this subscription plan
     *
     * @var SubscriptionPlanAfterPurchase
     */
    protected $afterPurchase;
    /**
     * Access type of the subscription
     *
     * @var string
     */
    protected $access;
    /**
     * Date the subscription plan was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Date the subscription plan was modified for the last time, in UNIX timestamp format
     *
     * @var float
     */
    protected $modified;
    /**
     * Price of the subscription plan
     *
     * @var float
     */
    protected $price;
    /**
     * Unique identifier of the subscription plan
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the subscription plan
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
     * Title of the subscription plan
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the subscription plan
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Stripe's plan Id
     *
     * @return string
     */
    public function getStripePlanId() : string
    {
        return $this->stripePlanId;
    }
    /**
     * Stripe's plan Id
     *
     * @param string $stripePlanId
     *
     * @return self
     */
    public function setStripePlanId(string $stripePlanId) : self
    {
        $this->initialized['stripePlanId'] = true;
        $this->stripePlanId = $stripePlanId;
        return $this;
    }
    /**
     * Description of the subscription
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Description of the subscription
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Products in the subsription
     *
     * @return SubscriptionPlanProducts
     */
    public function getProducts() : SubscriptionPlanProducts
    {
        return $this->products;
    }
    /**
     * Products in the subsription
     *
     * @param SubscriptionPlanProducts $products
     *
     * @return self
     */
    public function setProducts(SubscriptionPlanProducts $products) : self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * Subscription plan image (full URL)
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Subscription plan image (full URL)
     *
     * @param mixed $image
     *
     * @return self
     */
    public function setImage($image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * Billing interval value
     *
     * @return int
     */
    public function getInterval() : int
    {
        return $this->interval;
    }
    /**
     * Billing interval value
     *
     * @param int $interval
     *
     * @return self
     */
    public function setInterval(int $interval) : self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * Billing interval type
     *
     * @return string
     */
    public function getIntervalType() : string
    {
        return $this->intervalType;
    }
    /**
     * Billing interval type
     *
     * @param string $intervalType
     *
     * @return self
     */
    public function setIntervalType(string $intervalType) : self
    {
        $this->initialized['intervalType'] = true;
        $this->intervalType = $intervalType;
        return $this;
    }
    /**
     * Number of days the trial subscription plan lasts
     *
     * @return int
     */
    public function getTrialPeriodDays() : int
    {
        return $this->trialPeriodDays;
    }
    /**
     * Number of days the trial subscription plan lasts
     *
     * @param int $trialPeriodDays
     *
     * @return self
     */
    public function setTrialPeriodDays(int $trialPeriodDays) : self
    {
        $this->initialized['trialPeriodDays'] = true;
        $this->trialPeriodDays = $trialPeriodDays;
        return $this;
    }
    /**
     * After purchase navigation settings for this subscription plan
     *
     * @return SubscriptionPlanAfterPurchase
     */
    public function getAfterPurchase() : SubscriptionPlanAfterPurchase
    {
        return $this->afterPurchase;
    }
    /**
     * After purchase navigation settings for this subscription plan
     *
     * @param SubscriptionPlanAfterPurchase $afterPurchase
     *
     * @return self
     */
    public function setAfterPurchase(SubscriptionPlanAfterPurchase $afterPurchase) : self
    {
        $this->initialized['afterPurchase'] = true;
        $this->afterPurchase = $afterPurchase;
        return $this;
    }
    /**
     * Access type of the subscription
     *
     * @return string
     */
    public function getAccess() : string
    {
        return $this->access;
    }
    /**
     * Access type of the subscription
     *
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access) : self
    {
        $this->initialized['access'] = true;
        $this->access = $access;
        return $this;
    }
    /**
     * Date the subscription plan was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated() : float
    {
        return $this->created;
    }
    /**
     * Date the subscription plan was created, in UNIX timestamp format
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
     * Date the subscription plan was modified for the last time, in UNIX timestamp format
     *
     * @return float
     */
    public function getModified() : float
    {
        return $this->modified;
    }
    /**
     * Date the subscription plan was modified for the last time, in UNIX timestamp format
     *
     * @param float $modified
     *
     * @return self
     */
    public function setModified(float $modified) : self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;
        return $this;
    }
    /**
     * Price of the subscription plan
     *
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }
    /**
     * Price of the subscription plan
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}