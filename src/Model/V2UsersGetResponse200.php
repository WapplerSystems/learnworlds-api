<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class V2UsersGetResponse200 extends ArrayObject
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
     *
     *
     * @var User[]
     */
    protected $data;
    /**
     *
     *
     * @var Meta
     */
    protected $meta;

    /**
     *
     *
     * @return User[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     *
     *
     * @param User[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }

    /**
     *
     *
     * @return Meta
     */
    public function getMeta(): Meta
    {
        return $this->meta;
    }

    /**
     *
     *
     * @param Meta $meta
     *
     * @return self
     */
    public function setMeta(Meta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
