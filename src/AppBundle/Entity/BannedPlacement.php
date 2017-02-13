<?php

namespace AppBundle\Entity;

/**
 * BannedPlacement
 */
class BannedPlacement
{
    /**
     * @var string
     */
    private $placement;

    /**
     * @var integer
     */
    private $visits;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var integer
     */
    private $conversions;

    /**
     * @var float
     */
    private $ctr;

    /**
     * @var float
     */
    private $roi;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set placement
     *
     * @param string $placement
     *
     * @return BannedPlacement
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
     * @return BannedPlacement
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
     * Set cost
     *
     * @param float $cost
     *
     * @return BannedPlacement
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
     * @param integer $conversions
     *
     * @return BannedPlacement
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
     * Set ctr
     *
     * @param float $ctr
     *
     * @return BannedPlacement
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
     * Set roi
     *
     * @param float $roi
     *
     * @return BannedPlacement
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
