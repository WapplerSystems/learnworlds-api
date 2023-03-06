<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserFields extends \ArrayObject
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
     * A short biography text
     *
     * @var mixed
     */
    protected $bio;
    /**
     * User location
     *
     * @var mixed
     */
    protected $location;
    /**
     * User website URL
     *
     * @var mixed
     */
    protected $url;
    /**
     * User Facebook URL
     *
     * @var mixed
     */
    protected $fb;
    /**
     * User Twitter URL
     *
     * @var mixed
     */
    protected $twitter;
    /**
     * User Instagram URL
     *
     * @var mixed
     */
    protected $instagram;
    /**
     * User Linkedin URL
     *
     * @var mixed
     */
    protected $linkedin;
    /**
     * User Skype URL
     *
     * @var mixed
     */
    protected $skype;
    /**
     * User Behance URL
     *
     * @var mixed
     */
    protected $behance;
    /**
     * User Dribbble URL
     *
     * @var mixed
     */
    protected $dribbble;
    /**
     * User Github URL
     *
     * @var mixed
     */
    protected $github;
    /**
     * User Phone
     *
     * @var mixed
     */
    protected $phone;
    /**
     * User Address
     *
     * @var mixed
     */
    protected $address;
    /**
     * User Country
     *
     * @var mixed
     */
    protected $country;
    /**
     * User Birthday
     *
     * @var mixed
     */
    protected $birthday;
    /**
     * User Company
     *
     * @var mixed
     */
    protected $company;
    /**
     * User Company Size
     *
     * @var mixed
     */
    protected $companySize;
    /**
     * User University
     *
     * @var mixed
     */
    protected $university;
    /**
     * User Graduation Year
     *
     * @var mixed
     */
    protected $graduationYear;
    /**
     * A short biography text
     *
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }
    /**
     * A short biography text
     *
     * @param mixed $bio
     *
     * @return self
     */
    public function setBio($bio) : self
    {
        $this->initialized['bio'] = true;
        $this->bio = $bio;
        return $this;
    }
    /**
     * User location
     *
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * User location
     *
     * @param mixed $location
     *
     * @return self
     */
    public function setLocation($location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * User website URL
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * User website URL
     *
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * User Facebook URL
     *
     * @return mixed
     */
    public function getFb()
    {
        return $this->fb;
    }
    /**
     * User Facebook URL
     *
     * @param mixed $fb
     *
     * @return self
     */
    public function setFb($fb) : self
    {
        $this->initialized['fb'] = true;
        $this->fb = $fb;
        return $this;
    }
    /**
     * User Twitter URL
     *
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }
    /**
     * User Twitter URL
     *
     * @param mixed $twitter
     *
     * @return self
     */
    public function setTwitter($twitter) : self
    {
        $this->initialized['twitter'] = true;
        $this->twitter = $twitter;
        return $this;
    }
    /**
     * User Instagram URL
     *
     * @return mixed
     */
    public function getInstagram()
    {
        return $this->instagram;
    }
    /**
     * User Instagram URL
     *
     * @param mixed $instagram
     *
     * @return self
     */
    public function setInstagram($instagram) : self
    {
        $this->initialized['instagram'] = true;
        $this->instagram = $instagram;
        return $this;
    }
    /**
     * User Linkedin URL
     *
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }
    /**
     * User Linkedin URL
     *
     * @param mixed $linkedin
     *
     * @return self
     */
    public function setLinkedin($linkedin) : self
    {
        $this->initialized['linkedin'] = true;
        $this->linkedin = $linkedin;
        return $this;
    }
    /**
     * User Skype URL
     *
     * @return mixed
     */
    public function getSkype()
    {
        return $this->skype;
    }
    /**
     * User Skype URL
     *
     * @param mixed $skype
     *
     * @return self
     */
    public function setSkype($skype) : self
    {
        $this->initialized['skype'] = true;
        $this->skype = $skype;
        return $this;
    }
    /**
     * User Behance URL
     *
     * @return mixed
     */
    public function getBehance()
    {
        return $this->behance;
    }
    /**
     * User Behance URL
     *
     * @param mixed $behance
     *
     * @return self
     */
    public function setBehance($behance) : self
    {
        $this->initialized['behance'] = true;
        $this->behance = $behance;
        return $this;
    }
    /**
     * User Dribbble URL
     *
     * @return mixed
     */
    public function getDribbble()
    {
        return $this->dribbble;
    }
    /**
     * User Dribbble URL
     *
     * @param mixed $dribbble
     *
     * @return self
     */
    public function setDribbble($dribbble) : self
    {
        $this->initialized['dribbble'] = true;
        $this->dribbble = $dribbble;
        return $this;
    }
    /**
     * User Github URL
     *
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }
    /**
     * User Github URL
     *
     * @param mixed $github
     *
     * @return self
     */
    public function setGithub($github) : self
    {
        $this->initialized['github'] = true;
        $this->github = $github;
        return $this;
    }
    /**
     * User Phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * User Phone
     *
     * @param mixed $phone
     *
     * @return self
     */
    public function setPhone($phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * User Address
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * User Address
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * User Country
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * User Country
     *
     * @param mixed $country
     *
     * @return self
     */
    public function setCountry($country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * User Birthday
     *
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
    /**
     * User Birthday
     *
     * @param mixed $birthday
     *
     * @return self
     */
    public function setBirthday($birthday) : self
    {
        $this->initialized['birthday'] = true;
        $this->birthday = $birthday;
        return $this;
    }
    /**
     * User Company
     *
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * User Company
     *
     * @param mixed $company
     *
     * @return self
     */
    public function setCompany($company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * User Company Size
     *
     * @return mixed
     */
    public function getCompanySize()
    {
        return $this->companySize;
    }
    /**
     * User Company Size
     *
     * @param mixed $companySize
     *
     * @return self
     */
    public function setCompanySize($companySize) : self
    {
        $this->initialized['companySize'] = true;
        $this->companySize = $companySize;
        return $this;
    }
    /**
     * User University
     *
     * @return mixed
     */
    public function getUniversity()
    {
        return $this->university;
    }
    /**
     * User University
     *
     * @param mixed $university
     *
     * @return self
     */
    public function setUniversity($university) : self
    {
        $this->initialized['university'] = true;
        $this->university = $university;
        return $this;
    }
    /**
     * User Graduation Year
     *
     * @return mixed
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
    }
    /**
     * User Graduation Year
     *
     * @param mixed $graduationYear
     *
     * @return self
     */
    public function setGraduationYear($graduationYear) : self
    {
        $this->initialized['graduationYear'] = true;
        $this->graduationYear = $graduationYear;
        return $this;
    }
}
