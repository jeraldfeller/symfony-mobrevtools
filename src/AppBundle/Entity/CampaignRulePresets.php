<?php

namespace AppBundle\Entity;

/**
 * CampaignRulePresets
 */
class CampaignRulePresets
{
    /**
     * @var string
     */
    private $presetName;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set presetName
     *
     * @param string $presetName
     *
     * @return CampaignRulePresets
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
