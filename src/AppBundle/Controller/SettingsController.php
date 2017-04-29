<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 1/11/2017
 * Time: 10:13 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\ApiAccess;
use AppBundle\Entity\SettingsPresets;
use AppBundle\Entity\AffiliateNetwork;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;


class SettingsController extends Controller {

    /**
     * @Route("/global-settings/api-access")
     */
    public function showApiAccessCredentials(){

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'settings/api-access.html.twig', array('page' => 'Api Access')
            );
        }else{
            return $this->redirect('/user/login');
        }

    }

    /**
     * @Route("/global-settings/update-access-action")
     */
    public function updateAccessAction(){
        $data = explode('|' ,$_POST['param']);
        $tid = $data[0];
        $traffic = $data[1];
        $username = $data[2];
        $password = $data[3];
        $dataArray = json_decode($data[4], true);

        $em = $this->getDoctrine()->getManager();
        $access = $em->getRepository('AppBundle:ApiAccess')->findOneByTid($tid);

        if(!$access){
            throw $this->createNotFoundException(
                'No API found for id ' . $tid
            );
            $success = false;
        }else{
            $success = true;
        }

        $access->setUsername($username);
        $access->setPassword($password);
        $em->flush();

        return new Response(
            json_encode(
                array(
                    'success' => $success,
                    'trafficSource' => $traffic
                )
            )
        );


    }

    /**
     * @Route("/global-settings/traffic-source")
     */
    public function showTrafficSourceSettings(){
        return $this->render(
            'settings/traffic-source.html.twig', array('page' => 'Traffic Source')
        );
    }




    /**
     * @Route("/ajax/get-traffic-source")
     */
    public function ajaxGetTrafficSource(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.id', 't.trafficName', 't.trafficSourceId' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:TrafficSource';

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
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules). "AND t.trafficName != 'Voluum'";
        } else {
            $sWhere = "WHERE t.trafficName != 'Voluum'";
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
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['id'] . '" />
                             <span></span>
                        </label>
                      </td>';
            $row[] = $column['trafficName'];
            $row[] = $column['trafficSourceId'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }

    /**
     * @Route("/global-settings/traffic-delete-action")
     */

    public function trafficDeleteAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        foreach($data['items'] as $row){
            $traffic = $em->getRepository('AppBundle:TrafficSource')->find($row['id']);
            $em->remove($traffic);
        }
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }

    /**
     * @Route("/global-settings/traffic-get-action")
     */
    public function getTrafficAction(){
       $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);

       $voluumSessionId = $apiCredentials[0]['voluum'];
       $from = date('Y-m-d', strtotime('-1 days'));
       $to = date('Y-m-d', strtotime('+1 days'));
       $tz = 'America/Chicago';
       $sort = 'visit';
       $direction = 'desc';
       $limit = 200;
       $query = array('from' => $from,
           'to' => $to,
           'tz' => $tz,
           'sort' => $sort,
           'direction' => $direction,
           'columns' => 'trafficSourceName',
           'columns' => 'trafficSourceId',
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
           'columns' => 'errors',
           'groupBy' => 'traffic-source',
           'offset' => 0,
           'limit' => $limit,
           'include' => 'traffic',
       );
        $url = 'https://portal.voluum.com/report?';

       $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
           'query' => $query,
           'method' => 'GET',
           'sessionId' => $voluumSessionId))->getContent(), true);
       $trafficSources = $this->getTrafficSourceAll();

       $trafficExists = array();
       for($x = 0; $x < count($trafficSources); $x++){
           $trafficExists[] = $trafficSources[$x]['trafficSourceId'];
       }


       $output = '';
       $noExists = array();
       if(!isset($apiResponse['errors'])){
           foreach($apiResponse['rows'] as $details){
               if(!in_array($details['trafficSourceId'], $trafficExists )){
                   $output .= '<tr>';
                   $output .= '<td>';
                   $output .= '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">';
                   $output .= '<input type="checkbox" class="checkboxes traffic-record" value="1" name="table_records" data-trafficId="'. $details['trafficSourceId'] . '" data-trafficName="' . $details['trafficSourceName'] . '" />';
                   $output .= '<span></span>';
                   $output .= '</label>';
                   $output .= '</td>';
                   $output .= '<td>' . $details['trafficSourceName'] . '</td>';
                   $output .= '<td>' . $details['trafficSourceId'] . '</td>';
                   $output .= '</tr>';
                   $disable = '';
                   $noExists[] = 1;
               }
           }
       }


       if(count($noExists) == 0){
           $output .= '<tr>';
           $output .='<td colspan="3">No Traffic Source Available</td>';
           $output .='</tr>';
           $disable = 'disabled';
       }

        return new Response(
           $output
        );


    }

    /**
     * @Route("/global-settings/add-trafficsource")
     */
    public function importTrafficsourceAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        foreach($data['items'] as $row) {
            $traffic = new TrafficSource();
            $traffic->setTrafficName($row['trafficSourceName']);
            $traffic->setTrafficSourceId($row['trafficSourceId']);
            $em->persist($traffic);
            $em->flush();


            $lastId = $traffic->getId();
            /*
           $trafficSource = $traffic->getTrafficName();
           $trafficSourceEntity = $this->getDoctrine()
               ->getRepository('AppBundle:TrafficSource')
               ->find($lastId);

               $apiAccess = new ApiAccess();
               $apiAccess->setTid($trafficSourceEntity);
               $apiAccess->setTrafficSource($trafficSource);
               $apiAccess->setUserName('youremail@dummy.com');
               $apiAccess->setPassword('12345');
               $em->persist($apiAccess);
               $em->flush();

           */

        }

        $em->clear();


        return new Response(json_encode($lastId));
    }


    public function getApiAccessCredentialsAction(){

        $trafficSources = $this->getTrafficSourceAll();


        $data = array();

        for($x = 0; $x < count($trafficSources); $x++){
            if($trafficSources[$x]['trafficName'] == 'Voluum' || $trafficSources[$x]['trafficName'] == 'Zeropark' || $trafficSources[$x]['trafficName'] == 'ExoClick'){
                $apiCredentials = $this->getApiAccessCredentialsById($trafficSources[$x]['id']);
                $data[] = $apiCredentials;
            }
        }

        return $this->render(
            'settings/api_access_list.html.twig', array('data' => $data)
        );

    }

    /**
     * @Route("/settings/get-api-access-by-traffic/{$traffic}", name="getApiAccessByTraffic")
     */
    public function getApiAccessByTrafficAction($traffic = null){

        $trafficSource = $this->getDoctrine()
            ->getRepository('AppBundle:ApiAccess')
            ->findOneBy(array('trafficSource' => $traffic));

        $return = array('id' => $trafficSource->getId(),
            'tid' => $trafficSource->getTid(),
            'trafficSource' => $trafficSource->getTrafficSource(),
            'userName' => $trafficSource->getUserName(),
            'password' => $trafficSource->getPassword()
        );

        return new Response(
            json_encode($return)
        );
    }

    public function getTrafficSourceAll(){

        $trafficSources = $this->getDoctrine()
            ->getRepository('AppBundle:TrafficSource')
            ->findAll();

        $data = array();
        for($x = 0; $x < count($trafficSources); $x++){
            $data[] =array('id' => $trafficSources[$x]->getId(),
                'trafficSourceId' => $trafficSources[$x]->getTrafficSourceId(),
                'trafficName' => $trafficSources[$x]->getTrafficName()
            );
        }
        return $data;

    }

    public function getApiAccessCredentialsById($id){
        $api = $this->getDoctrine()
            ->getRepository('AppBundle:ApiAccess')
            ->findByTid($id);


        return array('id' => $api[0]->getId(),
            'tid' => $api[0]->getTid(),
            'trafficSource' => $api[0]->getTrafficSource(),
            'username' => $api[0]->getUsername(),
            'password' => $api[0]->getPassword());

    }


    /**
     * @Route("/settings/presets-rules")
     */
    public function presetsRulesAction(){

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'settings/presets-rules.html.twig', array('page' => 'Presets Rules')
            );
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/tools/lander-presets")
     */
    public function showPresetsSettings(){
        return $this->render(
            'settings/presets.html.twig', array('page' => 'Lander Presets')
        );
    }


    /**
     * @Route("/ajax/get-presets")
     */
    public function ajaxGetPresets(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.presetId', 't.presetName', 't.parameters' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:SettingsPresets';

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
     * @Route("/tools/settings/add-presets", name="addPresetsActions")
     */
    public function addPresetsAction(){
        $data = json_decode($_POST['param'], true);
        $isPresetExists = $this->getDoctrine()
            ->getRepository('AppBundle:SettingsPresets')
            ->findOneBy(array('presetName' => $data['presetName']));
        if(!$isPresetExists){
            $doctrine = new SettingsPresets();
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
     * @Route("tools/settings/get-presets", name="getPresets")
     */
    public function getPresetsAction(){
        $presets = $this->getDoctrine()
            ->getRepository('AppBundle:SettingsPresets')
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
     * @Route("tools/settings/edit-presets", name="updatePresets")
     */
    public function presetEditAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $doctrine = $em->getRepository('AppBundle:SettingsPresets')->findOneByPresetId($data['presetId']);
        $doctrine->setPresetName($data['presetName']);
        $doctrine->setParameters($data['parameters']);
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }


    /**
     * @Route("tools/settings/delete-presets", name="deletePresets")
     */
    public function presetDeleteAction(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();
        $doctrine = $em->getRepository('AppBundle:SettingsPresets')->find($data);
        $em->remove($doctrine);
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }


    /**
     * @Route("/global-settings/affiliate")
     */
    public function showAffiliateAction(){

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'settings/affiliate.html.twig', array('page' => 'Affiliate Network')
            );
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/settings/add-network", name="addNetworkAction")
     */
    public function addNetworkAction(){
        $data = json_decode($_POST['param'], true);
        $istExists = $this->getDoctrine()
            ->getRepository('AppBundle:AffiliateNetwork')
            ->findOneBy(array('networkName' => $data['networkName']));
        if(!$istExists){
            $doctrine = new AffiliateNetwork();
            $doctrine->setNetworkName($data['networkName']);
            $doctrine->setApiUrl($data['apiUrl']);
            $doctrine->setApiKey($data['apiKey']);
            $doctrine->setAffiliateId($data['affiliateId']);
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
     * @Route("settings/edit-network", name="editNetwork")
     */
    public function editNetworkAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $doctrine = $em->getRepository('AppBundle:AffiliateNetwork')->findOneByAffiliateNetworkId($data['id']);
        $doctrine->setNetworkName($data['networkName']);
        $doctrine->setApiUrl($data['apiUrl']);
        $doctrine->setApiKey($data['apiKey']);
        $doctrine->setAffiliateId($data['affiliateId']);
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }


    /**
     * @Route("settings/delete-network", name="deleteNetwork")
     */
    public function deleteNetworkAction(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();
        $doctrine = $em->getRepository('AppBundle:AffiliateNetwork')->find($data);
        $em->remove($doctrine);
        $em->flush();

        return new Response(
            json_encode(true)
        );


    }




    /**
     * @Route("/ajax/get-affiliate-network")
     */
    public function ajaxGetNetwork(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.affiliateNetworkId', 't.networkName', 't.apiUrl', 't.apiKey', 't.affiliateId' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:AffiliateNetwork';

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
            $row[] = $column['networkName'];
            $row[] = $column['affiliateId'];
            $row[] = $column['apiUrl'];
            $row[] = $column['apiKey'];
            $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditNetwork"  data-action="edit" data-id="' . $column['affiliateNetworkId'] . '" data-name="' . $column['networkName'] . '" data-affiliate-id="' . $column['affiliateId'] .'" data-api-key="' . $column['apiKey'] . '" onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeleteNetwork" data-action="delete" data-id="' . $column['affiliateNetworkId'] . '" data-name="' . $column['networkName'] . '"  onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }
}