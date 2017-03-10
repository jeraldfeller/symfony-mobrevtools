<?php

namespace AppBundle\Entity;

/**
 * ReportsArchivedMasked
 */
class ReportsArchivedMasked
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
    private $ramid;

    /**
     * @var \AppBundle\Entity\ArchiveLabel
     */
    private $archiveLabelIid;


    /**
     * Set campaignName
     *
     * @param string $campaignName
     *
     * @return ReportsArchivedMasked
     */
    public function setCampaignName($campaignName)
    {
        $this->campaignName = $campaignName;

        return $this;
    }

    /**
     * Get campaignName
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * Set ipInt
     *
     * @param integer $ipInt
     *
     * @return ReportsArchivedMasked
     */
    public function setIpInt($ipInt)
    {
        $this->ipInt = $ipInt;

        return $this;
    }

    /**
     * Get ipInt
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * @return ReportsArchivedMasked
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
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return ReportsArchivedMasked
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return ReportsArchivedMasked
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
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
     * @return ReportsArchivedMasked
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
     * Set mobileCarrier
     *
     * @param string $mobileCarrier
     *
     * @return ReportsArchivedMasked
     */
    public function setMobileCarrier($mobileCarrier)
    {
        $this->mobileCarrier = $mobileCarrier;

        return $this;
    }

    /**
     * Get mobileCarrier
     *
     * @return string
     */
    public function getMobileCarrier()
    {
        return $this->mobileCarrier;
    }

    /**
     * Set connectionType
     *
     * @param string $connectionType
     *
     * @return ReportsArchivedMasked
     */
    public function setConnectionType($connectionType)
    {
        $this->connectionType = $connectionType;

        return $this;
    }

    /**
     * Get connectionType
     *
     * @return string
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }

    /**
     * Get ramid
     *
     * @return integer
     */
    public function getRamid()
    {
        return $this->ramid;
    }

    /**
     * Set archiveLabelIid
     *
     * @param \AppBundle\Entity\ArchiveLabel $archiveLabelIid
     *
     * @return ReportsArchivedMasked
     */
    public function setArchiveLabelIid(\AppBundle\Entity\ArchiveLabel $archiveLabelIid = null)
    {
        $this->archiveLabelIid = $archiveLabelIid;

        return $this;
    }

    /**
     * Get archiveLabelIid
     *
     * @return \AppBundle\Entity\ArchiveLabel
     */
    public function getArchiveLabelIid()
    {
        return $this->archiveLabelIid;
    }
}

