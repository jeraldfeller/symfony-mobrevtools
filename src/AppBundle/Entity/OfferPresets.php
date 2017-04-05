<?php

namespace AppBundle\Entity;

/**
 * OfferPresets
 */
class OfferPresets
{
    /**
     * @var integer
     */
    private $offerGroupId;

    /**
     * @var string
     */
    private $presetName;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var integer
     */
    private $offerPresetsId;


    /**
     * Set offerGroupId
     *
     * @param integer $offerGroupId
     *
     * @return OfferPresets
     */
    public function setOfferGroupId($offerGroupId)
    {
        $this->offerGroupId = $offerGroupId;

        return $this;
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

    /**
     * Set presetName
     *
     * @param string $presetName
     *
     * @return OfferPresets
     */
    public function setPresetName($presetName)
    {
        $this->presetName = $presetName;

        return $this;
    }

    /**
     * Get presetName
     *
     * @return string
     */
    public function getPresetName()
    {
        return $this->presetName;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return OfferPresets
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Get offerPresetsId
     *
     * @return integer
     */
    public function getOfferPresetsId()
    {
        return $this->offerPresetsId;
    }
    /**
     * @var \AppBundle\Entity\OfferGroups
     */
    private $offerGroup;


    /**
     * Set offerGroup
     *
     * @param \AppBundle\Entity\OfferGroups $offerGroup
     *
     * @return OfferPresets
     */
    public function setOfferGroup(\AppBundle\Entity\OfferGroups $offerGroup = null)
    {
        $this->offerGroup = $offerGroup;

        return $this;
    }

    /**
     * Get offerGroup
     *
     * @return \AppBundle\Entity\OfferGroups
     */
    public function getOfferGroup()
    {
        return $this->offerGroup;
    }
}
