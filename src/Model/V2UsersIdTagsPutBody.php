<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class V2UsersIdTagsPutBody extends ArrayObject
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
     * Array of the tags of the user
     *
     * @var string[]
     */
    protected $tags;
    /**
     * The exact action to be performed with the aforementioned tags to the specified user; 'attach' is the indication to add these tags to the user and 'detach' is the indication to remove them from the user.
     *
     * @var string
     */
    protected $action;

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
     * The exact action to be performed with the aforementioned tags to the specified user; 'attach' is the indication to add these tags to the user and 'detach' is the indication to remove them from the user.
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * The exact action to be performed with the aforementioned tags to the specified user; 'attach' is the indication to add these tags to the user and 'detach' is the indication to remove them from the user.
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}
