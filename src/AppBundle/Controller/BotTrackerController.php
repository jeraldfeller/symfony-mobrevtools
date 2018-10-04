<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 10/16/2017
 * Time: 8:25 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\IpConditions;
use AppBundle\Entity\ReportedIp;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\BotData;

class BotTrackerController extends Controller
{
    /**
     * @Route("/claim/rewards/")
     */

    public function captureData(){
        $em = $this->getDoctrine()->getManager();
        $query = $_GET;
        $ua = $_SERVER['HTTP_USER_AGENT'];
        $ip = $this->Get_Real_IpAddr();
        $s = file_get_contents('http://ip2c.org/'.$ip);
        switch($s[0])
        {
            case '0':
                $country = 'Er';
                break;
            case '1':
                $reply = explode(';',$s);
                $country = $reply[1];
                break;
            case '2':
                $country = 'Nf';
                break;
        }

        $entity = new BotData();

        $entity->setAppVersion($query['appVersion']);
        $entity->setTitle($query['title']);
        $entity->setLanguage($query['language']);
        $entity->setHit($query['hit']);
        $entity->setPosition($query['position']);
        $entity->setIpAddress($ip);
        $entity->setGeo($country);
        $em->persist($entity);
        $em->flush();

        return $this->redirect('https://itunes.apple.com');


    }


    function Get_Real_IpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        if (!$ip)
            $ip = '';
        return $ip;
    }


}