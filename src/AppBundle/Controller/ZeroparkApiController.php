<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/21/2017
 * Time: 4:13 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ZeroparkApiController extends Controller {


    public function zeroparkLoginAction(){

        $credential = json_decode($this->forward('AppBundle:Settings:getApiAccessByTraffic', array('traffic' => 'zeropark'
            ))->getContent(), true);
        $user = $credential['userName'];
        $password = str_replace('|', '&', $credential['password']);

        $url = 'https://panel.zeropark.com/api/signin';
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HEADER => 1,
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                'email' => $user,
                'password' => $password
            )
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $resp, $matches);
        $cookies = array();
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        // Close request to clear up some resources
        curl_close($curl);
        return new Response(json_encode($cookies['JSESSIONID']));

    }

    /**
     * @Route("/api/zeropark/{$url}/{$query}/{$method}/{$token}", name="zeroparkApiAction")
     */
    public function zeroparkRequestAction($url = null, $query = null , $method = null, $token = null){

        $url = $url . http_build_query($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_POST => $method,
            CURLOPT_HTTPHEADER => array('api-token: ' . $token),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return new Response( $resp );
    }


}