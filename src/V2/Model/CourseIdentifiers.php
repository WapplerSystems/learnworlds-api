<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CourseIdentifiers extends \ArrayObject
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
     * Unique identifier of the course in google store
     *
     * @var string
     */
    protected $googleStoreId;
    /**
     * Unique identifier of the course in apple store
     *
     * @var string
     */
    protected $appleStoreId;
    /**
     * Unique identifier of the course in google store
     *
     * @return string
     */
    public function getGoogleStoreId() : string
    {
        return $this->googleStoreId;
    }
    /**
     * Unique identifier of the course in google store
     *
     * @param string $googleStoreId
     *
     * @return self
     */
    public function setGoogleStoreId(string $googleStoreId) : self
    {
        $this->initialized['googleStoreId'] = true;
        $this->googleStoreId = $googleStoreId;
        return $this;
    }
    /**
     * Unique identifier of the course in apple store
     *
     * @return string
     */
    public function getAppleStoreId() : string
    {
        return $this->appleStoreId;
    }
    /**
     * Unique identifier of the course in apple store
     *
     * @param string $appleStoreId
     *
     * @return self
     */
    public function setAppleStoreId(string $appleStoreId) : self
    {
        $this->initialized['appleStoreId'] = true;
        $this->appleStoreId = $appleStoreId;
        return $this;
    }
}
