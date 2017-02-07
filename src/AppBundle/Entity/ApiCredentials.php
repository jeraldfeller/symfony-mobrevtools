<?php

namespace AppBundle\Entity;
/**
 * ApiCredentials
 */
class ApiCredentials
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $voluum;

    /**
     * @var string
     */
    private $zeropark;

    /**
     * @var string
     */
    private $exoclick;


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
     * Set voluum
     *
     * @param string $voluum
     *
     * @return ApiCredentials
     */
    public function setVoluum($voluum)
    {
        $this->voluum = $voluum;

        return $this;
    }

    /**
     * Get voluum
     *
     * @return string
     */
    public function getVoluum()
    {
        return $this->voluum;
    }

    /**
     * Set zeropark
     *
     * @param string $zeropark
     *
     * @return ApiCredentials
     */
    public function setZeropark($zeropark)
    {
        $this->zeropark = $zeropark;

        return $this;
    }

    /**
     * Get zeropark
     *
     * @return string
     */
    public function getZeropark()
    {
        return $this->zeropark;
    }

    /**
     * Set exoclick
     *
     * @param string $exoclick
     *
     * @return ApiCredentials
     */
    public function setExoclick($exoclick)
    {
        $this->exoclick = $exoclick;

        return $this;
    }

    /**
     * Get exoclick
     *
     * @return string
     */
    public function getExoclick()
    {
        return $this->exoclick;
    }
}
