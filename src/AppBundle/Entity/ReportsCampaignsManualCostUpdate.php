<?php

namespace AppBundle\Entity;

/**
 * ReportsCampaignsManualCostUpdate
 */
class ReportsCampaignsManualCostUpdate
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $campaignName;


    /**
     * @var string
     */
    private $trafficSourceName;

    /**
     * @var integer
     */
    private $visits;


    /**
     * @var float
     */
    private $cost;

    /**
     * @var string
     */
    private $timeZone;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return ReportsCampaignsManualCostUpdate
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set campaignName
     *
     * @param string $campaignName
     *
     * @return ReportsCampaignsManualCostUpdate
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
     * Set trafficSourceName
     *
     * @param string $trafficSourceName
     *
     * @return ReportsCampaignsManualCostUpdate
     */
    public function setTrafficSourceName($trafficSourceName)
    {
        $this->trafficSourceName = $trafficSourceName;

        return $this;
    }

    /**
     * Get trafficSourceName
     *
     * @return string
     */
    public function getTrafficSourceName()
    {
        return $this->trafficSourceName;
    }

    /**
     * Set visits
     *
     * @param int $visits
     *
     * @return ReportsCampaignsManualCostUpdate
     */
    public function setVisits($visits)
    {
        $this->visits = $visits;

        return $this;
    }

    /**
     * Get visits
     *
     * @return int
     */
    public function getVisits()
    {
        return $this->visits;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return ReportsCampaignsManualCostUpdate
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
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return ReportsCampaignsManualCostUpdate
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

