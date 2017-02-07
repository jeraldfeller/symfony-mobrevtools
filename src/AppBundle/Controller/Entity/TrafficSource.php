<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 1/11/2017
 * Time: 10:25 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="traffic_sources")
 */
class TrafficSource {

    /**
     * @ORM\Column(type="integer")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $trafficSourceId;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $trafficName;
}