<?php

namespace AppBundle\Entity;

/**
 * IpConditions
 */
class IpConditions
{
    /**
     * @var string
     */
    private $carrier;

    /**
     * @var integer
     */
    private $icid;

    /**
     * @var \AppBundle\Entity\IpRules
     */
    private $iid;


    /**
     * Set carrier
     *
     * @param string $carrier
     *
     * @return IpConditions
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Get icid
     *
     * @return integer
     */
    public function getIcid()
    {
        return $this->icid;
    }

    /**
     * Set iid
     *
     * @param \AppBundle\Entity\IpRules $iid
     *
     * @return IpConditions
     */
    public function setIid(\AppBundle\Entity\IpRules $iid = null)
    {
        $this->iid = $iid;

        return $this;
    }

    /**
     * Get iid
     *
     * @return \AppBundle\Entity\IpRules
     */
    public function getIid()
    {
        return $this->iid;
    }
}

