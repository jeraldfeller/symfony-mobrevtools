<?php

namespace AppBundle\Entity;

/**
 * BidAdjustmentConditions
 */
class BidAdjustmentConditions
{
    /**
     * @var string
     */
    private $horizontalcondition;

    /**
     * @var float
     */
    private $value1;

    /**
     * @var float
     */
    private $value2;

    /**
     * @var string
     */
    private $verticalcondition;

    /**
     * @var float
     */
    private $valuepercent;

    /**
     * @var integer
     */
    private $bacid;

    /**
     * @var \AppBundle\Entity\BidAdjustmentRules
     */
    private $baid;


    /**
     * Set horizontalcondition
     *
     * @param string $horizontalcondition
     *
     * @return BidAdjustmentConditions
     */
    public function setHorizontalcondition($horizontalcondition)
    {
        $this->horizontalcondition = $horizontalcondition;

        return $this;
    }

    /**
     * Get horizontalcondition
     *
     * @return string
     */
    public function getHorizontalcondition()
    {
        return $this->horizontalcondition;
    }

    /**
     * Set value1
     *
     * @param float $value1
     *
     * @return BidAdjustmentConditions
     */
    public function setValue1($value1)
    {
        $this->value1 = $value1;

        return $this;
    }

    /**
     * Get value1
     *
     * @return float
     */
    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * Set value2
     *
     * @param float $value2
     *
     * @return BidAdjustmentConditions
     */
    public function setValue2($value2)
    {
        $this->value2 = $value2;

        return $this;
    }

    /**
     * Get value2
     *
     * @return float
     */
    public function getValue2()
    {
        return $this->value2;
    }

    /**
     * Set verticalcondition
     *
     * @param string $verticalcondition
     *
     * @return BidAdjustmentConditions
     */
    public function setVerticalcondition($verticalcondition)
    {
        $this->verticalcondition = $verticalcondition;

        return $this;
    }

    /**
     * Get verticalcondition
     *
     * @return string
     */
    public function getVerticalcondition()
    {
        return $this->verticalcondition;
    }

    /**
     * Set valuepercent
     *
     * @param float $valuepercent
     *
     * @return BidAdjustmentConditions
     */
    public function setValuepercent($valuepercent)
    {
        $this->valuepercent = $valuepercent;

        return $this;
    }

    /**
     * Get valuepercent
     *
     * @return float
     */
    public function getValuepercent()
    {
        return $this->valuepercent;
    }

    /**
     * Get bacid
     *
     * @return integer
     */
    public function getBacid()
    {
        return $this->bacid;
    }

    /**
     * Set baid
     *
     * @param \AppBundle\Entity\BidAdjustmentRules $baid
     *
     * @return BidAdjustmentConditions
     */
    public function setBaid(\AppBundle\Entity\BidAdjustmentRules $baid = null)
    {
        $this->baid = $baid;

        return $this;
    }

    /**
     * Get baid
     *
     * @return \AppBundle\Entity\BidAdjustmentRules
     */
    public function getBaid()
    {
        return $this->baid;
    }
}
