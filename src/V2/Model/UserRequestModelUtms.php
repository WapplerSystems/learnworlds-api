<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserRequestModelUtms extends \ArrayObject
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
     * First click source
     *
     * @var string
     */
    protected $fcSource;
    /**
     * First click medium
     *
     * @var string
     */
    protected $fcMedium;
    /**
     * First click campaign
     *
     * @var string
     */
    protected $fcCampaign;
    /**
     * First click term
     *
     * @var string
     */
    protected $fcTerm;
    /**
     * First click content
     *
     * @var string
     */
    protected $fcContent;
    /**
     * First click landing
     *
     * @var string
     */
    protected $fcLanding;
    /**
     * First click referrer
     *
     * @var string
     */
    protected $fcReferrer;
    /**
     * First click country
     *
     * @var string
     */
    protected $fcCountry;
    /**
     * Last click source
     *
     * @var string
     */
    protected $lcSource;
    /**
     * Last click medium
     *
     * @var string
     */
    protected $lcMedium;
    /**
     * Last click campaign
     *
     * @var string
     */
    protected $lcCampaign;
    /**
     * Last click term
     *
     * @var string
     */
    protected $lcTerm;
    /**
     * Last click content
     *
     * @var string
     */
    protected $lcContent;
    /**
     * Last click landing
     *
     * @var string
     */
    protected $lcLanding;
    /**
     * Last click referrer
     *
     * @var string
     */
    protected $lcReferrer;
    /**
     * Last click country
     *
     * @var string
     */
    protected $lcCountry;
    /**
     * First click source
     *
     * @return string
     */
    public function getFcSource() : string
    {
        return $this->fcSource;
    }
    /**
     * First click source
     *
     * @param string $fcSource
     *
     * @return self
     */
    public function setFcSource(string $fcSource) : self
    {
        $this->initialized['fcSource'] = true;
        $this->fcSource = $fcSource;
        return $this;
    }
    /**
     * First click medium
     *
     * @return string
     */
    public function getFcMedium() : string
    {
        return $this->fcMedium;
    }
    /**
     * First click medium
     *
     * @param string $fcMedium
     *
     * @return self
     */
    public function setFcMedium(string $fcMedium) : self
    {
        $this->initialized['fcMedium'] = true;
        $this->fcMedium = $fcMedium;
        return $this;
    }
    /**
     * First click campaign
     *
     * @return string
     */
    public function getFcCampaign() : string
    {
        return $this->fcCampaign;
    }
    /**
     * First click campaign
     *
     * @param string $fcCampaign
     *
     * @return self
     */
    public function setFcCampaign(string $fcCampaign) : self
    {
        $this->initialized['fcCampaign'] = true;
        $this->fcCampaign = $fcCampaign;
        return $this;
    }
    /**
     * First click term
     *
     * @return string
     */
    public function getFcTerm() : string
    {
        return $this->fcTerm;
    }
    /**
     * First click term
     *
     * @param string $fcTerm
     *
     * @return self
     */
    public function setFcTerm(string $fcTerm) : self
    {
        $this->initialized['fcTerm'] = true;
        $this->fcTerm = $fcTerm;
        return $this;
    }
    /**
     * First click content
     *
     * @return string
     */
    public function getFcContent() : string
    {
        return $this->fcContent;
    }
    /**
     * First click content
     *
     * @param string $fcContent
     *
     * @return self
     */
    public function setFcContent(string $fcContent) : self
    {
        $this->initialized['fcContent'] = true;
        $this->fcContent = $fcContent;
        return $this;
    }
    /**
     * First click landing
     *
     * @return string
     */
    public function getFcLanding() : string
    {
        return $this->fcLanding;
    }
    /**
     * First click landing
     *
     * @param string $fcLanding
     *
     * @return self
     */
    public function setFcLanding(string $fcLanding) : self
    {
        $this->initialized['fcLanding'] = true;
        $this->fcLanding = $fcLanding;
        return $this;
    }
    /**
     * First click referrer
     *
     * @return string
     */
    public function getFcReferrer() : string
    {
        return $this->fcReferrer;
    }
    /**
     * First click referrer
     *
     * @param string $fcReferrer
     *
     * @return self
     */
    public function setFcReferrer(string $fcReferrer) : self
    {
        $this->initialized['fcReferrer'] = true;
        $this->fcReferrer = $fcReferrer;
        return $this;
    }
    /**
     * First click country
     *
     * @return string
     */
    public function getFcCountry() : string
    {
        return $this->fcCountry;
    }
    /**
     * First click country
     *
     * @param string $fcCountry
     *
     * @return self
     */
    public function setFcCountry(string $fcCountry) : self
    {
        $this->initialized['fcCountry'] = true;
        $this->fcCountry = $fcCountry;
        return $this;
    }
    /**
     * Last click source
     *
     * @return string
     */
    public function getLcSource() : string
    {
        return $this->lcSource;
    }
    /**
     * Last click source
     *
     * @param string $lcSource
     *
     * @return self
     */
    public function setLcSource(string $lcSource) : self
    {
        $this->initialized['lcSource'] = true;
        $this->lcSource = $lcSource;
        return $this;
    }
    /**
     * Last click medium
     *
     * @return string
     */
    public function getLcMedium() : string
    {
        return $this->lcMedium;
    }
    /**
     * Last click medium
     *
     * @param string $lcMedium
     *
     * @return self
     */
    public function setLcMedium(string $lcMedium) : self
    {
        $this->initialized['lcMedium'] = true;
        $this->lcMedium = $lcMedium;
        return $this;
    }
    /**
     * Last click campaign
     *
     * @return string
     */
    public function getLcCampaign() : string
    {
        return $this->lcCampaign;
    }
    /**
     * Last click campaign
     *
     * @param string $lcCampaign
     *
     * @return self
     */
    public function setLcCampaign(string $lcCampaign) : self
    {
        $this->initialized['lcCampaign'] = true;
        $this->lcCampaign = $lcCampaign;
        return $this;
    }
    /**
     * Last click term
     *
     * @return string
     */
    public function getLcTerm() : string
    {
        return $this->lcTerm;
    }
    /**
     * Last click term
     *
     * @param string $lcTerm
     *
     * @return self
     */
    public function setLcTerm(string $lcTerm) : self
    {
        $this->initialized['lcTerm'] = true;
        $this->lcTerm = $lcTerm;
        return $this;
    }
    /**
     * Last click content
     *
     * @return string
     */
    public function getLcContent() : string
    {
        return $this->lcContent;
    }
    /**
     * Last click content
     *
     * @param string $lcContent
     *
     * @return self
     */
    public function setLcContent(string $lcContent) : self
    {
        $this->initialized['lcContent'] = true;
        $this->lcContent = $lcContent;
        return $this;
    }
    /**
     * Last click landing
     *
     * @return string
     */
    public function getLcLanding() : string
    {
        return $this->lcLanding;
    }
    /**
     * Last click landing
     *
     * @param string $lcLanding
     *
     * @return self
     */
    public function setLcLanding(string $lcLanding) : self
    {
        $this->initialized['lcLanding'] = true;
        $this->lcLanding = $lcLanding;
        return $this;
    }
    /**
     * Last click referrer
     *
     * @return string
     */
    public function getLcReferrer() : string
    {
        return $this->lcReferrer;
    }
    /**
     * Last click referrer
     *
     * @param string $lcReferrer
     *
     * @return self
     */
    public function setLcReferrer(string $lcReferrer) : self
    {
        $this->initialized['lcReferrer'] = true;
        $this->lcReferrer = $lcReferrer;
        return $this;
    }
    /**
     * Last click country
     *
     * @return string
     */
    public function getLcCountry() : string
    {
        return $this->lcCountry;
    }
    /**
     * Last click country
     *
     * @param string $lcCountry
     *
     * @return self
     */
    public function setLcCountry(string $lcCountry) : self
    {
        $this->initialized['lcCountry'] = true;
        $this->lcCountry = $lcCountry;
        return $this;
    }
}