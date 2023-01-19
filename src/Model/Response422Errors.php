<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class Response422Errors extends ArrayObject
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
     * @var Response422ErrorsCompanyItem[]
     */
    protected $company;

    /**
     *
     *
     * @return Response422ErrorsCompanyItem[]
     */
    public function getCompany(): array
    {
        return $this->company;
    }

    /**
     *
     *
     * @param Response422ErrorsCompanyItem[] $company
     *
     * @return self
     */
    public function setCompany(array $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
}
