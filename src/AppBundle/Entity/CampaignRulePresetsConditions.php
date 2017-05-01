<?php

namespace AppBundle\Entity;

/**
 * CampaignRulePresetsConditions
 */
class CampaignRulePresetsConditions
{
    /**
     * @var integer
     */
    private $campaignPresetsId;

    /**
     * @var string
     */
    private $ruleVariable;

    /**
     * @var string
     */
    private $ruleCondition;

    /**
     * @var float
     */
    private $value1;

    /**
     * @var float
     */
    private $value2;

    /**
     * @var integer
     */
    private $campaignPresetConditionsId;


    /**
     * Set campaignPresetsId
     *
     * @param integer $campaignPresetsId
     *
     * @return CampaignRulePresetsConditions
     */
    public function setCampaignPresetsId($campaignPresetsId)
    {
        $this->campaignPresetsId = $campaignPresetsId;

        return $this;
    }

    /**
     * Get campaignPresetsId
     *
     * @return integer
     */
    public function getCampaignPresetsId()
    {
        return $this->campaignPresetsId;
    }

    /**
     * Set ruleVariable
     *
     * @param string $ruleVariable
     *
     * @return CampaignRulePresetsConditions
     */
    public function setRuleVariable($ruleVariable)
    {
        $this->ruleVariable = $ruleVariable;

        return $this;
    }

    /**
     * Get ruleVariable
     *
     * @return string
     */
    public function getRuleVariable()
    {
        return $this->ruleVariable;
    }

    /**
     * Set ruleCondition
     *
     * @param string $ruleCondition
     *
     * @return CampaignRulePresetsConditions
     */
    public function setRuleCondition($ruleCondition)
    {
        $this->ruleCondition = $ruleCondition;

        return $this;
    }

    /**
     * Get ruleCondition
     *
     * @return string
     */
    public function getRuleCondition()
    {
        return $this->ruleCondition;
    }

    /**
     * Set value1
     *
     * @param float $value1
     *
     * @return CampaignRulePresetsConditions
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
     * @return CampaignRulePresetsConditions
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
     * Get campaignPresetConditionsId
     *
     * @return integer
     */
    public function getCampaignPresetConditionsId()
    {
        return $this->campaignPresetConditionsId;
    }
    /**
     * @var \AppBundle\Entity\CampaignRulePresets
     */
    private $campaignPresets;


    /**
     * Set campaignPresets
     *
     * @param \AppBundle\Entity\CampaignRulePresets $campaignPresets
     *
     * @return CampaignRulePresetsConditions
     */
    public function setCampaignPresets(\AppBundle\Entity\CampaignRulePresets $campaignPresets = null)
    {
        $this->campaignPresets = $campaignPresets;

        return $this;
    }

    /**
     * Get campaignPresets
     *
     * @return \AppBundle\Entity\CampaignRulePresets
     */
    public function getCampaignPresets()
    {
        return $this->campaignPresets;
    }
}