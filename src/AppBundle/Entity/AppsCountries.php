<?php

namespace AppBundle\Entity;

/**
 * AppsCountries
 */
class AppsCountries
{
    /**
     * @var string
     */
    private $countryCode = '';

    /**
     * @var string
     */
    private $countryName = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return AppsCountries
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return AppsCountries
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
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
