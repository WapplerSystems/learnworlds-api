<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class AffiliatePostRequest extends \ArrayObject
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
     * This is the percentage of the sale that goes to the affiliate. If set, the default affiliate program commission is overwritten.
     *
     * @var float
     */
    protected $commissionPercentage = 0;
    /**
     * Payment method
     *
     * @var string
     */
    protected $paymentMethod = 'none';
    /**
     * Payment notes
     *
     * @var mixed
     */
    protected $paymentNotes;
    /**
     * This is the percentage of the sale that goes to the affiliate. If set, the default affiliate program commission is overwritten.
     *
     * @return float
     */
    public function getCommissionPercentage() : float
    {
        return $this->commissionPercentage;
    }
    /**
     * This is the percentage of the sale that goes to the affiliate. If set, the default affiliate program commission is overwritten.
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
     * Payment method
     *
     * @return string
     */
    public function getPaymentMethod() : string
    {
        return $this->paymentMethod;
    }
    /**
     * Payment method
     *
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(string $paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Payment notes
     *
     * @return mixed
     */
    public function getPaymentNotes()
    {
        return $this->paymentNotes;
    }
    /**
     * Payment notes
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