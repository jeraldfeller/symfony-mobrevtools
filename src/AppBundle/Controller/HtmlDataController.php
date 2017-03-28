<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 3/28/2017
 * Time: 11:51 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\HtmlData;

class HtmlDataController extends Controller{

    /**
     * @Route("/html-pages")
     */
    public function showHtmlPagesAction(){
        $filters = array();
        return $this->render(
            'html-pages/html-pages.html.twig', array('page' => 'HTML PAGES')
        );
    }

    /**
     * @Route("/html-pages/get-code")
     */
    public function getCodeAction(){
        $id = $_POST['param'];
        $em = $this->getDoctrine()->getEntityManager();
        $htmlEntity = $em->getRepository('AppBundle:HtmlData')->find($id);


        return new Response(
            json_encode(array(
                'id' => $htmlEntity->getId(),
                'geo' => $htmlEntity->getGeo(),
                'carrier' => $htmlEntity->getCarrier(),
                'xfo' => $htmlEntity->getXfo(),
                'ip' => $htmlEntity->getIp(),
                'url' => $htmlEntity->getUrl(),
                'html' => $htmlEntity->getHtml(),
                'dateRecorded' => $htmlEntity->getDateRecorded()
            ))
        );

    }

    /**
     * @Route("/html-pages/display-code")
     */

    public function displayCodeAction(){
        $id = $_POST['param'];
        $em = $this->getDoctrine()->getEntityManager();
        $htmlEntity = $em->getRepository('AppBundle:HtmlData')->find($id);

       $data = array(
                'id' => $htmlEntity->getId(),
                'geo' => $htmlEntity->getGeo(),
                'carrier' => $htmlEntity->getCarrier(),
                'xfo' => $htmlEntity->getXfo(),
                'ip' => $htmlEntity->getIp(),
                'url' => $htmlEntity->getUrl(),
                'html' => $htmlEntity->getHtml(),
                'dateRecorded' => $htmlEntity->getDateRecorded()
            );

        file_put_contents('tmp_files_html/page.html', print_r($data['html'], true) );
        return new Response(json_encode(true));
    }

    /**
     * @Route("ajax/get-html-data")
     */

    public function ajaxGetHtmlData(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.geo', 'p.carrier', 'p.xfo', 'p.ip', 'p.url', 'p.html', 'p.dateRecorded');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:HtmlData';

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
            $id = $column['id'];
            $url = $column['url'];
            $row[] = $column['id'];
            $row[] = ($column['geo'] != '' ? $column['geo'] : 'N/A');
            $row[] = ($column['carrier'] != '' ? $column['carrier'] : 'N/A');
            $row[] = $column['xfo'];
            $row[] = ($column['ip'] != '' ? $column['ip'] : 'N/A');
            $row[] = ($column['url'] != '' ? $column['url'] : 'N/A');
            $row[] = date('m/d/Y H:i', $column['dateRecorded']);
            $row [] = '<div class="btn-group">
                                    <button type="button" class="btn btn-info"> <i class="fa fa-eye"></i> View</button>
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" id="viewHtmlCode' . $id . '" data-id="' . $id . '" data-url="' . $url . '" data-view-type="code" onClick="viewData(this)"><i class="fa fa-code"></i> HTML Code </a>
                                        </li>
                                        <li><a href="#" id="viewWebPage' . $id . '" data-id="' . $id . '" data-url="' . $url . '" data-view-type="web" onClick="viewData(this)"><i class="fa fa-file"></i> Web Page</a>
                                        </li>
                                    </ul>
                                </div>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }

}