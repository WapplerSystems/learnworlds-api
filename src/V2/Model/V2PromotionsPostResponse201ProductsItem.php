<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2PromotionsPostResponse201ProductsItem extends \ArrayObject
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
     * Product type
     *
     * @var string
     */
    protected $type;
    /**
     * Product Id
     *
     * @var string
     */
    protected $id;
    /**
     * Product type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Product type
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
     * Product Id
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Product Id
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
}
