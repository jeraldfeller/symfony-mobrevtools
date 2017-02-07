<?php

namespace AppBundle\Entity;

/**
 * ReportsMaskedConversions
 */
class ReportsMaskedConversions
{
    /**
     * @var string
     */
    private $campaignname;

    /**
     * @var integer
     */
    private $ipint;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $subnet;

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
     * @var integer
     */
    private $ctmid;


    /**
     * Set campaignname
     *
     * @param string $campaignname
     *
     * @return ReportsMaskedConversions
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
     * Set ipint
     *
     * @param integer $ipint
     *
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * Set subnet
     *
     * @param string $subnet
     *
     * @return ReportsMaskedConversions
     */
    public function setSubnet($subnet)
    {
        $this->subnet = $subnet;

        return $this;
    }

    /**
     * Get subnet
     *
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * Set visits
     *
     * @param integer $visits
     *
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * @return ReportsMaskedConversions
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
     * Get ctmid
     *
     * @return integer
     */
    public function getCtmid()
    {
        return $this->ctmid;
    }
}

