<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2PromotionsIdCouponsBulkPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Coupon prefix
     *
     * @var string
     */
    protected $prefix;
    /**
     * Coupon quantity greater than 0
     *
     * @var float
     */
    protected $quantity;
    /**
     * Coupon expiration date, in YYYY-MM-DD format
     *
     * @var mixed
     */
    protected $expires;

    /**
     * Coupon prefix
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * Coupon prefix
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Coupon quantity greater than 0
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Coupon quantity greater than 0
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity): self
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
    public function setExpires($expires): self
    {
        $this->initialized['expires'] = true;
        $this->expires = $expires;
        return $this;
    }
}
