<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/7/2017
 * Time: 1:53 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\LogsTbl;

class LogTrackerController extends Controller{


    /**
     * @Route("reports/log-tracker")
     */
    public function showLogTrackerReportAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'reports/logtracker.html.twig', array('page' => 'Log Tracker', 'filters' => array())
            );
        }else{
            return $this->redirect('/user/login');
        }


    }


    /**
     * @Route("ajax/get-reports-log-tracker")
     */

    public function ajaxGetReportsIp(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.pageName', 'p.geoTarget', 'p.clickid', 'p.campid', 'p.conversion', 'p.ua', 'p.ip' , 'p.visitCount', 'p.colorDensity', 'p.resolution', 'p.orientation', 'p.platform', 'p.fonts', 'p.appVersion', 'p.noOfPlugins', 'p.plugins', 'p.dateTime', 'p.timeZone', 'p.country' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:LogsTbl';

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
            $row[] = $column['id'];
            $row[] = $column['pageName'];
            $row[] = $column['geoTarget'];
            $row[] = $column['clickid'];
            $row[] = $column['campid'];
            $row[] = $column['conversion'];
            $row[] = $column['ua'];
            $row[] = $column['ip'];
            $row[] = $column['visitCount'];
            $row[] = $column['colorDensity'];
            $row[] = $column['resolution'];
            $row[] = $column['orientation'];
            $row[] = $column['platform'];
            $row[] = $column['fonts'];
            $row[] = $column['appVersion'];
            $row[] = $column['noOfPlugins'];
            $row[] = $column['plugins'];
            $row[] = $column['dateTime'];
            $row[] = $column['timeZone'];
            $row[] = $column['country'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }


}