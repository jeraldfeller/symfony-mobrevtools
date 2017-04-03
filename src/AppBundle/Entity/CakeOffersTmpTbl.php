<?php

namespace AppBundle\Entity;

/**
 * CakeOffersTmpTbl
 */
class CakeOffersTmpTbl
{
    /**
     * @var integer
     */
    private $offerId;

    /**
     * @var string
     */
    private $offerName;

    /**
     * @var string
     */
    private $verticalName;

    /**
     * @var string
     */
    private $payout;

    /**
     * @var string
     */
    private $priceFormat;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $restrictions;

    /**
     * @var string
     */
    private $advertiserExtendedTerms;

    /**
     * @var integer
     */
    private $cottId;


    /**
     * Set offerId
     *
     * @param integer $offerId
     *
     * @return CakeOffersTmpTbl
     */
    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * Get offerId
     *
     * @return integer
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Set offerName
     *
     * @param string $offerName
     *
     * @return CakeOffersTmpTbl
     */
    public function setOfferName($offerName)
    {
        $this->offerName = $offerName;

        return $this;
    }

    /**
     * Get offerName
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->offerName;
    }

    /**
     * Set verticalName
     *
     * @param string $verticalName
     *
     * @return CakeOffersTmpTbl
     */
    public function setVerticalName($verticalName)
    {
        $this->verticalName = $verticalName;

        return $this;
    }

    /**
     * Get verticalName
     *
     * @return string
     */
    public function getVerticalName()
    {
        return $this->verticalName;
    }

    /**
     * Set payout
     *
     * @param string $payout
     *
     * @return CakeOffersTmpTbl
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;

        return $this;
    }

    /**
     * Get payout
     *
     * @return string
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * Set priceFormat
     *
     * @param string $priceFormat
     *
     * @return CakeOffersTmpTbl
     */
    public function setPriceFormat($priceFormat)
    {
        $this->priceFormat = $priceFormat;

        return $this;
    }

    /**
     * Get priceFormat
     *
     * @return string
     */
    public function getPriceFormat()
    {
        return $this->priceFormat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CakeOffersTmpTbl
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set restrictions
     *
     * @param string $restrictions
     *
     * @return CakeOffersTmpTbl
     */
    public function setRestrictions($restrictions)
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Get restrictions
     *
     * @return string
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Set advertiserExtendedTerms
     *
     * @param string $advertiserExtendedTerms
     *
     * @return CakeOffersTmpTbl
     */
    public function setAdvertiserExtendedTerms($advertiserExtendedTerms)
    {
        $this->advertiserExtendedTerms = $advertiserExtendedTerms;

        return $this;
    }

    /**
     * Get advertiserExtendedTerms
     *
     * @return string
     */
    public function getAdvertiserExtendedTerms()
    {
        return $this->advertiserExtendedTerms;
    }

    /**
     * Get cottId
     *
     * @return integer
     */
    public function getCottId()
    {
        return $this->cottId;
    }
    /**
     * @var string
     */
    private $status;


    /**
     * Set status
     *
     * @param string $status
     *
     * @return CakeOffersTmpTbl
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var integer
     */
    private $offerContractId;


    /**
     * Set offerContractId
     *
     * @param integer $offerContractId
     *
     * @return CakeOffersTmpTbl
     */
    public function setOfferContractId($offerContractId)
    {
        $this->offerContractId = $offerContractId;

        return $this;
    }

    /**
     * Get offerContractId
     *
     * @return integer
     */
    public function getOfferContractId()
    {
        return $this->offerContractId;
    }
    /**
     * @var integer
     */
    private $affiliateNetworkId;


    /**
     * Set affiliateNetworkId
     *
     * @param integer $affiliateNetworkId
     *
     * @return CakeOffersTmpTbl
     */
    public function setAffiliateNetworkId($affiliateNetworkId)
    {
        $this->affiliateNetworkId = $affiliateNetworkId;

        return $this;
    }

    /**
     * Get affiliateNetworkId
     *
     * @return integer
     */
    public function getAffiliateNetworkId()
    {
        return $this->affiliateNetworkId;
    }
}
