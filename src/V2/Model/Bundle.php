<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Bundle extends \ArrayObject
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
     * Unique identifier of the bundle
     *
     * @var string
     */
    protected $id;
    /**
     * Title of the bundle
     *
     * @var string
     */
    protected $title;
    /**
     * Products in the bundle
     *
     * @var BundleProducts
     */
    protected $products;
    /**
     * Bundle image (full URL)
     *
     * @var mixed
     */
    protected $image;
    /**
     * Bundle description
     *
     * @var mixed
     */
    protected $description;
    /**
     * Access type of the bundle
     *
     * @var string
     */
    protected $access;
    /**
     * Date the bundle was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Date the bundle was modified for the last time, in UNIX timestamp format
     *
     * @var float
     */
    protected $modified;
    /**
     * After purchase navigation settings for this bundle
     *
     * @var BundleAfterPurchase
     */
    protected $afterPurchase;
    /**
     * Price of the bundle
     *
     * @var float
     */
    protected $price;
    /**
     * Payment plans associated with the bundle. Customers can pay in two or more installments (and an optional upfront payment).
     *
     * @var mixed[]
     */
    protected $paymentPlans;

    /**
     * Unique identifier of the bundle
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the bundle
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
     * Title of the bundle
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title of the bundle
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }

    /**
     * Products in the bundle
     *
     * @return BundleProducts
     */
    public function getProducts(): BundleProducts
    {
        return $this->products;
    }

    /**
     * Products in the bundle
     *
     * @param BundleProducts $products
     *
     * @return self
     */
    public function setProducts(BundleProducts $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }

    /**
     * Bundle image (full URL)
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Bundle image (full URL)
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
     * Bundle description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Bundle description
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
     * Access type of the bundle
     *
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }

    /**
     * Access type of the bundle
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

    /**
     * Date the bundle was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the bundle was created, in UNIX timestamp format
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
     * Date the bundle was modified for the last time, in UNIX timestamp format
     *
     * @return float
     */
    public function getModified(): float
    {
        return $this->modified;
    }

    /**
     * Date the bundle was modified for the last time, in UNIX timestamp format
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

    /**
     * After purchase navigation settings for this bundle
     *
     * @return BundleAfterPurchase
     */
    public function getAfterPurchase(): BundleAfterPurchase
    {
        return $this->afterPurchase;
    }

    /**
     * After purchase navigation settings for this bundle
     *
     * @param BundleAfterPurchase $afterPurchase
     *
     * @return self
     */
    public function setAfterPurchase(BundleAfterPurchase $afterPurchase): self
    {
        $this->initialized['afterPurchase'] = true;
        $this->afterPurchase = $afterPurchase;
        return $this;
    }

    /**
     * Price of the bundle
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Price of the bundle
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }

    /**
     * Payment plans associated with the bundle. Customers can pay in two or more installments (and an optional upfront payment).
     *
     * @return mixed[]
     */
    public function getPaymentPlans(): array
    {
        return $this->paymentPlans;
    }

    /**
     * Payment plans associated with the bundle. Customers can pay in two or more installments (and an optional upfront payment).
     *
     * @param mixed[] $paymentPlans
     *
     * @return self
     */
    public function setPaymentPlans(array $paymentPlans): self
    {
        $this->initialized['paymentPlans'] = true;
        $this->paymentPlans = $paymentPlans;
        return $this;
    }
}
