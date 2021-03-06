<?php

namespace AppBundle\Entity;

/**
 * OfferGroupsOffers
 */
class OfferGroupsOffers
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
    private $ogoid;

    /**
     * @var \AppBundle\Entity\OfferGroups
     */
    private $offerGroup;


    /**
     * Set offerId
     *
     * @param integer $offerId
     *
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
     * Get ogoid
     *
     * @return integer
     */
    public function getOgoid()
    {
        return $this->ogoid;
    }

    /**
     * Set offerGroup
     *
     * @param \AppBundle\Entity\OfferGroups $offerGroup
     *
     * @return OfferGroupsOffers
     */
    public function setOfferGroup(\AppBundle\Entity\OfferGroups $offerGroup = null)
    {
        $this->offerGroup = $offerGroup;

        return $this;
    }

    /**
     * Get offerGroup
     *
     * @return \AppBundle\Entity\OfferGroups
     */
    public function getOfferGroup()
    {
        return $this->offerGroup;
    }
    /**
     * @var integer
     */
    private $status;


    /**
     * Set status
     *
     * @param integer $status
     *
     * @return OfferGroupsOffers
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
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
     * @return OfferGroupsOffers
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
     * @return OfferGroupsOffers
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
    /**
     * @var string
     */
    private $networkName;


    /**
     * Set networkName
     *
     * @param string $networkName
     *
     * @return OfferGroupsOffers
     */
    public function setNetworkName($networkName)
    {
        $this->networkName = $networkName;

        return $this;
    }

    /**
     * Get networkName
     *
     * @return string
     */
    public function getNetworkName()
    {
        return $this->networkName;
    }
    /**
     * @var integer
     */
    private $campaignId;

    /**
     * @var string
     */
    private $offerUrl;


    /**
     * Set campaignId
     *
     * @param integer $campaignId
     *
     * @return OfferGroupsOffers
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return integer
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set offerUrl
     *
     * @param string $offerUrl
     *
     * @return OfferGroupsOffers
     */
    public function setOfferUrl($offerUrl)
    {
        $this->offerUrl = $offerUrl;

        return $this;
    }

    /**
     * Get offerUrl
     *
     * @return string
     */
    public function getOfferUrl()
    {
        return $this->offerUrl;
    }
    /**
     * @var boolean
     */
    private $hidden;


    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return OfferGroupsOffers
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden()
    {
        return $this->hidden;
    }
}
