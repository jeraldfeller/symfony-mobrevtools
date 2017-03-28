<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/4/2017
 * Time: 4:44 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\ReportsWhitelist;

class WhitelistReportController extends Controller {

    /**
     * @Route("reports/whitelist")
     */
    public function showWhitelistReportAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $trafficSources = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsWhitelist',
                'column' => 'trafficSource'))->getContent(), true);
            $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsWhitelist',
                'column' => 'geo'))->getContent(), true);
            $verticals = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsWhitelist',
                'column' => 'vertical'))->getContent(), true);


            $filters = array('trafficSource' => $trafficSources,
                'geos' => $geos,
                'verticals' => $verticals);
            return $this->render(
                'reports/whitelist.html.twig', array('page' => 'Whitelist', 'filters' => $filters)
            );
        }else{
            return $this->redirect('user/login');
        }


    }

    /**
     * @Route("reports/get-whitelist-report")
     */
    public function getWhitelistReportAction(){
        $data = json_decode($_POST['param'], true);
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:ReportsWhitelist'))->getContent();
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $dateSet = strtotime(date('Y-m-d', strtotime($data['from'])));
        $from = date('Y-m-d', strtotime($data['from'])) . 'T00:00:00Z';
        $to = date('Y-m-d', strtotime($data['to'] . '+1 days')) . 'T00:00:00Z';
        $tz = 'America/Chicago';
        $sort = 'conversions';
        $direction = 'desc';
        $limit = '5000';
        $url = 'https://portal.voluum.com/report?';
        $campaignGroups = json_decode($this->forward('AppBundle:Campaign:getCampaignDetailsAll', array())->getContent(), true);


        $values = array();
        foreach ($campaignGroups as $key) {
            switch ($key['trafficName']) {
                case 'Zeropark':
                    $customVariable = 'customVariable1';
                    $customeVariableGroupBy = 'custom-variable1';
                    break;
                case 'ExoClick':
                    $customVariable = 'customVariable3';
                    $customeVariableGroupBy = 'custom-variable3';
                    break;
            }

            $query = array('from' => $from,
                'to' => $to,
                'tz' => $tz,
                'sort' => $sort,
                'direction' => $direction,
                'columns' => $customVariable,
                'columns' => 'campaignId',
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
                'groupBy' => $customeVariableGroupBy,
                'offset' => 0,
                'limit' => $limit,
                'include' => 'active',
                'filter1' => 'campaign',
                'filter1Value' => $key['vid']
            );

            $returnedData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);
            if (!isset($returnedData['error'])) {
                foreach ($returnedData['rows'] as $item) {
                    if ($item['roi'] >= 0 && $item['conversions'] >= 2) {
                        $values[] = array('trafficSource' => $key['trafficName'],
                                          'geo' => $key['geo'],
                                          'verticalName' => $key['verticalName'],
                                          'placement' => $item[$customVariable],
                                          'visits' => $item['visits'],
                                          'clicks' => $item['clicks'],
                                          'ctr' => $item['ctr'],
                                          'cost' => $item['cost'],
                                          'roi' => $item['roi'],
                                          'conversions' => $item['conversions'],
                                          'campaign' => $key['campName'],
                                          'dateSet' => $dateSet
                            );
                    }
                }

                $this->insertWhitelistReport($values);

            } else {
                echo '<pre>', var_dump($returnedData['error']), '</pre>';
            }
        }


        return new Response(
            json_encode(true)
        );
    }

    public function insertWhitelistReport($values){
        $em = $this->getDoctrine()->getManager();
        $batch = 100;
        $i = 1;
        foreach($values as $row) {
            $whitelist = new ReportsWhitelist();
            $whitelist->setTrafficSource($row['trafficSource']);
            $whitelist->setGeo($row['geo']);
            $whitelist->setVertical($row['verticalName']);
            $whitelist->setPlacement($row['placement']);
            $whitelist->setVisits($row['visits']);
            $whitelist->setClicks($row['clicks']);
            $whitelist->setCtr($row['ctr']);
            $whitelist->setCost($row['cost']);
            $whitelist->setRoi($row['roi']);
            $whitelist->setConversions($row['conversions']);
            $whitelist->setCampaign($row['campaign']);
            $whitelist->setDateSet($row['dateSet']);
            $em->persist($whitelist);
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
     * @Route("ajax/get-reports-whitelist")
     */

    public function ajaxGetReportsWhitelist(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.trafficSource', 'p.geo', 'p.vertical', 'p.placement', 'p.visits', 'p.clicks' , 'p.ctr', 'p.cost', 'p.roi', 'p.conversions', 'p.campaign', 'p.dateSet');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:ReportsWhitelist';

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


            if(isset($input['traffic']) || isset($input['geo']) || isset($input['vertical']) || isset($input['ctr1']) || isset($input['ctr2'])){

                if($input['traffic'] != '' || $input['traffic'] != null){

                    $aFilteringRules[] = "p.trafficSource LIKE '%". $input['traffic'] ."%'";
                }

                if($input['geo'] != '' || $input['geo'] != null){
                    $aFilteringRules[] = "p.geo LIKE '%".$input['geo']."%'";
                }

                if($input['vertical'] != '' || $input['vertical'] != null){
                    $aFilteringRules[] = "p.vertical LIKE '%".$input['vertical']."%'";
                }


                if($input['ctr1'] != '' || $input['ctr1'] || $input['ctr2'] != '' || $input['ctr2']){

                    if($input['ctr1'] != '' && $input['ctr2'] == ''){
                        $aFilteringRules[] = "p.ctr = ".$input['ctr1'];
                    }else if($input['ctr1'] == '' && $input['ctr2'] != ''){

                        $aFilteringRules[] = "p.ctr = ".$input['ctr2'];
                    }else if($input['ctr1'] != '' || $input['ctr1'] && $input['ctr2'] != '' || $input['ctr2']){

                        $aFilteringRules[] = "(p.ctr >= ".$input['ctr1']." AND p.ctr <= ".$input['ctr2'].")";
                    }



                }

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
            $row = array();
            $row[] = $column['trafficSource'];
            $row[] = $column['geo'];
            $row[] = $column['vertical'];
            $row[] = $column['placement'];
            $row[] = $column['visits'];
            $row[] = $column['clicks'];
            $row[] = $column['ctr'];
            $row[] = '$' . bcdiv($column['cost'], 1, 2);
            $row[] = bcdiv($column['roi'], 1, 2) . '%';
            $row[] = $column['conversions'];
            $row[] = $column['campaign'];
            $row[] = $column['dateSet'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }

}