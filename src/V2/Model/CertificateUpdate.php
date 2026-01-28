<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CertificateUpdate extends \ArrayObject
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
     * Date the certificate was created, in UNIX timestamp format
     *
     * @var float
     */
    protected $issued;
    /**
     *
     *
     * @var CertificateUpdateForm
     */
    protected $form;

    /**
     * Date the certificate was created, in UNIX timestamp format
     *
     * @return float
     */
    public function getIssued(): float
    {
        return $this->issued;
    }

    /**
     * Date the certificate was created, in UNIX timestamp format
     *
     * @param float $issued
     *
     * @return self
     */
    public function setIssued(float $issued): self
    {
        $this->initialized['issued'] = true;
        $this->issued = $issued;
        return $this;
    }

    /**
     *
     *
     * @return CertificateUpdateForm
     */
    public function getForm(): CertificateUpdateForm
    {
        return $this->form;
    }

    /**
     *
     *
     * @param CertificateUpdateForm $form
     *
     * @return self
     */
    public function setForm(CertificateUpdateForm $form): self
    {
        $this->initialized['form'] = true;
        $this->form = $form;
        return $this;
    }
}
