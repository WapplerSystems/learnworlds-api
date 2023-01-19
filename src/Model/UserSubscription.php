<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class UserSubscription extends ArrayObject
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
     * Unique identifier of the subscription plan
     *
     * @var string
     */
    protected $planId;
    /**
     * Date the subscription was created, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $created;
    /**
     * Date the subscription expires, in UNIX timestamp format
     *
     * @var mixed
     */
    protected $expiresAt;
    /**
     * Status of the subscription
     *
     * @var string
     */
    protected $status;
    /**
     * Provider of the subscription
     *
     * @var string
     */
    protected $provider;
    /**
     * Metadata of the subscription provider. In case the provider is learnworlds, the provider_meta is null
     *
     * @var mixed
     */
    protected $providerMeta;

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
     * Date the subscription was created, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Date the subscription was created, in UNIX timestamp format
     *
     * @param mixed $created
     *
     * @return self
     */
    public function setCreated($created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * Date the subscription expires, in UNIX timestamp format
     *
     * @return mixed
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Date the subscription expires, in UNIX timestamp format
     *
     * @param mixed $expiresAt
     *
     * @return self
     */
    public function setExpiresAt($expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * Status of the subscription
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status of the subscription
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
     * Provider of the subscription
     *
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * Provider of the subscription
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }

    /**
     * Metadata of the subscription provider. In case the provider is learnworlds, the provider_meta is null
     *
     * @return mixed
     */
    public function getProviderMeta()
    {
        return $this->providerMeta;
    }

    /**
     * Metadata of the subscription provider. In case the provider is learnworlds, the provider_meta is null
     *
     * @param mixed $providerMeta
     *
     * @return self
     */
    public function setProviderMeta($providerMeta): self
    {
        $this->initialized['providerMeta'] = true;
        $this->providerMeta = $providerMeta;
        return $this;
    }
}
