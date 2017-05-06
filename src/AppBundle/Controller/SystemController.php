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

    /**
     * @Route("/system/register-token/{$VOLUUMSESSIONID}/{$EXOSESSIONTOKEN}", name="registerToken")
     */

    public function registerTokenAction($VOLUUMSESSIONID = null, $EXOSESSIONTOKEN = null){

        $em = $this->getDoctrine()->getManager();
        $credentials = $em->getRepository('AppBundle:ApiCredentials')->findOneById(1);
        $credentials->setVoluum($VOLUUMSESSIONID);
        $credentials->setExoClick($EXOSESSIONTOKEN);
        $em->flush();

    }

    /**
     * @Route("/system/send-email/{$from}/{$to}/{$subject}/{$message}", name="sendMessage")
     */
    public function sendEmail($from, $to, $subject, $message){

        // To send HTML mail, the Content-type header must be set
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        // Additional headers
        $headers .= 'From: <' . $from . '>' . "\r\n";


        // Mail it
        mail($to, $subject, $message, $headers);



    }

}