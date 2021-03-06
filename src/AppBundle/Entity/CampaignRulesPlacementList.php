<?php

namespace AppBundle\Entity;

/**
 * CampaignRulesPlacementList
 */
class CampaignRulesPlacementList
{
    /**
     * @var integer
     */
    private $trafficSourceId;

    /**
     * @var string
     */
    private $type;

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
    private $cpv;

    /**
     * @var float
     */
    private $epv;

    /**
     * @var float
     */
    private $roi;

    /**
     * @var integer
     */
    private $dateExecuted;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $campaignRulesPlacementId;


    /**
     * Set trafficSourceId
     *
     * @param integer $trafficSourceId
     *
     * @return CampaignRulesPlacementList
     */
    public function setTrafficSourceId($trafficSourceId)
    {
        $this->trafficSourceId = $trafficSourceId;

        return $this;
    }

    /**
     * Get trafficSourceId
     *
     * @return integer
     */
    public function getTrafficSourceId()
    {
        return $this->trafficSourceId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return CampaignRulesPlacementList
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set placement
     *
     * @param string $placement
     *
     * @return CampaignRulesPlacementList
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
     * @return CampaignRulesPlacementList
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
     * @return CampaignRulesPlacementList
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
     * @return CampaignRulesPlacementList
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
     * Set conversions
     *
     * @param integer $conversions
     *
     * @return CampaignRulesPlacementList
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
     * @return CampaignRulesPlacementList
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
     * @return CampaignRulesPlacementList
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
     * @return CampaignRulesPlacementList
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
     * Set cpv
     *
     * @param float $cpv
     *
     * @return CampaignRulesPlacementList
     */
    public function setCpv($cpv)
    {
        $this->cpv = $cpv;

        return $this;
    }

    /**
     * Get cpv
     *
     * @return float
     */
    public function getCpv()
    {
        return $this->cpv;
    }

    /**
     * Set epv
     *
     * @param float $epv
     *
     * @return CampaignRulesPlacementList
     */
    public function setEpv($epv)
    {
        $this->epv = $epv;

        return $this;
    }

    /**
     * Get epv
     *
     * @return float
     */
    public function getEpv()
    {
        return $this->epv;
    }

    /**
     * Set roi
     *
     * @param float $roi
     *
     * @return CampaignRulesPlacementList
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
     * Set dateExecuted
     *
     * @param integer $dateExecuted
     *
     * @return CampaignRulesPlacementList
     */
    public function setDateExecuted($dateExecuted)
    {
        $this->dateExecuted = $dateExecuted;

        return $this;
    }

    /**
     * Get dateExecuted
     *
     * @return integer
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
     * @return CampaignRulesPlacementList
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
     * Get campaignRulesPlacementId
     *
     * @return integer
     */
    public function getCampaignRulesPlacementId()
    {
        return $this->campaignRulesPlacementId;
    }
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $cid;


    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return CampaignRulesPlacementList
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set cid
     *
     * @param integer $cid
     *
     * @return CampaignRulesPlacementList
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer
     */
    public function getCid()
    {
        return $this->cid;
    }
    /**
     * @var integer
     */
    private $campaignRulesId;


    /**
     * Set campaignRulesId
     *
     * @param integer $campaignRulesId
     *
     * @return CampaignRulesPlacementList
     */
    public function setCampaignRulesId($campaignRulesId)
    {
        $this->campaignRulesId = $campaignRulesId;

        return $this;
    }

    /**
     * Get campaignRulesId
     *
     * @return integer
     */
    public function getCampaignRulesId()
    {
        return $this->campaignRulesId;
    }
}
