<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class SchoolEvent extends \ArrayObject
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
     * Title of the event
     *
     * @var string
     */
    protected $title;
    /**
     * Start date of the event, in UNIX timestamp format
     *
     * @var float
     */
    protected $startDate;
    /**
     * Unique identifier of the product
     *
     * @var string
     */
    protected $productId;
    /**
     * Type of the event
     *
     * @var string
     */
    protected $type;
    /**
     * Booking details of the event. In case of non oneOnOne or group sessions, the bookingDetails is null
     *
     * @var mixed
     */
    protected $bookingDetails;

    /**
     * Title of the event
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title of the event
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
     * Start date of the event, in UNIX timestamp format
     *
     * @return float
     */
    public function getStartDate(): float
    {
        return $this->startDate;
    }

    /**
     * Start date of the event, in UNIX timestamp format
     *
     * @param float $startDate
     *
     * @return self
     */
    public function setStartDate(float $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Unique identifier of the product
     *
     * @return string
     */
    public function getProductId(): string
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
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }

    /**
     * Type of the event
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the event
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
     * Booking details of the event. In case of non oneOnOne or group sessions, the bookingDetails is null
     *
     * @return mixed
     */
    public function getBookingDetails()
    {
        return $this->bookingDetails;
    }

    /**
     * Booking details of the event. In case of non oneOnOne or group sessions, the bookingDetails is null
     *
     * @param mixed $bookingDetails
     *
     * @return self
     */
    public function setBookingDetails($bookingDetails): self
    {
        $this->initialized['bookingDetails'] = true;
        $this->bookingDetails = $bookingDetails;
        return $this;
    }
}
