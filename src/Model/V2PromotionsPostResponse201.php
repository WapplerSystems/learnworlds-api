<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class V2PromotionsPostResponse201 extends ArrayObject
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
     * Promotion Id
     *
     * @var string
     */
    protected $id;
    /**
     * Promotion name
     *
     * @var string
     */
    protected $name;
    /**
     * Promotion coupons. The array is empty for newly created promotion.
     *
     * @var mixed[][]
     */
    protected $coupons;
    /**
     * All courses and/or all bundles that promotion coupon will be applied to. None indicates that the coupon will not be applied to any courses/bundles
     *
     * @var string[]
     */
    protected $appliesToAll;
    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @var V2PromotionsPostResponse201ProductsItem[]
     */
    protected $products;
    /**
     * Discount type
     *
     * @var string
     */
    protected $type;
    /**
     * Percentage or fixed amount of discount.
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
     * Promotion Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Promotion Id
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
     * Promotion name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Promotion name
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
     * Promotion coupons. The array is empty for newly created promotion.
     *
     * @return mixed[][]
     */
    public function getCoupons(): array
    {
        return $this->coupons;
    }

    /**
     * Promotion coupons. The array is empty for newly created promotion.
     *
     * @param mixed[][] $coupons
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
     * All courses and/or all bundles that promotion coupon will be applied to. None indicates that the coupon will not be applied to any courses/bundles
     *
     * @return string[]
     */
    public function getAppliesToAll(): array
    {
        return $this->appliesToAll;
    }

    /**
     * All courses and/or all bundles that promotion coupon will be applied to. None indicates that the coupon will not be applied to any courses/bundles
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
     * @return V2PromotionsPostResponse201ProductsItem[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @param V2PromotionsPostResponse201ProductsItem[] $products
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
     * Discount type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Discount type
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
     * Percentage or fixed amount of discount.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Percentage or fixed amount of discount.
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
