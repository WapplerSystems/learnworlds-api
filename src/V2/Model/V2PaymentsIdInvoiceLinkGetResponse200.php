<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2PaymentsIdInvoiceLinkGetResponse200 extends \ArrayObject
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
     * Invoice identifier
     *
     * @var string
     */
    protected $invoice;
    /**
     * Url of invoice
     *
     * @var string
     */
    protected $url;
    /**
     * Date the invoice expires, in UNIX timestamp format
     *
     * @var float
     */
    protected $expiresAt;
    /**
     * Invoice identifier
     *
     * @return string
     */
    public function getInvoice() : string
    {
        return $this->invoice;
    }
    /**
     * Invoice identifier
     *
     * @param string $invoice
     *
     * @return self
     */
    public function setInvoice(string $invoice) : self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * Url of invoice
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Url of invoice
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Date the invoice expires, in UNIX timestamp format
     *
     * @return float
     */
    public function getExpiresAt() : float
    {
        return $this->expiresAt;
    }
    /**
     * Date the invoice expires, in UNIX timestamp format
     *
     * @param float $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(float $expiresAt) : self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
}
