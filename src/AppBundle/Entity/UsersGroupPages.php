<?php

namespace AppBundle\Entity;

/**
 * UsersGroupPages
 */
class UsersGroupPages
{
    /**
     * @var integer
     */
    private $usersGroupPagesId;

    /**
     * @var \AppBundle\Entity\MenuPages
     */
    private $page;

    /**
     * @var \AppBundle\Entity\UsersGroup
     */
    private $usersGroup;


    /**
     * Get usersGroupPagesId
     *
     * @return integer
     */
    public function getUsersGroupPagesId()
    {
        return $this->usersGroupPagesId;
    }

    /**
     * Set page
     *
     * @param \AppBundle\Entity\MenuPages $page
     *
     * @return UsersGroupPages
     */
    public function setPage(\AppBundle\Entity\MenuPages $page = null)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \AppBundle\Entity\MenuPages
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set usersGroup
     *
     * @param \AppBundle\Entity\UsersGroup $usersGroup
     *
     * @return UsersGroupPages
     */
    public function setUsersGroup(\AppBundle\Entity\UsersGroup $usersGroup = null)
    {
        $this->usersGroup = $usersGroup;

        return $this;
    }

    /**
     * Get usersGroup
     *
     * @return \AppBundle\Entity\UsersGroup
     */
    public function getUsersGroup()
    {
        return $this->usersGroup;
    }
}
