<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PromotionRequestModelCouponsItem extends \ArrayObject
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
     *
     *
     * @var string
     */
    protected $code;
    /**
     *
     *
     * @var int
     */
    protected $quantity;
    /**
     *
     *
     * @var string
     */
    protected $expires;
    /**
     *
     *
     * @var int
     */
    protected $timesUsed;

    /**
     *
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     *
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     *
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getExpires(): string
    {
        return $this->expires;
    }

    /**
     *
     *
     * @param string $expires
     *
     * @return self
     */
    public function setExpires(string $expires): self
    {
        $this->initialized['expires'] = true;
        $this->expires = $expires;
        return $this;
    }

    /**
     *
     *
     * @return int
     */
    public function getTimesUsed(): int
    {
        return $this->timesUsed;
    }

    /**
     *
     *
     * @param int $timesUsed
     *
     * @return self
     */
    public function setTimesUsed(int $timesUsed): self
    {
        $this->initialized['timesUsed'] = true;
        $this->timesUsed = $timesUsed;
        return $this;
    }
}
