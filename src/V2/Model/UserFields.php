<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserFields extends \ArrayObject
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
     * A short biography text
     *
     * @var string
     */
    protected $bio;
    /**
     * User location
     *
     * @var string
     */
    protected $location;
    /**
     * User website URL
     *
     * @var string
     */
    protected $url;
    /**
     * User Facebook URL
     *
     * @var string
     */
    protected $fb;
    /**
     * User Twitter URL
     *
     * @var string
     */
    protected $twitter;
    /**
     * User Instagram URL
     *
     * @var string
     */
    protected $instagram;
    /**
     * User Linkedin URL
     *
     * @var string
     */
    protected $linkedin;
    /**
     * User Skype URL
     *
     * @var string
     */
    protected $skype;
    /**
     * User Behance URL
     *
     * @var string
     */
    protected $behance;
    /**
     * User Dribbble URL
     *
     * @var string
     */
    protected $dribbble;
    /**
     * User Github URL
     *
     * @var string
     */
    protected $github;
    /**
     * User Phone
     *
     * @var string
     */
    protected $phone;
    /**
     * User Address
     *
     * @var string
     */
    protected $address;
    /**
     * User Country
     *
     * @var string
     */
    protected $country;
    /**
     * User Birthday
     *
     * @var string
     */
    protected $birthday;
    /**
     * User Company
     *
     * @var string
     */
    protected $company;
    /**
     * User Company Size
     *
     * @var string
     */
    protected $companySize;
    /**
     * User University
     *
     * @var string
     */
    protected $university;
    /**
     * User Graduation Year
     *
     * @var string
     */
    protected $graduationYear;
    /**
     * A short biography text
     *
     * @return string
     */
    public function getBio() : string
    {
        return $this->bio;
    }
    /**
     * A short biography text
     *
     * @param string $bio
     *
     * @return self
     */
    public function setBio(string $bio) : self
    {
        $this->initialized['bio'] = true;
        $this->bio = $bio;
        return $this;
    }
    /**
     * User location
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * User location
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * User website URL
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * User website URL
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * User Facebook URL
     *
     * @return string
     */
    public function getFb() : string
    {
        return $this->fb;
    }
    /**
     * User Facebook URL
     *
     * @param string $fb
     *
     * @return self
     */
    public function setFb(string $fb) : self
    {
        $this->initialized['fb'] = true;
        $this->fb = $fb;
        return $this;
    }
    /**
     * User Twitter URL
     *
     * @return string
     */
    public function getTwitter() : string
    {
        return $this->twitter;
    }
    /**
     * User Twitter URL
     *
     * @param string $twitter
     *
     * @return self
     */
    public function setTwitter(string $twitter) : self
    {
        $this->initialized['twitter'] = true;
        $this->twitter = $twitter;
        return $this;
    }
    /**
     * User Instagram URL
     *
     * @return string
     */
    public function getInstagram() : string
    {
        return $this->instagram;
    }
    /**
     * User Instagram URL
     *
     * @param string $instagram
     *
     * @return self
     */
    public function setInstagram(string $instagram) : self
    {
        $this->initialized['instagram'] = true;
        $this->instagram = $instagram;
        return $this;
    }
    /**
     * User Linkedin URL
     *
     * @return string
     */
    public function getLinkedin() : string
    {
        return $this->linkedin;
    }
    /**
     * User Linkedin URL
     *
     * @param string $linkedin
     *
     * @return self
     */
    public function setLinkedin(string $linkedin) : self
    {
        $this->initialized['linkedin'] = true;
        $this->linkedin = $linkedin;
        return $this;
    }
    /**
     * User Skype URL
     *
     * @return string
     */
    public function getSkype() : string
    {
        return $this->skype;
    }
    /**
     * User Skype URL
     *
     * @param string $skype
     *
     * @return self
     */
    public function setSkype(string $skype) : self
    {
        $this->initialized['skype'] = true;
        $this->skype = $skype;
        return $this;
    }
    /**
     * User Behance URL
     *
     * @return string
     */
    public function getBehance() : string
    {
        return $this->behance;
    }
    /**
     * User Behance URL
     *
     * @param string $behance
     *
     * @return self
     */
    public function setBehance(string $behance) : self
    {
        $this->initialized['behance'] = true;
        $this->behance = $behance;
        return $this;
    }
    /**
     * User Dribbble URL
     *
     * @return string
     */
    public function getDribbble() : string
    {
        return $this->dribbble;
    }
    /**
     * User Dribbble URL
     *
     * @param string $dribbble
     *
     * @return self
     */
    public function setDribbble(string $dribbble) : self
    {
        $this->initialized['dribbble'] = true;
        $this->dribbble = $dribbble;
        return $this;
    }
    /**
     * User Github URL
     *
     * @return string
     */
    public function getGithub() : string
    {
        return $this->github;
    }
    /**
     * User Github URL
     *
     * @param string $github
     *
     * @return self
     */
    public function setGithub(string $github) : self
    {
        $this->initialized['github'] = true;
        $this->github = $github;
        return $this;
    }
    /**
     * User Phone
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * User Phone
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * User Address
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * User Address
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * User Country
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * User Country
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * User Birthday
     *
     * @return string
     */
    public function getBirthday() : string
    {
        return $this->birthday;
    }
    /**
     * User Birthday
     *
     * @param string $birthday
     *
     * @return self
     */
    public function setBirthday(string $birthday) : self
    {
        $this->initialized['birthday'] = true;
        $this->birthday = $birthday;
        return $this;
    }
    /**
     * User Company
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * User Company
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * User Company Size
     *
     * @return string
     */
    public function getCompanySize() : string
    {
        return $this->companySize;
    }
    /**
     * User Company Size
     *
     * @param string $companySize
     *
     * @return self
     */
    public function setCompanySize(string $companySize) : self
    {
        $this->initialized['companySize'] = true;
        $this->companySize = $companySize;
        return $this;
    }
    /**
     * User University
     *
     * @return string
     */
    public function getUniversity() : string
    {
        return $this->university;
    }
    /**
     * User University
     *
     * @param string $university
     *
     * @return self
     */
    public function setUniversity(string $university) : self
    {
        $this->initialized['university'] = true;
        $this->university = $university;
        return $this;
    }
    /**
     * User Graduation Year
     *
     * @return string
     */
    public function getGraduationYear() : string
    {
        return $this->graduationYear;
    }
    /**
     * User Graduation Year
     *
     * @param string $graduationYear
     *
     * @return self
     */
    public function setGraduationYear(string $graduationYear) : self
    {
        $this->initialized['graduationYear'] = true;
        $this->graduationYear = $graduationYear;
        return $this;
    }
}