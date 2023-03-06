<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserRole extends \ArrayObject
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
     * Level of the role
     *
     * @var string
     */
    protected $level;
    /**
     * Name of the role
     *
     * @var string
     */
    protected $name;
    /**
     * Level of the role
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * Level of the role
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * Name of the role
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the role
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
