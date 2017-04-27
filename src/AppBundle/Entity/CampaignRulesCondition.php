<?php

namespace AppBundle\Entity;

/**
 * CampaignRulesCondition
 */
class CampaignRulesCondition
{
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
    private $campaignRulesConditionId;

    /**
     * @var \AppBundle\Entity\CampaignRules
     */
    private $campaignRule;


    /**
     * Set ruleVariable
     *
     * @param string $ruleVariable
     *
     * @return CampaignRulesCondition
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
     * @return CampaignRulesCondition
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
     * @return CampaignRulesCondition
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
     * @return CampaignRulesCondition
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
     * Get campaignRulesConditionId
     *
     * @return integer
     */
    public function getCampaignRulesConditionId()
    {
        return $this->campaignRulesConditionId;
    }

    /**
     * Set campaignRule
     *
     * @param \AppBundle\Entity\CampaignRules $campaignRule
     *
     * @return CampaignRulesCondition
     */
    public function setCampaignRule(\AppBundle\Entity\CampaignRules $campaignRule = null)
    {
        $this->campaignRule = $campaignRule;

        return $this;
    }

    /**
     * Get campaignRule
     *
     * @return \AppBundle\Entity\CampaignRules
     */
    public function getCampaignRule()
    {
        return $this->campaignRule;
    }
}
