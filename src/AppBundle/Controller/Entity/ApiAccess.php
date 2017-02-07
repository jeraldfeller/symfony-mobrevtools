<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 1/12/2017
 * Time: 6:03 AM
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="api_access")
 */
class ApiAccess {

    /**
     * @ORM\Column(type="integer")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $tid;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $trafficSource;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $userName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;
}