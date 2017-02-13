<?php

namespace AppBundle\Entity;

/**
 * BidAdjustmentRules
 */
class BidAdjustmentRules
{
    /**
     * @var boolean
     */
    private $active;

    /**
     * @var integer
     */
    private $reviewlast;

    /**
     * @var integer
     */
    private $conversions;

    /**
     * @var \DateTime
     */
    private $startfrom;

    /**
     * @var string
     */
    private $datetime;

    /**
     * @var integer
     */
    private $datetimeunix;

    /**
     * @var integer
     */
    private $frequency;

    /**
     * @var \DateTime
     */
    private $dateupdated;

    /**
     * @var integer
     */
    private $baid;

    /**
     * @var \AppBundle\Entity\Campaigngroups
     */
    private $cgid;


    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return BidAdjustmentRules
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set reviewlast
     *
     * @param integer $reviewlast
     *
     * @return BidAdjustmentRules
     */
    public function setReviewlast($reviewlast)
    {
        $this->reviewlast = $reviewlast;

        return $this;
    }

    /**
     * Get reviewlast
     *
     * @return integer
     */
    public function getReviewlast()
    {
        return $this->reviewlast;
    }

    /**
     * Set conversions
     *
     * @param integer $conversions
     *
     * @return BidAdjustmentRules
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
     * Set startfrom
     *
     * @param \DateTime $startfrom
     *
     * @return BidAdjustmentRules
     */
    public function setStartfrom($startfrom)
    {
        $this->startfrom = $startfrom;

        return $this;
    }

    /**
     * Get startfrom
     *
     * @return \DateTime
     */
    public function getStartfrom()
    {
        return $this->startfrom;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return BidAdjustmentRules
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set datetimeunix
     *
     * @param integer $datetimeunix
     *
     * @return BidAdjustmentRules
     */
    public function setDatetimeunix($datetimeunix)
    {
        $this->datetimeunix = $datetimeunix;

        return $this;
    }

    /**
     * Get datetimeunix
     *
     * @return integer
     */
    public function getDatetimeunix()
    {
        return $this->datetimeunix;
    }

    /**
     * Set frequency
     *
     * @param integer $frequency
     *
     * @return BidAdjustmentRules
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return integer
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set dateupdated
     *
     * @param \DateTime $dateupdated
     *
     * @return BidAdjustmentRules
     */
    public function setDateupdated($dateupdated)
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    /**
     * Get dateupdated
     *
     * @return \DateTime
     */
    public function getDateupdated()
    {
        return $this->dateupdated;
    }

    /**
     * Get baid
     *
     * @return integer
     */
    public function getBaid()
    {
        return $this->baid;
    }

    /**
     * Set cgid
     *
     * @param \AppBundle\Entity\Campaigngroups $cgid
     *
     * @return BidAdjustmentRules
     */
    public function setCgid(\AppBundle\Entity\Campaigngroups $cgid = null)
    {
        $this->cgid = $cgid;

        return $this;
    }

    /**
     * Get cgid
     *
     * @return \AppBundle\Entity\Campaigngroups
     */
    public function getCgid()
    {
        return $this->cgid;
    }
}
