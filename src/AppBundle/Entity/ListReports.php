<?php

namespace AppBundle\Entity;

/**
 * ListReports
 */
class ListReports
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var integer
     */
    private $cid;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $palcement;

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
    private $listReportsId;


    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return ListReports
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
     * @return ListReports
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
     * Set type
     *
     * @param string $type
     *
     * @return ListReports
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
     * Set palcement
     *
     * @param string $palcement
     *
     * @return ListReports
     */
    public function setPalcement($palcement)
    {
        $this->palcement = $palcement;

        return $this;
    }

    /**
     * Get palcement
     *
     * @return string
     */
    public function getPalcement()
    {
        return $this->palcement;
    }

    /**
     * Set visits
     *
     * @param integer $visits
     *
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * @return ListReports
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
     * Get listReportsId
     *
     * @return integer
     */
    public function getListReportsId()
    {
        return $this->listReportsId;
    }
    /**
     * @var string
     */
    private $placement;


    /**
     * Set placement
     *
     * @param string $placement
     *
     * @return ListReports
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
}
