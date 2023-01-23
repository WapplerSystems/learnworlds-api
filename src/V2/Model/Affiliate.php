<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Affiliate extends \ArrayObject
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
     * Unique identifier of the user
     *
     * @var string
     */
    protected $id;
    /**
     * Email of the user
     *
     * @var string
     */
    protected $email;
    /**
     * Username of the user
     *
     * @var string
     */
    protected $username;
    /**
     * Unique affiliate code
     *
     * @var string
     */
    protected $code;
    /**
     * Payment method
     *
     * @var mixed
     */
    protected $paymentMethod = 'none';
    /**
     * Payment notes
     *
     * @var mixed
     */
    protected $paymentNotes;
    /**
     * Datetime the affiliation was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $date;
    /**
     * Number of referral link clicks
     *
     * @var int
     */
    protected $clicks;
    /**
     * Sales total amount
     *
     * @var float
     */
    protected $sales;
    /**
     * Total commission amount 
     *
     * @var float
     */
    protected $commissions;
    /**
     * Number of leads
     *
     * @var int
     */
    protected $leads;
    /**
     * Number of referred customers
     *
     * @var float
     */
    protected $customers;
    /**
     * Total amount of completed payouts
     *
     * @var float
     */
    protected $payouts;
    /**
     * Total amount of upcoming payouts
     *
     * @var float
     */
    protected $pending;
    /**
     * Total amount of due payouts
     *
     * @var float
     */
    protected $due;
    /**
     * Percentage of the sale that goes to the affiliate
     *
     * @var float
     */
    protected $commissionPercentage;
    /**
     * Unique identifier of the user
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the user
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
     * Email of the user
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Email of the user
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Username of the user
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * Username of the user
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
     * Unique affiliate code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Unique affiliate code
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
    /**
     * Datetime the affiliation was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getDate() : float
    {
        return $this->date;
    }
    /**
     * Datetime the affiliation was created, in UNIX timestamp format
     *
     * @param float $date
     *
     * @return self
     */
    public function setDate(float $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Number of referral link clicks
     *
     * @return int
     */
    public function getClicks() : int
    {
        return $this->clicks;
    }
    /**
     * Number of referral link clicks
     *
     * @param int $clicks
     *
     * @return self
     */
    public function setClicks(int $clicks) : self
    {
        $this->initialized['clicks'] = true;
        $this->clicks = $clicks;
        return $this;
    }
    /**
     * Sales total amount
     *
     * @return float
     */
    public function getSales() : float
    {
        return $this->sales;
    }
    /**
     * Sales total amount
     *
     * @param float $sales
     *
     * @return self
     */
    public function setSales(float $sales) : self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;
        return $this;
    }
    /**
     * Total commission amount 
     *
     * @return float
     */
    public function getCommissions() : float
    {
        return $this->commissions;
    }
    /**
     * Total commission amount 
     *
     * @param float $commissions
     *
     * @return self
     */
    public function setCommissions(float $commissions) : self
    {
        $this->initialized['commissions'] = true;
        $this->commissions = $commissions;
        return $this;
    }
    /**
     * Number of leads
     *
     * @return int
     */
    public function getLeads() : int
    {
        return $this->leads;
    }
    /**
     * Number of leads
     *
     * @param int $leads
     *
     * @return self
     */
    public function setLeads(int $leads) : self
    {
        $this->initialized['leads'] = true;
        $this->leads = $leads;
        return $this;
    }
    /**
     * Number of referred customers
     *
     * @return float
     */
    public function getCustomers() : float
    {
        return $this->customers;
    }
    /**
     * Number of referred customers
     *
     * @param float $customers
     *
     * @return self
     */
    public function setCustomers(float $customers) : self
    {
        $this->initialized['customers'] = true;
        $this->customers = $customers;
        return $this;
    }
    /**
     * Total amount of completed payouts
     *
     * @return float
     */
    public function getPayouts() : float
    {
        return $this->payouts;
    }
    /**
     * Total amount of completed payouts
     *
     * @param float $payouts
     *
     * @return self
     */
    public function setPayouts(float $payouts) : self
    {
        $this->initialized['payouts'] = true;
        $this->payouts = $payouts;
        return $this;
    }
    /**
     * Total amount of upcoming payouts
     *
     * @return float
     */
    public function getPending() : float
    {
        return $this->pending;
    }
    /**
     * Total amount of upcoming payouts
     *
     * @param float $pending
     *
     * @return self
     */
    public function setPending(float $pending) : self
    {
        $this->initialized['pending'] = true;
        $this->pending = $pending;
        return $this;
    }
    /**
     * Total amount of due payouts
     *
     * @return float
     */
    public function getDue() : float
    {
        return $this->due;
    }
    /**
     * Total amount of due payouts
     *
     * @param float $due
     *
     * @return self
     */
    public function setDue(float $due) : self
    {
        $this->initialized['due'] = true;
        $this->due = $due;
        return $this;
    }
    /**
     * Percentage of the sale that goes to the affiliate
     *
     * @return float
     */
    public function getCommissionPercentage() : float
    {
        return $this->commissionPercentage;
    }
    /**
     * Percentage of the sale that goes to the affiliate
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
}