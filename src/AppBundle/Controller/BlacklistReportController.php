<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/4/2017
 * Time: 2:21 AM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\ReportsBlacklist;

class BlacklistReportController extends Controller{
    /**
     * @Route("reports/blacklist")
     */
    public function showBotReportAction(){

        $trafficSources = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsBlacklist',
            'column' => 'trafficSource'))->getContent(), true);
        $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsBlacklist',
            'column' => 'geo'))->getContent(), true);
        $verticals = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsBlacklist',
            'column' => 'vertical'))->getContent(), true);


        $filters = array('trafficSource' => $trafficSources,
            'geos' => $geos,
            'verticals' => $verticals);
        return $this->render(
            'reports/blacklist.html.twig', array('page' => 'Blacklist', 'filters' => $filters)
        );
    }

    /**
     * @Route("ajax/get-reports-blacklist")
     */

    public function ajaxGetReportsBot(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.trafficSource', 'p.geo', 'p.vertical', 'p.placement', 'p.visits', 'p.clicks' , 'p.ctr', 'p.cost', 'p.roi', 'p.conversions', 'p.campaignName', 'p.frequency', 'p.startFrom', 'p.dateExecuted', 'p.status' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:ReportsBlacklist';

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

                if($input['bulkPlacement'] != ''){
                    $bulkPlacement = explode(',', $input['bulkPlacement']);

                    foreach($bulkPlacement as $placement){
                        $bulkPlacementQuery[] = "p.placement LIKE '%" . str_replace(' ','', $placement) . "%'";
                    }

                    $aFilteringRules[] = implode(" OR ", $bulkPlacementQuery);
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
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['id'] . '" />
                             <span></span>
                        </label>
                      </td>';
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
            $row[] = $column['campaignName'];
            if($column['frequency'] >= 3600){
                $freq = $column['frequency'] / 3600 . ' hours';
            }else if($column['frequency'] >= 86400){
                $freq = $column['frequency'] / 86400 . ' hours';
            }else{
                $freq = $column['frequency'] / 60 . ' minutes';
            }
            $row[] = $freq;
            $row[] = date('m/d/Y H:i' , $column['startFrom']);
            $row[] = date('m/d/Y H:i' , $column['dateExecuted']);
            $row[] = $column['status'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }

    /**
     * @Route("reports/delete-data")
     */
    public function deleteDataAction(){
        $data = json_decode($_POST['param'], true);
        $return = $this->forward('AppBundle:Deletes:deleteReports', array('data' => $data))->getContent();
        return new Response(
            $return
        );
    }
}