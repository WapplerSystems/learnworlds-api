<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Payment extends \ArrayObject
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
     * Unique identifier of the payment
     *
     * @var string
     */
    protected $id;
    /**
     * Transaction id of the payment
     *
     * @var string
     */
    protected $transactionId;
    /**
     * Type of the payment
     *
     * @var string
     */
    protected $type;
    /**
     * Related product data
     *
     * @var PaymentProduct
     */
    protected $product;
    /**
     * Price of the payment
     *
     * @var float
     */
    protected $price;
    /**
     * Discount of the payment
     *
     * @var float
     */
    protected $discount;
    /**
     * Refund date, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $refundAt;
    /**
     * Unique identifier of the user
     *
     * @var string
     */
    protected $userId;
    /**
     * Payment date, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $paidAt;
    /**
     * Invoice identifier
     *
     * @var mixed
     */
    protected $invoice;
    /**
     * Billing info of the payment
     *
     * @var mixed
     */
    protected $billingInfo;
    /**
     * Coupon code
     *
     * @var mixed
     */
    protected $coupon;
    /**
     * Related instructor data
     *
     * @var PaymentInstructorsItem[]
     */
    protected $instructors;
    /**
     * Total percentage of the revenue for the instructor
     *
     * @var mixed
     */
    protected $instructorsTotalPercentage;
    /**
     * Tax amount of the payment
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Tax percentage of the payment
     *
     * @var float
     */
    protected $taxPercentage;
    /**
     * Related affiliate data
     *
     * @var PaymentAffiliate
     */
    protected $affiliate;
    /**
     * Payment plan period
     *
     * @var mixed
     */
    protected $period;
    /**
     * Current payment number of payment plan
     *
     * @var mixed
     */
    protected $paymentPlanCurrentPayment;
    /**
     * Total payments number of payment plan
     *
     * @var mixed
     */
    protected $paymentPlanTotalPayments;
    /**
     * Payment gateway name
     *
     * @var mixed
     */
    protected $gateway;
    /**
     * Datetime of the payment was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Unique identifier of the payment
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of the payment
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
     * Transaction id of the payment
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * Transaction id of the payment
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId) : self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Type of the payment
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of the payment
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Related product data
     *
     * @return PaymentProduct
     */
    public function getProduct() : PaymentProduct
    {
        return $this->product;
    }
    /**
     * Related product data
     *
     * @param PaymentProduct $product
     *
     * @return self
     */
    public function setProduct(PaymentProduct $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * Price of the payment
     *
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }
    /**
     * Price of the payment
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Discount of the payment
     *
     * @return float
     */
    public function getDiscount() : float
    {
        return $this->discount;
    }
    /**
     * Discount of the payment
     *
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(float $discount) : self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
    /**
     * Refund date, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getRefundAt()
    {
        return $this->refundAt;
    }
    /**
     * Refund date, in UNIX timestamp format
     *
     * @param mixed $refundAt
     *
     * @return self
     */
    public function setRefundAt($refundAt) : self
    {
        $this->initialized['refundAt'] = true;
        $this->refundAt = $refundAt;
        return $this;
    }
    /**
     * Unique identifier of the user
     *
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * Unique identifier of the user
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * Payment date, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }
    /**
     * Payment date, in UNIX timestamp format
     *
     * @param mixed $paidAt
     *
     * @return self
     */
    public function setPaidAt($paidAt) : self
    {
        $this->initialized['paidAt'] = true;
        $this->paidAt = $paidAt;
        return $this;
    }
    /**
     * Invoice identifier
     *
     * @return mixed
     */
    public function getInvoice()
    {
        return $this->invoice;
    }
    /**
     * Invoice identifier
     *
     * @param mixed $invoice
     *
     * @return self
     */
    public function setInvoice($invoice) : self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * Billing info of the payment
     *
     * @return mixed
     */
    public function getBillingInfo()
    {
        return $this->billingInfo;
    }
    /**
     * Billing info of the payment
     *
     * @param mixed $billingInfo
     *
     * @return self
     */
    public function setBillingInfo($billingInfo) : self
    {
        $this->initialized['billingInfo'] = true;
        $this->billingInfo = $billingInfo;
        return $this;
    }
    /**
     * Coupon code
     *
     * @return mixed
     */
    public function getCoupon()
    {
        return $this->coupon;
    }
    /**
     * Coupon code
     *
     * @param mixed $coupon
     *
     * @return self
     */
    public function setCoupon($coupon) : self
    {
        $this->initialized['coupon'] = true;
        $this->coupon = $coupon;
        return $this;
    }
    /**
     * Related instructor data
     *
     * @return PaymentInstructorsItem[]
     */
    public function getInstructors() : array
    {
        return $this->instructors;
    }
    /**
     * Related instructor data
     *
     * @param PaymentInstructorsItem[] $instructors
     *
     * @return self
     */
    public function setInstructors(array $instructors) : self
    {
        $this->initialized['instructors'] = true;
        $this->instructors = $instructors;
        return $this;
    }
    /**
     * Total percentage of the revenue for the instructor
     *
     * @return mixed
     */
    public function getInstructorsTotalPercentage()
    {
        return $this->instructorsTotalPercentage;
    }
    /**
     * Total percentage of the revenue for the instructor
     *
     * @param mixed $instructorsTotalPercentage
     *
     * @return self
     */
    public function setInstructorsTotalPercentage($instructorsTotalPercentage) : self
    {
        $this->initialized['instructorsTotalPercentage'] = true;
        $this->instructorsTotalPercentage = $instructorsTotalPercentage;
        return $this;
    }
    /**
     * Tax amount of the payment
     *
     * @return float
     */
    public function getTaxAmount() : float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount of the payment
     *
     * @param float $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(float $taxAmount) : self
    {
        $this->initialized['taxAmount'] = true;
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Tax percentage of the payment
     *
     * @return float
     */
    public function getTaxPercentage() : float
    {
        return $this->taxPercentage;
    }
    /**
     * Tax percentage of the payment
     *
     * @param float $taxPercentage
     *
     * @return self
     */
    public function setTaxPercentage(float $taxPercentage) : self
    {
        $this->initialized['taxPercentage'] = true;
        $this->taxPercentage = $taxPercentage;
        return $this;
    }
    /**
     * Related affiliate data
     *
     * @return PaymentAffiliate
     */
    public function getAffiliate() : PaymentAffiliate
    {
        return $this->affiliate;
    }
    /**
     * Related affiliate data
     *
     * @param PaymentAffiliate $affiliate
     *
     * @return self
     */
    public function setAffiliate(PaymentAffiliate $affiliate) : self
    {
        $this->initialized['affiliate'] = true;
        $this->affiliate = $affiliate;
        return $this;
    }
    /**
     * Payment plan period
     *
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * Payment plan period
     *
     * @param mixed $period
     *
     * @return self
     */
    public function setPeriod($period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * Current payment number of payment plan
     *
     * @return mixed
     */
    public function getPaymentPlanCurrentPayment()
    {
        return $this->paymentPlanCurrentPayment;
    }
    /**
     * Current payment number of payment plan
     *
     * @param mixed $paymentPlanCurrentPayment
     *
     * @return self
     */
    public function setPaymentPlanCurrentPayment($paymentPlanCurrentPayment) : self
    {
        $this->initialized['paymentPlanCurrentPayment'] = true;
        $this->paymentPlanCurrentPayment = $paymentPlanCurrentPayment;
        return $this;
    }
    /**
     * Total payments number of payment plan
     *
     * @return mixed
     */
    public function getPaymentPlanTotalPayments()
    {
        return $this->paymentPlanTotalPayments;
    }
    /**
     * Total payments number of payment plan
     *
     * @param mixed $paymentPlanTotalPayments
     *
     * @return self
     */
    public function setPaymentPlanTotalPayments($paymentPlanTotalPayments) : self
    {
        $this->initialized['paymentPlanTotalPayments'] = true;
        $this->paymentPlanTotalPayments = $paymentPlanTotalPayments;
        return $this;
    }
    /**
     * Payment gateway name
     *
     * @return mixed
     */
    public function getGateway()
    {
        return $this->gateway;
    }
    /**
     * Payment gateway name
     *
     * @param mixed $gateway
     *
     * @return self
     */
    public function setGateway($gateway) : self
    {
        $this->initialized['gateway'] = true;
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * Datetime of the payment was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated() : float
    {
        return $this->created;
    }
    /**
     * Datetime of the payment was created, in UNIX timestamp format
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
}
