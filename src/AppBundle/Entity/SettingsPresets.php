<?php

namespace AppBundle\Entity;

/**
 * SettingsPresets
 */
class SettingsPresets
{
    /**
     * @var string
     */
    private $presetName;

    /**
     * @var string
     */
    private $parameters;

    /**
     * @var integer
     */
    private $presetId;


    /**
     * Set presetName
     *
     * @param string $presetName
     *
     * @return SettingsPresets
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
     * Set paramters
     *
     * @param string $paramters
     *
     * @return SettingsPresets
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get paramters
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get presetId
     *
     * @return integer
     */
    public function getPresetId()
    {
        return $this->presetId;
    }
}
