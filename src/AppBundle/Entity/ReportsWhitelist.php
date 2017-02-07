<?php

namespace AppBundle\Entity;

/**
 * ReportsWhitelist
 */
class ReportsWhitelist
{
    /**
     * @var string
     */
    private $trafficSource;

    /**
     * @var string
     */
    private $geo;

    /**
     * @var string
     */
    private $vertical;

    /**
     * @var string
     */
    private $placement;

    /**
     * @var integer
     */
    private $visits;

    /**
     * @var integer
     */
    private $clicks;

    /**
     * @var float
     */
    private $ctr;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $roi;

    /**
     * @var integer
     */
    private $conversions;

    /**
     * @var string
     */
    private $campaign;

    /**
     * @var \Date
     */
    private $dateSet;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set trafficSource
     *
     * @param string $trafficSource
     *
     * @return ReportsWhitelist
     */
    public function setTrafficSource($trafficSource)
    {
        $this->trafficSource = $trafficSource;

        return $this;
    }

    /**
     * Get trafficSource
     *
     * @return string
     */
    public function getTrafficSource()
    {
        return $this->trafficSource;
    }

    /**
     * Set geo
     *
     * @param string $geo
     *
     * @return ReportsWhitelist
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
     * Set vertical
     *
     * @param string $vertical
     *
     * @return ReportsWhitelist
     */
    public function setVertical($vertical)
    {
        $this->vertical = $vertical;

        return $this;
    }

    /**
     * Get vertical
     *
     * @return string
     */
    public function getVertical()
    {
        return $this->vertical;
    }

    /**
     * Set placement
     *
     * @param string $placement
     *
     * @return ReportsWhitelist
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
     * Set visits
     *
     * @param integer $visits
     *
     * @return ReportsWhitelist
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
     * Set clicks
     *
     * @param integer $clicks
     *
     * @return ReportsWhitelist
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set ctr
     *
     * @param float $ctr
     *
     * @return ReportsWhitelist
     */
    public function setCtr($ctr)
    {
        $this->ctr = $ctr;

        return $this;
    }

    /**
     * Get ctr
     *
     * @return float
     */
    public function getCtr()
    {
        return $this->ctr;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return ReportsWhitelist
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
     * Set roi
     *
     * @param float $roi
     *
     * @return ReportsWhitelist
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
     * Set conversions
     *
     * @param integer $conversions
     *
     * @return ReportsWhitelist
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
     * Set campaign
     *
     * @param string $campaign
     *
     * @return ReportsWhitelist
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set dateSet
     *
     * @param \DateTime $dateSet
     *
     * @return ReportsWhitelist
     */
    public function setDateSet($dateSet)
    {
        $this->dateSet = $dateSet;

        return $this;
    }

    /**
     * Get dateset
     *
     * @return \DateTime
     */
    public function getDateSet()
    {
        return $this->dateSet;
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
