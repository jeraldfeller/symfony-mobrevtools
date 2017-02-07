<?php

namespace AppBundle\Entity;

/**
 * ReportsBlacklist
 */
class ReportsBlacklist
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $blid;

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
     * @var int
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
     * @var int
     */
    private $conversions;

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
     * Set blid
     *
     * @param integer $blid
     *
     * @return ReportsBlacklist
     */
    public function setBlid($blid)
    {
        $this->blid = $blid;

        return $this;
    }

    /**
     * Get blid
     *
     * @return int
     */
    public function getBlid()
    {
        return $this->blid;
    }

    /**
     * Set tid
     *
     * @param string $tid
     *
     * @return ReportsBlacklist
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return string
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @param integer $clicks
     *
     * @return ReportsBlacklist
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return int
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
     */
    public function setConversions($conversions)
    {
        $this->conversions = $conversions;

        return $this;
    }

    /**
     * Get conversions
     *
     * @return int
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Set campaignName
     *
     * @param string $campaignName
     *
     * @return ReportsBlacklist
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
     * @return ReportsBlacklist
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
     * @param string $startFrom
     *
     * @return ReportsBlacklist
     */
    public function setStartFrom($startFrom)
    {
        $this->startFrom = $startFrom;

        return $this;
    }

    /**
     * Get startFrom
     *
     * @return string
     */
    public function getStartFrom()
    {
        return $this->startFrom;
    }

    /**
     * Set dateExecute
     *
     * @param string $dateExecuted
     *
     * @return ReportsBlacklist
     */
    public function setDateExecute($dateExecuted)
    {
        $this->dateExecuted = $dateExecuted;

        return $this;
    }

    /**
     * Get dateExecute
     *
     * @return string
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
     * @return ReportsBlacklist
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
     * Set dateExecuted
     *
     * @param integer $dateExecuted
     *
     * @return ReportsBlacklist
     */
    public function setDateExecuted($dateExecuted)
    {
        $this->dateExecuted = $dateExecuted;

        return $this;
    }
}
