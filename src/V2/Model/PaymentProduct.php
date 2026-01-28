<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PaymentProduct extends \ArrayObject
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
    protected $id;
    /**
     * Type of the product
     *
     * @var string
     */
    protected $type;
    /**
     * Name of the product
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the product
     *
     * @var mixed
     */
    protected $description;
    /**
     * Image url of the product
     *
     * @var mixed
     */
    protected $image;
    /**
     * Specified trial days of the product
     *
     * @var int
     */
    protected $trialDays;
    /**
     * Original price of the product
     *
     * @var float
     */
    protected $originalPrice;
    /**
     * Discount price of the product
     *
     * @var float
     */
    protected $discountPrice;
    /**
     * Final price of the product
     *
     * @var float
     */
    protected $finalPrice;

    /**
     * Unique identifier of the product
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the product
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
     * Type of the product
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the product
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
     * Name of the product
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the product
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
     * Description of the product
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the product
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }

    /**
     * Image url of the product
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Image url of the product
     *
     * @param mixed $image
     *
     * @return self
     */
    public function setImage($image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }

    /**
     * Specified trial days of the product
     *
     * @return int
     */
    public function getTrialDays(): int
    {
        return $this->trialDays;
    }

    /**
     * Specified trial days of the product
     *
     * @param int $trialDays
     *
     * @return self
     */
    public function setTrialDays(int $trialDays): self
    {
        $this->initialized['trialDays'] = true;
        $this->trialDays = $trialDays;
        return $this;
    }

    /**
     * Original price of the product
     *
     * @return float
     */
    public function getOriginalPrice(): float
    {
        return $this->originalPrice;
    }

    /**
     * Original price of the product
     *
     * @param float $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(float $originalPrice): self
    {
        $this->initialized['originalPrice'] = true;
        $this->originalPrice = $originalPrice;
        return $this;
    }

    /**
     * Discount price of the product
     *
     * @return float
     */
    public function getDiscountPrice(): float
    {
        return $this->discountPrice;
    }

    /**
     * Discount price of the product
     *
     * @param float $discountPrice
     *
     * @return self
     */
    public function setDiscountPrice(float $discountPrice): self
    {
        $this->initialized['discountPrice'] = true;
        $this->discountPrice = $discountPrice;
        return $this;
    }

    /**
     * Final price of the product
     *
     * @return float
     */
    public function getFinalPrice(): float
    {
        return $this->finalPrice;
    }

    /**
     * Final price of the product
     *
     * @param float $finalPrice
     *
     * @return self
     */
    public function setFinalPrice(float $finalPrice): self
    {
        $this->initialized['finalPrice'] = true;
        $this->finalPrice = $finalPrice;
        return $this;
    }
}
