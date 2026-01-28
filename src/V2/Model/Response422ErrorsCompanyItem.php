<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Response422ErrorsCompanyItem extends \ArrayObject
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
     * @var string
     */
    protected $n0;

    /**
     *
     *
     * @return string
     */
    public function get0(): string
    {
        return $this->n0;
    }

    /**
     *
     *
     * @param string $n0
     *
     * @return self
     */
    public function set0(string $n0): self
    {
        $this->initialized['n0'] = true;
        $this->n0 = $n0;
        return $this;
    }
}
