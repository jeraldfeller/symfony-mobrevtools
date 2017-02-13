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
    private $campaignName;

    /**
     * @var integer
     */
    private $ipInt;

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
    private $countryCode;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var string
     */
    private $isp;

    /**
     * @var string
     */
    private $mobileCarrier;

    /**
     * @var string
     */
    private $connectionType;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set campaignname
     *
     * @param string $campaignname
     *
     * @return ReportsMaskedConversions
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;

        return $this;
    }

    /**
     * Get campaignname
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * Set ipint
     *
     * @param integer $ipint
     *
     * @return ReportsMaskedConversions
     */
    public function setIpInt($ipInt)
    {
        $this->ipInt = $ipInt;

        return $this;
    }

    /**
     * Get ipint
     *
     * @return integer
     */
    public function getIpInt()
    {
        return $this->ipInt;
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
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countrycode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set countryname
     *
     * @param string $countryname
     *
     * @return ReportsMaskedConversions
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryname
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
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
    public function setMobileCarrier($mobileCarrier)
    {
        $this->mobileCarrier = $mobileCarrier;

        return $this;
    }

    /**
     * Get mobilecarrier
     *
     * @return string
     */
    public function getMobileCarrier()
    {
        return $this->mobileCarrier;
    }

    /**
     * Set connectiontype
     *
     * @param string $connectiontype
     *
     * @return ReportsMaskedConversions
     */
    public function setConnectionType($connectionType)
    {
        $this->connectionType = $connectionType;

        return $this;
    }

    /**
     * Get connectiontype
     *
     * @return string
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }

    /**
     * Get ctmid
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
