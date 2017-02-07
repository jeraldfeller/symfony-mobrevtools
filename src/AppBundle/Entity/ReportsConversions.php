<?php

namespace AppBundle\Entity;

/**
 * ReportsConversions
 */
class ReportsConversions
{
    /**
     * @var string
     */
    private $campaignname;

    /**
     * @var string
     */
    private $campaignid;

    /**
     * @var integer
     */
    private $ipint;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $visits;

    /**
     * @var integer
     */
    private $conversions;

    /**
     * @var float
     */
    private $revenue;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $profit;

    /**
     * @var float
     */
    private $roi;

    /**
     * @var string
     */
    private $countrycode;

    /**
     * @var string
     */
    private $countryname;

    /**
     * @var string
     */
    private $isp;

    /**
     * @var string
     */
    private $mobilecarrier;

    /**
     * @var string
     */
    private $connectiontype;

    /**
     * @var \DateTime
     */
    private $visittimestamp;

    /**
     * @var integer
     */
    private $ctid;


    /**
     * Set campaignname
     *
     * @param string $campaignname
     *
     * @return ReportsConversions
     */
    public function setCampaignname($campaignname)
    {
        $this->campaignname = $campaignname;

        return $this;
    }

    /**
     * Get campaignname
     *
     * @return string
     */
    public function getCampaignname()
    {
        return $this->campaignname;
    }

    /**
     * Set campaignid
     *
     * @param string $campaignid
     *
     * @return ReportsConversions
     */
    public function setCampaignid($campaignid)
    {
        $this->campaignid = $campaignid;

        return $this;
    }

    /**
     * Get campaignid
     *
     * @return string
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * Set ipint
     *
     * @param integer $ipint
     *
     * @return ReportsConversions
     */
    public function setIpint($ipint)
    {
        $this->ipint = $ipint;

        return $this;
    }

    /**
     * Get ipint
     *
     * @return integer
     */
    public function getIpint()
    {
        return $this->ipint;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ReportsConversions
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set visits
     *
     * @param integer $visits
     *
     * @return ReportsConversions
     */
    public function setVisits($visits)
    {
        $this->visits = $visits;

        return $this;
    }

    /**
     * Get visits
     *
     * @return integer
     */
    public function getVisits()
    {
        return $this->visits;
    }

    /**
     * Set conversions
     *
     * @param integer $conversions
     *
     * @return ReportsConversions
     */
    public function setConversions($conversions)
    {
        $this->conversions = $conversions;

        return $this;
    }

    /**
     * Get conversions
     *
     * @return integer
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Set revenue
     *
     * @param float $revenue
     *
     * @return ReportsConversions
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return ReportsConversions
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set profit
     *
     * @param float $profit
     *
     * @return ReportsConversions
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;

        return $this;
    }

    /**
     * Get profit
     *
     * @return float
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * Set roi
     *
     * @param float $roi
     *
     * @return ReportsConversions
     */
    public function setRoi($roi)
    {
        $this->roi = $roi;

        return $this;
    }

    /**
     * Get roi
     *
     * @return float
     */
    public function getRoi()
    {
        return $this->roi;
    }

    /**
     * Set countrycode
     *
     * @param string $countrycode
     *
     * @return ReportsConversions
     */
    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get countrycode
     *
     * @return string
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Set countryname
     *
     * @param string $countryname
     *
     * @return ReportsConversions
     */
    public function setCountryname($countryname)
    {
        $this->countryname = $countryname;

        return $this;
    }

    /**
     * Get countryname
     *
     * @return string
     */
    public function getCountryname()
    {
        return $this->countryname;
    }

    /**
     * Set isp
     *
     * @param string $isp
     *
     * @return ReportsConversions
     */
    public function setIsp($isp)
    {
        $this->isp = $isp;

        return $this;
    }

    /**
     * Get isp
     *
     * @return string
     */
    public function getIsp()
    {
        return $this->isp;
    }

    /**
     * Set mobilecarrier
     *
     * @param string $mobilecarrier
     *
     * @return ReportsConversions
     */
    public function setMobilecarrier($mobilecarrier)
    {
        $this->mobilecarrier = $mobilecarrier;

        return $this;
    }

    /**
     * Get mobilecarrier
     *
     * @return string
     */
    public function getMobilecarrier()
    {
        return $this->mobilecarrier;
    }

    /**
     * Set connectiontype
     *
     * @param string $connectiontype
     *
     * @return ReportsConversions
     */
    public function setConnectiontype($connectiontype)
    {
        $this->connectiontype = $connectiontype;

        return $this;
    }

    /**
     * Get connectiontype
     *
     * @return string
     */
    public function getConnectiontype()
    {
        return $this->connectiontype;
    }

    /**
     * Set visittimestamp
     *
     * @param \DateTime $visittimestamp
     *
     * @return ReportsConversions
     */
    public function setVisittimestamp($visittimestamp)
    {
        $this->visittimestamp = $visittimestamp;

        return $this;
    }

    /**
     * Get visittimestamp
     *
     * @return \DateTime
     */
    public function getVisittimestamp()
    {
        return $this->visittimestamp;
    }

    /**
     * Get ctid
     *
     * @return integer
     */
    public function getCtid()
    {
        return $this->ctid;
    }
}

