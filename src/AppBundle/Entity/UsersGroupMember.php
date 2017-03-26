<?php

namespace AppBundle\Entity;

/**
 * UsersGroupMember
 */
class UsersGroupMember
{
    /**
     * @var integer
     */
    private $usersGroupMemberId;

    /**
     * @var \AppBundle\Entity\UsersGroup
     */
    private $usersGroup;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Get usersGroupMemberId
     *
     * @return integer
     */
    public function getUsersGroupMemberId()
    {
        return $this->usersGroupMemberId;
    }

    /**
     * Set usersGroup
     *
     * @param \AppBundle\Entity\UsersGroup $usersGroup
     *
     * @return UsersGroupMember
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

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return UsersGroupMember
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
