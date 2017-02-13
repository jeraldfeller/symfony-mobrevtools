<?php

namespace AppBundle\Entity;

/**
 * TrafficMonitoringCampaignSettings
 */
class TrafficMonitoringCampaignSettings
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
    private $visitCount;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set campaignName
     *
     * @param string $campaignName
     *
     * @return TrafficMonitoringCampaignSettings
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
     * @return TrafficMonitoringCampaignSettings
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
     * Set visitCount
     *
     * @param integer $visitCount
     *
     * @return TrafficMonitoringCampaignSettings
     */
    public function setVisitCount($visitCount)
    {
        $this->visitCount = $visitCount;

        return $this;
    }

    /**
     * Get visitCount
     *
     * @return integer
     */
    public function getVisitCount()
    {
        return $this->visitCount;
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

