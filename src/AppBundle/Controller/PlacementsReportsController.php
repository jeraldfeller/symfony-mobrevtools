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
use AppBundle\Entity\PlacementsReports;
use AppBundle\Entity\PlacementsReportsSaved;


class PlacementsReportsController extends Controller {

    /**
     * @Route("/reports/placements", name="placementsReports")
     */
    public function indexAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if ($pageReturn == 'true') {
                $page = 'Placements';
               
           
                return $this->render(
                    'reports/placement-reports.html.twig', array('page' => $page
                    )
                );
            }else{
                return $this->redirect('/error');
            }

        }else{
            return $this->redirect('/user/login');
        }
    }
	
	 /**
     * @Route("/reports/placements/initialize")
     */
    public function initializeAction()
    {
		$this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:PlacementsReports'))->getContent();
        return new Response(json_encode(true));
    }
	
	public function getTrafficSourceByIndex($index)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:TrafficSource p
                WHERE p.trafficName != 'Voluum' ORDER BY p.trafficName ASC
        ");
        $result = $sql->getResult();
		if(count($result) > $index){

		try{
			$data = array(
				'trafficName' => $result[$index]->getTrafficName(),
				'id' => $result[$index]->getTrafficSourceId(),
				'customVariable' => $result[$index]->getCustomVariable(),
				'customVariableKey' => $result[$index]->getCustomVariableKey()
			);
			
			return $data;
		}catch(\Exception $e){
			
			return false;
			
		}
		}else{
		return false;
}
		
        
    }
	
	 /**
     * @Route("/reports/placements/get-campaigns")
     */
    public function getCampaigns()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$data = json_decode($_POST['param'], true);
		$apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
		$trafficSource = $this->getTrafficSourceByIndex($data['index']);
		
		try{
			if($trafficSource != false){
		$url = 'https://api.voluum.com/report?';	
		$from = date('Y-m-d', strtotime($data['from'])) . 'T00:00:00Z';
        $to = date('Y-m-d', strtotime($data['to'] . '+1 days')) . 'T00:00:00Z';
        $query = array('from' => $from,
            'to' => $to,
            'tz' => 'America/New_York',
            'sort' => 'visitTimestamp',
            'direction' => 'desc',
            'columns' => 'campaignName',
			'columns' => 'status',
			'columns' => 'bid',
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
			'groupBy' => 'campaign',
            'offset' => 0,
            'limit' => 10000,
			'include' => 'TRAFFIC',
			'conversionTimeMode' => 'VISIT',
			'filter1' => 'traffic-source',
			'filter1Value' => $trafficSource['id']

        );
		
		
        $returnedData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);
		$returnedPlacementData = array();
			if(count($returnedData['rows']) > 0){
				foreach($returnedData['rows'] as $row){
					if($row['conversions'] >= $data['conversions']){
						$campaignName = $row['campaignName'];
						$geo = (isset($row['campaignCountry']) ? $row['campaignCountry'] : 'Global');
						$query = array('from' => $from,
							'to' => $to,
							'tz' => 'America/New_York',
							'sort' => 'visitTimestamp',
							'direction' => 'desc',
							'columns' => $trafficSource['customVariableKey'],
							'columns' => 'status',
							'columns' => 'bid',
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
							'groupBy' => $trafficSource['customVariable'],
							'offset' => 0,
							'limit' => 10000,
							'include' => 'TRAFFIC',
							'conversionTimeMode' => 'VISIT',
							'filter1' => 'campaign',
							'filter1Value' => $row['campaignId']

						);
						
						
						$returnedPlacementData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
							'query' => $query,
							'method' => 'GET',
							'sessionId' => $voluumSessionId))->getContent(), true);
							
						if(count($returnedPlacementData['rows']) > 0){
							
							$i = 1;
							$batch = 100;
							foreach($returnedPlacementData['rows'] as $item){
								if($item['conversions'] >= $data['conversions'] && $item['cost'] >= $data['cost'] && $item['revenue'] >= $data['revenue'] && $item['profit'] >= $data['profit'] && $item['roi'] >= $data['roi'] && $item['cpv'] >= $data['cpv']){
								
									
									$entity = new PlacementsReports();
									$entity->setTrafficSource($trafficSource['trafficName']);
									$entity->setCampName($campaignName);
									$entity->setGeo($geo);
									$entity->setPlacement($item[$trafficSource['customVariableKey']]);
									$entity->setVisits($item['visits']);
									$entity->setClicks($item['clicks']);
									$entity->setCtr($item['ctr']);
									$entity->setConversions($item['conversions']);
									$entity->setRevenue($item['revenue']);
									$entity->setCost($item['cost']);
									$entity->setProfit($item['profit']);
									$entity->setCpv($item['cpv']);
									$entity->setEpv($item['epv']);
									$entity->setRoi($item['roi']);
									$em->persist($entity);
									
									if(($i % $batch) == 0){
										$em->flush();
									}
								
								
								}
							}
							
							$em->flush();
							$em->clear();
							
						}
					}
				}
				
				
				
			}
			
			$response = array(
						'hasNext' => true,
						'nextIndex' => $data['index'] + 1,
						'trafficSource' => $trafficSource
				);
		}else{
			
			$response = array(
				'hasNext' => false
			);
		}
		
		}catch(\Exception $e){
			$response = array(
				'error' => true,
				'message' => $e->getMessage()
			);
		}
		


		
		return new Response(
			json_encode(
				$response
			)
		);
		

		
	}
	
	/**
     * @Route("/reports/placements/save-data")
     */
    public function saveDataAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        foreach($data['items'] as $row){
            $listData = $em->getRepository('AppBundle:PlacementsReports')->find($row['id']);
            $listExists = $em->getRepository('AppBundle:PlacementsReportsSaved')->findOneBy(array(
				'placement' => $listData->getPlacement(),
				'campaignName' => $listData->getCampName(),
				'trafficSourceName' => $listData->getTrafficSource()
				));
            if(!$listExists){
                $listEntity = new PlacementsReportsSaved();
				$listEntity->setTrafficSourceName($listData->getTrafficSource());
				$listEntity->setCampaignName($listData->getCampName());
				$listEntity->setGeo($listData->getGeo());
				$listEntity->setPlacement($listData->getPlacement());
                $em->persist($listEntity);
            }

        }

        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }


    /**
     * @Route("/reports/placements/get-reports")
     */

    public function ajaxGetListReports(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.trafficSource', 'p.campName', 'p.geo',  'p.placement', 'p.visits', 'p.clicks' , 'p.ctr', 'p.conversions', 'p.revenue', 'p.cost', 'p.profit', 'p.cpv', 'p.epv', 'p.roi' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:PlacementsReports';

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


		if($input['iDisplayLength'] == '-1'){
			$sQuery = $em->createQuery("
			SELECT $aQueryColumns
			FROM ".$sTable." p ".$sWhere.$sOrder."")
				
			;
			$rResult = $sQuery->getResult();


			$sQuery = $em->createQuery("
			SELECT p
			FROM ".$sTable." p ".$sWhere.$sOrder."")
				
			;
		}else{
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
		}
        

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
            $row[] = $column['campName'];
            $row[] = $column['geo'];
           
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
           
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }
	
	
	/**
     * @Route("/reports/placements/get-reports-placements-saved")
     */

    public function getReportsPlacementsSaved(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.trafficSourceName', 'p.campaignName', 'p.geo',  'p.placement' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

        // DB table to use
        $sTable = 'AppBundle:PlacementsReportsSaved';

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
			 if(isset($input['traffic']) || isset($input['campaign']) || isset($input['geo']) || isset($input['placement'])){
				 if($input['traffic'] != '' || $input['traffic'] != null){

                    $aFilteringRules[] = "p.trafficSourceName = '". $input['traffic'] ."'";
                 }
				 if($input['campaign'] != '' || $input['campaign'] != null){

                    $aFilteringRules[] = "p.campaignName = '". $input['campaign'] ."'";
                 }
				 if($input['geo'] != '' || $input['geo'] != null){

                    $aFilteringRules[] = "p.geo = '". $input['geo'] ."'";
                 }
				 if($input['placement'] != '' || $input['placement'] != null){

                    $aFilteringRules[] = "p.placement = '". $input['placement'] ."'";
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


		if($input['iDisplayLength'] == '-1'){
			$sQuery = $em->createQuery("
			SELECT $aQueryColumns
			FROM ".$sTable." p ".$sWhere.$sOrder."")
				
			;
			$rResult = $sQuery->getResult();


			$sQuery = $em->createQuery("
			SELECT p
			FROM ".$sTable." p ".$sWhere.$sOrder."")
				
			;
		}else{
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
		}
        

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
   
            $row[] = $column['trafficSourceName'];
            $row[] = $column['campaignName'];
            $row[] = $column['geo'];
           
            $row[] = $column['placement'];
            
           
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }


 


}
