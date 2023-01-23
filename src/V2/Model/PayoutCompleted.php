<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class PayoutCompleted extends \ArrayObject
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
     * Unique identifier of the payout
     *
     * @var string
     */
    protected $id;
    /**
     * Amount of the payout
     *
     * @var float
     */
    protected $amount;
    /**
     * Payment method of the payout
     *
     * @var mixed
     */
    protected $paymentMethod;
    /**
     * Payment note of the payout
     *
     * @var mixed
     */
    protected $paymentNotes;
    /**
     * Datetime the payout was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * 
     *
     * @var Payment[]
     */
    protected $payments;
    /**
     * 
     *
     * @var PayoutCompletedCompletedBy
     */
    protected $completedBy;
    /**
     * Unique identifier of the payout
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the payout
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
     * Amount of the payout
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Amount of the payout
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
     * Payment method of the payout
     *
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Payment method of the payout
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
     * Payment note of the payout
     *
     * @return mixed
     */
    public function getPaymentNotes()
    {
        return $this->paymentNotes;
    }
    /**
     * Payment note of the payout
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
    /**
     * Datetime the payout was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated() : float
    {
        return $this->created;
    }
    /**
     * Datetime the payout was created, in UNIX timestamp format
     *
     * @param float $created
     *
     * @return self
     */
    public function setCreated(float $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return Payment[]
     */
    public function getPayments() : array
    {
        return $this->payments;
    }
    /**
     * 
     *
     * @param Payment[] $payments
     *
     * @return self
     */
    public function setPayments(array $payments) : self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     * 
     *
     * @return PayoutCompletedCompletedBy
     */
    public function getCompletedBy() : PayoutCompletedCompletedBy
    {
        return $this->completedBy;
    }
    /**
     * 
     *
     * @param PayoutCompletedCompletedBy $completedBy
     *
     * @return self
     */
    public function setCompletedBy(PayoutCompletedCompletedBy $completedBy) : self
    {
        $this->initialized['completedBy'] = true;
        $this->completedBy = $completedBy;
        return $this;
    }
}