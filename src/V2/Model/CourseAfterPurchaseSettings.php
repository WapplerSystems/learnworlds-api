<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CourseAfterPurchaseSettings extends \ArrayObject
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
     * Navigation to a specific URL
     *
     * @var mixed
     */
    protected $url;
    /**
     * Navigation to a specific school page
     *
     * @var mixed
     */
    protected $page;

    /**
     * Navigation to a specific URL
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Navigation to a specific URL
     *
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }

    /**
     * Navigation to a specific school page
     *
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Navigation to a specific school page
     *
     * @param mixed $page
     *
     * @return self
     */
    public function setPage($page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
}
