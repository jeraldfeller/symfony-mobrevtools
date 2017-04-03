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
use AppBundle\Entity\OfferGroups;
use AppBundle\Entity\CakeOffersTmpTbl;
use AppBundle\Entity\OfferGroupsOffers;
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


    /**
     * @Route("/offers/offer-groups", name="offerGroups")
     */
    public function showGroupsAction()
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'offers/offer-groups.html.twig', array('page' => 'Offer Groups')
            );
        }else{
            return $this->redirect('/user/login');
        }


    }


    /**
     * @Route("/offers/add-group", name="addOfferGroup")
     */
    public function addGroupAction()
    {
        $data = json_decode($_POST['param'], true);

        $isExists = $this->getDoctrine()
            ->getRepository('AppBundle:OfferGroups')
            ->findOneBy(array('offerGroupName' => $data['groupName']));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'Group already exists'
            );
        }else{
            $em = $this->getDoctrine()->getManager();
            $group = new OfferGroups();
            $group->setOfferGroupName($data['groupName']);
            $em->persist($group);
            $em->flush();

            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Group Successfully Added'
            );
        }


        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/offers/edit-group", name="editOfferGroup")
     */
    public function editGroupAction()
    {

        $data = json_decode($_POST['param'], true);
        $isExists = $this->getDoctrine()
            ->getRepository('AppBundle:OfferGroups')
            ->findOneBy(array('offerGroupName' => $data['groupName']));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'Group already exists'
            );
        }else{
            $em = $this->getDoctrine()->getManager();
            $doctrine = $em->getRepository('AppBundle:OfferGroups')->findOneByOfferGroupId($data['groupId']);
            $doctrine->setOfferGroupName($data['groupName']);
            $em->flush();

            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Group Successfully Updated'
            );
        }


        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/offers/delete-group", name="deleteOfferGroup")
     */
    public function deleteGroupAction()
    {

        $data = $_POST['param'];
        $this->forward('AppBundle:Deletes:deleteIndividualColumn', array('appBundle' => 'AppBundle:OfferGroups', 'column' => 'offerGroupId', 'value' => $data))->getContent();
        $return = array(
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Group Successfully Deleted');
        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/ajax/get-offer-groups")
     */
    public function ajaxGetOfferGroups(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.offerGroupId', 't.offerGroupName');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:OfferGroups';

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
        FROM ".$sTable." t ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $sQuery = $em->createQuery("
        SELECT t
        FROM ".$sTable." t ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT t
        FROM ".$sTable." t ".$sWhere.$sOrder."");

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
            $row[] = $column['offerGroupName'];
            $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="/offers/group/' . $column['offerGroupId'] . '"><i class="fa fa-eye"></i> View Offers</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditGroup"  data-action="edit" data-id="' . $column['offerGroupId'] . '" data-name="' . $column['offerGroupName'] . '" onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeleteGroup" data-action="delete" data-id="' . $column['offerGroupId'] . '" data-name="' . $column['offerGroupName'] . '"  onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }

    public function getAffiliateNetworks(){
        $networks = $this->getDoctrine()
            ->getRepository('AppBundle:AffiliateNetwork')
            ->findAll();
        $data = array();
        for($x = 0; $x < count($networks); $x++){
            $data[] = array(
                'networkId' => $networks[$x]->getAffiliateNetworkId(),
                'networkName' => $networks[$x]->getNetworkName()
            );
        }

        return $data;
    }

    public function getOfferGroups(){
        $groups = $this->getDoctrine()
            ->getRepository('AppBundle:OfferGroups')
            ->findAll();
        $data = array();
        for($x = 0; $x < count($groups); $x++){
            $data[] = array(
                'groupId' => $groups[$x]->getOfferGroupId(),
                'groupName' => $groups[$x]->getOfferGroupName()
            );
        }

        return $data;
    }


    /**
     * @Route("/offers/offer-search", name="offerSearch")
     */
    public function showOfferSearchAction()
    {

        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:CakeOffersTmpTbl'))->getContent();
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'offers/offer-search.html.twig', array('page' => 'Offer Groups',
                                                       'networks' => $this->getAffiliateNetworks(),
                                                       'groups' => $this->getOfferGroups())
            );
        }else{
            return $this->redirect('/user/login');
        }


    }

    /**
     * @Route("/offers/search-offer", name="searchOffer")
     */
    public function searchOfferAction()
    {
        $data = json_decode($_POST['param'], true);
        $includeInactive = $data['includeInactive'];
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:CakeOffersTmpTbl'))->getContent();
        if($data['affiliateNetworkId'] == 'All'){
            $network = $this->getDoctrine()
                ->getRepository('AppBundle:AffiliateNetwork')
                ->findAll();

            $batch = 100;
            $x = 0;
            $em = $this->getDoctrine()->getManager();

            for($i = 0; $i < count($network); $i++){


                $offers =  json_decode($this->forward('AppBundle:CakeApi:getOffers', array(
                    'affiliateId' => $network[$i]->getAffiliateId(),
                    'apiKey' => $network[$i]->getApiKey(),
                    'network' => $network[$i]->getApiUrl()
                ))->getContent(), true);


                foreach($offers['d']['offers'] as $row){
                    if($includeInactive == false){
                        if($row['offer_status']['status_name'] != 'Inactive'){
                            if($data['offerKeyword'] != ''){
                                $keys = explode(',', $data['offerKeyword']);

                                for($y = 0; $y < count($keys); $y++){
                                    $hasMatch = array();
                                    $hasAndMatch = array();
                                    $hasAnd = false;
                                    $key = strtolower($keys[$y]);
                                    if(strpos($key, 'or') !== false){
                                        $multiKeys = explode('{or}', $key);
                                        for($z = 0; $z < count($multiKeys); $z++){
                                            if($z == (count($multiKeys) - 1) && strpos($multiKeys[$z], '{and}') !== false){
                                                $hasAnd = true;
                                                $andKey = preg_replace('/\s+/', '', substr($multiKeys[$z], strpos($multiKeys[$z], '{and}')));
                                                $subKey = substr($multiKeys[$z], 0, strpos($multiKeys[$z], "{and}"));
                                            }else{
                                                $subKey = $multiKeys[$z];
                                            }
                                            if(strpos(strtolower($row['offer_name']), $subKey) !== false){
                                                $hasMatch[] = true;
                                            }

                                            if($hasAnd == true){
                                                $andMultiKeys = explode('{and}', $andKey);
                                                for($w = 1; $w < count($andMultiKeys); $w++){
                                                    $andMultiKey = strtolower($andMultiKeys[$w]);
                                                    if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                        $hasAndMatch[] = true;
                                                    }else{
                                                        $hasAndMatch[] = false;
                                                    }
                                                }
                                            }
                                        }
                                    }else if(strpos($key, '{and}') !== false){
                                        $hasAnd = true;
                                        $hasMatch[] = true;
                                        $andMultiKeys = explode('{and}', preg_replace('/\s+/', '', $key));
                                        for($v = 0; $v < count($andMultiKeys); $v++){
                                            $andMultiKey = strtolower($andMultiKeys[$v]);
                                            if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                $hasAndMatch[] = true;
                                            }else{
                                                $hasAndMatch[] = false;
                                            }
                                        }


                                    }
                                    else{
                                        if(strpos(strtolower($row['offer_name']), $key) !== false){
                                            $hasMatch[] = true;
                                        }
                                    }



                                    if(in_array(1, $hasMatch)){
                                        if($hasAnd == true){
                                            if(!in_array(0, $hasAndMatch)){
                                                $doctrine = new CakeOffersTmpTbl();
                                                $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                                $doctrine->setOfferId($row['offer_id']);
                                                $doctrine->setOfferContractId($row['offer_contract_id']);
                                                $doctrine->setOfferName($row['offer_name']);
                                                $doctrine->setNetworkName($network[$i]->getNetworkName());
                                                $doctrine->setVerticalName($row['vertical_name']);
                                                $doctrine->setPayout($row['payout']);
                                                $doctrine->setPriceFormat($row['price_format']);
                                                $doctrine->setDescription($row['description']);
                                                $doctrine->setRestrictions($row['restrictions']);
                                                $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                                $doctrine->setStatus($row['offer_status']['status_name']);
                                                $em->persist($doctrine);
                                            }
                                        }else{
                                            $doctrine = new CakeOffersTmpTbl();
                                            $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                            $doctrine->setOfferId($row['offer_id']);
                                            $doctrine->setOfferContractId($row['offer_contract_id']);
                                            $doctrine->setOfferName($row['offer_name']);
                                            $doctrine->setNetworkName($network[$i]->getNetworkName());
                                            $doctrine->setVerticalName($row['vertical_name']);
                                            $doctrine->setPayout($row['payout']);
                                            $doctrine->setPriceFormat($row['price_format']);
                                            $doctrine->setDescription($row['description']);
                                            $doctrine->setRestrictions($row['restrictions']);
                                            $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                            $doctrine->setStatus($row['offer_status']['status_name']);
                                            $em->persist($doctrine);
                                        }

                                    }

                                }


                            }else{
                                $doctrine = new CakeOffersTmpTbl();
                                $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                $doctrine->setOfferId($row['offer_id']);
                                $doctrine->setOfferContractId($row['offer_contract_id']);
                                $doctrine->setOfferName($row['offer_name']);
                                $doctrine->setNetworkName($network[$i]->getNetworkName());
                                $doctrine->setVerticalName($row['vertical_name']);
                                $doctrine->setPayout($row['payout']);
                                $doctrine->setPriceFormat($row['price_format']);
                                $doctrine->setDescription($row['description']);
                                $doctrine->setRestrictions($row['restrictions']);
                                $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                $doctrine->setStatus($row['offer_status']['status_name']);
                                $em->persist($doctrine);


                            }

                            if(($x % $batch) == 0){
                                $em->flush();
                            }

                        }
                        }else{


                        if($data['offerKeyword'] != ''){
                            $keys = explode(',', $data['offerKeyword']);

                            for($y = 0; $y < count($keys); $y++){
                                $hasMatch = array();
                                $hasAndMatch = array();
                                $hasAnd = false;
                                $key = strtolower($keys[$y]);
                                if(strpos($key, 'or') !== false){
                                    $multiKeys = explode('{or}', $key);
                                    for($z = 0; $z < count($multiKeys); $z++){
                                        if($z == (count($multiKeys) - 1) && strpos($multiKeys[$z], '{and}') !== false){
                                            $hasAnd = true;
                                            $andKey = preg_replace('/\s+/', '', substr($multiKeys[$z], strpos($multiKeys[$z], '{and}')));
                                            $subKey = substr($multiKeys[$z], 0, strpos($multiKeys[$z], "{and}"));
                                        }else{
                                            $subKey = $multiKeys[$z];
                                        }
                                        if(strpos(strtolower($row['offer_name']), $subKey) !== false){
                                            $hasMatch[] = true;
                                        }

                                        if($hasAnd == true){
                                            $andMultiKeys = explode('{and}', $andKey);
                                            for($w = 1; $w < count($andMultiKeys); $w++){
                                                $andMultiKey = strtolower($andMultiKeys[$w]);
                                                if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                    $hasAndMatch[] = true;
                                                }else{
                                                    $hasAndMatch[] = false;
                                                }
                                            }
                                        }
                                    }
                                }else if(strpos($key, '{and}') !== false){
                                    $hasAnd = true;
                                    $hasMatch[] = true;
                                    $andMultiKeys = explode('{and}', preg_replace('/\s+/', '', $key));
                                    for($v = 0; $v < count($andMultiKeys); $v++){
                                        $andMultiKey = strtolower($andMultiKeys[$v]);
                                        if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                            $hasAndMatch[] = true;
                                        }else{
                                            $hasAndMatch[] = false;
                                        }
                                    }


                                }
                                else{
                                    if(strpos(strtolower($row['offer_name']), $key) !== false){
                                        $hasMatch[] = true;
                                    }
                                }



                                if(in_array(1, $hasMatch)){
                                    if($hasAnd == true){
                                        if(!in_array(0, $hasAndMatch)){
                                            $doctrine = new CakeOffersTmpTbl();
                                            $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                            $doctrine->setOfferId($row['offer_id']);
                                            $doctrine->setOfferContractId($row['offer_contract_id']);
                                            $doctrine->setOfferName($row['offer_name']);
                                            $doctrine->setNetworkName($network[$i]->getNetworkName());
                                            $doctrine->setVerticalName($row['vertical_name']);
                                            $doctrine->setPayout($row['payout']);
                                            $doctrine->setPriceFormat($row['price_format']);
                                            $doctrine->setDescription($row['description']);
                                            $doctrine->setRestrictions($row['restrictions']);
                                            $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                            $doctrine->setStatus($row['offer_status']['status_name']);
                                            $em->persist($doctrine);
                                        }
                                    }else{
                                        $doctrine = new CakeOffersTmpTbl();
                                        $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                        $doctrine->setOfferId($row['offer_id']);
                                        $doctrine->setOfferContractId($row['offer_contract_id']);
                                        $doctrine->setOfferName($row['offer_name']);
                                        $doctrine->setNetworkName($network[$i]->getNetworkName());
                                        $doctrine->setVerticalName($row['vertical_name']);
                                        $doctrine->setPayout($row['payout']);
                                        $doctrine->setPriceFormat($row['price_format']);
                                        $doctrine->setDescription($row['description']);
                                        $doctrine->setRestrictions($row['restrictions']);
                                        $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                        $doctrine->setStatus($row['offer_status']['status_name']);
                                        $em->persist($doctrine);
                                    }

                                }

                            }


                        }else{
                            $doctrine = new CakeOffersTmpTbl();
                            $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                            $doctrine->setOfferId($row['offer_id']);
                            $doctrine->setOfferContractId($row['offer_contract_id']);
                            $doctrine->setOfferName($row['offer_name']);
                            $doctrine->setNetworkName($network[$i]->getNetworkName());
                            $doctrine->setVerticalName($row['vertical_name']);
                            $doctrine->setPayout($row['payout']);
                            $doctrine->setPriceFormat($row['price_format']);
                            $doctrine->setDescription($row['description']);
                            $doctrine->setRestrictions($row['restrictions']);
                            $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                            $doctrine->setStatus($row['offer_status']['status_name']);
                            $em->persist($doctrine);


                        }

                        if(($x % $batch) == 0){
                            $em->flush();
                        }
                    }
                    }



            }


        }else{
            $network = $this->getDoctrine()
                ->getRepository('AppBundle:AffiliateNetwork')
                ->find($data['affiliateNetworkId']);
            $offers =  json_decode($this->forward('AppBundle:CakeApi:getOffers', array(
                'affiliateId' => $network->getAffiliateId(),
                'apiKey' => $network->getApiKey(),
                'network' => $network->getApiUrl()
            ))->getContent(), true);


            $batch = 100;
            $x = 1;
            $em = $this->getDoctrine()->getManager();
            foreach($offers['d']['offers'] as $row){
                if($includeInactive == false) {
                    if ($row['offer_status']['status_name'] != 'Inactive') {
                        if($data['offerKeyword'] != ''){
                            $keys = explode(',', $data['offerKeyword']);

                            for($y = 0; $y < count($keys); $y++){
                                $hasMatch = array();
                                $hasAndMatch = array();
                                $hasAnd = false;
                                $key = strtolower($keys[$y]);
                                if(strpos($key, 'or') !== false){
                                    $multiKeys = explode('{or}', $key);
                                    for($z = 0; $z < count($multiKeys); $z++){
                                        if($z == (count($multiKeys) - 1) && strpos($multiKeys[$z], '{and}') !== false){
                                            $hasAnd = true;
                                            $andKey = preg_replace('/\s+/', '', substr($multiKeys[$z], strpos($multiKeys[$z], '{and}')));
                                            $subKey = substr($multiKeys[$z], 0, strpos($multiKeys[$z], "{and}"));
                                        }else{
                                            $subKey = $multiKeys[$z];
                                        }
                                        if(strpos(strtolower($row['offer_name']), $subKey) !== false){
                                            $hasMatch[] = true;
                                        }

                                        if($hasAnd == true){
                                            $andMultiKeys = explode('{and}', $andKey);
                                            for($w = 1; $w < count($andMultiKeys); $w++){
                                                $andMultiKey = strtolower($andMultiKeys[$w]);
                                                if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                    $hasAndMatch[] = true;
                                                }else{
                                                    $hasAndMatch[] = false;
                                                }
                                            }
                                        }
                                    }
                                }else if(strpos($key, '{and}') !== false){
                                    $hasAnd = true;
                                    $hasMatch[] = true;
                                    $andMultiKeys = explode('{and}', preg_replace('/\s+/', '', $key));
                                    for($v = 0; $v < count($andMultiKeys); $v++){
                                        $andMultiKey = strtolower($andMultiKeys[$v]);
                                        if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                            $hasAndMatch[] = true;
                                        }else{
                                            $hasAndMatch[] = false;
                                        }
                                    }


                                }
                                else{
                                    if(strpos(strtolower($row['offer_name']), $key) !== false){
                                        $hasMatch[] = true;
                                    }
                                }



                                if(in_array(1, $hasMatch)){
                                    if($hasAnd == true){
                                        if(!in_array(0, $hasAndMatch)){
                                            $doctrine = new CakeOffersTmpTbl();
                                            $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                                            $doctrine->setOfferId($row['offer_id']);
                                            $doctrine->setOfferContractId($row['offer_contract_id']);
                                            $doctrine->setOfferName($row['offer_name']);
                                            $doctrine->setNetworkName($network->getNetworkName());
                                            $doctrine->setVerticalName($row['vertical_name']);
                                            $doctrine->setPayout($row['payout']);
                                            $doctrine->setPriceFormat($row['price_format']);
                                            $doctrine->setDescription($row['description']);
                                            $doctrine->setRestrictions($row['restrictions']);
                                            $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                            $doctrine->setStatus($row['offer_status']['status_name']);
                                            $em->persist($doctrine);
                                        }
                                    }else{
                                        $doctrine = new CakeOffersTmpTbl();
                                        $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                                        $doctrine->setOfferId($row['offer_id']);
                                        $doctrine->setOfferContractId($row['offer_contract_id']);
                                        $doctrine->setOfferName($row['offer_name']);
                                        $doctrine->setNetworkName($network->getNetworkName());
                                        $doctrine->setVerticalName($row['vertical_name']);
                                        $doctrine->setPayout($row['payout']);
                                        $doctrine->setPriceFormat($row['price_format']);
                                        $doctrine->setDescription($row['description']);
                                        $doctrine->setRestrictions($row['restrictions']);
                                        $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                        $doctrine->setStatus($row['offer_status']['status_name']);
                                        $em->persist($doctrine);
                                    }

                                }

                            }


                        }else{
                            $doctrine = new CakeOffersTmpTbl();
                            $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                            $doctrine->setOfferId($row['offer_id']);
                            $doctrine->setOfferContractId($row['offer_contract_id']);
                            $doctrine->setOfferName($row['offer_name']);
                            $doctrine->setNetworkName($network->getNetworkName());
                            $doctrine->setVerticalName($row['vertical_name']);
                            $doctrine->setPayout($row['payout']);
                            $doctrine->setPriceFormat($row['price_format']);
                            $doctrine->setDescription($row['description']);
                            $doctrine->setRestrictions($row['restrictions']);
                            $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                            $doctrine->setStatus($row['offer_status']['status_name']);
                            $em->persist($doctrine);


                        }

                        if(($x % $batch) == 0){
                            $em->flush();
                        }
                    }
                }else{
                    if($data['offerKeyword'] != ''){
                        $keys = explode(',', $data['offerKeyword']);

                        for($y = 0; $y < count($keys); $y++){
                            $hasMatch = array();
                            $hasAndMatch = array();
                            $hasAnd = false;
                            $key = strtolower($keys[$y]);
                            if(strpos($key, 'or') !== false){
                                $multiKeys = explode('{or}', $key);
                                for($z = 0; $z < count($multiKeys); $z++){
                                    if($z == (count($multiKeys) - 1) && strpos($multiKeys[$z], '{and}') !== false){
                                        $hasAnd = true;
                                        $andKey = preg_replace('/\s+/', '', substr($multiKeys[$z], strpos($multiKeys[$z], '{and}')));
                                        $subKey = substr($multiKeys[$z], 0, strpos($multiKeys[$z], "{and}"));
                                    }else{
                                        $subKey = $multiKeys[$z];
                                    }
                                    if(strpos(strtolower($row['offer_name']), $subKey) !== false){
                                        $hasMatch[] = true;
                                    }

                                    if($hasAnd == true){
                                        $andMultiKeys = explode('{and}', $andKey);
                                        for($w = 1; $w < count($andMultiKeys); $w++){
                                            $andMultiKey = strtolower($andMultiKeys[$w]);
                                            if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                                $hasAndMatch[] = true;
                                            }else{
                                                $hasAndMatch[] = false;
                                            }
                                        }
                                    }
                                }
                            }else if(strpos($key, '{and}') !== false){
                                $hasAnd = true;
                                $hasMatch[] = true;
                                $andMultiKeys = explode('{and}', preg_replace('/\s+/', '', $key));
                                for($v = 0; $v < count($andMultiKeys); $v++){
                                    $andMultiKey = strtolower($andMultiKeys[$v]);
                                    if(strpos(strtolower($row['offer_name']), $andMultiKey) !== false){
                                        $hasAndMatch[] = true;
                                    }else{
                                        $hasAndMatch[] = false;
                                    }
                                }


                            }
                            else{
                                if(strpos(strtolower($row['offer_name']), $key) !== false){
                                    $hasMatch[] = true;
                                }
                            }



                            if(in_array(1, $hasMatch)){
                                if($hasAnd == true){
                                    if(!in_array(0, $hasAndMatch)){
                                        $doctrine = new CakeOffersTmpTbl();
                                        $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                                        $doctrine->setOfferId($row['offer_id']);
                                        $doctrine->setOfferContractId($row['offer_contract_id']);
                                        $doctrine->setOfferName($row['offer_name']);
                                        $doctrine->setNetworkName($network->getNetworkName());
                                        $doctrine->setVerticalName($row['vertical_name']);
                                        $doctrine->setPayout($row['payout']);
                                        $doctrine->setPriceFormat($row['price_format']);
                                        $doctrine->setDescription($row['description']);
                                        $doctrine->setRestrictions($row['restrictions']);
                                        $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                        $doctrine->setStatus($row['offer_status']['status_name']);
                                        $em->persist($doctrine);
                                    }
                                }else{
                                    $doctrine = new CakeOffersTmpTbl();
                                    $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                                    $doctrine->setOfferId($row['offer_id']);
                                    $doctrine->setOfferContractId($row['offer_contract_id']);
                                    $doctrine->setOfferName($row['offer_name']);
                                    $doctrine->setNetworkName($network->getNetworkName());
                                    $doctrine->setVerticalName($row['vertical_name']);
                                    $doctrine->setPayout($row['payout']);
                                    $doctrine->setPriceFormat($row['price_format']);
                                    $doctrine->setDescription($row['description']);
                                    $doctrine->setRestrictions($row['restrictions']);
                                    $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                                    $doctrine->setStatus($row['offer_status']['status_name']);
                                    $em->persist($doctrine);
                                }

                            }

                        }


                    }else{
                        $doctrine = new CakeOffersTmpTbl();
                        $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                        $doctrine->setOfferId($row['offer_id']);
                        $doctrine->setOfferContractId($row['offer_contract_id']);
                        $doctrine->setOfferName($row['offer_name']);
                        $doctrine->setNetworkName($network->getNetworkName());
                        $doctrine->setVerticalName($row['vertical_name']);
                        $doctrine->setPayout($row['payout']);
                        $doctrine->setPriceFormat($row['price_format']);
                        $doctrine->setDescription($row['description']);
                        $doctrine->setRestrictions($row['restrictions']);
                        $doctrine->setAdvertiserExtendedTerms($row['advertiser_extended_terms']);
                        $doctrine->setStatus($row['offer_status']['status_name']);
                        $em->persist($doctrine);


                    }

                    if(($x % $batch) == 0){
                        $em->flush();
                    }
                }


            }
        }


        $em->flush();
        $em->clear();

        $return = json_encode(array('type' => 'success', 'title' => 'Success', 'message' => 'Offers Successfully Imported'));
        return new Response($return);

    }


    /**
     * @Route("/offers/apply-offers", name="applyOffers")
     */
    public function applyOfferAction(){

        $data = json_decode($_POST['param'], true);
        for($x = 0; $x < count($data['items']); $x++){

            $network = $this->getDoctrine()
                ->getRepository('AppBundle:AffiliateNetwork')
                ->find($data['items'][$x]['affiliateNetworkId']);


            $offers =  json_decode($this->forward('AppBundle:CakeApi:applyOffers', array(
                'affiliateId' => $network->getAffiliateId(),
                'apiKey' => $network->getApiKey(),
                'network' => $network->getApiUrl(),
                'contractId' => $data['items'][$x]['contractId']
            ))->getContent(), true);


            if($offers['d']['success'] == true){
                $em = $this->getDoctrine()->getManager();
                $offer = $this->getDoctrine()
                    ->getRepository('AppBundle:OfferGroupsOffers')
                    ->find($data['items'][$x]['id']);

                $offer->setStatus('Active');

                $em->flush();

            }
        }

        return new Response(json_encode(true));

    }


    /**
     * @Route("/offers/add-offer-to-group", name="addOfferToGroup")
     */
    public function addOfferToGroupAction()
    {
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $groupEntity = $this->getDoctrine()
            ->getRepository('AppBundle:OfferGroups')
            ->find($data['group']);
        $batch = 100;
        $x = 0;
        foreach($data['items'] as $row){
            $cakeOffer =  $this->getDoctrine()
                ->getRepository('AppBundle:CakeOffersTmpTbl')
                ->findOneBy(array('cottId' => $row['id']));


            $offer = new OfferGroupsOffers();
            $offer->setAffiliateNetworkId($cakeOffer->getAffiliateNetworkId());
            $offer->setOfferGroup($groupEntity);
            $offer->setOfferId($cakeOffer->getOfferId());
            $offer->setOfferContractId($cakeOffer->getOfferContractId());
            $offer->setOfferName($cakeOffer->getOfferName());
            $offer->setNetworkName($cakeOffer->getNetworkName());
            $offer->setVerticalName($cakeOffer->getVerticalName());
            $offer->setPayout($cakeOffer->getPayout());
            $offer->setPriceFormat($cakeOffer->getPriceFormat());
            $offer->setDescription($cakeOffer->getDescription());
            $offer->setRestrictions($cakeOffer->getRestrictions());
            $offer->setAdvertiserExtendedTerms($cakeOffer->getAdvertiserExtendedTerms());
            $offer->setStatus($cakeOffer->getStatus());
            $em->persist($offer);

            if(($x % $batch) == 0){
                $em->flush();
            }

        }

        $em->flush();
        $em->clear();
            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Offers Successfully Added To Group'
            );

        return new Response(
            json_encode($return)
        );
    }

    /**
     * @Route("/ajax/get-cake-tmp-tbl")
     */
    public function ajaxGetCakeTmpTbl(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.cottId', 't.offerId', 't.offerName', 't.networkName', 't.verticalName', 't.payout', 't.priceFormat', 't.status', 't.description', 't.restrictions', 't.advertiserExtendedTerms');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:CakeOffersTmpTbl';

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
        FROM $sTable t $sWhere GROUP BY t.offerId $sOrder")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $sQuery = $em->createQuery("
        SELECT t
        FROM $sTable t $sWhere GROUP BY t.offerId $sOrder")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT t
        FROM $sTable t $sWhere GROUP BY t.offerId $sOrder");

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

            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['cottId'] . '" />
                             <span></span>
                        </label>
                      </td>';
            $row[] = $column['offerId'];
            $row[] = $column['offerName'];
            $row[] = $column['networkName'];
            $row[] = $column['verticalName'];
            $row[] = $column['payout'];
            $row[] = $column['priceFormat'];
            $row[] = $column['status'];
            $row[] = '<button class="btn btn-info" data-description="' . $column['description'] . '" data-restrictions="' . $column['restrictions'] . '" data-terms="' . $column['advertiserExtendedTerms'] . '" onclick="showDetails(this)">DETAILS</button>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }



    /**
     * @Route("/offers/group/{id}", name="offersGroupsOffers")
     */
    public function showManageOffersGroupAction($id = null)
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $group = $this->getDoctrine()->getRepository('AppBundle:OfferGroups')->findOneBy(array('offerGroupId' => $id));
            return $this->render(
                'offers/offer-groups-offer.html.twig', array('page' => 'Offer Groups',
                    'group' => array('groupId' => $group->getOfferGroupId(), 'groupName' => $group->getOfferGroupName())
                    )
            );
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/ajax/offer/group/{groupId}")
     */

    public function getGroupOffersAction($groupId = null){
        $em = $this->getDoctrine()->getManager();
        $groupEntity = $this->getDoctrine()->getRepository('AppBundle:OfferGroups')->findOneBy(array('offerGroupId' => $groupId));
        $aColumns = array( 'og.ogoid', 'og.offerId', 'og.offerName', 't.networkName', 'og.verticalName', 'og.payout', 'og.priceFormat', 'og.status', 'og.description', 'og.restrictions', 'og.advertiserExtendedTerms');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'og.ogoid';

        // DB table to use
        $sTable = 'AppBundle:UsersGroupMember';

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
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules) . " AND og.offerGroup = $groupId ";
        } else {
            $sWhere = "WHERE og.offerGroup =  $groupId ";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);

        $usersGroupMemberBundle = 'AppBundle:UsersGroupMember';
        $userBundle = 'AppBundle:User';
        $usersGroupBundle =  'AppBundle:UsersGroup';
        $offerGroupBundle = 'AppBundle:OfferGroups';
        $offerGroupsOffersBundle = 'AppBundle:OfferGroupsOffers';

        $sQuery = $em->createQuery("
        SELECT og.ogoid, og.affiliateNetworkId, og.offerId, og.offerContractId, og.offerName, og.networkName, og.verticalName, og.payout, og.priceFormat, og.description, og.restrictions, og.advertiserExtendedTerms, og.status
        FROM $offerGroupsOffersBundle og, $offerGroupBundle o $sWhere GROUP BY og.offerId $sOrder")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($rResult);

        $sQuery = $em->createQuery("
        SELECT og, o
        FROM $offerGroupsOffersBundle og $offerGroupBundle o $sWhere  GROUP BY og.offerId $sOrder");

        $iTotal = count($sQuery);

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
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['ogoid'] . '" data-offer-contract-id="' . $column['offerContractId'] . '" data-affiliate-network-id="' . $column['affiliateNetworkId'] . '"/>
                             <span></span>
                        </label>
                      </td>';
            $row[] = $column['offerId'];
            $row[] = $column['offerName'];
            $row[] = $column['networkName'];
            $row[] = $column['verticalName'];
            $row[] = $column['payout'];
            $row[] = $column['priceFormat'];
            $row[] = $column['status'];
            $row[] = '<button class="btn btn-info" data-description="' . $column['description'] . '" data-restrictions="' . $column['restrictions'] . '" data-terms="' . $column['advertiserExtendedTerms'] . '" onclick="showDetails(this)">DETAILS</button>';
            $output['aaData'][] = $row;


        }
        return new Response( json_encode( $output ) );
    }


    /**
     * @Route("/offers/group-delete", name="deleteOfferGroupsOffers")
     */
    public function deleteOffersAction(){
        $data = json_decode($_POST['param'], true);
        $return = $this->forward('AppBundle:Deletes:deleteReports', array('data' => $data))->getContent();
        return new Response(
            $return
        );
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