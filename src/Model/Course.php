<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class Course extends ArrayObject
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
     * Unique identifier of the course
     *
     * @var string
     */
    protected $id;
    /**
     * Title of the course
     *
     * @var string
     */
    protected $title;
    /**
     * Expiration timeframe value, defines the expiration timeframe, together with the type / unit in the "expiresType" field.
     *
     * @var mixed
     */
    protected $expires;
    /**
     * Expiration timeframe type / unit, defines the expiration timeframe, together with the actual value in the "expires" field.
     *
     * @var string
     */
    protected $expiresType;
    /**
     * After purchase navigation settings for this course
     *
     * @var CourseAfterPurchase
     */
    protected $afterPurchase;
    /**
     * Categories this course belongs in
     *
     * @var string[]
     */
    protected $categories;
    /**
     * Description of the course
     *
     * @var mixed
     */
    protected $description;
    /**
     * Label of the course
     *
     * @var mixed
     */
    protected $label;
    /**
     * Information about the course author
     *
     * @var mixed
     */
    protected $author;
    /**
     * Course image (full URL)
     *
     * @var mixed
     */
    protected $courseImage;
    /**
     * Original price of the course
     *
     * @var float
     */
    protected $originalPrice;
    /**
     * Discount price of the course
     *
     * @var float
     */
    protected $discountPrice;
    /**
     * Final price of the course
     *
     * @var float
     */
    protected $finalPrice;
    /**
     * Course setting for scheduled course delivery (drip feed); none refers to drip feed not being enabled.
     *
     * @var string
     */
    protected $dripFeed;
    /**
     * Course identifiers for in app purchases.
     *
     * @var CourseIdentifiers
     */
    protected $identifiers;
    /**
     * Access type of course
     *
     * @var string
     */
    protected $access;
    /**
     * Date the course was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Date the course was modified for the last time, in UNIX timestamp format
     *
     * @var float
     */
    protected $modified;

    /**
     * Unique identifier of the course
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the course
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
     * Title of the course
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title of the course
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
     * Expiration timeframe value, defines the expiration timeframe, together with the type / unit in the "expiresType" field.
     *
     * @return mixed
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Expiration timeframe value, defines the expiration timeframe, together with the type / unit in the "expiresType" field.
     *
     * @param mixed $expires
     *
     * @return self
     */
    public function setExpires($expires): self
    {
        $this->initialized['expires'] = true;
        $this->expires = $expires;
        return $this;
    }

    /**
     * Expiration timeframe type / unit, defines the expiration timeframe, together with the actual value in the "expires" field.
     *
     * @return string
     */
    public function getExpiresType(): string
    {
        return $this->expiresType;
    }

    /**
     * Expiration timeframe type / unit, defines the expiration timeframe, together with the actual value in the "expires" field.
     *
     * @param string $expiresType
     *
     * @return self
     */
    public function setExpiresType(string $expiresType): self
    {
        $this->initialized['expiresType'] = true;
        $this->expiresType = $expiresType;
        return $this;
    }

    /**
     * After purchase navigation settings for this course
     *
     * @return CourseAfterPurchase
     */
    public function getAfterPurchase(): CourseAfterPurchase
    {
        return $this->afterPurchase;
    }

    /**
     * After purchase navigation settings for this course
     *
     * @param CourseAfterPurchase $afterPurchase
     *
     * @return self
     */
    public function setAfterPurchase(CourseAfterPurchase $afterPurchase): self
    {
        $this->initialized['afterPurchase'] = true;
        $this->afterPurchase = $afterPurchase;
        return $this;
    }

    /**
     * Categories this course belongs in
     *
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * Categories this course belongs in
     *
     * @param string[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }

    /**
     * Description of the course
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the course
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
     * Label of the course
     *
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Label of the course
     *
     * @param mixed $label
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }

    /**
     * Information about the course author
     *
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Information about the course author
     *
     * @param mixed $author
     *
     * @return self
     */
    public function setAuthor($author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }

    /**
     * Course image (full URL)
     *
     * @return mixed
     */
    public function getCourseImage()
    {
        return $this->courseImage;
    }

    /**
     * Course image (full URL)
     *
     * @param mixed $courseImage
     *
     * @return self
     */
    public function setCourseImage($courseImage): self
    {
        $this->initialized['courseImage'] = true;
        $this->courseImage = $courseImage;
        return $this;
    }

    /**
     * Original price of the course
     *
     * @return float
     */
    public function getOriginalPrice(): float
    {
        return $this->originalPrice;
    }

    /**
     * Original price of the course
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
     * Discount price of the course
     *
     * @return float
     */
    public function getDiscountPrice(): float
    {
        return $this->discountPrice;
    }

    /**
     * Discount price of the course
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
     * Final price of the course
     *
     * @return float
     */
    public function getFinalPrice(): float
    {
        return $this->finalPrice;
    }

    /**
     * Final price of the course
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

    /**
     * Course setting for scheduled course delivery (drip feed); none refers to drip feed not being enabled.
     *
     * @return string
     */
    public function getDripFeed(): string
    {
        return $this->dripFeed;
    }

    /**
     * Course setting for scheduled course delivery (drip feed); none refers to drip feed not being enabled.
     *
     * @param string $dripFeed
     *
     * @return self
     */
    public function setDripFeed(string $dripFeed): self
    {
        $this->initialized['dripFeed'] = true;
        $this->dripFeed = $dripFeed;
        return $this;
    }

    /**
     * Course identifiers for in app purchases.
     *
     * @return CourseIdentifiers
     */
    public function getIdentifiers(): CourseIdentifiers
    {
        return $this->identifiers;
    }

    /**
     * Course identifiers for in app purchases.
     *
     * @param CourseIdentifiers $identifiers
     *
     * @return self
     */
    public function setIdentifiers(CourseIdentifiers $identifiers): self
    {
        $this->initialized['identifiers'] = true;
        $this->identifiers = $identifiers;
        return $this;
    }

    /**
     * Access type of course
     *
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }

    /**
     * Access type of course
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
     * Date the course was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the course was created, in UNIX timestamp format
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
     * Date the course was modified for the last time, in UNIX timestamp format
     *
     * @return float
     */
    public function getModified(): float
    {
        return $this->modified;
    }

    /**
     * Date the course was modified for the last time, in UNIX timestamp format
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
