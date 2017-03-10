<?php

namespace AppBundle\Entity;

/**
 * ScannedUrls
 */
class ScannedUrls
{
    /**
     * @var string
     */
    private $landerId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var boolean
     */
    private $isScanned;

    /**
     * @var string
     */
    private $scanRequestId;

    /**
     * @var boolean
     */
    private $hasReturned;

    /**
     * @var boolean
     */
    private $isSafe;

    /**
     * @var string
     */
    private $flagType;

    /**
     * @var \DateTime
     */
    private $dateUpdated;

    /**
     * @var boolean
     */
    private $toCheck;


    /**
     * @var integer
     */
    private $scanId;


    /**
     * Set landerId
     *
     * @param string $landerId
     *
     * @return ScannedUrls
     */
    public function setLanderId($landerId)
    {
        $this->landerId = $landerId;

        return $this;
    }

    /**
     * Get landerId
     *
     * @return string
     */
    public function getLanderId()
    {
        return $this->landerId;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return ScannedUrls
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set isScanned
     *
     * @param boolean $isScanned
     *
     * @return ScannedUrls
     */
    public function setIsScanned($isScanned)
    {
        $this->isScanned = $isScanned;

        return $this;
    }

    /**
     * Get isScanned
     *
     * @return boolean
     */
    public function getIsScanned()
    {
        return $this->isScanned;
    }

    /**
     * Set scanRequestId
     *
     * @param string $scanRequestId
     *
     * @return ScannedUrls
     */
    public function setScanRequestId($scanRequestId)
    {
        $this->scanRequestId = $scanRequestId;

        return $this;
    }

    /**
     * Get scanRequestId
     *
     * @return string
     */
    public function getScanRequestId()
    {
        return $this->scanRequestId;
    }

    /**
     * Set hasReturned
     *
     * @param boolean $hasReturned
     *
     * @return ScannedUrls
     */
    public function setHasReturned($hasReturned)
    {
        $this->hasReturned = $hasReturned;

        return $this;
    }

    /**
     * Get hasReturned
     *
     * @return boolean
     */
    public function getHasReturned()
    {
        return $this->hasReturned;
    }

    /**
     * Set isSafe
     *
     * @param boolean $isSafe
     *
     * @return ScannedUrls
     */
    public function setIsSafe($isSafe)
    {
        $this->isSafe = $isSafe;

        return $this;
    }

    /**
     * Get isSafe
     *
     * @return boolean
     */
    public function getIsSafe()
    {
        return $this->isSafe;
    }

    /**
     * Set flagType
     *
     * @param string $flagType
     *
     * @return ScannedUrls
     */
    public function setFlagType($flagType)
    {
        $this->flagType = $flagType;

        return $this;
    }

    /**
     * Get flagType
     *
     * @return string
     */
    public function getFlagType()
    {
        return $this->flagType;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     *
     * @return ScannedUrls
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set toCheck
     *
     * @param boolean $toCheck
     *
     * @return ScannedUrls
     */
    public function setToCheck($toCheck)
    {
        $this->toCheck = $toCheck;

        return $this;
    }

    /**
     * Get toCheck
     *
     * @return boolean
     */
    public function getToCheck()
    {
        return $this->toCheck;
    }

    /**
     * Get scanId
     *
     * @return integer
     */
    public function getScanId()
    {
        return $this->scanId;
    }
}
