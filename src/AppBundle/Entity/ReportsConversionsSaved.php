<?php

namespace AppBundle\Entity;

/**
 * ReportsConversionsSaved
 */
class ReportsConversionsSaved
{
    /**
     * @var string
     */
    private $ip;

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
    private $geo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ReportsConversionsSaved
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
     * Set isp
     *
     * @param string $isp
     *
     * @return ReportsConversionsSaved
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
     * @return ReportsConversionsSaved
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
     * Set geo
     *
     * @param string $geo
     *
     * @return ReportsConversionsSaved
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
