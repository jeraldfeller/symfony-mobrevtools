<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/2/2017
 * Time: 9:11 PM
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Entity\ListReports;
use AppBundle\Entity\Campaign;

class ListReportsController extends Controller {

    /**
     * @Route("/reports/data-reports", name="listReports")
     */
    public function indexAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $page = 'Data Reports';
            $trafficSources = $this->getTrafficSources();
            $geos = $this->getGeos();
            $verticals = $this->getVerticals();
            $campaigns = $this->getCampaigns();
            return $this->render(
                'reports/list-reports.html.twig', array('page' => $page,
                    'trafficSources' => $trafficSources,
                    'campaigns' => $campaigns,
                    'verticals' => $verticals,
                    'geos' => $geos
                )
            );
        }else{
            return $this->redirect('/user/login');
        }
    }

    /**
     * @Route("/ajax/list-reports")
     */

    public function ajaxGetListReports(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.listReportsId', 'p.tid', 'p.cid', 'p.type', 't.trafficName', 'ca.campName', 'ca.geo', 'v.verticalName', 'p.placement', 'p.visits', 'p.clicks' , 'p.ctr', 'p.conversions', 'p.revenue', 'p.cost', 'p.profit', 'p.cpv', 'p.epv', 'p.roi', 'p.dateExecuted', 'p.status' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.listReportsId';

        // DB table to use
        $sTable = 'AppBundle:ListReports';

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
        }else{

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
        $subFilteringRules = array();
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


            if(isset($input['type']) || isset($input['trafficSource']) || isset($input['campaign']) || isset($input['geo']) || isset($input['vertical'])){

                if($input['type'] != '' || $input['type'] != null){

                    $aFilteringRules[] = "p.type = '". $input['type'] ."'";
                }

                if($input['trafficSource'] != '' || $input['trafficSource'] != null){

                    $aFilteringRules[] = "p.tid = '". $input['trafficSource'] ."'";
                }

                if($input['campaign'] != '' || $input['campaign'] != null){

                    $aFilteringRules[] = "p.cid = '". $input['campaign'] ."'";
                }
                if($input['geo'] != '' || $input['geo'] != null){

                    $subGeoFilteringRules = "ca.geo = '". $input['geo'] ."'";
                    $subFilteringRules[] = " EXISTS (SELECT ca.geo FROM AppBundle:Campaign ca WHERE p.cid = ca.id  AND  " . $subGeoFilteringRules . ")";
                }
                if($input['vertical'] != '' || $input['vertical'] != null){

                    $subVerticalFilteringRules = "caf.verId = '". $input['vertical'] ."'";
                    $subFilteringRules[] = " EXISTS (SELECT caf.verId FROM AppBundle:Campaign caf WHERE p.cid = caf.id  AND  " . $subVerticalFilteringRules . ")";
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
            $sWhere = " WHERE p.tid = t.id AND ca.id = p.cid AND ca.verId = v.id AND ".implode(" AND ", $aFilteringRules);
            $cWhere = " WHERE ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "WHERE p.tid = t.id AND ca.id = p.cid AND ca.verId = v.id";
            $cWhere = "";
        }

        if (!empty($subFilteringRules)) {
            if (!empty($aFilteringRules)) {
                $whereExists = "AND " .implode(" AND ", $subFilteringRules);
            }else{
                $whereExists = " WHERE ".implode(" AND ", $subFilteringRules);
            }

        } else {
            $whereExists = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);


        if($input['iDisplayLength'] == '-1'){
            $sQuery = $em->createQuery("
            SELECT $aQueryColumns
            FROM AppBundle:ListReports p, AppBundle:Campaign ca, AppBundle:TrafficSource t, AppBundle:Verticals v ".$sWhere.$sOrder."")

                ;
                $rResult = $sQuery->getResult();


                $sQuery = $em->createQuery("
            SELECT p
            FROM ".$sTable." p ".$cWhere. $whereExists ."")
                ;
        }else{
            $sQuery = $em->createQuery("
            SELECT $aQueryColumns
            FROM AppBundle:ListReports p, AppBundle:Campaign ca, AppBundle:TrafficSource t, AppBundle:Verticals v ".$sWhere.$sOrder."")
                ->setFirstResult($firstResult)
                ->setMaxResults($maxResults)
                ;
                $rResult = $sQuery->getResult();


                $sQuery = $em->createQuery("
            SELECT p
            FROM ".$sTable." p ".$cWhere. $whereExists ."")
                    ->setFirstResult($firstResult)
                    ->setMaxResults($maxResults)
                ;
        }


        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$cWhere. $whereExists."");

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
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['listReportsId'] . '" />
                             <span></span>
                        </label>
                      </td>';
            $row[] = strtoupper($column['type']);
            $row[] = $column['trafficName'];
            $row[] = $column['campName'];
            $row[] = $column['geo'];
            $row[] = $column['verticalName'];
            $row[] = $column['placement'];
            $row[] = $column['visits'];
            $row[] = $column['clicks'];
            $row[] = bcdiv($column['ctr'], 1, 2) . '%';
            $row[] = $column['conversions'];
            $row[] = '$' . bcdiv($column['revenue'], 1, 2);
            $row[] = '$' . bcdiv($column['cost'], 1, 2);
            $row[] = '$' . bcdiv($column['profit'], 1, 2);
            $row[] = bcdiv($column['cpv'], 1, 4);
            $row[] = bcdiv($column['epv'], 1, 4);
            $row[] = bcdiv($column['roi'], 1, 2) . '%';
            $row[] = date('m/d/Y H:i' , $column['dateExecuted']);
            $row[] = $column['status'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }


    public function getTrafficSources()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:TrafficSource p
                WHERE p.trafficName != 'Voluum' ORDER BY p.trafficName ASC
        ");
        $result = $sql->getResult();
        return $result;
    }

    public function getCampaigns()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT DISTINCT p.cid
                FROM AppBundle:ListReports p
        ");
        $result = $sql->getResult();
        $data = array();
        foreach($result as $row){
            $data[] = $this->getCampaignById($row['cid']);
        }
        return $data;
    }

    public function getCampaignById($id){
        $em = $this->getDoctrine()->getManager();
        $campaignEntity = $em->getRepository('AppBundle:Campaign')->findOneBy(array('id' => $id));
        $result = array(
            'id' => $campaignEntity->getId(),
            'campName' => $campaignEntity->getCampName()
        );
        return $result;
    }


    public function getVerticals()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT DISTINCT l.cid, p.id, p.verticalName
                FROM AppBundle:Verticals p, AppBundle:ListReports l, AppBundle:Campaign ca
                WHERE l.cid = ca.id AND ca.verId = p.id
        ");
        $result = $sql->getResult();


        $data = array();
        foreach($result as $row){
            $data[] = array(
                'id' => $row['id'],
                'verticalName' => $row['verticalName']
            );
        }
        return $data;
    }

    public function getGeos()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT DISTINCT ca.geo
                FROM AppBundle:ListReports l, AppBundle:Campaign ca
                WHERE l.cid = ca.id
        ");
        $result = $sql->getResult();


        $data = array();
        foreach($result as $row){
            $data[] = array(
                'geo' => $row['geo']
            );
        }
        return $data;
    }


}