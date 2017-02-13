<?php

namespace AppBundle\Entity;

/**
 * Verticals
 */
class Verticals
{
    /**
     * @var string
     */
    private $verticalName;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set verticalname
     *
     * @param string $verticalname
     *
     * @return Verticals
     */
    public function setVerticalName($verticalName)
    {
        $this->verticalName = $verticalName;

        return $this;
    }

    /**
     * Get verticalname
     *
     * @return string
     */
    public function getVerticalName()
    {
        return $this->verticalName;
    }

    /**
     * Get verid
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
