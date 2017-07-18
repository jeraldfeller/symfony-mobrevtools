<?php

namespace AppBundle\Entity;

/**
 * AdplexityAutomatedSettings
 */
class AdplexityAutomatedSettings
{
    /**
     * @var string
     */
    private $aggregation;

    /**
     * @var string
     */
    private $metric;

    /**
     * @var string
     */
    private $dateRange;

    /**
     * @var string
     */
    private $daysRunning;

    /**
     * @var string
     */
    private $countries;

    /**
     * @var string
     */
    private $adType;

    /**
     * @var string
     */
    private $affiliateNetwork;

    /**
     * @var string
     */
    private $trafficSource;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set aggregation
     *
     * @param string $aggregation
     *
     * @return AdplexityAutomatedSettings
     */
    public function setAggregation($aggregation)
    {
        $this->aggregation = $aggregation;
    
        return $this;
    }

    /**
     * Get aggregation
     *
     * @return string
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * Set metric
     *
     * @param string $metric
     *
     * @return AdplexityAutomatedSettings
     */
    public function setMetric($metric)
    {
        $this->metric = $metric;
    
        return $this;
    }

    /**
     * Get metric
     *
     * @return string
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * Set dateRange
     *
     * @param string $dateRange
     *
     * @return AdplexityAutomatedSettings
     */
    public function setDateRange($dateRange)
    {
        $this->dateRange = $dateRange;
    
        return $this;
    }

    /**
     * Get dateRange
     *
     * @return string
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Set daysRunning
     *
     * @param string $daysRunning
     *
     * @return AdplexityAutomatedSettings
     */
    public function setDaysRunning($daysRunning)
    {
        $this->daysRunning = $daysRunning;
    
        return $this;
    }

    /**
     * Get daysRunning
     *
     * @return string
     */
    public function getDaysRunning()
    {
        return $this->daysRunning;
    }

    /**
     * Set countries
     *
     * @param string $countries
     *
     * @return AdplexityAutomatedSettings
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
    
        return $this;
    }

    /**
     * Get countries
     *
     * @return string
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set adType
     *
     * @param string $adType
     *
     * @return AdplexityAutomatedSettings
     */
    public function setAdType($adType)
    {
        $this->adType = $adType;
    
        return $this;
    }

    /**
     * Get adType
     *
     * @return string
     */
    public function getAdType()
    {
        return $this->adType;
    }

    /**
     * Set affiliateNetwork
     *
     * @param string $affiliateNetwork
     *
     * @return AdplexityAutomatedSettings
     */
    public function setAffiliateNetwork($affiliateNetwork)
    {
        $this->affiliateNetwork = $affiliateNetwork;
    
        return $this;
    }

    /**
     * Get affiliateNetwork
     *
     * @return string
     */
    public function getAffiliateNetwork()
    {
        return $this->affiliateNetwork;
    }

    /**
     * Set trafficSource
     *
     * @param string $trafficSource
     *
     * @return AdplexityAutomatedSettings
     */
    public function setTrafficSource($trafficSource)
    {
        $this->trafficSource = $trafficSource;
    
        return $this;
    }

    /**
     * Get trafficSource
     *
     * @return string
     */
    public function getTrafficSource()
    {
        return $this->trafficSource;
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
