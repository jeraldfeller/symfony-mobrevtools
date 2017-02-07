<?php

namespace AppBundle\Entity;

/**
 * Reportsbot
 */
class Reportsbot
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $bid;

    /**
     * @var int
     */
    private $tid;

    /**
     * @var int
     */
    private $cgid;

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
     * @var int
     */
    private $visits;

    /**
     * @var string
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
    private $conversions;

    /**
     * @var float
     */
    private $roi;

    /**
     * @var string
     */
    private $campaignName;

    /**
     * @var int
     */
    private $frequency;

    /**
     * @var int
     */
    private $startFrom;

    /**
     * @var int
     */
    private $dateExecuted;

    /**
     * @var string
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return Reportsbot
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return int
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return Reportsbot
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return int
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set cgid
     *
     * @param integer $cgid
     *
     * @return Reportsbot
     */
    public function setCgid($cgid)
    {
        $this->cgid = $cgid;

        return $this;
    }

    /**
     * Get cgid
     *
     * @return int
     */
    public function getCgid()
    {
        return $this->cgid;
    }

    /**
     * Set trafficSource
     *
     * @param string $trafficSource
     *
     * @return Reportsbot
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
     * @return Reportsbot
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
     * @return Reportsbot
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
     * @return Reportsbot
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
     * @return Reportsbot
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
     * Set clicks
     *
     * @param string $clicks
     *
     * @return Reportsbot
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return string
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
     * @return Reportsbot
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
     * @return Reportsbot
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
     * Set conversions
     *
     * @param float $conversions
     *
     * @return Reportsbot
     */
    public function setConversions($conversions)
    {
        $this->conversions = $conversions;

        return $this;
    }

    /**
     * Get conversions
     *
     * @return float
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Set roi
     *
     * @param float $roi
     *
     * @return Reportsbot
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
     * Set campaignName
     *
     * @param string $campaignName
     *
     * @return Reportsbot
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
     * Set frequency
     *
     * @param integer $frequency
     *
     * @return Reportsbot
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set startFrom
     *
     * @param integer $startFrom
     *
     * @return Reportsbot
     */
    public function setStartFrom($startFrom)
    {
        $this->startFrom = $startFrom;

        return $this;
    }

    /**
     * Get startFrom
     *
     * @return int
     */
    public function getStartFrom()
    {
        return $this->startFrom;
    }

    /**
     * Set dateExecuted
     *
     * @param integer $dateExecuted
     *
     * @return Reportsbot
     */
    public function setDateExecuted($dateExecuted)
    {
        $this->dateExecuted = $dateExecuted;

        return $this;
    }

    /**
     * Get dateExecuted
     *
     * @return int
     */
    public function getDateExecuted()
    {
        return $this->dateExecuted;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Reportsbot
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
}
