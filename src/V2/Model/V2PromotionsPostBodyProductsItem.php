<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class V2PromotionsPostBodyProductsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
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