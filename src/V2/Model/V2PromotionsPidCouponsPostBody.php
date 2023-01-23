<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2PromotionsPidCouponsPostBody extends \ArrayObject
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
     * Coupon quantity greater than 0
     *
     * @var int
     */
    protected $quantity;
    /**
     * Coupon expiration date in yyyy-mm-dd format
     *
     * @var \DateTime
     */
    protected $expires;
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
     * Coupon quantity greater than 0
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Coupon quantity greater than 0
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Coupon expiration date in yyyy-mm-dd format
     *
     * @return \DateTime
     */
    public function getExpires() : \DateTime
    {
        return $this->expires;
    }
    /**
     * Coupon expiration date in yyyy-mm-dd format
     *
     * @param \DateTime $expires
     *
     * @return self
     */
    public function setExpires(\DateTime $expires) : self
    {
        $this->initialized['expires'] = true;
        $this->expires = $expires;
        return $this;
    }
}