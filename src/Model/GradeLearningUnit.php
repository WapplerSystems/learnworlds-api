<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class GradeLearningUnit extends ArrayObject
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
     * Unique identifier of learning activity
     *
     * @var string
     */
    protected $id;
    /**
     * Type of learning activity
     *
     * @var string
     */
    protected $type;
    /**
     * Type icon of learning activity
     *
     * @var string
     */
    protected $icon;
    /**
     * Subtitle of learning activity
     *
     * @var string
     */
    protected $subtitle;

    /**
     * Unique identifier of learning activity
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of learning activity
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
     * Type of learning activity
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of learning activity
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * Type icon of learning activity
     *
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * Type icon of learning activity
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }

    /**
     * Subtitle of learning activity
     *
     * @return string
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * Subtitle of learning activity
     *
     * @param string $subtitle
     *
     * @return self
     */
    public function setSubtitle(string $subtitle): self
    {
        $this->initialized['subtitle'] = true;
        $this->subtitle = $subtitle;
        return $this;
    }
}
