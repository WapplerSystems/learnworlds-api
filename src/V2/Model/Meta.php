<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Meta extends \ArrayObject
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
     * Current page number
     *
     * @var float
     */
    protected $page;
    /**
     * Total number of items in this page
     *
     * @var float
     */
    protected $totalItems;
    /**
     * Total number of pages
     *
     * @var float
     */
    protected $totalPages;
    /**
     * Limit in the number of items per page
     *
     * @var float
     */
    protected $itemsPerPage;

    /**
     * Current page number
     *
     * @return float
     */
    public function getPage(): float
    {
        return $this->page;
    }

    /**
     * Current page number
     *
     * @param float $page
     *
     * @return self
     */
    public function setPage(float $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }

    /**
     * Total number of items in this page
     *
     * @return float
     */
    public function getTotalItems(): float
    {
        return $this->totalItems;
    }

    /**
     * Total number of items in this page
     *
     * @param float $totalItems
     *
     * @return self
     */
    public function setTotalItems(float $totalItems): self
    {
        $this->initialized['totalItems'] = true;
        $this->totalItems = $totalItems;
        return $this;
    }

    /**
     * Total number of pages
     *
     * @return float
     */
    public function getTotalPages(): float
    {
        return $this->totalPages;
    }

    /**
     * Total number of pages
     *
     * @param float $totalPages
     *
     * @return self
     */
    public function setTotalPages(float $totalPages): self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * Limit in the number of items per page
     *
     * @return float
     */
    public function getItemsPerPage(): float
    {
        return $this->itemsPerPage;
    }

    /**
     * Limit in the number of items per page
     *
     * @param float $itemsPerPage
     *
     * @return self
     */
    public function setItemsPerPage(float $itemsPerPage): self
    {
        $this->initialized['itemsPerPage'] = true;
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
}
