<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/1/2017
 * Time: 3:50 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\ApiAccess;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

class OffersController extends Controller{

    /**
     * @Route("/tools/offers")
     */
    public function showOffersPageAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
            $voluumSessionId = $apiCredentials[0]['voluum'];
            $from = date('Y-m-d', strtotime('-30 days')) . 'T00:00:00Z';

            $to = date('Y-m-d').'T00:00:00Z';
            $tz = 'America/Chicago';
            $sort = 'conversions';
            $direction = 'desc';
            $limit = '5000';

            $query = array('from' => $from,
                'to' => $to,
                'tz' => $tz,
                'sort' => $sort,
                'direction' => $direction,
                'columns' => 'offerName',
                'columns' => 'offerId',
                'columns' => 'offerUrl',
                'columns' => 'offerCountry',
                'columns' => 'payout',
                'columns' => 'visits',
                'columns' => 'clicks',
                'columns' => 'conversions',
                'columns' => 'revenue',
                'columns' => 'cost',
                'columns' => 'profit',
                'columns' => 'cpv',
                'columns' => 'ctr',
                'columns' => 'cr',
                'columns' => 'cv',
                'columns' => 'roi',
                'columns' => 'epv',
                'columns' => 'epc',
                'columns' => 'ap',
                'columns' => 'affiliateNetworkName',
                'columns' => 'errors',
                'groupBy' => 'offer',
                'offset' => 0,
                'limit' => $limit,
                'include' => 'traffic',
            );

            $url = 'https://portal.voluum.com/report?';
            $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);

            return $this->render(
                'offers/offers.html.twig', array('apiResponse' => $apiResponse['rows'])
            );
        }else{
            return $this->redirect('/user/login');
        }


    }

    /**
     * @Route("/tools/add-offers")
     */
    public function addOffersAction(){

        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://core.voluum.com/affiliate-networks';

        $response = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);

        $success = array();
        $failed = array();
        $apiResponse = array();



        foreach($data as $row){

            $offerName = trim($row['offerName']);
            $offerURL = trim($row['offerURL']);
            $offerCountry = trim($row['offerCountry']);
            $affiliateNetwork = trim($row['affiliateNetwork']);
            $payout = trim((isset($row['payout']) ? $row['payout'] : ''));
            foreach($response as $responseRow){
                if($responseRow['name'] == $affiliateNetwork){
                    $affiliateNetworkId = $responseRow['id'];
                }
            }

            if(isset($affiliateNetworkId)){
                if($payout == '' || $payout == null){
                    if($offerCountry == '' || $offerCountry == null){
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'affiliateNetwork' => array('id' => $affiliateNetwork)
                        );
                    }else{
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'country' => array('code' => $offerCountry),
                            'affiliateNetwork' => array('id' => $affiliateNetwork)
                        );
                    }

                }else{
                    if($offerCountry == '' || $offerCountry == null){
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'affiliateNetwork' => array('id' => $affiliateNetwork),
                            'overridePayout' => true,
                            'payout' => $payout
                        );
                    }else{
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'country' => array('code' => $offerCountry),
                            'affiliateNetwork' => array('id' => $affiliateNetwork),
                            'overridePayout' => true,
                            'payout' => $payout
                        );
                    }

                }


                $url = 'https://core.voluum.com/offers';
                $apiResponse[] = json_decode($this->forward('AppBundle:VoluumApi:postVoluum', array('url' => $url,
                    'query' => $query,
                    'method' => 'POST',
                    'sessionId' => $voluumSessionId))->getContent(), true);
                //var_dump($apiResponse);
                if(!isset($apiResponse['error'])){
                    $success[] = $offerName;
                }else{
                    $failed = $offerName;
                }
            }else{
                $failed[] = $offerName . ' - ' . $affiliateNetwork . ' Not found';
            }

        }

        $message = 'Offers Successfully Added';
        $error = FALSE;
        $data = array('success' => $success, 'failed' => $failed, 'apiResponse' => $apiResponse);
        $return = $this->makeResponse($error,$message, $data);

        return new Response($return);
    }



    public function makeResponse($error, $message, $data){
        return json_encode(
            array('data' =>
                array('details' =>
                    array('error' => $error ,
                        'message' => $message,
                        'elements' =>
                            $data
                    )
                )
            )
        );
    }

}