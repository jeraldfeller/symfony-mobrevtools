<?php

namespace AppBundle\Entity;

/**
 * ReportsTrafficMonitoring
 */
class ReportsTrafficMonitoring
{
    /**
     * @var string
     */
    private $trafficSourceName;

    /**
     * @var string
     */
    private $campaignName;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $placement;

    /**
     * @var string
     */
    private $geo;

    /**
     * @var \DateTime
     */
    private $timeStampVisit;

    /**
     * @var integer
     */
    private $lastHourVisitValue;

    /**
     * @var integer
     */
    private $currentHourVisitValue;

    /**
     * @var float
     */
    private $visitDifferencePercentage;

    /**
     * @var string
     */
    private $status;

    /**
     * @var boolean
     */
    private $isDisabledNotification;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TrafficMonitoringCampaignSettings
     */
    private $tmcsid;


    /**
     * Set trafficSourceName
     *
     * @param string $trafficSourceName
     *
     * @return ReportsTrafficMonitoring
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
     * Set campaignName
     *
     * @param string $campaignName
     *
     * @return ReportsTrafficMonitoring
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
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return ReportsTrafficMonitoring
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
     * Set placement
     *
     * @param string $placement
     *
     * @return ReportsTrafficMonitoring
     */
    public function setPlacement($placement)
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * Get placement
     *
     * @return string
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * Set geo
     *
     * @param string $geo
     *
     * @return ReportsTrafficMonitoring
     */
    public function setGeo($geo)
    {
        $this->geo = $geo;

        return $this;
    }

    /**
     * Get geo
     *
     * @return string
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * Set timeStampVisit
     *
     * @param \DateTime $timeStampVisit
     *
     * @return ReportsTrafficMonitoring
     */
    public function setTimeStampVisit($timeStampVisit)
    {
        $this->timeStampVisit = $timeStampVisit;

        return $this;
    }

    /**
     * Get timeStampVisit
     *
     * @return \DateTime
     */
    public function getTimeStampVisit()
    {
        return $this->timeStampVisit;
    }

    /**
     * Set lastHourVisitValue
     *
     * @param integer $lastHourVisitValue
     *
     * @return ReportsTrafficMonitoring
     */
    public function setLastHourVisitValue($lastHourVisitValue)
    {
        $this->lastHourVisitValue = $lastHourVisitValue;

        return $this;
    }

    /**
     * Get lastHourVisitValue
     *
     * @return integer
     */
    public function getLastHourVisitValue()
    {
        return $this->lastHourVisitValue;
    }

    /**
     * Set currentHourVisitValue
     *
     * @param integer $currentHourVisitValue
     *
     * @return ReportsTrafficMonitoring
     */
    public function setCurrentHourVisitValue($currentHourVisitValue)
    {
        $this->currentHourVisitValue = $currentHourVisitValue;

        return $this;
    }

    /**
     * Get currentHourVisitValue
     *
     * @return integer
     */
    public function getCurrentHourVisitValue()
    {
        return $this->currentHourVisitValue;
    }

    /**
     * Set visitDifferencePercentage
     *
     * @param float $visitDifferencePercentage
     *
     * @return ReportsTrafficMonitoring
     */
    public function setVisitDifferencePercentage($visitDifferencePercentage)
    {
        $this->visitDifferencePercentage = $visitDifferencePercentage;

        return $this;
    }

    /**
     * Get visitDifferencePercentage
     *
     * @return float
     */
    public function getVisitDifferencePercentage()
    {
        return $this->visitDifferencePercentage;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return ReportsTrafficMonitoring
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isDisabledNotification
     *
     * @param boolean $isDisabledNotification
     *
     * @return ReportsTrafficMonitoring
     */
    public function setIsDisabledNotification($isDisabledNotification)
    {
        $this->isDisabledNotification = $isDisabledNotification;

        return $this;
    }

    /**
     * Get isDisabledNotification
     *
     * @return boolean
     */
    public function getIsDisabledNotification()
    {
        return $this->isDisabledNotification;
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

    /**
     * Set tmcsid
     *
     * @param \AppBundle\Entity\TrafficMonitoringCampaignSettings $tmcsid
     *
     * @return ReportsTrafficMonitoring
     */
    public function setTmcsid(\AppBundle\Entity\TrafficMonitoringCampaignSettings $tmcsid = null)
    {
        $this->tmcsid = $tmcsid;

        return $this;
    }

    /**
     * Get tmcsid
     *
     * @return \AppBundle\Entity\TrafficMonitoringCampaignSettings
     */
    public function getTmcsid()
    {
        return $this->tmcsid;
    }
}

