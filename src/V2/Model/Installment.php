<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Installment extends \ArrayObject
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
     * Unique identifier of the user
     *
     * @var string
     */
    protected $userId;
    /**
     * Email of the user
     *
     * @var string
     */
    protected $email;
    /**
     * Unique identifier of the installment
     *
     * @var string
     */
    protected $id;
    /**
     * Unique identifier of the subscription plan
     *
     * @var string
     */
    protected $planId;
    /**
     * Unique identifier of the product
     *
     * @var string
     */
    protected $productId;
    /**
     * Type of the product
     *
     * @var string
     */
    protected $productType;
    /**
     * Datetime the installment ends, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $endsAt;
    /**
     * Start of the current period that the installment has been invoiced for, in UNIX timestamp format
     *
     * @var float
     */
    protected $currentPeriodStart;
    /**
     * End of the current period that the installment has been invoiced for, in UNIX timestamp format
     *
     * @var float
     */
    protected $currentPeriodEnd;
    /**
     * Name of the installment
     *
     * @var string
     */
    protected $name;
    /**
     * Type of the installment
     *
     * @var string
     */
    protected $type;
    /**
     * Status of the installment
     *
     * @var string
     */
    protected $status;
    /**
     * Ιnitial amount of money the customers have to pay up front.
     *
     * @var float
     */
    protected $firstAmount;
    /**
     * Amount per installment
     *
     * @var float
     */
    protected $amount;
    /**
     * Number of payments of the installment
     *
     * @var float
     */
    protected $paymentsCount;
    /**
     * Number of completed payments of the installment
     *
     * @var float
     */
    protected $paymentsPayed;
    /**
     * Indication about whether the installment can be canceled; true if it is cancelable, or false if it is not.
     *
     * @var bool
     */
    protected $isCancelable;
    /**
     * How much time between each installment
     *
     * @var string
     */
    protected $installmentIntervalType;
    /**
     * Type of the first installment
     *
     * @var string
     */
    protected $firstInstallmentType;
    /**
     * Number of days since the first installment
     *
     * @var int
     */
    protected $firstInstallmentlDays;
    /**
     * Date of the first installment, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $firstInstallmentDate;

    /**
     * Unique identifier of the user
     *
     * @return string
     */
    public function getUserId(): string
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
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }

    /**
     * Email of the user
     *
     * @return string
     */
    public function getEmail(): string
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
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }

    /**
     * Unique identifier of the installment
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the installment
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * Unique identifier of the subscription plan
     *
     * @return string
     */
    public function getPlanId(): string
    {
        return $this->planId;
    }

    /**
     * Unique identifier of the subscription plan
     *
     * @param string $planId
     *
     * @return self
     */
    public function setPlanId(string $planId): self
    {
        $this->initialized['planId'] = true;
        $this->planId = $planId;
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
     * Type of the product
     *
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * Type of the product
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }

    /**
     * Datetime the installment ends, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * Datetime the installment ends, in UNIX timestamp format
     *
     * @param mixed $endsAt
     *
     * @return self
     */
    public function setEndsAt($endsAt): self
    {
        $this->initialized['endsAt'] = true;
        $this->endsAt = $endsAt;
        return $this;
    }

    /**
     * Start of the current period that the installment has been invoiced for, in UNIX timestamp format
     *
     * @return float
     */
    public function getCurrentPeriodStart(): float
    {
        return $this->currentPeriodStart;
    }

    /**
     * Start of the current period that the installment has been invoiced for, in UNIX timestamp format
     *
     * @param float $currentPeriodStart
     *
     * @return self
     */
    public function setCurrentPeriodStart(float $currentPeriodStart): self
    {
        $this->initialized['currentPeriodStart'] = true;
        $this->currentPeriodStart = $currentPeriodStart;
        return $this;
    }

    /**
     * End of the current period that the installment has been invoiced for, in UNIX timestamp format
     *
     * @return float
     */
    public function getCurrentPeriodEnd(): float
    {
        return $this->currentPeriodEnd;
    }

    /**
     * End of the current period that the installment has been invoiced for, in UNIX timestamp format
     *
     * @param float $currentPeriodEnd
     *
     * @return self
     */
    public function setCurrentPeriodEnd(float $currentPeriodEnd): self
    {
        $this->initialized['currentPeriodEnd'] = true;
        $this->currentPeriodEnd = $currentPeriodEnd;
        return $this;
    }

    /**
     * Name of the installment
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the installment
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }

    /**
     * Type of the installment
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the installment
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
     * Status of the installment
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status of the installment
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * Ιnitial amount of money the customers have to pay up front.
     *
     * @return float
     */
    public function getFirstAmount(): float
    {
        return $this->firstAmount;
    }

    /**
     * Ιnitial amount of money the customers have to pay up front.
     *
     * @param float $firstAmount
     *
     * @return self
     */
    public function setFirstAmount(float $firstAmount): self
    {
        $this->initialized['firstAmount'] = true;
        $this->firstAmount = $firstAmount;
        return $this;
    }

    /**
     * Amount per installment
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Amount per installment
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }

    /**
     * Number of payments of the installment
     *
     * @return float
     */
    public function getPaymentsCount(): float
    {
        return $this->paymentsCount;
    }

    /**
     * Number of payments of the installment
     *
     * @param float $paymentsCount
     *
     * @return self
     */
    public function setPaymentsCount(float $paymentsCount): self
    {
        $this->initialized['paymentsCount'] = true;
        $this->paymentsCount = $paymentsCount;
        return $this;
    }

    /**
     * Number of completed payments of the installment
     *
     * @return float
     */
    public function getPaymentsPayed(): float
    {
        return $this->paymentsPayed;
    }

    /**
     * Number of completed payments of the installment
     *
     * @param float $paymentsPayed
     *
     * @return self
     */
    public function setPaymentsPayed(float $paymentsPayed): self
    {
        $this->initialized['paymentsPayed'] = true;
        $this->paymentsPayed = $paymentsPayed;
        return $this;
    }

    /**
     * Indication about whether the installment can be canceled; true if it is cancelable, or false if it is not.
     *
     * @return bool
     */
    public function getIsCancelable(): bool
    {
        return $this->isCancelable;
    }

    /**
     * Indication about whether the installment can be canceled; true if it is cancelable, or false if it is not.
     *
     * @param bool $isCancelable
     *
     * @return self
     */
    public function setIsCancelable(bool $isCancelable): self
    {
        $this->initialized['isCancelable'] = true;
        $this->isCancelable = $isCancelable;
        return $this;
    }

    /**
     * How much time between each installment
     *
     * @return string
     */
    public function getInstallmentIntervalType(): string
    {
        return $this->installmentIntervalType;
    }

    /**
     * How much time between each installment
     *
     * @param string $installmentIntervalType
     *
     * @return self
     */
    public function setInstallmentIntervalType(string $installmentIntervalType): self
    {
        $this->initialized['installmentIntervalType'] = true;
        $this->installmentIntervalType = $installmentIntervalType;
        return $this;
    }

    /**
     * Type of the first installment
     *
     * @return string
     */
    public function getFirstInstallmentType(): string
    {
        return $this->firstInstallmentType;
    }

    /**
     * Type of the first installment
     *
     * @param string $firstInstallmentType
     *
     * @return self
     */
    public function setFirstInstallmentType(string $firstInstallmentType): self
    {
        $this->initialized['firstInstallmentType'] = true;
        $this->firstInstallmentType = $firstInstallmentType;
        return $this;
    }

    /**
     * Number of days since the first installment
     *
     * @return int
     */
    public function getFirstInstallmentlDays(): int
    {
        return $this->firstInstallmentlDays;
    }

    /**
     * Number of days since the first installment
     *
     * @param int $firstInstallmentlDays
     *
     * @return self
     */
    public function setFirstInstallmentlDays(int $firstInstallmentlDays): self
    {
        $this->initialized['firstInstallmentlDays'] = true;
        $this->firstInstallmentlDays = $firstInstallmentlDays;
        return $this;
    }

    /**
     * Date of the first installment, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getFirstInstallmentDate()
    {
        return $this->firstInstallmentDate;
    }

    /**
     * Date of the first installment, in UNIX timestamp format
     *
     * @param mixed $firstInstallmentDate
     *
     * @return self
     */
    public function setFirstInstallmentDate($firstInstallmentDate): self
    {
        $this->initialized['firstInstallmentDate'] = true;
        $this->firstInstallmentDate = $firstInstallmentDate;
        return $this;
    }
}
