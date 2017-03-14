<?php

namespace AppBundle\Entity;

/**
 * ArchiveLabel
 */
class ArchiveLabel
{
    /**
     * @var \DateTime
     */
    private $dateLabel;

    /**
     * @var integer
     */
    private $archiveLabelId;


    /**
     * Set dateLabel
     *
     * @param \DateTime $dateLabel
     *
     * @return ArchiveLabel
     */
    public function setDateLabel($dateLabel)
    {
        $this->dateLabel = $dateLabel;

        return $this;
    }

    /**
     * Get dateLabel
     *
     * @return \DateTime
     */
    public function getDateLabel()
    {
        return $this->dateLabel;
    }

    /**
     * Get archiveLabelId
     *
     * @return integer
     */
    public function getArchiveLabelId()
    {
        return $this->archiveLabelId;
    }
}
