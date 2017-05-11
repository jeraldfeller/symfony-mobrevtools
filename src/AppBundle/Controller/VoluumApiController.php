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
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\ReportsCampaignsManualCostUpdate;


class VoluumApiController extends Controller{


        public function voluumLoginAction($userName, $password){

            $auth = base64_encode($userName . ':' . $password);
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
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
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
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }


    /**
     * @Route("/api/voluum/get-affiliate-networks", name="voluumGetAffiliateNetworks")
     */
    public function voluumGetAffiliateNetworksAction($sessionId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://panel-api.voluum.com/affiliate-network';
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


    /**
     * @Route("/api/voluum/get-traffic-source", name="voluumGetTrafficSource")
     */
    public function voluumGetTrafficSourceAction($sessionId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://panel-api.voluum.com/traffic-source';
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $voluumSessionId . ''),
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }


    /**
     * @Route("/api/voluum/get-flow", name="voluumGetFlow")
     */
    public function voluumGetFlowAction($sessionId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://panel-api.voluum.com/flow';
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $voluumSessionId . ''),
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }




    /**
     * @Route("/api/voluum/get-domain", name="voluumGetDomain")
     */
    public function voluumGetDomainAction($sessionId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://core.voluum.com/domains';
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $voluumSessionId . ''),
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }
    /**
     * @Route("/api/voluum/get-lander/{$landerId}", name="voluumGetLander")
     */
    public function voluumGetLanderAction($landerId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://panel-api.voluum.com/lander/' . trim($landerId);
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

    /**
     * @Route("/api/voluum/put-lander/{$url}/{$query}/{$sessionId}", name="voluumPutLander")
     */
    public function voluumPutLanderAction($url = null, $query = null, $sessionId = null){
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            //CURLOPT_PUT => 1,
            CURLOPT_CUSTOMREQUEST=> 'PUT',
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . '', 'Content-Type: application/json')
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }

    /**
     * @Route("/api/voluum/get-offer/{$offerId}", name="voluumGetLander")
     */
    public function voluumGetOfferAction($offerId = null){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://panel-api.voluum.com/offer/' . trim($offerId);
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

    /**
     * @Route("/api/voluum/put-offer/{$url}/{$query}/{$sessionId}", name="voluumPutOffer")
     */
    public function voluumPutOfferAction($url = null, $query = null, $sessionId = null){
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            //CURLOPT_PUT => 1,
            CURLOPT_CUSTOMREQUEST=> 'PUT',
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . '', 'Content-Type: application/json')
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return new Response($resp);

    }


    /**
     * @Route("/tools/cost-update")
     */
    public function showLandersPageAction(){
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:ReportsCampaignsManualCostUpdate'))->getContent();
        return $this->render(
            'cost-update/cost-update.html.twig', array('page' => 'Cost Update')
        );
    }


    /**
     * @Route("/api/voluum/get-campaigns-manual-cost", name="getCampaignsManualCost")
     */
    public function getCampaignManualCostAction(){
        $data = json_decode($_POST['param'], true);
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:ReportsCampaignsManualCostUpdate'))->getContent();
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $from = date('Y-m-d', strtotime($data['from'])) . 'T00:00:00Z';
        $to = date('Y-m-d', strtotime($data['to'] . '+1 days')) . 'T00:00:00Z';
        $tz = 'America/New_York';
        $sort = 'visits';
        $direction = 'desc';
        $limit = '5000';
        $include = 'traffic';
        $url = 'https://panel-api.voluum.com/report?';
        $query = array(
            'from' => $from,
            'to' => $to,
            'tz' => $tz,
            'sort' => $sort,
            'direction' => $direction,
            'columns' => 'campaignId',
            'columns' => 'campaignName',
            'columns' => 'visits',
            'columns' => 'cost',
            'columns' => 'trafficSourceName',
            'groupBy' => 'campaign',
            'offset' => 0,
            'limit' => $limit,
            'include' => $include,
            'conversionTimeMode' => 'VISIT'
        );

        $returnedData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);

        $em = $this->getDoctrine()->getManager();
        $batch = 5;
        $i = 1;

        foreach($returnedData['rows']  as $row) {
            if($row['trafficSourceName'] != 'Zeropark'){
                if($row['visits'] >= 1){
                    if($row['trafficSourceName'] == 'ExoClick'){
                        $tz = 'America/New_York';
                    }else if($row['trafficSourceName'] == 'TrafficStars'){
                        $tz = 'Europe/London';
                    }else{
                        $tz = 'America/Chicago';
                    }
                    $reports = new ReportsCampaignsManualCostUpdate();
                    $reports->setCampaignId($row['campaignId']);
                    $reports->setCampaignName($row['campaignName']);
                    $reports->setTrafficSourceName($row['trafficSourceName']);
                    $reports->setVisits($row['visits']);
                    $reports->setCost($row['cost']);
                    $reports->setTimeZone($tz);
                    $em->persist($reports);

                    if(($i % $batch) == 0){
                        $em->flush();
                        $em->clear();
                    }

                    $i++;
                }
            }
        }

        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }

    /**
     * @Route("/api/voluum/update-cost", name="updateCost")
     */
    public function updateCostAction(){
        $data = json_decode($_POST['param'], true);
        $return = true;

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $dateNow = date('Y-m-d');
        $dateFrom = date('Y-m-d', strtotime($data['options'][0]['from']));
        $dateTo = date('Y-m-d', strtotime($data['options'][0]['to']));
        if($dateTo == $dateNow){
            $ymd = date('Y-m-d');
            $hmi = date('H:00:00');
            $from = $ymd.'T00:00:00';
            $to = $ymd.'T'.$hmi;
            if($hmi == '00:00:00'){
                $ymd = date('Y-m-d', strtotime('-1 days'));
                $from = $ymd.'T00:00:00';
            }
        }
        else{
                $ymdFrom = $dateFrom;
                $ymdTo = date('Y-m-d', strtotime($dateNow, strtotime('+1 days')));
                $hmi = date('H:00:00');
                $from = $ymdFrom.'T00:00:00';
                $to = $ymdTo.'T'.$hmi;
        }


        $url = 'https://reports.voluum.com/manual-costs';
        $return = array();
        foreach($data['items'] as $item){

            $query = array('timeZone' => $item['timeZone'],
                'cost' => $item['cost'],
                'restoreCost' => false,
                'campaignId' => $item['campid'],
                'from' => $from,
                'to' => $to,
            );

            $response = json_decode($this->forward('AppBundle:VoluumApi:postVoluum', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);

            if(!isset($response['error'])){
                $return[] = $item['campName'] . ' Successfully Updated.';
            }else{
                $return[] = $response;
            }


        }


        return new Response(json_encode($return));
    }


    /**
     * @Route("/ajax/get-campaigns-manual-cost", name="ajaxGetCampaignsManualCost")
     */

    public function ajaxGetReportsCampaignManualCost(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.campaignId', 'p.campaignName', 'p.trafficSourceName', 'p.visits', 'p.cost', 'p.timeZone');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:ReportsCampaignsManualCostUpdate';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);


        $sQuery = $em->createQuery("
        SELECT $aQueryColumns
        FROM ".$sTable." p ".$sWhere.$sOrder."");
        $rResult = $sQuery->getResult();

        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."");

        $iTotal = count($paginator = new Paginator($sQuery));

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $row = array();
            $row[] = $column['campaignName'];
            $row[] = $column['visits'];
            $row[] = '$' . number_format($column['cost'], 2);
            $row[] = '<input type="text" class="form-control inputCost" onChange="formatCurrency(this)"
                      data-campaign-id="' . $column['campaignId'] . '"
                      data-campaign-name="' . $column['campaignName'] . '"
                      data-time-zone="' . $column['timeZone'] . '"
                      >';
            $output['aaData'][] = $row;
        }


        return new Response( json_encode( $output ) );
    }


}