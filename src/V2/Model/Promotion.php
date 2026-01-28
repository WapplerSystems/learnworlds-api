<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Promotion extends \ArrayObject
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
     * Unique identifier of the promotion
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the promotion
     *
     * @var string
     */
    protected $name;
    /**
     * Promotion coupons
     *
     * @var Coupon[]
     */
    protected $coupons;
    /**
     * All courses and/or bundles that the promotion coupon will be applied to. None indicates that the coupon will not be applied to any course/bundle
     *
     * @var string[]
     */
    protected $appliesToAll;
    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @var PromotionProductsItem[]
     */
    protected $products;
    /**
     * Type of discount
     *
     * @var string
     */
    protected $type;
    /**
     * Percentage or fixed amount of discount
     *
     * @var float
     */
    protected $value;
    /**
     * Date the promotion was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Date the promotion was modified for the last time, in UNIX timestamp format
     *
     * @var float
     */
    protected $modified;

    /**
     * Unique identifier of the promotion
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the promotion
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * Name of the promotion
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the promotion
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
     * Promotion coupons
     *
     * @return Coupon[]
     */
    public function getCoupons(): array
    {
        return $this->coupons;
    }

    /**
     * Promotion coupons
     *
     * @param Coupon[] $coupons
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
     * All courses and/or bundles that the promotion coupon will be applied to. None indicates that the coupon will not be applied to any course/bundle
     *
     * @return string[]
     */
    public function getAppliesToAll(): array
    {
        return $this->appliesToAll;
    }

    /**
     * All courses and/or bundles that the promotion coupon will be applied to. None indicates that the coupon will not be applied to any course/bundle
     *
     * @param string[] $appliesToAll
     *
     * @return self
     */
    public function setAppliesToAll(array $appliesToAll): self
    {
        $this->initialized['appliesToAll'] = true;
        $this->appliesToAll = $appliesToAll;
        return $this;
    }

    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @return PromotionProductsItem[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @param PromotionProductsItem[] $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }

    /**
     * Type of discount
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of discount
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
     * Percentage or fixed amount of discount
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Percentage or fixed amount of discount
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }

    /**
     * Date the promotion was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the promotion was created, in UNIX timestamp format
     *
     * @param float $created
     *
     * @return self
     */
    public function setCreated(float $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * Date the promotion was modified for the last time, in UNIX timestamp format
     *
     * @return float
     */
    public function getModified(): float
    {
        return $this->modified;
    }

    /**
     * Date the promotion was modified for the last time, in UNIX timestamp format
     *
     * @param float $modified
     *
     * @return self
     */
    public function setModified(float $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;
        return $this;
    }
}
