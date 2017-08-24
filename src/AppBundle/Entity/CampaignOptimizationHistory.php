<?php

namespace AppBundle\Entity;

/**
 * CampaignOptimizationHistory
 */
class CampaignOptimizationHistory
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return CampaignOptimizationHistory
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    
        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return CampaignOptimizationHistory
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
     * Set data
     *
     * @param string $data
     *
     * @return CampaignOptimizationHistory
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return CampaignOptimizationHistory
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
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
