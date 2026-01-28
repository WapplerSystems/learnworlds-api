<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class User extends \ArrayObject
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
    protected $id;
    /**
     * Email account of the user
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
     * Indication about whether the user has agreed to receive marketing emails; true if she has agreed and thus should receive marketing emails, or false if she has not.
     *
     * @var mixed
     */
    protected $subscribedForMarketingEmails;
    /**
     * Indication about whether the user is located in Europe; true if she is, or false if she is not located in Europe.
     *
     * @var mixed
     */
    protected $euCustomer;
    /**
     * Indication about whether the user is an administrator of the school; true if she is, or false if she is not.
     *
     * @var bool
     */
    protected $isAdmin;
    /**
     * Indication about whether the user is an instructor in the school; true if she is, or false if she is not.
     *
     * @var bool
     */
    protected $isInstructor;
    /**
     * Indication about whether the user is suspended in the school; true if she is, or false if she is not.
     *
     * @var bool
     */
    protected $isSuspended;
    /**
     * Indication about whether the user is an reporter in the school; true if she is, or false if she is not.
     *
     * @var bool
     */
    protected $isReporter;
    /**
     * Values of the role fields for this user
     *
     * @var UserRole
     */
    protected $role;
    /**
     * Indication about whether the user is an affiliate of the school; true if she is, or false if she is not.
     *
     * @var bool
     */
    protected $isAffiliate;
    /**
     * Unique user id of the referrer for this user
     *
     * @var mixed
     */
    protected $referrerId;
    /**
     * Date of the last login of the user, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $lastLogin;
    /**
     * Date the user was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Default sign up fields for the School. If custom sign up fields are enabled within the school settings, they are going to be included here too.
     *
     * @var UserFields
     */
    protected $fields;
    /**
     * Array of the tags of the user
     *
     * @var mixed[]
     */
    protected $tags;
    /**
     * Values of the UTM fields for this user
     *
     * @var mixed
     */
    protected $utms;
    /**
     * Values of the billing info fields for this user
     *
     * @var mixed
     */
    protected $billingInfo;
    /**
     * The latest NPS score submitted by the user. (1-10)
     *
     * @var mixed
     */
    protected $npsScore;
    /**
     * The latest comment submitted by the user on the NPS form.
     *
     * @var mixed
     */
    protected $npsComment;

    /**
     * Unique identifier of the user
     *
     * @return string
     */
    public function getId(): string
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
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

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
     * Username of the user
     *
     * @return string
     */
    public function getUsername(): string
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
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
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
     * Indication about whether the user is located in Europe; true if she is, or false if she is not located in Europe.
     *
     * @return mixed
     */
    public function getEuCustomer()
    {
        return $this->euCustomer;
    }

    /**
     * Indication about whether the user is located in Europe; true if she is, or false if she is not located in Europe.
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
     * Indication about whether the user is an administrator of the school; true if she is, or false if she is not.
     *
     * @return bool
     */
    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    /**
     * Indication about whether the user is an administrator of the school; true if she is, or false if she is not.
     *
     * @param bool $isAdmin
     *
     * @return self
     */
    public function setIsAdmin(bool $isAdmin): self
    {
        $this->initialized['isAdmin'] = true;
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * Indication about whether the user is an instructor in the school; true if she is, or false if she is not.
     *
     * @return bool
     */
    public function getIsInstructor(): bool
    {
        return $this->isInstructor;
    }

    /**
     * Indication about whether the user is an instructor in the school; true if she is, or false if she is not.
     *
     * @param bool $isInstructor
     *
     * @return self
     */
    public function setIsInstructor(bool $isInstructor): self
    {
        $this->initialized['isInstructor'] = true;
        $this->isInstructor = $isInstructor;
        return $this;
    }

    /**
     * Indication about whether the user is suspended in the school; true if she is, or false if she is not.
     *
     * @return bool
     */
    public function getIsSuspended(): bool
    {
        return $this->isSuspended;
    }

    /**
     * Indication about whether the user is suspended in the school; true if she is, or false if she is not.
     *
     * @param bool $isSuspended
     *
     * @return self
     */
    public function setIsSuspended(bool $isSuspended): self
    {
        $this->initialized['isSuspended'] = true;
        $this->isSuspended = $isSuspended;
        return $this;
    }

    /**
     * Indication about whether the user is an reporter in the school; true if she is, or false if she is not.
     *
     * @return bool
     */
    public function getIsReporter(): bool
    {
        return $this->isReporter;
    }

    /**
     * Indication about whether the user is an reporter in the school; true if she is, or false if she is not.
     *
     * @param bool $isReporter
     *
     * @return self
     */
    public function setIsReporter(bool $isReporter): self
    {
        $this->initialized['isReporter'] = true;
        $this->isReporter = $isReporter;
        return $this;
    }

    /**
     * Values of the role fields for this user
     *
     * @return UserRole
     */
    public function getRole(): UserRole
    {
        return $this->role;
    }

    /**
     * Values of the role fields for this user
     *
     * @param UserRole $role
     *
     * @return self
     */
    public function setRole(UserRole $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }

    /**
     * Indication about whether the user is an affiliate of the school; true if she is, or false if she is not.
     *
     * @return bool
     */
    public function getIsAffiliate(): bool
    {
        return $this->isAffiliate;
    }

    /**
     * Indication about whether the user is an affiliate of the school; true if she is, or false if she is not.
     *
     * @param bool $isAffiliate
     *
     * @return self
     */
    public function setIsAffiliate(bool $isAffiliate): self
    {
        $this->initialized['isAffiliate'] = true;
        $this->isAffiliate = $isAffiliate;
        return $this;
    }

    /**
     * Unique user id of the referrer for this user
     *
     * @return mixed
     */
    public function getReferrerId()
    {
        return $this->referrerId;
    }

    /**
     * Unique user id of the referrer for this user
     *
     * @param mixed $referrerId
     *
     * @return self
     */
    public function setReferrerId($referrerId): self
    {
        $this->initialized['referrerId'] = true;
        $this->referrerId = $referrerId;
        return $this;
    }

    /**
     * Date of the last login of the user, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Date of the last login of the user, in UNIX timestamp format
     *
     * @param mixed $lastLogin
     *
     * @return self
     */
    public function setLastLogin($lastLogin): self
    {
        $this->initialized['lastLogin'] = true;
        $this->lastLogin = $lastLogin;
        return $this;
    }

    /**
     * Date the user was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the user was created, in UNIX timestamp format
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
     * Default sign up fields for the School. If custom sign up fields are enabled within the school settings, they are going to be included here too.
     *
     * @return UserFields
     */
    public function getFields(): UserFields
    {
        return $this->fields;
    }

    /**
     * Default sign up fields for the School. If custom sign up fields are enabled within the school settings, they are going to be included here too.
     *
     * @param UserFields $fields
     *
     * @return self
     */
    public function setFields(UserFields $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }

    /**
     * Array of the tags of the user
     *
     * @return mixed[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Array of the tags of the user
     *
     * @param mixed[] $tags
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
     * Values of the billing info fields for this user
     *
     * @return mixed
     */
    public function getBillingInfo()
    {
        return $this->billingInfo;
    }

    /**
     * Values of the billing info fields for this user
     *
     * @param mixed $billingInfo
     *
     * @return self
     */
    public function setBillingInfo($billingInfo): self
    {
        $this->initialized['billingInfo'] = true;
        $this->billingInfo = $billingInfo;
        return $this;
    }

    /**
     * The latest NPS score submitted by the user. (1-10)
     *
     * @return mixed
     */
    public function getNpsScore()
    {
        return $this->npsScore;
    }

    /**
     * The latest NPS score submitted by the user. (1-10)
     *
     * @param mixed $npsScore
     *
     * @return self
     */
    public function setNpsScore($npsScore): self
    {
        $this->initialized['npsScore'] = true;
        $this->npsScore = $npsScore;
        return $this;
    }

    /**
     * The latest comment submitted by the user on the NPS form.
     *
     * @return mixed
     */
    public function getNpsComment()
    {
        return $this->npsComment;
    }

    /**
     * The latest comment submitted by the user on the NPS form.
     *
     * @param mixed $npsComment
     *
     * @return self
     */
    public function setNpsComment($npsComment): self
    {
        $this->initialized['npsComment'] = true;
        $this->npsComment = $npsComment;
        return $this;
    }
}
