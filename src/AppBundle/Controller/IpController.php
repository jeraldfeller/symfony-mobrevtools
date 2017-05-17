<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/7/2017
 * Time: 12:12 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\ReportsIp;
use AppBundle\Entity\ReportsIpSaved;

class IpController extends Controller{

    /**
     * @Route("reports/ip")
     */
    public function showIpReportAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $trafficSources = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsIp',
                'column' => 'trafficName'))->getContent(), true);
            $campaigns = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsIp',
                'column' => 'campaignName'))->getContent(), true);
            $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsIp',
                'column' => 'geo'))->getContent(), true);
            $carriers = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsIp',
                'column' => 'mobileCarrier'))->getContent(), true);

            $isp = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsIp',
                'column' => 'isp'))->getContent(), true);

            $filters = array('trafficSource' => $trafficSources,
                'campaigns' => $campaigns,
                'geos' => $geos,
                'carriers' => $carriers,
                'isps' => $isp
            );
            return $this->render(
                'reports/ip.html.twig', array('page' => 'IP Data', 'filters' => $filters)
            );
        }else{
            return $this->redirect('/user/login');
        }


    }



    /**
     * @Route("/reports/ip/save-data", name="saveData")
     */
    public function saveDataAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        foreach($data['items'] as $row){
            $listData = $em->getRepository('AppBundle:ReportsIp')->find($row['id']);
            $listExists = $em->getRepository('AppBundle:ReportsIpSaved')->findOneBy(array('id' => $listData));
            if($listExists){
                $listExists->setTrafficName($listData->getTrafficName());
                $listExists->setCampaignName($listData->getCampaignName());
                $listExists->setGeo($listData->getGeo());
                $listExists->setMobileCarrier($listData->getMobileCarrier());
                $listExists->setIsp($listData->getIsp());
                $listExists->setIp($listData->getIp());
                $em->flush();
            }else{
                $listEntity = new ReportsIpSaved();
                $listEntity->setTrafficName($listData->getTrafficName());
                $listEntity->setCampaignName($listData->getCampaignName());
                $listEntity->setGeo($listData->getGeo());
                $listEntity->setMobileCarrier($listData->getMobileCarrier());
                $listEntity->setIsp($listData->getIsp());
                $listEntity->setIp($listData->getIp());
                $em->persist($listEntity);
            }

        }

        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }



    /**
     * @Route("ajax/get-reports-ip")
     */

    public function ajaxGetReportsIp(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.trafficName', 'p.campaignName', 'p.geo', 'p.mobileCarrier', 'p.isp', 'p.ip');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:ReportsIp';

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

            if(isset($input['traffic']) || isset($input['geo']) || isset($input['mobileCarrier']) || isset($input['isp']))            {
                $aFilteringRules = array();
                if($input['traffic'] != '' || $input['traffic'] != null){

                    $aFilteringRules[] = "p.trafficName LIKE '%".$input['traffic'] ."%'";
                }

                if($input['geo'] != '' || $input['geo'] != null){
                    $aFilteringRules[] = "p.geo LIKE '%". $input['geo'] ."%'";
                }

                if($input['mobileCarrier'] != '' || $input['mobileCarrier'] != null){
                    $aFilteringRules[] = "p.mobileCarrier LIKE '%". $input['mobileCarrier'] ."%'";
                }

                if($input['isp'] != '' || $input['isp'] != null){
                    $aFilteringRules[] = "p.isp LIKE '%". $input['isp'] ."%'";
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
            $row = array();
            $row[] = $column['id'];
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['id'] . '" />
                             <span></span>
                        </label>
                      </td>';
            $row[] = $column['trafficName'];
            $row[] = $column['campaignName'];
            $row[] = $column['geo'];
            $row[] = $column['mobileCarrier'];
            $row[] = $column['isp'];
            $row[] = $column['ip'];
            $row[] = '-'.$column['ip'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }

}