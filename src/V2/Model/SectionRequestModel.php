<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class SectionRequestModel extends \ArrayObject
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
     * Title of the section
     *
     * @var string
     */
    protected $title;
    /**
     * Description of the section
     *
     * @var string
     */
    protected $description;
    /**
     * Access type of the section
     *
     * @var string
     */
    protected $access;
    /**
     * DripFeed Details
     *
     * @var mixed
     */
    protected $drip;
    /**
     * Title of the section
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the section
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
     * Description of the section
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the section
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
     * Access type of the section
     *
     * @return string
     */
    public function getAccess() : string
    {
        return $this->access;
    }
    /**
     * Access type of the section
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
     * DripFeed Details
     *
     * @return mixed
     */
    public function getDrip()
    {
        return $this->drip;
    }
    /**
     * DripFeed Details
     *
     * @param mixed $drip
     *
     * @return self
     */
    public function setDrip($drip) : self
    {
        $this->initialized['drip'] = true;
        $this->drip = $drip;
        return $this;
    }
}
