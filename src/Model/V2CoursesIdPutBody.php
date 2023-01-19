<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class V2CoursesIdPutBody extends ArrayObject
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
     * Course title
     *
     * @var string
     */
    protected $title;
    /**
     * Course description
     *
     * @var string
     */
    protected $description;
    /**
     * Course price
     *
     * @var float
     */
    protected $price;
    /**
     * Course setting for scheduled course delivery (drip feed); returns none if drip feed is not enabled.
     *
     * @var string
     */
    protected $dripFeed = 'none';
    /**
     * Course access type
     *
     * @var string
     */
    protected $access;
    /**
     * Categories this course belongs in
     *
     * @var string[]
     */
    protected $categories;

    /**
     * Course title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Course title
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
     * Course description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Course description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }

    /**
     * Course price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Course price
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
     * Course setting for scheduled course delivery (drip feed); returns none if drip feed is not enabled.
     *
     * @return string
     */
    public function getDripFeed(): string
    {
        return $this->dripFeed;
    }

    /**
     * Course setting for scheduled course delivery (drip feed); returns none if drip feed is not enabled.
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
     * Course access type
     *
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }

    /**
     * Course access type
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
}
