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

use AppBundle\Entity\Domains;
use AppBundle\Entity\Safedomains;


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
     * @Route("ajax/get-reports-domain")
     */

    public function ajaxGetReportsDomain(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.did','p.domain', 'p.toCheck');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.did';

        // DB table to use
        $sTable = 'AppBundle:Domains';

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
            $did = $column['did'];
            $domainStatus = $this->getDomainStatusById($did);

            $row[] = $column['domain'];
            $row[] = $column['domain'];
            $row[] = $column['domain'];
            //$row[] = (isset($domainStatus[0]['safeSate']) ? strtoupper($domainStatus[0]['safeSate']) : '');
           // $row[] = (isset($domainStatus[0]['unsafeType']) ? $domainStatus[0]['unsafeType'] : '');

            if($column['toCheck'] == 1){
                $isChecked = 'checked';
            }else{
                $isChecked = '';
            }

            $row[] = '<input class="make-switch" data-on-color="success" data-size="mini" data-off-color="danger" data-on-text="YES" data-off-text="NO" type="checkbox" value="1" name="switch"  data-id="' .  $did . '" ' . $isChecked . '>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }

    public function getDomainStatusById($did){

        $domain = $this->getDoctrine()
            ->getRepository('AppBundle:Safedomains')
            ->findByDid($did);



        if(count($domain) == 0){
            return array();
        }else{
            return array('id' => $domain[0]->getDid(),
                'safeState' => $domain[0]->getSafeState(),
                'unsafeType' => $domain[0]->getUnsafeType()
            );

        }
    }




}