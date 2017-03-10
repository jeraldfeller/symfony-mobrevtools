<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/20/2017
 * Time: 2:52 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\ScannedUrls;



class DomainTrackerController extends Controller{


    /**
     * @Route("reports/domain")
     */
    public function showDomainReportAction(){
        $filters = array();
        return $this->render(
            'reports/domaintracker.html.twig', array('page' => 'Domains', 'filters' => $filters)
        );
    }

    /**
     * @Route("reports/update-domain-check")
     */
    public function updateDomainCheckAction(){
        $data = json_decode($_POST['param'], true);
        $id = $data['scan_id'];
        $toCheck = $data['toCheck'];
        $em = $this->getDoctrine()->getManager();
        $domain = $em->getRepository('AppBundle:ScannedUrls')->find($id);

        if(!$id){
            throw $this->createNotFoundException(
                'No domain found for id' . $id
            );
        }
        $domain->setToCheck($toCheck);
        $em->flush();

        return new Response(json_encode(true));
    }


    /**
     * @Route("ajax/get-reports-domain")
     */

    public function ajaxGetReportsDomain(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.scanId','p.url', 'p.flagType', 'p.toCheck');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.scanId';

        // DB table to use
        $sTable = 'AppBundle:ScannedUrls';

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
        if(isset($input['domainStatus'])){
            $status = $input['domainStatus'];
        }else{
            $status = 1;
        }


        $sWhere = "WHERE p.toCheck = " . $status . "";

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
            $did = $column['scanId'];
            $row[] = $column['url'];
            $row[] = $column['flagType'];
            if($column['toCheck'] == 1){
                $isChecked = 'checked';
            }else{
                $isChecked = '';
            }

            $row[] = '<input class="switch_btn" data-on-color="success" data-size="mini" data-off-color="danger" data-on-text="YES" data-off-text="NO" type="checkbox" value="1" name="switch"  data-id="' .  $did . '" ' . $isChecked . '>';
            $row[] = '<input class="switch_btn" data-on-color="success" data-size="mini" data-off-color="danger" data-on-text="YES" data-off-text="NO" type="checkbox" value="1" name="switch"  data-id="' .  $did . '" ' . $isChecked . '>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }



}