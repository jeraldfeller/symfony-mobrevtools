<?php

namespace AppBundle\Entity;

/**
 * ReportsConversionsImported
 */
class ReportsConversionsImported
{
    /**
     * @var string
     */
    private $campaignName;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var integer
     */
    private $ipInt;

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
     * @var \DateTime
     */
    private $visitTimestamp;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\ImportGroup
     */
    private $igid;


    /**
     * Set campaignname
     *
     * @param string $campaignname
     *
     * @return ReportsConversionsImported
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
     * Set campaignid
     *
     * @param string $campaignid
     *
     * @return ReportsConversionsImported
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignid
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set ipint
     *
     * @param integer $ipint
     *
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * @return ReportsConversionsImported
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
     * Set visittimestamp
     *
     * @param \DateTime $visittimestamp
     *
     * @return ReportsConversionsImported
     */
    public function setVisitTimestamp($visitTimestamp)
    {
        $this->visitTimestamp = $visitTimestamp;

        return $this;
    }

    /**
     * Get visittimestamp
     *
     * @return \DateTime
     */
    public function getVisitTimestamp()
    {
        return $this->visitTimestamp;
    }

    /**
     * Get ctid
     *
     * @return integer
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Set igid
     *
     * @param \AppBundle\Entity\ImportGroup $igid
     *
     * @return ReportsConversionsImported
     */
    public function setIgid(\AppBundle\Entity\ImportGroup $igid = null)
    {
        $this->igid = $igid;

        return $this;
    }

    /**
     * Get igid
     *
     * @return \AppBundle\Entity\ImportGroup
     */
    public function getIgid()
    {
        return $this->igid;
    }
}
