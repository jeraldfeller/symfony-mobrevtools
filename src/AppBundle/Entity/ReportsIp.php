<?php

namespace AppBundle\Entity;

/**
 * ReportsIp
 */
class ReportsIp
{
    /**
     * @var string
     */
    private $trafficName;

    /**
     * @var string
     */
    private $campaignName;

    /**
     * @var string
     */
    private $geo;

    /**
     * @var string
     */
    private $mobileCarrier;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set trafficname
     *
     * @param string $trafficname
     *
     * @return ReportsIp
     */
    public function setTrafficName($trafficName)
    {
        $this->trafficName = $trafficName;

        return $this;
    }

    /**
     * Get trafficname
     *
     * @return string
     */
    public function getTrafficName()
    {
        return $this->trafficName;
    }

    /**
     * Set campaignname
     *
     * @param string $campaignname
     *
     * @return ReportsIp
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
     * Set geo
     *
     * @param string $geo
     *
     * @return ReportsIp
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
     * Set mobilecarrier
     *
     * @param string $mobilecarrier
     *
     * @return ReportsIp
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
     * Set ip
     *
     * @param string $ip
     *
     * @return ReportsIp
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }
}
