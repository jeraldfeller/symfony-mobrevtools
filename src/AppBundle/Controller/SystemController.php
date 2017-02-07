<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 1/31/2017
 * Time: 4:06 AM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\ApiCredentials;
use Symfony\Component\HttpFoundation\Response;

class SystemController extends Controller{


    public function getApiCredentialsAllAction(){

        $apiCredentials = $this->getDoctrine()
            ->getRepository('AppBundle:ApiCredentials')
            ->findAll();

        $data = array();
        for($x = 0; $x < count( $apiCredentials); $x++){
            $data[] =array('id' =>  $apiCredentials[$x]->getId(),
                'voluum' =>  $apiCredentials[$x]->getVoluum(),
                'zeropark' =>  $apiCredentials[$x]->getZeropark(),
                'exoclick' =>  $apiCredentials[$x]->getExoclick()
            );
        }



        return new Response(
            json_encode($data)
        );
    }

}