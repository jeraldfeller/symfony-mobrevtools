<?php

namespace AppBundle\Entity;

/**
 * BlacklistRuleSet
 */
class BlacklistRuleSet
{
    /**
     * @var integer
     */
    private $blrsid;

    /**
     * @var \AppBundle\Entity\BlacklistRules
     */
    private $blid;


    /**
     * Get blrsid
     *
     * @return integer
     */
    public function getBlrsid()
    {
        return $this->blrsid;
    }

    /**
     * Set blid
     *
     * @param \AppBundle\Entity\BlacklistRules $blid
     *
     * @return BlacklistRuleSet
     */
    public function setBlid(\AppBundle\Entity\BlacklistRules $blid = null)
    {
        $this->blid = $blid;

        return $this;
    }

    /**
     * Get blid
     *
     * @return \AppBundle\Entity\BlacklistRules
     */
    public function getBlid()
    {
        return $this->blid;
    }
}
