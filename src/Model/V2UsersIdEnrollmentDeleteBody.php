<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class V2UsersIdEnrollmentDeleteBody extends ArrayObject
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
     * Unique identifier of the product
     *
     * @var string
     */
    protected $productId;
    /**
     * Type of the product
     *
     * @var string
     */
    protected $productType;

    /**
     * Unique identifier of the product
     *
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * Unique identifier of the product
     *
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }

    /**
     * Type of the product
     *
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * Type of the product
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
}
