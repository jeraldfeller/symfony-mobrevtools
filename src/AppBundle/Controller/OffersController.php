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
use AppBundle\Entity\OfferPresets;
use AppBundle\Entity\OfferUrlPresets;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

class OffersController extends Controller{

    /**
     * @Route("/tools/offers")
     */
    public function showOffersPageAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                $this->getOffersToFileAction();
                $countries = json_decode($this->forward('AppBundle:VoluumApi:voluumGetCountries', array())->getContent(), true);
                $networks = json_decode($this->forward('AppBundle:VoluumApi:voluumGetAffiliateNetworks', array())->getContent(), true);
                $presets = json_decode($this->getOfferUrlPresetsAction()->getContent(), true);

                return $this->render(
                    'offers/offers.html.twig', array(
                        'countries' => $countries,
                        'networks' => $networks,
                        'presets' => $presets
                    )
                );
            }else{
                return $this->redirect('/error');
            }

        }else{
            return $this->redirect('/user/login');
        }


    }


    /**
     * @Route("/tools/offers/flow")
     */
    public function showOffersFlowPageAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                $this->getOffersToFileFlowAction();
                return $this->render(
                    'offers/offers-flow.html.twig', array(
                        'page' => 'Flow'
                    )
                );
            }else{
                return $this->redirect('/error');
            }

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

        $success = array();
        $failed = array();
        $apiResponse = array();


        foreach($data as $row){

            $offerName = trim($row['offerName']);
            $offerURL = trim($row['offerURL']);
            $offerCountry = trim($row['offerCountry']);
            $affiliateNetwork = trim($row['affiliateNetwork']);
            $payout = trim((isset($row['payout']) ? $row['payout'] : ''));
                if($payout == '' || $payout == null){
                    if($offerCountry == 'Global' || $offerCountry == null){
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'affiliateNetwork' => array('id' => $affiliateNetwork),
                            'payout' => array(
                                'type' => 'AUTO'
                            )
                        );
                    }else{
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'country' => array('code' => $offerCountry),
                            'affiliateNetwork' => array('id' => $affiliateNetwork),
                            'payout' => array(
                                'type' => 'AUTO'
                            )
                        );
                    }

                }else{
                    if($offerCountry == '' || $offerCountry == null){
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'affiliateNetwork' => array('id' => $affiliateNetwork),
                            'overridePayout' => true,
                            'payout' => array(
                                'type' => 'MANUAL',
                                'value' => $payout
                            )
                        );
                    }else{
                        $query = array('namePostfix' => $offerName,
                            'url' =>  $offerURL,
                            'country' => array('code' => $offerCountry),
                            'affiliateNetwork' => array('id' => $affiliateNetwork),
                            'overridePayout' => true,
                            'payout' => array(
                                'type' => 'MANUAL',
                                'value' => $payout
                            )
                        );
                    }

                }


                //$url = 'https://core.voluum.com/offers';
                $url = 'https://api.voluum.com/offer';
                $apiResponse[] = json_decode($this->forward('AppBundle:VoluumApi:postVoluum', array('url' => $url,
                    'query' => $query,
                    'method' => 'POST',
                    'sessionId' => $voluumSessionId))->getContent(), true);
            
                if(!isset($apiResponse['error'])){
                    $success[] = $offerName;
                }else{
                    $failed = $offerName;
                }


        }

        $message = 'Offers Successfully Added';
        $error = FALSE;
        $data = array('success' => $success, 'failed' => $failed, 'apiResponse' => $apiResponse);
        $return = $this->makeResponse($error,$message, $data);

        return new Response($return);
    }

    /**
     * @Route("/tools/update-offer")
     */
    public function updateOffersAction(){

        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();

        $success = array();
        $failed = array();
        $apiResponse = array();

            $offerName = trim($data['offerName']);
            $offerURL = trim($data['offerURL']);
            $offerCountry = trim($data['offerCountry']);
            $affiliateNetwork = trim($data['affiliateNetwork']);
            $payout = trim((isset($data['payout']) ? $data['payout'] : ''));
            if($payout == '' || $payout == null){
                if($offerCountry == '' || $offerCountry == null){
                    $query = array('namePostfix' => $offerName,
                        'url' =>  $offerURL,
                        'affiliateNetwork' => array('id' => $affiliateNetwork),
                        'payout' => array('type' => 'AUTO')
                    );
                }else{
                    $query = array('namePostfix' => $offerName,
                        'url' =>  $offerURL,
                        'country' => array('code' => $offerCountry),
                        'affiliateNetwork' => array('id' => $affiliateNetwork),
                        'payout' => array('type' => 'AUTO')
                    );
                }

            }else{
                if($offerCountry == '' || $offerCountry == null){
                    $query = array('namePostfix' => $offerName,
                        'url' =>  $offerURL,
                        'affiliateNetwork' => array('id' => $affiliateNetwork),
                        'overridePayout' => true,
                        'payout' => array('type' => 'MANUAL', 'value' => $payout)
                    );
                }else{
                    $query = array('namePostfix' => $offerName,
                        'url' =>  $offerURL,
                        'country' => array('code' => $offerCountry),
                        'affiliateNetwork' => array('id' => $affiliateNetwork),
                        'overridePayout' => true,
                        'payout' => array('type' => 'MANUAL', 'value' => $payout)
                    );
                }

            }


            $url = 'https://api.voluum.com/offer/' . $data['offerId'];
            $apiResponse[] = json_decode($this->forward('AppBundle:VoluumApi:voluumPutOffer', array('url' => $url,
                'query' => $query,
                'method' => 'POST',
                'sessionId' => $voluumSessionId))->getContent(), true);

            if(!isset($apiResponse['error'])){
                $success[] = $offerName;
            }else{
                $failed = $offerName;
            }


        $message = 'Offers Successfully Updated';
        $error = FALSE;
        $data = array('success' => $success, 'failed' => $failed, 'apiResponse' => $apiResponse);
        $return = $this->makeResponse($error,$message, $data);

        $this->getOffersToFileAction();
        return new Response($return);
    }


    /**
     * @Route("/offer-search/offer-groups", name="offerGroups")
     */
    public function showGroupsAction()
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                return $this->render(
                    'offers/offer-groups.html.twig', array('page' => 'Offer Groups')
                );
            }else{
                return $this->render('/error');
            }

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
                                            <li><a href="/offer-search/group/' . $column['offerGroupId'] . '"><i class="fa fa-eye"></i> View Offers</a>
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
     * @Route("/offer-search", name="offerSearch")
     */
    public function showOfferSearchAction()
    {

        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:CakeOffersTmpTbl'))->getContent();
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                return $this->render(
                    'offers/offer-search.html.twig', array('page' => 'Offer Search',
                        'networks' => $this->getAffiliateNetworks(),
                        'groups' => $this->getOfferGroups())
                );
            }else{
                return $this->redirect('/error');
            }

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
                    if($row['campaign_id'] != null){
                        $offersAffiliate =  json_decode($this->forward('AppBundle:CakeApi:getCampaignAffiliate', array(
                            'affiliateId' => $network[$i]->getAffiliateId(),
                            'apiKey' => $network[$i]->getApiKey(),
                            'network' => $network[$i]->getApiUrl(),
                            'campaignId' => $row['campaign_id']
                        ))->getContent(), true);
                        $offerUrl = $offersAffiliate['d']['campaign']['creatives'][0]['unique_link'];
                    }else{
                        $offerUrl = null;
                    }



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
                                                $doctrine->setCampaignId($row['campaign_id']);
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
                                                $doctrine->setOfferUrl($offerUrl);
                                                $em->persist($doctrine);
                                            }
                                        }else{
                                            $doctrine = new CakeOffersTmpTbl();
                                            $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                            $doctrine->setCampaignId($row['campaign_id']);
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
                                            $doctrine->setOfferUrl($offerUrl);
                                            $em->persist($doctrine);
                                        }

                                    }

                                }


                            }else{
                                $doctrine = new CakeOffersTmpTbl();
                                $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                $doctrine->setCampaignId($row['campaign_id']);
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
                                $doctrine->setOfferUrl($offerUrl);
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
                                            $doctrine->setCampaignId($row['campaign_id']);
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
                                            $doctrine->setOfferUrl($offerUrl);
                                            $em->persist($doctrine);
                                        }
                                    }else{
                                        $doctrine = new CakeOffersTmpTbl();
                                        $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                                        $doctrine->setCampaignId($row['campaign_id']);
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
                                        $doctrine->setOfferUrl($offerUrl);
                                        $em->persist($doctrine);
                                    }

                                }

                            }


                        }else{
                            $doctrine = new CakeOffersTmpTbl();
                            $doctrine->setAffiliateNetworkId($network[$i]->getAffiliateNetworkId());
                            $doctrine->setCampaignId($row['campaign_id']);
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
                            $doctrine->setOfferUrl($offerUrl);
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
                if($row['campaign_id'] != null){
                    $offersAffiliate =  json_decode($this->forward('AppBundle:CakeApi:getCampaignAffiliate', array(
                        'affiliateId' => $network->getAffiliateId(),
                        'apiKey' => $network->getApiKey(),
                        'network' => $network->getApiUrl(),
                        'campaignId' => $row['campaign_id']
                    ))->getContent(), true);
                    $offerUrl = $offersAffiliate['d']['campaign']['creatives'][0]['unique_link'];
                }else{
                    $offerUrl = null;
                }
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
                                            $doctrine->setCampaignId($row['campaign_id']);
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
                                            $doctrine->setOfferUrl($offerUrl);
                                            $em->persist($doctrine);
                                        }
                                    }else{
                                        $doctrine = new CakeOffersTmpTbl();
                                        $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                                        $doctrine->setCampaignId($row['campaign_id']);
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
                                        $doctrine->setOfferUrl($offerUrl);
                                        $em->persist($doctrine);
                                    }

                                }

                            }


                        }else{
                            $doctrine = new CakeOffersTmpTbl();
                            $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                            $doctrine->setCampaignId($row['campaign_id']);
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
                            $doctrine->setOfferUrl($offerUrl);
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
                                        $doctrine->setCampaignId($row['campaign_id']);
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
                                        $doctrine->setOfferUrl($offerUrl);
                                        $em->persist($doctrine);
                                    }
                                }else{
                                    $doctrine = new CakeOffersTmpTbl();
                                    $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                                    $doctrine->setCampaignId($row['campaign_id']);
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
                                    $doctrine->setOfferUrl($offerUrl);
                                    $em->persist($doctrine);
                                }

                            }

                        }


                    }else{
                        $doctrine = new CakeOffersTmpTbl();
                        $doctrine->setAffiliateNetworkId($network->getAffiliateNetworkId());
                        $doctrine->setCampaignId($row['campaign_id']);
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
                        $doctrine->setOfferUrl($offerUrl);
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


                $offersAffiliate =  json_decode($this->forward('AppBundle:CakeApi:getCampaignAffiliate', array(
                    'affiliateId' => $network->getAffiliateId(),
                    'apiKey' => $network->getApiKey(),
                    'network' => $network->getApiUrl(),
                    'campaignId' => $offers['d']['campaign_id']
                ))->getContent(), true);

                $offerUrl = $offersAffiliate['d']['campaign']['creatives'][0]['unique_link'];

                $em = $this->getDoctrine()->getManager();
                $offer = $this->getDoctrine()
                    ->getRepository('AppBundle:OfferGroupsOffers')
                    ->find($data['items'][$x]['id']);

                $offer->setStatus('Active');
                $offer->setCampaignId($offers['d']['campaign_id']);
                $offer->setOfferUrl($offerUrl);

                $em->flush();

            }
        }

        return new Response(json_encode(true));

    }


    /**
     * @Route("/offers/refresh-offers", name="refreshOffers")
     */
    public function refreshOfferAction(){

        $data = json_decode($_POST['param'], true);
        $message = array();
        $groupEntity = $this->getDoctrine()
            ->getRepository('AppBundle:OfferGroups')
            ->find($data['groupId']);
        $em = $this->getDoctrine()->getManager();
        $offerEntity = $this->getDoctrine()
            ->getRepository('AppBundle:OfferGroupsOffers')
            ->findBy(array('offerGroup' => $groupEntity));
        $affiliates = array();
        for($x = 0; $x < count($offerEntity); $x++) {
            $affiliates[] = $offerEntity[$x]->getAffiliateNetworkId();
        }
        $affiliatesUnique = array_unique($affiliates);

        foreach($affiliatesUnique as $key => $value){
            $network = $this->getDoctrine()
                ->getRepository('AppBundle:AffiliateNetwork')
                ->find($value);


            $offers =  json_decode($this->forward('AppBundle:CakeApi:getOffers', array(
                'affiliateId' => $network->getAffiliateId(),
                'apiKey' => $network->getApiKey(),
                'network' => $network->getApiUrl()
            ))->getContent(), true);


            foreach($offers['d']['offers'] as $row){
                for($x = 0; $x < count($offerEntity); $x++){
                    if($offerEntity[$x]->getAffiliateNetworkId() == $value){
                        if($offerEntity[$x]->getOfferId() == $row['offer_id']){
                            if($offerEntity[$x]->getStatus() != $row['offer_status']['status_name']){
                                $offerEntity[$x]->setStatus($row['offer_status']['status_name']);
                                $em->flush();
                                $message[] = $offerEntity[$x]->getOfferName() . ' status changed to ' . $row['offer_status']['status_name'];
                            }
                        }
                    }
                }

            }
        }
        return new Response(json_encode($message));

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
            $offer->setCampaignId($cakeOffer->getCampaignId());
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
            $offer->setOfferUrl($cakeOffer->getOfferUrl());
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


        if($input['iDisplayLength'] == '-1'){
            $sQuery = $em->createQuery("
            SELECT $aQueryColumns
            FROM $sTable t $sWhere GROUP BY t.offerId $sOrder")
            ;
            $rResult = $sQuery->getResult();


            $sQuery = $em->createQuery("
            SELECT t
            FROM $sTable t $sWhere GROUP BY t.offerId $sOrder")
            ;

        }else{
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
        }

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
            $row[] = '<button class="btn btn-info btn-md" data-description="' . $column['description'] . '" data-restrictions="' . $column['restrictions'] . '" data-terms="' . $column['advertiserExtendedTerms'] . '" onclick="showDetails(this)"><i class="fa fa-eye"></i> DETAILS</button>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }



    /**
     * @Route("/offer-search/group/{id}", name="offersGroupsOffers")
     */
    public function showManageOffersGroupAction($id = null)
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $group = $this->getDoctrine()->getRepository('AppBundle:OfferGroups')->findOneBy(array('offerGroupId' => $id));
            return $this->render(
                'offers/offer-groups-offer.html.twig', array('page' => 'Offer Groups',
                    'networks' => json_decode($this->forward('AppBundle:VoluumApi:voluumGetAffiliateNetworks', array())->getContent(), true),
                    'presets' => json_decode($this->getOfferUrlPresetsAction()->getContent(), true),
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
        $aColumns = array( 'og.ogoid', 'og.offerId', 'og.offerName', 'og.networkName', 'og.verticalName', 'og.payout', 'og.priceFormat', 'og.status', 'og.description', 'og.restrictions', 'og.advertiserExtendedTerms');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'og.ogoid';

        // DB table to use
        $sTable = 'AppBundle:OfferGroupsOffer';

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
        }else{
            if(isset($input['hidden'])){

                $aFilteringRules[] = "og.hidden = " . $input['hidden'];

                if (!empty($aFilteringRules)) {
                    $aFilteringRules = array('('.implode(" AND ", $aFilteringRules).')');
                }
            }
        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules) . " AND og.offerGroup = $groupId AND og.status != 'Hidden'";
        } else {
            $sWhere = "WHERE og.offerGroup =  $groupId AND og.status != 'Hidden'";
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
        SELECT og.ogoid, og.affiliateNetworkId, og.offerId, og.offerContractId, og.offerName, og.networkName, og.verticalName, og.payout, og.priceFormat, og.description, og.restrictions, og.advertiserExtendedTerms, og.status, og.offerUrl, og.campaignId
        FROM $offerGroupsOffersBundle og, $offerGroupBundle o $sWhere GROUP BY og.offerId $sOrder")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();

        $sQuery = $em->createQuery("
        SELECT og
        FROM $offerGroupsOffersBundle og $sWhere GROUP BY og.offerId $sOrder")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
       SELECT og
        FROM $offerGroupsOffersBundle og $sWhere GROUP BY og.offerId $sOrder");

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
            if($column['campaignId'] == null){
                $disableViewUrl = 'disabled';
            }else{
                $disableViewUrl = '';
            }
            $row = array();
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records"
                                data-id="' . $column['ogoid'] . '"
                                data-offer-name="' . $column['offerId'] . ' - '  . $column['offerName'] . '"
                                data-offer-url="'. str_replace('&s1=', '', $column['offerUrl']) . '"
                                data-network-name="' . strtolower($column['networkName']) . '"
                                data-offer-contract-id="' . $column['offerContractId'] . '"
                                data-affiliate-network-id="' . $column['affiliateNetworkId'] . '"/>
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
            $row[] = '<button ' . $disableViewUrl . ' onclick="hideTooltip(this)" class="btn btn-info btn-md clipboardBtn" data-clipboard-text="' . $column['offerUrl'] . '"><i class="fa fa-link"></i> Copy URL</button>
                        <button class="btn btn-info btn-md" data-description="' . $column['description'] . '" data-restrictions="' . $column['restrictions'] . '" data-terms="' . $column['advertiserExtendedTerms'] . '" onclick="showDetails(this)"><i class="fa fa-eye"></i> DETAILS</button>
                    ';
            $output['aaData'][] = $row;


        }
        return new Response( json_encode( $output ) );
    }


    /**
     * @Route("/offers/group-show-hide-offers", name="showHideOfferGroupsOffers")
     */
    public function showHideOffersAction(){
        $data = json_decode($_POST['param'], true);
        foreach($data['items'] as $row){
            $em = $this->getDoctrine()->getManager();
            $offer = $this->getDoctrine()
                ->getRepository('AppBundle:OfferGroupsOffers')
                ->find($row['id']);
            $offer->setHidden($data['hidden']);
            $em->flush();
        }
        return new Response(
            json_encode(true)
        );
    }


    /**
     * @Route("/offers/group-delete", name="deleteOfferGroupsOffers")
     */
    public function deleteOffersAction(){
        $data = json_decode($_POST['param'], true);
        foreach($data['items'] as $row){
            $em = $this->getDoctrine()->getManager();
            $offer = $this->getDoctrine()
                ->getRepository($data['bundle'])
                ->find($row['id']);
            $offer->setStatus('Hidden');
            $em->flush();
        }
        return new Response(
            json_encode(true)
        );
    }



    /**
     * @Route("/offer-search/offer-preset-searches", name="offerPresetSearch")
     */
    public function showOfferPresetAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                return $this->render(
                    'offers/offer-preset-searches.html.twig', array('page' => 'Offer Preset Search',
                        'groups' => $this->getOfferGroups())
                );
            }else{
                return $this->redirect('/error');
            }

        }else{
            return $this->redirect('/user/login');
        }


    }

    /**
     * @Route("/offers/add-preset", name="addOfferPreset")
     */
    public function addPresetAction()
    {
        $data = json_decode($_POST['param'], true);

        $isExists = $this->getDoctrine()
            ->getRepository('AppBundle:OfferPresets')
            ->findOneBy(array('presetName' => $data['presetName']));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'Preset already exists'
            );
        }else{


            $offerGroupEntity = $this->getDoctrine()
                ->getRepository('AppBundle:OfferGroups')
                ->findOneBy(array('offerGroupId' => $data['groupId']));
            $em = $this->getDoctrine()->getManager();
            $preset = new OfferPresets();
            $preset->setPresetName($data['presetName']);
            $preset->setOfferGroup($offerGroupEntity);
            $preset->setKeywords($data['presetKeyword']);

            $em->persist($preset);
            $em->flush();

            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Preset Successfully Added'
            );
        }


        return new Response(
            json_encode($return)
        );
    }



    /**
     * @Route("/offers/edit-preset", name="editOfferPreset")
     */
    public function editPresetAction()
    {
        $data = json_decode($_POST['param'], true);
            $offerGroupEntity = $this->getDoctrine()
                ->getRepository('AppBundle:OfferGroups')
                ->findOneBy(array('offerGroupId' => $data['groupId']));
            $em = $this->getDoctrine()->getManager();
            $preset = $this->getDoctrine()->getRepository('AppBundle:OfferPresets')->find($data['presetId']);
            $preset->setPresetName($data['presetName']);
            $preset->setOfferGroup($offerGroupEntity);
            $preset->setKeywords($data['presetKeyword']);
            $em->flush();

            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Preset Successfully Updated'
            );



        return new Response(
            json_encode($return)
        );
    }



    /**
     * @Route("/offers/delete-preset", name="deleteOfferPreset")
     */
    public function deletePresetAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $preset = $em->getRepository('AppBundle:OfferPresets')->find($_POST['param']);
        $em->remove($preset);
        $em->flush();
        $return = array(
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Preset Successfully Deleted'
        );



        return new Response(
            json_encode($return)
        );
    }




    /**
     * @Route("/ajax/offer/presets")
     */

    public function getPresetsAction(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.offerPresetsId', 'o.offerGroupName', 'p.presetName', 'p.keywords');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.offerPresetsId';

        // DB table to use
        $sTable = 'AppBundle:OfferPresets';

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
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules) . " p.offerGroup = o.offerGroupId";
        } else {
            $sWhere = "WHERE p.offerGroup = o.offerGroupId";
            $sWhereCount = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);

        $offerPresets = 'AppBundle:OfferPresets';
        $offerGroup = 'AppBundle:OfferGroups';

        $sQuery = $em->createQuery("
        SELECT p.offerPresetsId, o.offerGroupName, o.offerGroupId,  p.presetName, p.keywords
        FROM $offerPresets p, $offerGroup o $sWhere $sOrder")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($rResult);

        $sQuery = $em->createQuery("
        SELECT p
        FROM $offerPresets p $sWhereCount $sOrder");

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
            $keywords = explode(',', $column['keywords']);
            $keyword = '';
            for($x = 0; $x < count($keywords); $x++){
                $keyword .= '<span class="label label-info">' . $keywords[$x] . '</span> ';
            }
            $row = array();
            $row[] = $column['presetName'];
            $row[] = $column['offerGroupName'];
            $row[] = $keyword;
            $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditPreset"  data-action="edit" data-id="' . $column['offerPresetsId'] . '" data-name="' . $column['presetName'] . '" data-offer-group="' . $column['offerGroupId'] . '" data-keywords="' . $column['keywords'] . '" onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeletePreset" data-action="delete" data-id="' . $column['offerPresetsId'] . '" data-name="' . $column['presetName'] . '"  onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
            $output['aaData'][] = $row;


        }
        return new Response( json_encode( $output ) );
    }




    /**
     * @Route("/tools/offer-url-presets")
     */
    public function showPresetsSettings(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn) {
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if ($pageReturn == 'true') {
                return $this->render(
                    'settings/offer-url-presets.html.twig', array('page' => 'Offer Url Presets')
                );
            }else{
                return $this->redirect('/error');
            }
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/ajax/get-offer-url-presets")
     */
    public function ajaxGetPresets(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.presetId', 't.presetName', 't.parameters' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:OfferUrlPresets';

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
            $row[] = $column['presetName'];
            $row[] = $column['parameters'];
            $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditPreset"  data-action="edit" data-id="' . $column['presetId'] . '" data-name="' . $column['presetName'] . '" data-parameters="' . $column['parameters'] .'" onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeletePreset" data-action="delete" data-id="' . $column['presetId'] . '" data-name="' . $column['presetName'] . '" data-parameters="' . $column['parameters'] .'" onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }


    /**
     * @Route("/tools/settings/add-offer-url-presets", name="addOfferUrlPresetsActions")
     */
    public function addPresetsAction(){
        $data = json_decode($_POST['param'], true);
        $isPresetExists = $this->getDoctrine()
            ->getRepository('AppBundle:OfferUrlPresets')
            ->findOneBy(array('presetName' => $data['presetName']));
        if(!$isPresetExists){
            $doctrine = new OfferUrlPresets();
            $doctrine->setPresetName($data['presetName']);
            $doctrine->setParameters($data['parameters']);
            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Users (no quesries yet)
            $em->persist($doctrine);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            $return = true;
        }else{
            $return = false;
        }


        return new Response(
            json_encode($return)
        );

    }

    /**
     * @Route("tools/settings/get-offer-url-presets", name="getOfferUrlPresets")
     */
    public function getOfferUrlPresetsAction(){
        $presets = $this->getDoctrine()
            ->getRepository('AppBundle:OfferUrlPresets')
            ->findBy(array(), array('presetName' => 'asc'));

        $data = array();
        for($i = 0; $i < count($presets); $i++){
            $data[] = array(
                'presetId' => $presets[$i]->getPresetId(),
                'presetName' => $presets[$i]->getPresetName(),
                'presets' => $presets[$i]->getParameters()
            );
        }


        return new Response(
            json_encode($data)
        );

    }

    /**
     * @Route("tools/settings/edit-offer-url-presets", name="updateOfferUrlPresets")
     */
    public function presetEditAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $doctrine = $em->getRepository('AppBundle:OfferUrlPresets')->findOneByPresetId($data['presetId']);
        $doctrine->setPresetName($data['presetName']);
        $doctrine->setParameters($data['parameters']);
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }


    /**
     * @Route("tools/settings/delete-offer-url-presets", name="deleteOfferUrlPresets")
     */
    public function presetDeleteAction(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();
        $doctrine = $em->getRepository('AppBundle:OfferUrlPresets')->find($data);
        $em->remove($doctrine);
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }


    public function getOffersToFileAction(){


        $this->clearTmpFilesAction();

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $query = array();
        $url = 'https://api.voluum.com/offer?';
        $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);

        $url = 'https://api.voluum.com/affiliate-network?';
        $affiliateNetworkResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);






        foreach($apiResponse['offers'] as $row){

            if(!isset($row['country'])){
                $country = 'Global';
            }else{
                $country = $row['country']['name'];
            }

            if(isset($row['affiliateNetwork'])){
                foreach($affiliateNetworkResponse['affiliateNetworks'] as $an){
                    if($an['id'] == $row['affiliateNetwork']['id']){
                        $affiliateNetworkName = $an['name'];
                    }
                }
            }else{
                $affiliateNetworkName = "";
            }

            $data['data'][] = array(
                $row['name'],
                $row['url'],
                $country,
                "$".number_format(($row['payout']['type'] == 'MANUAL' ? $row['payout']['value'] : 0.00), 2),
                $affiliateNetworkName,
                '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"
                                                data-action="edit"
                                                data-id="' . $row['id'] . '"
                                                onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeleteGroup" data-action="delete"
                                                data-action="delete"
                                                data-id="' . $row['id'] . '"
                                                onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>'
            );

        }

        file_put_contents("data_table_tmp_files/offers/offers.txt", json_encode($data, JSON_UNESCAPED_UNICODE));


    }


    public function getOffersToFileFlowAction(){


        $this->clearTmpFilesAction();

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $query = array();
        $url = 'https://api.voluum.com/offer';
        $apiResponse = $this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent();


     

        foreach($apiResponse['offers'] as $row){

            if(!isset($row['country'])){
                $country = 'Global';
            }else{
                $country = $row['country']['name'];
            }

            $data['data'][] = array(
                '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $row['id'] . '"  />
                             <span></span>
                           
                        </label>',
                $row['name'],
                $country
            );

        }

        file_put_contents("data_table_tmp_files/offers/offers-flow.txt", json_encode($data, JSON_UNESCAPED_UNICODE));


    }


    /**
     * @Route("tools/offers/get-flow")
     */
    public function getFlowAction(){

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $from = date('Y-m-d');
        $to = date('Y-m-d', strtotime('+1 days'));

        $url = 'https://api.voluum.com/flow';
        /*
        $query = array(
            'from' => $from.'T00:00:00Z',
            'to' => $to.'T00:00:00Z',
            'tz' => 'America/Chicago',
            'sort' => 'visits',
            'direction' => 'desc',
            'columns' => 'flowName',
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
            'groupBy' => 'flow',
            'offset' => 0,
            'limit' => 1000,
            'include' => 'ACTIVE',
            'conversionTimeMode' => 'VISIT',
        );
        */
        $query = array();


        $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);


        $options = array();

        foreach($apiResponse['flows'] as $row){


                $rules = array();
                foreach($row['conditionalPathsGroups'] as $rule){
                    $rules[] = $rule['id'].'|'.$rule['name'];
                }
                $options[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'rules' => implode(',', $rules)
                );

        }


        return new Response(
            json_encode($options)
        );


    }


    /**
     * @Route("tools/offers/get-flow-to-update")
     */
    public function getFlowToUpdateAction(){
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $data = json_decode($_POST['param'], true);
        $url = 'https://api.voluum.com/flow/'.$data['flowId'];
        $query = array();
        $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);

        foreach($apiResponse['conditionalPathsGroups'] as $index => $row){
            if($row['id'] == $data['ruleId']){
                $indexKey = $index;
            }
        }

        for($x = 0; $x < count($data['offers']); $x++){
            $apiResponse['conditionalPathsGroups'][$indexKey]['paths'][0]['offers'][] = array(
                'weight' => 100,
                'offer' => array(
                    'id' => $data['offers'][$x]
                )
            );
        }


        $postReponse = json_decode($this->forward('AppBundle:VoluumApi:putVoluum', array('url' => $url,
            'query' => $apiResponse,
            'method' => 'PUT',
            'sessionId' => $voluumSessionId))->getContent(), true);


        if(isset($postReponse['id'])){
            $success = true;
            $message = 'Offers Successfully Added';
        }else{
            $success = false;
            $message = $postReponse['error']['messages'];
        }
        return new Response(
            json_encode(
                array(
                    'success' => $success,
                    'message' => $message
                )
            )
        );
    }



    /**
     * @Route("tools/offers/get-flow/rules")
     */
    public function getFlowRulesAction(){

        $flowId = $_POST['param'];
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $from = date('Y-m-d');
        $to = date('Y-m-d', strtotime('+1 days'));

        $url = 'https://api.voluum.com/report?';
        $query = array(
            'from' => $from.'T00:00:00Z',
            'to' => $to.'T00:00:00Z',
            'tz' => 'America/Chicago',
            'sort' => 'visits',
            'direction' => 'desc',
            'columns' => 'flowName',
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
            'groupBy' => 'flow',
            'offset' => 0,
            'limit' => 1000,
            'include' => 'ACTIVE',
            'conversionTimeMode' => 'VISIT',
        );

        $url = 'https://core.voluum.com/flows/'.$flowId;

        $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);


        var_dump($apiResponse);
        return new Response(
            json_encode(true)
        );


    }




    public function clearTmpFilesAction(){


        $dir = 'data_table_tmp_files/offers';
        foreach(glob("{$dir}/*") as $file)
        {
            unlink($file);
        }

        return new Response(json_encode(true));

    }


    /**
     * @Route("/tools/get-edit-offer")
     */
    public function editOfferAction(){

        $data = $_POST['param'];
        $presets = json_decode($this->getOfferUrlPresetsAction()->getContent(), true);
        $countries = json_decode($this->forward('AppBundle:VoluumApi:voluumGetCountries', array())->getContent(), true);
        $networks = json_decode($this->forward('AppBundle:VoluumApi:voluumGetAffiliateNetworks', array())->getContent(), true);
        $offer = json_decode($this->forward('AppBundle:VoluumApi:voluumGetOffer', array('offerId' => $data))->getContent(), true);
        $fullUrl = explode('?', $offer['url']);

            $url = $fullUrl[0];
            if(isset($fullUrl[1])){
                $presetsParameter = explode('&', $fullUrl[1]);
                $presetArray = array();
                for($x = 0; $x < count($presetsParameter); $x++){
                    $trimPreset = substr($presetsParameter[$x], 0, strpos($presetsParameter[$x], "="));
                    $presetArray[] = $trimPreset . '={' . $trimPreset . '}';
                }

                $preset = implode('&', $presetArray);
            }else{
                $url = $offer['url'];
                $preset = '';
            }





        $return = array(
            'countries' => $countries,
            'presets' => $presets,
            'offer' => $offer,
            'url' => $url,
            'preset' => '?'.$preset,
            'networks' => $networks
        );
        return new Response(json_encode($return));
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