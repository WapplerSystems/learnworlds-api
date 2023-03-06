<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PaymentAffiliate extends \ArrayObject
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
     * Unique identifier of the affiliate
     *
     * @var string
     */
    protected $id;
    /**
     * Affiliate username
     *
     * @var string
     */
    protected $username;
    /**
     * Affiliate code
     *
     * @var string
     */
    protected $code;
    /**
     * Affiliate commission (%)
     *
     * @var float
     */
    protected $commissionPercentage;
    /**
     * Αffiliate commission amount
     *
     * @var float
     */
    protected $commissionAmount;
    /**
     * Status of the affiliation pay
     *
     * @var string
     */
    protected $paymentStatus;
    /**
     * Unique identifier of the affiliate
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the affiliate
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Affiliate username
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * Affiliate username
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * Affiliate code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Affiliate code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Affiliate commission (%)
     *
     * @return float
     */
    public function getCommissionPercentage() : float
    {
        return $this->commissionPercentage;
    }
    /**
     * Affiliate commission (%)
     *
     * @param float $commissionPercentage
     *
     * @return self
     */
    public function setCommissionPercentage(float $commissionPercentage) : self
    {
        $this->initialized['commissionPercentage'] = true;
        $this->commissionPercentage = $commissionPercentage;
        return $this;
    }
    /**
     * Αffiliate commission amount
     *
     * @return float
     */
    public function getCommissionAmount() : float
    {
        return $this->commissionAmount;
    }
    /**
     * Αffiliate commission amount
     *
     * @param float $commissionAmount
     *
     * @return self
     */
    public function setCommissionAmount(float $commissionAmount) : self
    {
        $this->initialized['commissionAmount'] = true;
        $this->commissionAmount = $commissionAmount;
        return $this;
    }
    /**
     * Status of the affiliation pay
     *
     * @return string
     */
    public function getPaymentStatus() : string
    {
        return $this->paymentStatus;
    }
    /**
     * Status of the affiliation pay
     *
     * @param string $paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus(string $paymentStatus) : self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
}
