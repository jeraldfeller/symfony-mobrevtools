<?php

namespace AppBundle\Entity;

/**
 * UsersGroup
 */
class UsersGroup
{
    /**
     * @var string
     */
    private $usersGroupName;

    /**
     * @var string
     */
    private $permission;

    /**
     * @var integer
     */
    private $usersGroupId;


    /**
     * Set usersGroupName
     *
     * @param string $usersGroupName
     *
     * @return UsersGroup
     */
    public function setUsersGroupName($usersGroupName)
    {
        $this->usersGroupName = $usersGroupName;

        return $this;
    }

    /**
     * Get usersGroupName
     *
     * @return string
     */
    public function getUsersGroupName()
    {
        return $this->usersGroupName;
    }

    /**
     * Set permission
     *
     * @param string $permission
     *
     * @return UsersGroup
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Get usersGroupId
     *
     * @return integer
     */
    public function getUsersGroupId()
    {
        return $this->usersGroupId;
    }
}
