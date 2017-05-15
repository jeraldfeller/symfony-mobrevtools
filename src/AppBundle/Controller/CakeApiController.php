<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 3/30/2017
 * Time: 11:44 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CakeApiController extends Controller{

    /**
     * @Route("/api/cake-api/{$affiliateId}/{$apiKey}/{$network}", name="cakeApiOfferFeed")
     */
    public function getOffersAction($affiliateId = null, $apiKey = null, $network = null){
        $url = 'http://'.$network.'/affiliates/api/4/offers.asmx/OfferFeed';
        //$url = 'http://'.$network.'/affiliates/api/4/offers.asmx?op=OfferFeed';
        $query = array(
            'api_key' => $apiKey,
            'affiliate_id' => $affiliateId,
            'campaign_name' => '',
            'media_type_category_id' => 0,
            'vertical_category_id' => 0,
            'vertical_id' => 0,
            'offer_status_id' => 0,
            'tag_id' => 0,
            'start_at_row' => 1,
            'row_limit' => 0
        );
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($json)),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return new Response( $resp );
    }


    /**
     * @Route("/api/cake-api/{$affiliateId}/{$apiKey}/{$network}/{$contractId}", name="cakeApiApplyOffer")
     */
    public function applyOffersAction($affiliateId = null, $apiKey = null, $network = null, $contractId = null){
        $url = 'http://'.$network.'/affiliates/api/3/offers.asmx/ApplyForOffer';
        $query = array(
            'api_key' => $apiKey,
            'affiliate_id' => $affiliateId,
            'offer_contract_id' => $contractId,
            'media_type_id' => 1,
            'notes' => '',
            'agreed_to_terms' => true,
            'agreed_from_ip_address' => ''
        );
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($json)),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return new Response( $resp );
    }


    /**
     * @Route("/api/cake-api/{$affiliateId}/{$apiKey}/{$network}/{$campaignId}", name="getCampaignAffiliate")
     */
    public function getCampaignAffiliateAction($affiliateId = null, $apiKey = null, $network= null, $campaignId = null){
        $url = 'http://'.$network.'/affiliates/api/2/offers.asmx/GetCampaign';
        $query = array(
            'api_key' => $apiKey,
            'affiliate_id' => $affiliateId,
            'campaign_id' => $campaignId
        );
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($json)),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return new Response( $resp );
    }


    /**
     * @Route("/api/cake-api/{$affiliateId}/{$apiKey}/{$network}/{$campaignId}", name="getCampaignAffiliate")
     */
    public function getCreativeTypesAction($affiliateId = null, $apiKey = null, $network= null, $campaignId = null){
        $url = 'http://'.$network.'/api/5/export.asmx/Offers';
        $query = array(
            'api_key' => $apiKey,
            'offer_id' => 0,
            'offer_name' => '',
            'advertiser_id' => 0,
            'vertical_id' => 0,
            'offer_type_id' => 0,
            'media_type_id' => 0,
            'offer_status_id' => 1,
            'tag_id' => 0,
            'start_at_row' => 1,
            'row_limit' => 100,
            'sort_field' => 'offer_name',
            'sort_descending' => false
        );
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($json)),
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