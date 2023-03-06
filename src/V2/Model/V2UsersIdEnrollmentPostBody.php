<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2UsersIdEnrollmentPostBody extends \ArrayObject
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
     * Any justification/note for the enrollment
     *
     * @var mixed
     */
    protected $justification;
    /**
     * Price of the product
     *
     * @var float
     */
    protected $price;
    /**
     * Duration type of the product.
     *
     * @var string
     */
    protected $durationType;
    /**
     * Duration of the product
     *
     * @var int
     */
    protected $duration;
    /**
     * Unique identifier of the product
     *
     * @return string
     */
    public function getProductId() : string
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
    public function setProductId(string $productId) : self
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
    public function getProductType() : string
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
    public function setProductType(string $productType) : self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
    /**
     * Any justification/note for the enrollment
     *
     * @return mixed
     */
    public function getJustification()
    {
        return $this->justification;
    }
    /**
     * Any justification/note for the enrollment
     *
     * @param mixed $justification
     *
     * @return self
     */
    public function setJustification($justification) : self
    {
        $this->initialized['justification'] = true;
        $this->justification = $justification;
        return $this;
    }
    /**
     * Price of the product
     *
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }
    /**
     * Price of the product
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Duration type of the product.
     *
     * @return string
     */
    public function getDurationType() : string
    {
        return $this->durationType;
    }
    /**
     * Duration type of the product.
     *
     * @param string $durationType
     *
     * @return self
     */
    public function setDurationType(string $durationType) : self
    {
        $this->initialized['durationType'] = true;
        $this->durationType = $durationType;
        return $this;
    }
    /**
     * Duration of the product
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     * Duration of the product
     *
     * @param int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
}
