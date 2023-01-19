<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class UserRequestModel extends ArrayObject
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
     * Username of the user
     *
     * @var string
     */
    protected $username;
    /**
     * Password of the user
     *
     * @var string
     */
    protected $password;
    /**
     * Indication about whether the user has agreed to receive marketing emails; true if she has agreed and thus should receive marketing emails, or false if she has not.
     *
     * @var mixed
     */
    protected $subscribedForMarketingEmails;
    /**
     * Indication about whether the user is an administrator of the school; true if she is, or false if she is not.
     *
     * @var bool
     */
    protected $isAdmin = false;
    /**
     * Indication about whether validation rules should be applied; default value equals to false, which means that validation rules should not be applied.
     *
     * @var bool
     */
    protected $signupValidationRules = false;
    /**
     * Default sign up fields for the School. If custom sign up fields are enabled within the school settings, they are going to be included here too.
     *
     * @var UserRequestModelFields
     */
    protected $fields;
    /**
     * Array of the tags of the user
     *
     * @var string[]
     */
    protected $tags;
    /**
     * Values of the UTM fields for this user
     *
     * @var UserRequestModelUtms
     */
    protected $utms;

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
     * Password of the user
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Password of the user
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
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
     * Indication about whether validation rules should be applied; default value equals to false, which means that validation rules should not be applied.
     *
     * @return bool
     */
    public function getSignupValidationRules(): bool
    {
        return $this->signupValidationRules;
    }

    /**
     * Indication about whether validation rules should be applied; default value equals to false, which means that validation rules should not be applied.
     *
     * @param bool $signupValidationRules
     *
     * @return self
     */
    public function setSignupValidationRules(bool $signupValidationRules): self
    {
        $this->initialized['signupValidationRules'] = true;
        $this->signupValidationRules = $signupValidationRules;
        return $this;
    }

    /**
     * Default sign up fields for the School. If custom sign up fields are enabled within the school settings, they are going to be included here too.
     *
     * @return UserRequestModelFields
     */
    public function getFields(): UserRequestModelFields
    {
        return $this->fields;
    }

    /**
     * Default sign up fields for the School. If custom sign up fields are enabled within the school settings, they are going to be included here too.
     *
     * @param UserRequestModelFields $fields
     *
     * @return self
     */
    public function setFields(UserRequestModelFields $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
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
     * Values of the UTM fields for this user
     *
     * @return UserRequestModelUtms
     */
    public function getUtms(): UserRequestModelUtms
    {
        return $this->utms;
    }

    /**
     * Values of the UTM fields for this user
     *
     * @param UserRequestModelUtms $utms
     *
     * @return self
     */
    public function setUtms(UserRequestModelUtms $utms): self
    {
        $this->initialized['utms'] = true;
        $this->utms = $utms;
        return $this;
    }
}
