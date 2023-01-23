<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Coupon extends \ArrayObject
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
     * Coupon code
     *
     * @var string
     */
    protected $code;
    /**
     * Number of redemptions that are allowed for this coupon (null as a value means that there is no limit in how many times a coupon can be redeemed)
     *
     * @var mixed
     */
    protected $quantity;
    /**
     * Coupon expiration date, in YYYY-MM-DD format
     *
     * @var mixed
     */
    protected $expires;
    /**
     * Indication about whether there's a bulk set of codes created for this coupon.
     *
     * @var bool
     */
    protected $bulk;
    /**
     * Coupon prefix
     *
     * @var mixed
     */
    protected $prefix;
    /**
     * Coupon number of times used.
     *
     * @var int
     */
    protected $timesUsed;
    /**
     * Coupon code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Coupon code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Number of redemptions that are allowed for this coupon (null as a value means that there is no limit in how many times a coupon can be redeemed)
     *
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Number of redemptions that are allowed for this coupon (null as a value means that there is no limit in how many times a coupon can be redeemed)
     *
     * @param mixed $quantity
     *
     * @return self
     */
    public function setQuantity($quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Coupon expiration date, in YYYY-MM-DD format
     *
     * @return mixed
     */
    public function getExpires()
    {
        return $this->expires;
    }
    /**
     * Coupon expiration date, in YYYY-MM-DD format
     *
     * @param mixed $expires
     *
     * @return self
     */
    public function setExpires($expires) : self
    {
        $this->initialized['expires'] = true;
        $this->expires = $expires;
        return $this;
    }
    /**
     * Indication about whether there's a bulk set of codes created for this coupon.
     *
     * @return bool
     */
    public function getBulk() : bool
    {
        return $this->bulk;
    }
    /**
     * Indication about whether there's a bulk set of codes created for this coupon.
     *
     * @param bool $bulk
     *
     * @return self
     */
    public function setBulk(bool $bulk) : self
    {
        $this->initialized['bulk'] = true;
        $this->bulk = $bulk;
        return $this;
    }
    /**
     * Coupon prefix
     *
     * @return mixed
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Coupon prefix
     *
     * @param mixed $prefix
     *
     * @return self
     */
    public function setPrefix($prefix) : self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Coupon number of times used.
     *
     * @return int
     */
    public function getTimesUsed() : int
    {
        return $this->timesUsed;
    }
    /**
     * Coupon number of times used.
     *
     * @param int $timesUsed
     *
     * @return self
     */
    public function setTimesUsed(int $timesUsed) : self
    {
        $this->initialized['timesUsed'] = true;
        $this->timesUsed = $timesUsed;
        return $this;
    }
}