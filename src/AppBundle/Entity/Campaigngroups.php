<?php

namespace AppBundle\Entity;

/**
 * Campaigngroups
 */
class Campaigngroups
{
    /**
     * @var string
     */
    private $geo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Verticals
     */
    private $verId;

    /**
     * @var \AppBundle\Entity\Groups
     */
    private $gid;

    /**
     * @var \AppBundle\Entity\Campaign
     */
    private $cid;


    /**
     * Set geo
     *
     * @param string $geo
     *
     * @return Campaigngroups
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set verid
     *
     * @param \AppBundle\Entity\Verticals $verid
     *
     * @return Campaigngroups
     */
    public function setVerId(\AppBundle\Entity\Verticals $verId = null)
    {
        $this->verId = $verId;

        return $this;
    }

    /**
     * Get verid
     *
     * @return \AppBundle\Entity\Verticals
     */
    public function getVerId()
    {
        return $this->verId;
    }

    /**
     * Set gid
     *
     * @param \AppBundle\Entity\Groups $gid
     *
     * @return Campaigngroups
     */
    public function setGid(\AppBundle\Entity\Groups $gid = null)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return \AppBundle\Entity\Groups
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set cid
     *
     * @param \AppBundle\Entity\Campaign $cid
     *
     * @return Campaigngroups
     */
    public function setCid(\AppBundle\Entity\Campaign $cid = null)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return \AppBundle\Entity\Campaign
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @var \AppBundle\Entity\Verticals
     */
    private $ver;


    /**
     * Set ver
     *
     * @param \AppBundle\Entity\Verticals $ver
     *
     * @return Campaigngroups
     */
    public function setVer(\AppBundle\Entity\Verticals $ver = null)
    {
        $this->ver = $ver;

        return $this;
    }

    /**
     * Get ver
     *
     * @return \AppBundle\Entity\Verticals
     */
    public function getVer()
    {
        return $this->ver;
    }
}
