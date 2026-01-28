<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Lead extends \ArrayObject
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
     * Email account of the user
     *
     * @var string
     */
    protected $email;
    /**
     * First Name of the user
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name of the user
     *
     * @var string
     */
    protected $lastName;
    /**
     * Array of the tags of the user
     *
     * @var string[]
     */
    protected $tags;
    /**
     * Indication about whether the user has agreed to receive marketing emails; true if she has agreed and thus should receive marketing emails, or false if she has not.
     *
     * @var mixed
     */
    protected $subscribedForMarketingEmails;
    /**
     * Indication of whether the user is located in Europe; true if she is, or false if she's not located in Europe.
     *
     * @var mixed
     */
    protected $euCustomer;
    /**
     * Date the lead was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Values of the UTM fields for this user
     *
     * @var mixed
     */
    protected $utms;
    /**
     * Submitted page of the lead
     *
     * @var mixed
     */
    protected $pageSubmitted;

    /**
     * Email account of the user
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Email account of the user
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
     * First Name of the user
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * First Name of the user
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Last name of the user
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Last name of the user
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Array of the tags of the user
     *
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Array of the tags of the user
     *
     * @param string[] $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }

    /**
     * Indication about whether the user has agreed to receive marketing emails; true if she has agreed and thus should receive marketing emails, or false if she has not.
     *
     * @return mixed
     */
    public function getSubscribedForMarketingEmails()
    {
        return $this->subscribedForMarketingEmails;
    }

    /**
     * Indication about whether the user has agreed to receive marketing emails; true if she has agreed and thus should receive marketing emails, or false if she has not.
     *
     * @param mixed $subscribedForMarketingEmails
     *
     * @return self
     */
    public function setSubscribedForMarketingEmails($subscribedForMarketingEmails): self
    {
        $this->initialized['subscribedForMarketingEmails'] = true;
        $this->subscribedForMarketingEmails = $subscribedForMarketingEmails;
        return $this;
    }

    /**
     * Indication of whether the user is located in Europe; true if she is, or false if she's not located in Europe.
     *
     * @return mixed
     */
    public function getEuCustomer()
    {
        return $this->euCustomer;
    }

    /**
     * Indication of whether the user is located in Europe; true if she is, or false if she's not located in Europe.
     *
     * @param mixed $euCustomer
     *
     * @return self
     */
    public function setEuCustomer($euCustomer): self
    {
        $this->initialized['euCustomer'] = true;
        $this->euCustomer = $euCustomer;
        return $this;
    }

    /**
     * Date the lead was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the lead was created, in UNIX timestamp format
     *
     * @param float $created
     *
     * @return self
     */
    public function setCreated(float $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * Values of the UTM fields for this user
     *
     * @return mixed
     */
    public function getUtms()
    {
        return $this->utms;
    }

    /**
     * Values of the UTM fields for this user
     *
     * @param mixed $utms
     *
     * @return self
     */
    public function setUtms($utms): self
    {
        $this->initialized['utms'] = true;
        $this->utms = $utms;
        return $this;
    }

    /**
     * Submitted page of the lead
     *
     * @return mixed
     */
    public function getPageSubmitted()
    {
        return $this->pageSubmitted;
    }

    /**
     * Submitted page of the lead
     *
     * @param mixed $pageSubmitted
     *
     * @return self
     */
    public function setPageSubmitted($pageSubmitted): self
    {
        $this->initialized['pageSubmitted'] = true;
        $this->pageSubmitted = $pageSubmitted;
        return $this;
    }
}
