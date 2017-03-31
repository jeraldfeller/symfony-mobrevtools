<?php

namespace AppBundle\Entity;

/**
 * OfferGroups
 */
class OfferGroups
{
    /**
     * @var string
     */
    private $offerGroupName;

    /**
     * @var integer
     */
    private $offerGroupId;


    /**
     * Set offerGroupName
     *
     * @param string $offerGroupName
     *
     * @return OfferGroups
     */
    public function setOfferGroupName($offerGroupName)
    {
        $this->offerGroupName = $offerGroupName;

        return $this;
    }

    /**
     * Get offerGroupName
     *
     * @return string
     */
    public function getOfferGroupName()
    {
        return $this->offerGroupName;
    }

    /**
     * Get offerGroupId
     *
     * @return integer
     */
    public function getOfferGroupId()
    {
        return $this->offerGroupId;
    }
}
