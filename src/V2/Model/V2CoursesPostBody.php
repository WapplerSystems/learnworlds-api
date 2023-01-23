<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2CoursesPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier of the course title. If it is empty the identifier is formed based on the provided title. 
     *
     * @var string
     */
    protected $titleId;
    /**
     * Title of the course
     *
     * @var string
     */
    protected $title;
    /**
     * Description of the course
     *
     * @var string
     */
    protected $description;
    /**
     * Price of the course
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
     * Access type of the course
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
     * Unique identifier of the course title. If it is empty the identifier is formed based on the provided title. 
     *
     * @return string
     */
    public function getTitleId() : string
    {
        return $this->titleId;
    }
    /**
     * Unique identifier of the course title. If it is empty the identifier is formed based on the provided title. 
     *
     * @param string $titleId
     *
     * @return self
     */
    public function setTitleId(string $titleId) : self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;
        return $this;
    }
    /**
     * Title of the course
     *
     * @return string
     */
    public function getTitle() : string
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
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Description of the course
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the course
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Price of the course
     *
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }
    /**
     * Price of the course
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
     * Course setting for scheduled course delivery (drip feed); returns none if drip feed is not enabled.
     *
     * @return string
     */
    public function getDripFeed() : string
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
    public function setDripFeed(string $dripFeed) : self
    {
        $this->initialized['dripFeed'] = true;
        $this->dripFeed = $dripFeed;
        return $this;
    }
    /**
     * Access type of the course
     *
     * @return string
     */
    public function getAccess() : string
    {
        return $this->access;
    }
    /**
     * Access type of the course
     *
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access) : self
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
    public function getCategories() : array
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
    public function setCategories(array $categories) : self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
}