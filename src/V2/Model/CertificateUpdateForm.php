<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class CertificateUpdateForm extends \ArrayObject
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
     * First name that appears in certificate pdf
     *
     * @var string
     */
    protected $firstname;
    /**
     * Last name that appears in certificate pdf
     *
     * @var string
     */
    protected $lastname;
    /**
     * ptin that appears in certificate pdf. A special field that can be used for showing user input, like a professional registration number, etc (available in Learning Center plans or higher)
     *
     * @var string
     */
    protected $ptin;
    /**
     * First name that appears in certificate pdf
     *
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->firstname;
    }
    /**
     * First name that appears in certificate pdf
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname) : self
    {
        $this->initialized['firstname'] = true;
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Last name that appears in certificate pdf
     *
     * @return string
     */
    public function getLastname() : string
    {
        return $this->lastname;
    }
    /**
     * Last name that appears in certificate pdf
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname) : self
    {
        $this->initialized['lastname'] = true;
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * ptin that appears in certificate pdf. A special field that can be used for showing user input, like a professional registration number, etc (available in Learning Center plans or higher)
     *
     * @return string
     */
    public function getPtin() : string
    {
        return $this->ptin;
    }
    /**
     * ptin that appears in certificate pdf. A special field that can be used for showing user input, like a professional registration number, etc (available in Learning Center plans or higher)
     *
     * @param string $ptin
     *
     * @return self
     */
    public function setPtin(string $ptin) : self
    {
        $this->initialized['ptin'] = true;
        $this->ptin = $ptin;
        return $this;
    }
}
