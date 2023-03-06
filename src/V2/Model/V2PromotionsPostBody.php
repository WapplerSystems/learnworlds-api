<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2PromotionsPostBody extends \ArrayObject
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
     * Promotion name
     *
     * @var string
     */
    protected $name;
    /**
     * Discount type
     *
     * @var string
     */
    protected $type = 'percentage';
    /**
     * Percentage or fixed amount of discount.
     *
     * @var float
     */
    protected $value = 0;
    /**
     * All courses and/or bundles that the promotion coupon will be applied to. None indicates that the coupon will not be applied to any course/bundle
     *
     * @var string[]
     */
    protected $appliesToAll;
    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @var V2PromotionsPostBodyProductsItem[]
     */
    protected $products;
    /**
     * Promotion name
     *
     * @return string
     */
    public function getName() : string
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
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Discount type
     *
     * @return string
     */
    public function getType() : string
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
    public function setType(string $type) : self
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
    public function getValue() : float
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
    public function setValue(float $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * All courses and/or bundles that the promotion coupon will be applied to. None indicates that the coupon will not be applied to any course/bundle
     *
     * @return string[]
     */
    public function getAppliesToAll() : array
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
    public function setAppliesToAll(array $appliesToAll) : self
    {
        $this->initialized['appliesToAll'] = true;
        $this->appliesToAll = $appliesToAll;
        return $this;
    }
    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @return V2PromotionsPostBodyProductsItem[]
     */
    public function getProducts() : array
    {
        return $this->products;
    }
    /**
     * Specific products that the promotion coupon will be applied to
     *
     * @param V2PromotionsPostBodyProductsItem[] $products
     *
     * @return self
     */
    public function setProducts(array $products) : self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}
