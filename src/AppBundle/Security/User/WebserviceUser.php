<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 1/11/2017
 * Time: 3:22 PM
 */

namespace AppBundle\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;


class WebserviceUser implements UserInterface, EquatableInterface {

    private $email;
    private $password;
    private $salt;
    private $roles;

    public function __construct($email, $password, $salt, array $roles){
        $this->email = $email;
        $this->password = $password;
        $this->salt = $salt;
        $this->roles = $roles;
    }

    public function getRoles(){
        return $this->roles;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getSalt(){
        return $this->salt;
    }

    public function getEmail(){
        return $this->email;
    }

    public function eraseCredentials(){

    }

    public function isEqualTo(UserInterface $user){
        if(!$user instanceof WebserviceUser){
            return false;
        }

        if($this->password !== $user->getPassword()){
            return false;
        }

        if($this->salt !== $user->getSalt()){
            return false;
        }

        if($this->email !== $user->getEmail()){
            return false;
        }

        return true;
    }

}