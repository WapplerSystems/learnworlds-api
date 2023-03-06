<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PayoutDueUpcoming extends \ArrayObject
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
    protected $affiliateId;
    /**
     * Amount of payout
     *
     * @var float
     */
    protected $amount;
    /**
     * Payment method
     *
     * @var mixed
     */
    protected $paymentMethod;
    /**
     * Payment note
     *
     * @var mixed
     */
    protected $paymentNotes;
    /**
     * Unique identifier of the affiliate
     *
     * @return string
     */
    public function getAffiliateId() : string
    {
        return $this->affiliateId;
    }
    /**
     * Unique identifier of the affiliate
     *
     * @param string $affiliateId
     *
     * @return self
     */
    public function setAffiliateId(string $affiliateId) : self
    {
        $this->initialized['affiliateId'] = true;
        $this->affiliateId = $affiliateId;
        return $this;
    }
    /**
     * Amount of payout
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Amount of payout
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Payment method
     *
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Payment method
     *
     * @param mixed $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Payment note
     *
     * @return mixed
     */
    public function getPaymentNotes()
    {
        return $this->paymentNotes;
    }
    /**
     * Payment note
     *
     * @param mixed $paymentNotes
     *
     * @return self
     */
    public function setPaymentNotes($paymentNotes) : self
    {
        $this->initialized['paymentNotes'] = true;
        $this->paymentNotes = $paymentNotes;
        return $this;
    }
}
