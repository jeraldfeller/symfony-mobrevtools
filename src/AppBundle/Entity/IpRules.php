<?php

namespace AppBundle\Entity;

/**
 * IpRules
 */
class IpRules
{
    /**
     * @var string
     */
    private $cgid;

    /**
     * @var boolean
     */
    private $active;

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
    private $iid;


    /**
     * Set cgid
     *
     * @param string $cgid
     *
     * @return IpRules
     */
    public function setCgid($cgid)
    {
        $this->cgid = $cgid;

        return $this;
    }

    /**
     * Get cgid
     *
     * @return string
     */
    public function getCgid()
    {
        return $this->cgid;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return IpRules
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
     * Set frequency
     *
     * @param integer $frequency
     *
     * @return IpRules
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
     * @return IpRules
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
     * Get iid
     *
     * @return integer
     */
    public function getIid()
    {
        return $this->iid;
    }
}
