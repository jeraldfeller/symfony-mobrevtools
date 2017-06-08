<?php

namespace AppBundle\Entity;

/**
 * MenuPages
 */
class MenuPages
{
    /**
     * @var string
     */
    private $pageName;

    /**
     * @var string
     */
    private $pageLink;

    /**
     * @var integer
     */
    private $parent;

    /**
     * @var integer
     */
    private $pageId;


    /**
     * Set pageName
     *
     * @param string $pageName
     *
     * @return MenuPages
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;

        return $this;
    }

    /**
     * Get pageName
     *
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Set pageLink
     *
     * @param string $pageLink
     *
     * @return MenuPages
     */
    public function setPageLink($pageLink)
    {
        $this->pageLink = $pageLink;

        return $this;
    }

    /**
     * Get pageLink
     *
     * @return string
     */
    public function getPageLink()
    {
        return $this->pageLink;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return MenuPages
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Get pageId
     *
     * @return integer
     */
    public function getPageId()
    {
        return $this->pageId;
    }
    /**
     * @var boolean
     */
    private $hasChild;


    /**
     * Set hasChild
     *
     * @param boolean $hasChild
     *
     * @return MenuPages
     */
    public function setHasChild($hasChild)
    {
        $this->hasChild = $hasChild;

        return $this;
    }

    /**
     * Get hasChild
     *
     * @return boolean
     */
    public function getHasChild()
    {
        return $this->hasChild;
    }
    /**
     * @var integer
     */
    private $order;


    /**
     * Set order
     *
     * @param integer $order
     *
     * @return MenuPages
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * @var string
     */
    private $directoryLevel;


    /**
     * Set directoryLevel
     *
     * @param string $directoryLevel
     *
     * @return MenuPages
     */
    public function setDirectoryLevel($directoryLevel)
    {
        $this->directoryLevel = $directoryLevel;

        return $this;
    }

    /**
     * Get directoryLevel
     *
     * @return string
     */
    public function getDirectoryLevel()
    {
        return $this->directoryLevel;
    }
    /**
     * @var integer
     */
    private $pageOrder;


    /**
     * Set pageOrder
     *
     * @param integer $pageOrder
     *
     * @return MenuPages
     */
    public function setPageOrder($pageOrder)
    {
        $this->pageOrder = $pageOrder;

        return $this;
    }

    /**
     * Get pageOrder
     *
     * @return integer
     */
    public function getPageOrder()
    {
        return $this->pageOrder;
    }
    /**
     * @var string
     */
    private $icon;


    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return MenuPages
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }
}
