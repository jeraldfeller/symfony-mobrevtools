<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/9/2017
 * Time: 10:36 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\TrafficMonitoringCampaignSettings;
use AppBundle\Entity\TrafficMonitoringCampaignGlobalSettings;
use AppBundle\Entity\ReportsTrafficMonitoring;

class TrafficMonitoringController extends Controller{

    /**
     * @Route("monitoring/traffic")
     */
    public function showIpReportAction(){

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){

            $globalSettings = $this->getGlobalSettings();
            $trafficSources = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
                'column' => 'trafficSourceName'))->getContent(), true);
            $campaigns = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
                'column' => 'campaignName'))->getContent(), true);
            $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
                'column' => 'geo'))->getContent(), true);
            $placements = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
                'column' => 'placement'))->getContent(), true);

            $filters = array('trafficSource' => $trafficSources,
                'campaigns' => $campaigns,
                'geos' => $geos,
                'placements' => $placements
            );
            return $this->render(
                'reports/trafficmonitoring.html.twig', array('page' => 'Traffic', 'filters' => $filters, 'globalSettings' => $globalSettings)
            );
        }else{
            return $this->redirect('/user/login');
        }
    }

    function getGlobalSettings(){
        $em =$em = $this->getDoctrine()->getManager();
        $settings = $em->getRepository('AppBundle:TrafficMonitoringCampaignSettingsGlobal')->find(1);
        return $settings->getIsActive();
    }

    /**
     * @Route("reports/get-traffic-source-monitoring-reports-filter")
     */
    public function getTrafficMonitoringReportsFiltersAction(){

        $trafficSources = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
            'column' => 'trafficSourceName'))->getContent(), true);
        $campaigns = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
            'column' => 'campaignName'))->getContent(), true);
        $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
            'column' => 'geo'))->getContent(), true);
        $placements = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsTrafficMonitoring',
            'column' => 'placement'))->getContent(), true);

        $filters = array('trafficSource' => $trafficSources,
            'campaigns' => $campaigns,
            'geos' => $geos,
            'placements' => $placements
        );
       return new Response(
           json_encode($filters)
       );
    }

    /**
     * @Route("ajax/get-reports-traffic-monitoring")
     */

    public function ajaxGetReportsTrafficMonitoring(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.trafficSourceName', 'p.campaignName', 'p.campaignId', 'p.placement', 'p.geo', 'p.timeStampVisit', 'p.lastHourVisitValue', 'p.currentHourVisitValue', 'p.visitDifferencePercentage', 'p.status', 'p.isDisabledNotification');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:ReportsTrafficMonitoring';

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
            // custom filter

            if(isset($input['traffic']) || isset($input['geo']) || isset($input['mobileCarrier']))            {
                $aFilteringRules = array();
                if($input['traffic'] != '' || $input['traffic'] != null){

                    $aFilteringRules[] = "p.trafficSourceName LIKE '%".$input['traffic'] ."%'";
                }

                if($input['geo'] != '' || $input['geo'] != null){
                    $aFilteringRules[] = "p.geo LIKE '%". $input['geo'] ."%'";
                }

                if($input['placement'] != '' || $input['placement'] != null){
                    $aFilteringRules[] = "p.placement LIKE '%". $input['placement'] ."%'";
                }

                if($input['campaign'] != '' || $input['campaign'] != null){
                    if (!empty($aFilteringRules)) {
                        $aFilteringRules = array('('.implode(" AND ", $aFilteringRules).')');

                        $aFilteringRules[] = "p.campaignName LIKE '%". $input['campaign'] ."%'";
                    }
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
        FROM ".$sTable." p ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
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
            if($column['isDisabledNotification'] == true){
                $isChecked = 'checked';
            }else{
                $isChecked = '';
            }
            $timeStamp = (array)$column['timeStampVisit'];
            $row = array();
            $row[] = $column['id'];
            $row[] = $column['trafficSourceName'];
            $row[] = $column['campaignName'];
            $row[] = $column['campaignId'];
            $row[] = $column['placement'];
            $row[] = $column['geo'];
            $row[] = date('m/d/Y H:00:00', strtotime($timeStamp['date']));
            $row[] = $column['lastHourVisitValue'];
            $row[] = $column['currentHourVisitValue'];
            $row[] = $column['visitDifferencePercentage'] . '%';
            $row[] = $column['status'];
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline text-center">
                           <input type="checkbox" class="checkboxes notificationCampaignRecord" value="1" name="table_records" data-id="' . $column['id'] . '" ' . $isChecked . ' />
                             <span></span>
                        </label>
                      </td>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }

    /**
     * @Route("/monitoring/get-campaign-traffic-settings")
     */
    public function getCampaignTrafficSettingsAction(){
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $from = date('Y-m-d', strtotime('-3 days')) . 'T00:00:00Z';
        $to = date('Y-m-d', strtotime('+1 days')) . 'T00:00:00Z';
        $tz = 'America/Chicago';
        $sort = 'campaignName';
        $direction = 'asc';
        $limit = 1000;
        $include = 'traffic';
        $url = 'https://portal.voluum.com/report?';
        $query = array('from' => $from,
            'to' => $to,
            'tz' => $tz,
            'sort' => $sort,
            'direction' => $direction,
            'columns' => 'campaignName',
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
            'columns' => 'trafficSourceName',
            'groupBy' => 'campaign',
            'offset' => 0,
            'limit' => $limit,
            'include' => $include,
        );

        $activeCampaigns = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);

        $values = array();
        $defaultCount = 100;
        if (!isset($activeCampaigns['error'])) {
            foreach ($activeCampaigns['rows'] as $row) {
                if($row['visits'] > 1){
                    $isExist =  $this->getCampaignTrafficSettingsByCampid($row['campaignId']);
                    if(count($isExist) == 1){
                        $this->updateCampaignTrafficSettingsByCampid($row['campaignId'], $row['campaignName']);
                    }else{

                        $values[] = array(
                            'campaignName' => $row['campaignName'],
                            'campaignId' => $row['campaignId'],
                            'count' => $defaultCount
                        );
                    }
                }else{
                    $em = $this->getDoctrine()->getEntityManager();
                    $entity = $em
                        ->getRepository('AppBundle:TrafficMonitoringCampaignSettings')
                        ->findOneBy(array('campaignId' => $row['campaignId']));
                    if($entity){
                        $em->remove($entity);
                        $em->flush();
                        $em->clear();
                    }
                }
            }
        }

        if(count($values) > 0){
            $this->insertCampaignTrafficSettings($values);
        }

        return new Response(
            json_encode($this->getCampaignTrafficSettings())
        );
    }

    public function getCampaignTrafficSettingsByCampid($id){
        $traffic = $this->getDoctrine()
            ->getRepository('AppBundle:TrafficMonitoringCampaignSettings')
            ->findByCampaignId($id);



        if(count($traffic) == 0){
            return array();
        }else{
            return array('id' => $traffic[0]->getId(),
                'campaignName' => $traffic[0]->getCampaignName(),
                'campaignId' => $traffic[0]->getCampaignId(),
                'visitCount' => $traffic[0]->getVisitCount(),
            );

        }

    }

    public function getCampaignTrafficSettings(){
        $traffic = $this->getDoctrine()
            ->getRepository('AppBundle:TrafficMonitoringCampaignSettings')
            ->findAll();

        $data = array();
        for($x = 0; $x < count($traffic); $x++){
            $data[] =array('id' => $traffic[$x]->getId(),
                'campaignName' => $traffic[$x]->getCampaignName(),
                'campaignId' => $traffic[$x]->getCampaignId(),
                'visitCount' => $traffic[$x]->getVisitCount()
            );
        }
        return $data;

    }

    /**
     * @param $campid
     * @param $campaignName
     */
    public function updateCampaignTrafficSettingsByCampid($campid, $campaignName){
            $em = $this->getDoctrine()->getManager();
            $traffic = $em->getRepository('AppBundle:TrafficMonitoringCampaignSettings')->findOneByCampaignId($campid);
            $traffic->setCampaignName($campaignName);
            $traffic->setCampaignId($campid);
            $em->flush();
            $em->clear();
    }

    public function insertCampaignTrafficSettings($values)
    {
        $em = $this->getDoctrine()->getManager();
        $batch = 20;
        $i = 1;
        foreach ($values as $row) {
            $traffic = new TrafficMonitoringCampaignSettings();
            $traffic->setCampaignName($row['campaignName']);
            $traffic->setCampaignId($row['campaignId']);
            $traffic->setVisitCount($row['count']);
            $em->persist($traffic);

            if(($i % $batch) == 0){
                $em->flush();
                $em->clear();
            }

            $i++;
        }

        $em->flush();
        $em->clear();
    }

    /**
     * @Route("reports/update-traffic-monitoring-settings"), name="updateTrafficMonitoringSettings")
     */
    public function updateCampaignTrafficSettingsVisits(){
        $data = json_decode($_POST['param'], true);
        foreach($data as $row){
            $em = $this->getDoctrine()->getManager();
            $traffic = $em->getRepository('AppBundle:TrafficMonitoringCampaignSettings')->findOneByCampaignId($row['campid']);
            $traffic->setVisitCount($row['visit']);
            $em->flush();
            $em->clear();
        }

        return new Response(
            json_encode(true)
        );
    }

    /**
     * @Route("monitoring/update-traffic-monitoring-global-settings"), name="updateTrafficMonitoringGlobalSettings")
     */
    public function updateCampaignTrafficGlobalSettings(){
        $data = $_POST['param'];

            $em = $this->getDoctrine()->getManager();
            $settings = $em->getRepository('AppBundle:TrafficMonitoringCampaignSettingsGlobal')->find(1);
            $settings->setIsActive($data);
            $em->flush();
            $em->clear();
        return new Response(
            json_encode(true)
        );
    }

    /**
     * @Route("reports/update-traffic-monitoring-notification-settings"), name="updateTrafficMonitoringNotificationSettings")
     */
    public function updateCampaignTrafficNotificationSettings(){
        $data = json_decode($_POST['param'], true);
        foreach($data as $row){
            $em = $this->getDoctrine()->getManager();
            $traffic = $em->getRepository('AppBundle:ReportsTrafficMonitoring')->find($row['id']);
            $traffic->setIsDisabledNotification($row['isChecked']);
            $em->flush();
            $em->clear();
        }

        return new Response(
            json_encode(true)
        );
    }

}