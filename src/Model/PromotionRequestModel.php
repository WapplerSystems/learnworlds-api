<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class PromotionRequestModel extends ArrayObject
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
    protected $name;
    /**
     *
     *
     * @var PromotionRequestModelCouponsItem[]
     */
    protected $coupons;
    /**
     *
     *
     * @var mixed[][]
     */
    protected $productIds;
    /**
     *
     *
     * @var string
     */
    protected $type;
    /**
     *
     *
     * @var string
     */
    protected $value;
    /**
     *
     *
     * @var string
     */
    protected $access;

    /**
     *
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }

    /**
     *
     *
     * @return PromotionRequestModelCouponsItem[]
     */
    public function getCoupons(): array
    {
        return $this->coupons;
    }

    /**
     *
     *
     * @param PromotionRequestModelCouponsItem[] $coupons
     *
     * @return self
     */
    public function setCoupons(array $coupons): self
    {
        $this->initialized['coupons'] = true;
        $this->coupons = $coupons;
        return $this;
    }

    /**
     *
     *
     * @return mixed[][]
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }

    /**
     *
     *
     * @param mixed[][] $productIds
     *
     * @return self
     */
    public function setProductIds(array $productIds): self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     *
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     *
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }

    /**
     *
     *
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access): self
    {
        $this->initialized['access'] = true;
        $this->access = $access;
        return $this;
    }
}
