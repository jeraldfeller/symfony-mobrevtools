<?php

namespace AppBundle\Entity;

/**
 * TrafficSource
 */
class TrafficSource
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $trafficSourceId;

    /**
     * @var string
     */
    private $trafficName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set trafficSourceId
     *
     * @param string $trafficSourceId
     *
     * @return TrafficSource
     */
    public function setTrafficSourceId($trafficSourceId)
    {
        $this->trafficSourceId = $trafficSourceId;

        return $this;
    }

    /**
     * Get trafficSourceId
     *
     * @return string
     */
    public function getTrafficSourceId()
    {
        return $this->trafficSourceId;
    }

    /**
     * Set trafficName
     *
     * @param string $trafficName
     *
     * @return TrafficSource
     */
    public function setTrafficName($trafficName)
    {
        $this->trafficName = $trafficName;

        return $this;
    }

    /**
     * Get trafficName
     *
     * @return string
     */
    public function getTrafficName()
    {
        return $this->trafficName;
    }
    /**
     * @var string
     */
    private $customVariable;

    /**
     * @var string
     */
    private $customVariableKey;


    /**
     * Set customVariable
     *
     * @param string $customVariable
     *
     * @return TrafficSource
     */
    public function setCustomVariable($customVariable)
    {
        $this->customVariable = $customVariable;

        return $this;
    }

    /**
     * Get customVariable
     *
     * @return string
     */
    public function getCustomVariable()
    {
        return $this->customVariable;
    }

    /**
     * Set customVariableKey
     *
     * @param string $customVariableKey
     *
     * @return TrafficSource
     */
    public function setCustomVariableKey($customVariableKey)
    {
        $this->customVariableKey = $customVariableKey;

        return $this;
    }

    /**
     * Get customVariableKey
     *
     * @return string
     */
    public function getCustomVariableKey()
    {
        return $this->customVariableKey;
    }
    /**
     * @var string
     */
    private $timeZone;


    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return TrafficSource
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}
