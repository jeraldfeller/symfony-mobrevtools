<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_users")
 */
class User implements AdvancedUserInterface, \Serializable{
    /**
     * @ORM\Column(type="integer")
     * @ORM\uid
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $uid;
    /**
     * @ORM\Column(type="string", length=60)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct(){
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    public function getUsername()
    {
        return $this->email;
    }
    public function getSalt()
    {
// you *may* need a real salt depending on your encoder
// see section on salt below
        return null;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRoles()
    {
        return array('ROLE_USER');
    }
    public function eraseCredentials()
    {
    }

    public function isAccountNonExpired()
    {
        return true;
    }
    public function isAccountNonLocked()
    {
        return true;
    }
    public function isCredentialsNonExpired()
    {
        return true;
    }
    public function isEnabled()
    {
        return $this->isActive;
    }
// serialize and unserialize must be updated - see below
    public function serialize()
    {
        return serialize(array(
// ...
            $this->isActive
        ));
    }
    public function unserialize($serialized)
    {
        list (
// ...
            $this->isActive
            ) = unserialize($serialized);
    }
}