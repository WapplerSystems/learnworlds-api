<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CouponUsage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     *
     *
     * @var Coupon
     */
    protected $usage;
    /**
     *
     *
     * @var Payment[]
     */
    protected $payments;
    /**
     *
     *
     * @var Meta
     */
    protected $meta;
    /**
     *
     *
     * @return Coupon
     */
    public function getUsage() : Coupon
    {
        return $this->usage;
    }
    /**
     *
     *
     * @param Coupon $usage
     *
     * @return self
     */
    public function setUsage(Coupon $usage) : self
    {
        $this->initialized['usage'] = true;
        $this->usage = $usage;
        return $this;
    }
    /**
     *
     *
     * @return Payment[]
     */
    public function getPayments() : array
    {
        return $this->payments;
    }
    /**
     *
     *
     * @param Payment[] $payments
     *
     * @return self
     */
    public function setPayments(array $payments) : self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     *
     *
     * @return Meta
     */
    public function getMeta() : Meta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param Meta $meta
     *
     * @return self
     */
    public function setMeta(Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
