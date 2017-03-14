<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 1/31/2017
 * Time: 4:42 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class VoluumApiController extends Controller{


    public function voluumLoginAction(){
        $credential = json_decode($this->forward('AppBundle:Settings:getApiAccessByTraffic', array('traffic' => 'Voluum'
        ))->getContent(), true);


        $user = $credential['userName'];
        $password = str_replace('|', '&', $credential['password']);
        $auth = base64_encode($user . ':' . $password);
        $url = 'https://security.voluum.com/login';
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('Authorization: Basic ' . $auth . ''),
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);




        return new Response($resp);


    }


    /**
     * @Route("/api/voluum-report/{$url}/{$query}/{$method}/{$sessionId}", name="voluumReport")
     */
    public function getVoluumReportsAction($url = null, $query = null , $method = null, $sessionId = null){
        $url = $url . http_build_query($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . ''),
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response( $resp );
    }

    /**
     * @Route("/api/voluum-post/{$url}/{$query}/{$method}/{$sessionId}", name="voluumPost")
     */
    public function postVoluumAction($url = null, $query = null, $method = null, $sessionId = null){

        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . '', 'Content-Type: application/json')
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return new Response( $resp );
    }


    /**
     * @Route("/api/voluum/get-countries", name="voluumGetCountries")
     */
    public function voluumGetCountriesAction($sessionId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://core.voluum.com/countries';
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $voluumSessionId . ''),
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }


}