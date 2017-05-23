<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/10/2017
 * Time: 10:25 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\ReportsConversions;
use AppBundle\Entity\ImportGroup;
use AppBundle\Entity\ReportsConversionsImported;
use AppBundle\Entity\ReportsConversionsSaved;
use AppBundle\Entity\ReportsCampaignConversions;
use AppBundle\Entity\ReportsMaskedConversions;


class ConversionsReportController extends Controller{

    /**
     * @Route("reports/conversions")
     */
    public function showConversionsReportAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $this->clearConversionReportAction();
            $filters = array();
            return $this->render(
                'reports/conversions.html.twig', array('page' => 'Conversion Data', 'filters' => $filters)
            );
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/ajax/get-imported-campaigns/all", name="commonGetImportedCampaignsAll")
     */
    public function getImportedCampaignsAllAction(){
        $conversion = $this->getDoctrine()
            ->getRepository('AppBundle:ReportsConversionsImported')
            ->findAll();

        $data = array();
        for($x = 0; $x < count($conversion); $x++){
            $data[] =array('id' => $conversion[$x]->getId(),
                'campaignName' => $conversion[$x]->getCampaignName(),
                'ipInt' => $conversion[$x]->getIpInt(),
                'ip' => $conversion[$x]->getIp(),
                'subnet' => $conversion[$x]->getSubnet(),
                'visits' => $conversion[$x]->getVisits(),
                'conversions' => $conversion[$x]->getConversions(),
                'revenue' => $conversion[$x]->getRevenue(),
                'cost' => $conversion[$x]->getCost(),
                'profit' => $conversion[$x]->getProfit(),
                'roi' => $conversion[$x]->getRoi(),
                'countryCode' => $conversion[$x]->getCountryCode(),
                'isp' => $conversion[$x]->getIsp(),
                'mobileCarrier' => $conversion[$x]->getMobileCarrier(),
                'connectioType' => $conversion[$x]->getConnectionType()

            );
        }
        return new Response(
            json_encode($data)
        );
    }


    /**
     * @Route("/ajax/get-imported-campaigns-label/all", name="commonGetImportedCampaignsLabelAll")
     */
    public function getImportedCampaignsLabelAllAction(){
        $conversion = $this->getDoctrine()
            ->getRepository('AppBundle:ImportGroup')
            ->findAll();

        $data = array();
        for($x = 0; $x < count($conversion); $x++){
            $data[] =array('id' => $conversion[$x]->getId(),
                'description' => $conversion[$x]->getDescription()
            );
        }
        return new Response(
            json_encode($data)
        );
    }


    /**
     * @Route("ajax/get-reports-conversions")
     */

    public function ajaxGetReportsConversions(){
        $input =& $_GET;
        $index1 = 'p.campaignName';
        $index2 = 'p.ip';
        if($input['ip'] != ''){
            $sTable = 'AppBundle:ReportsCampaignConversions';
        }else{
            if($input['tableView'] == 'byCampaign'){
                $sTable = 'AppBundle:ReportsCampaignConversions';
                $index1 = 'p.campaignName';
                $index2 = 'p.ip';
            }else if($input['tableView'] == 'ipRanges'){
                $sTable = 'AppBundle:ReportsMaskedConversions';
                $index2 = 'p.campaignName';
                $index1 = 'p.ip';
            }else if($input['tableView'] = 'individualIp'){
                $sTable = 'AppBundle:ReportsConversions';
                $index2 = 'p.campaignName';
                $index1 = 'p.ip';
            }
        }

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', $index1, $index2, 'p.visits', 'p.conversions', 'p.revenue', 'p.cost', 'p.profit', 'p.roi', 'p.countryName', 'p.isp', 'p.mobileCarrier', 'p.connectionType');
        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.id';

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

            if(isset($input['campaign'])
                || isset($input['geo'])
                || isset($input['isp'])
                || isset($input['mobileCarrier'])
                || isset($input['connectionType'])
                || isset($input['ip'])
                || isset($input['conversions'])
                || isset($input['revenue'])
                || isset($input['cost'])
                || isset($input['profit'])
                || isset($input['roi'])
                || isset($input['subnetLevel'])
            ){
                $aFilteringRules = array();
                if($input['campaign'] != '' || $input['campaign'] != null){
                    $aFilteringRules[] = "p.campaignName LIKE '%". $input['campaign'] ."%'";
                }
                if($input['geo'] != '' || $input['geo'] != null){
                    $aFilteringRules[] = "p.countryName LIKE '%". $input['geo'] ."%'";
                }

                if($input['isp'] != '' || $input['isp'] != null){
                    $aFilteringRules[] = "p.isp LIKE '%". $input['isp'] ."%'";
                }

                if($input['mobileCarrier'] != '' || $input['mobileCarrier'] != null){
                    $aFilteringRules[] = "p.mobileCarrier LIKE '%". $input['mobileCarrier'] ."%'";
                }

                if($input['connectionType'] != '' || $input['connectionType'] != null){
                    $aFilteringRules[] = "p.connectionType LIKE '%". $input['connectionType'] ."%'";
                }

                if($input['ip'] != '' || $input['ip'] != null){
                    $aFilteringRules[] = "p.ip LIKE '%". $input['ip'] ."%'";
                }

                if($input['conversions'] != '' || $input['conversions'] != null){
                    $aFilteringRules[] = "p.conversions >= ". $input['conversions'] ."";
                }

                if($input['revenue'] != '' || $input['revenue'] != null){
                    $aFilteringRules[] = "p.revenue >= ". $input['revenue'] ."";
                }

                if($input['cost'] != '' || $input['cost'] != null){
                    $aFilteringRules[] = "p.cost >= ". $input['cost'] ."";
                }

                if($input['profit'] != '' || $input['profit'] != null){
                    $aFilteringRules[] = "p.profit >= ". $input['profit'] ."";
                }

                if($input['roi'] != '' || $input['roi'] != null){
                    $aFilteringRules[] = "p.roi >= ". $input['roi'] ."";
                }
                if($input['subnetLevel'] != '' || $input['subnetLevel'] != null){
                    $aFilteringRules[] = "p.subnet = ". $input['subnetLevel'] ."";
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
            $row[] = $column['id'];
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['id'] . '" />
                             <span></span>
                        </label>
                      </td>';
            if($input['tableView'] == 'byCampaign'){
                $row[] = $column['campaignName'];
                $row[] = $column['ip'];
            }else if($input['tableView'] == 'ipRanges'){
                $row[] = $column['ip'];
                $row[] = $column['campaignName'];
            }else if($input['tableView'] = 'individualIp'){
                $row[] = $column['ip'];
                $row[] = $column['campaignName'];
            }
            $row[] = $column['visits'];
            $row[] = $column['conversions'];
            $row[] = '$' . bcdiv($column['revenue'], 1, 2);
            $row[] = '$' . bcdiv($column['cost'], 1, 2);
            $row[] = '$' . bcdiv($column['profit'], 1, 2);
            if($column['roi'] == -0){
                $row[] = '-100%';
            }else{
                $row[] = bcdiv($column['roi'], 1, 2) . '%';
            }

            $row[] = $column['countryName'];
            $row[] = $column['isp'];
            $row[] = $column['mobileCarrier'];
            $row[] = $column['connectionType'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }


    /**
     * @Route("/reports/clear-conversion-report", name="clearConversionReport")
     */
    public function clearConversionReportAction(){
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:ReportsConversions'))->getContent();
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:ReportsMaskedConversions'))->getContent();
        $this->forward('AppBundle:Deletes:deleteReportsAll', array('data' => 'AppBundle:ReportsCampaignConversions'))->getContent();
        return new Response(json_encode(true));
    }

    /**
     * @Route("/reports/fetch-conversions", name="fetchConversions")
     */
    public function fetchConversionsAction(){
        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $url = 'https://portal.voluum.com/report/conversions?';

        $include = $data['include'];
        $split = explode(':', date('H:m'));
        $from = date('Y-m-d', strtotime($data['from'])) . 'T00:00:00Z';

        $to = date('Y-m-d', strtotime($data['to'] . '+1 days')) . 'T00:00:00Z';
        $query = array('from' => $from,
            'to' => $to,
            'tz' => 'America/New_York',
            'sort' => 'visitTimestamp',
            'direction' => 'desc',
            'columns' => 'cost',
            'columns' => 'campaignName',
            'columns' => 'countryName',
            'columns' => 'isp',
            'columns' => 'mobileCarrier',
            'columns' => 'connectionTypeName',
            'columns' => 'ip',
            'groupBy' => 'conversion',
            'offset' => 0,
            'limit' => 50000,
            'include' => $include
        );


        $returnedData = $this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent();
        $this->get('session')->set('FILE_COUNTER', 0);

        if (!isset($returnedData['errors'])) {
            //$_SESSION['CONVERSION_DATA'] = $returnedData = $apiClass->voluumGetReportsConversions($VOLUUMSESSIONID, $query);
            file_put_contents("tmp_files/CONVERSION_DATA", $returnedData, JSON_UNESCAPED_UNICODE);
            return new Response(json_encode(true));

        } else {
            return new Response(json_encode(false));
        }

    }

    /**
     * @Route("/reports/fetch-ip-data", name="fetchIpData")
     */
    public function fetchIpDataAction(){
        $totalRows = array();
        $data = json_decode($_POST['param'], true);
        $dataArray = json_decode(file_get_contents("tmp_files/CONVERSION_DATA"), true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $include = $data['include'];
        $campaignCount = $data['count'];
        $split = explode(':', date('H:m'));
        $from = date('Y-m-d', strtotime($data['from'])) . 'T00:00:00Z';

        $to = date('Y-m-d', strtotime($data['to'] . '+1 days')) . 'T00:00:00Z';
        $campaignArray = array();
        $dataArray = array();
        $dataArrayNoConvert = array();
        $withConversion = '';

        $assocMaskValuesNoConvert = array();
        $assocCampaignValuesNoConvert = array();




        foreach ($data['campaign'] as $campaign) {
            $dataCampaignNameId = explode('|', $campaign);
            $dataCampaignId = $dataCampaignNameId[0];
            $dataCampaignName = $dataCampaignNameId[1];
            $dataCountryName = $dataCampaignNameId[2];
            $dataOffset = $dataCampaignNameId[3];
            $dataLimit = $dataCampaignNameId[4];
            $dataTotalRows = $dataCampaignNameId[5];
            if($dataTotalRows == 0 && $dataOffset == 0){
                $offset = $dataOffset + $dataLimit;
                $tz = 'America/New_York';
                $sort = 'conversions';
                $direction = 'desc';

                $query = array('from' => $from,
                    'to' => $to,
                    'tz' => $tz,
                    'sort' => $sort,
                    'direction' => $direction,
                    'columns' => 'ip',
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
                    'groupBy' => 'ip',
                    'offset' =>  $dataOffset,
                    'limit' => $dataLimit,
                    'include' => $include,
                    'filter1' => 'campaign',
                    'filter1Value' => $dataCampaignId
                );
                $url = 'https://portal.voluum.com/report?';
                $ipDataReturnData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                    'query' => $query,
                    'method' => 'GET',
                    'sessionId' => $voluumSessionId))->getContent(), true);
                $newData['campaign'][] = $dataCampaignId . '|' . $dataCampaignName . '|' . $dataCountryName . '|' . $offset . '|' . $dataLimit . '|' . $ipDataReturnData['totalRows'];
                $newData['from'] = $data['from'];
                $newData['to'] = $data['to'];
                $newData['include'] = $include;
                $newData['count'] = $campaignCount;
                foreach ($ipDataReturnData['rows'] as $row) {

                    if ($row['conversions'] > 0) {
                        $withConversion = true;
                        $dataArray[$dataCampaignId][$row['ip']] = array('campaignName' => $dataCampaignName,
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'cost' => $row['cost'],
                            'revenue' => $row['revenue'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi']);

                    } else {

                        $ip = ip2long($row['ip']);
                        $split = explode('.', $row['ip']);
                        $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                        $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                        $assocMaskValuesNoConvert[$ipMask][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '16',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);


                        $assocCampaignValuesNoConvert[$dataCampaignName][$ipMask][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '16',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);

                        $assocMaskValuesNoConvert[$ipMask24][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '24',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);


                        $assocCampaignValuesNoConvert[$dataCampaignName][$ipMask24][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '24',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);

                    }


                }
            }
            else if($dataTotalRows > $dataOffset){
                $offset = $dataOffset + $dataLimit;
                $tz = 'America/New_York';
                $sort = 'conversions';
                $direction = 'desc';

                $query = array('from' => $from,
                    'to' => $to,
                    'tz' => $tz,
                    'sort' => $sort,
                    'direction' => $direction,
                    'columns' => 'ip',
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
                    'groupBy' => 'ip',
                    'offset' =>  $dataOffset,
                    'limit' => $dataLimit,
                    'include' => $include,
                    'filter1' => 'campaign',
                    'filter1Value' => $dataCampaignId
                );
                $url = 'https://portal.voluum.com/report?';
                $ipDataReturnData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                    'query' => $query,
                    'method' => 'GET',
                    'sessionId' => $voluumSessionId))->getContent(), true);
                $newData['campaign'][] = $dataCampaignId . '|' . $dataCampaignName . '|' . $dataCountryName . '|' . $offset . '|' . $dataLimit . '|' . $ipDataReturnData['totalRows'];
                $newData['from'] = $data['from'];
                $newData['to'] = $data['to'];
                $newData['include'] = $include;
                $newData['count'] = $campaignCount;
                //$totalRows[] = array('campaignId' => $dataCampaignId, 'totalRows' => $ipDataReturnData['totalRows'], 'offset' => $offset, 'limit' => $limit);
                foreach ($ipDataReturnData['rows'] as $row) {

                    if ($row['conversions'] > 0) {
                        $withConversion = true;
                        $dataArray[$dataCampaignId][$row['ip']] = array('campaignName' => $dataCampaignName,
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'cost' => $row['cost'],
                            'revenue' => $row['revenue'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi']);

                    } else {

                        $ip = ip2long($row['ip']);
                        $split = explode('.', $row['ip']);
                        $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                        $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                        $assocMaskValuesNoConvert[$ipMask][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '16',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);


                        $assocCampaignValuesNoConvert[$dataCampaignName][$ipMask][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '16',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);

                        $assocMaskValuesNoConvert[$ipMask24][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '24',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);


                        $assocCampaignValuesNoConvert[$dataCampaignName][$ipMask24][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => '24',
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => null,
                            'countryName' => $dataCountryName,
                            'isp' => null,
                            'mobileCarrier' => null,
                            'connectionType' => null);

                    }


                }
            }





        }


        if($dataOffset == '0'){

            $x = $this->get('session')->get('FILE_COUNTER');
            $this->get('session')->set('FILE_COUNTER', $x + 1);
            if($withConversion == true){
                file_put_contents("tmp_files/DATA_ARRAY", json_encode($dataArray, JSON_UNESCAPED_UNICODE));

            }
            file_put_contents("tmp_files/ASSOC_MASKED_VALUES_NO_CONVERT_".$this->get('session')->get('FILE_COUNTER'), json_encode($assocMaskValuesNoConvert, JSON_UNESCAPED_UNICODE));
            file_put_contents("tmp_files/ASSOC_CAMPAIGN_VALUES_NO_CONVERT_".$this->get('session')->get('FILE_COUNTER'), json_encode($assocCampaignValuesNoConvert, JSON_UNESCAPED_UNICODE));
        }else{
            $x = $this->get('session')->get('FILE_COUNTER');
            $this->get('session')->set('FILE_COUNTER', $x + 1);
            if($withConversion == true){
                file_put_contents("tmp_files/DATA_ARRAY", json_encode($dataArray, JSON_UNESCAPED_UNICODE), FILE_APPEND);
            }
            file_put_contents("tmp_files/ASSOC_MASKED_VALUES_NO_CONVERT_".$this->get('session')->get('FILE_COUNTER'), json_encode($assocMaskValuesNoConvert, JSON_UNESCAPED_UNICODE));
            file_put_contents("tmp_files/ASSOC_CAMPAIGN_VALUES_NO_CONVERT_".$this->get('session')->get('FILE_COUNTER'), json_encode($assocCampaignValuesNoConvert, JSON_UNESCAPED_UNICODE));
        }

        return new Response(
           json_encode($newData)
        );


    }


    /**
     * @Route("reports/merge-ip-conversion-data", name="mergeIpConversionData")
     */
    public function mergeIpConversionDataAction(){
        if(file_exists("tmp_files/DATA_ARRAY")) {
            $returnedData = json_decode(file_get_contents("tmp_files/CONVERSION_DATA"), true);
            $dataArray = json_decode(file_get_contents("tmp_files/DATA_ARRAY"), true);
            $counter = '';

            $values = array();
            $ipConversions = array();
            if (!isset($returnedData['error'])) {
                $seen = array();
                $ipRangeList = array();
                $campaignList = array();
                $assocMaskValues = array();
                $assocCampaignValues = array();
                foreach ($returnedData['rows'] as $item) {
                    if (!in_array($item['ip'], $seen)) {

                        $campaignName = str_replace("'", "\\'", $item['campaignName']);
                        $campaignId = $item['campaignId'];
                        $ip = ip2long($item['ip']);
                        $ipStr = addslashes($item['ip']);
                        $split = explode('.', $ipStr);
                        $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                        $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                        $countryName = ($item['countryName'] != '' ? str_replace("'", "\\'", $item['countryName']) : 'Unknown');
                        $isp = ($item['isp'] != '' ? str_replace("'", "\\'", $item['isp']) : 'Unknown');
                        $mobileCarrier = ($item['mobileCarrier'] != '' ? str_replace("'", "\\'", $item['mobileCarrier']) : 'Unknown');
                        $connectionType = ($item['connectionType'] != '' ? str_replace("'", "\\'", $item['connectionType']) : 'Unknown');
                        $visitTimeStamp = explode(' ', $item['visitTimestamp']);
                        $timestamp = $visitTimeStamp[0];

                        if (isset($dataArray)) {

                            foreach ($dataArray as $campId => $ipArray) {
                                if ($campaignId == $campId) {
                                    $ipRangeList[] = $ipMask;
                                    $campaignList[] = $campaignName;
                                    foreach ($ipArray as $ipData => $datas) {
                                        if ($datas['conversions'] > 0) {
                                            if ($ipStr == $ipData) {
                                                $ipConversions[] = $ipStr . '|' . $campaignId;
                                                $visits = $datas['visits'];
                                                $conversions = $datas['conversions'];
                                                $revenue = $datas['revenue'];
                                                $cost = $datas['cost'];
                                                $profit = $datas['profit'];
                                                $roi = $datas['roi'];
                                                $values[] = array(
                                                    'campaignName' => $datas['campaignName'],
                                                    'campaignId' => $campId,
                                                    'ipInt' => $ip,
                                                    'ip' => $ipData,
                                                    'visits' => $visits,
                                                    'conversions' => $conversions,
                                                    'revenue' => $revenue,
                                                    'cost' => $cost,
                                                    'profit' => $profit,
                                                    'roi' => $roi,
                                                    'countryCode' => $item['countryCode'],
                                                    'countryName' => $countryName,
                                                    'isp' => $isp,
                                                    'mobileCarrier' => $mobileCarrier,
                                                    'connectionType' => $connectionType,
                                                    'visitTimestamp' => $timestamp);
                                                $assocMaskValues[$ipMask][] = array('campaignName' => $campaignName,
                                                    'ipInt' => $ip,
                                                    'ip' => $ipMask,
                                                    'subnet' => '16',
                                                    'visits' => $visits,
                                                    'conversions' => $conversions,
                                                    'revenue' => $revenue,
                                                    'cost' => $cost,
                                                    'profit' => $profit,
                                                    'roi' => $roi,
                                                    'countryCode' => null,
                                                    'countryName' => $countryName,
                                                    'isp' => $isp,
                                                    'mobileCarrier' => $mobileCarrier,
                                                    'connectionType' => $connectionType);

                                                $assocCampaignValues[$campaignName][$ipMask][] = array('campaignName' => $campaignName,
                                                    'ipInt' => $ip,
                                                    'ip' => $ipMask,
                                                    'subnet' => '16',
                                                    'visits' => $visits,
                                                    'conversions' => $conversions,
                                                    'revenue' => $revenue,
                                                    'cost' => $cost,
                                                    'profit' => $profit,
                                                    'roi' => $roi,
                                                    'countryCode' => null,
                                                    'countryName' => $countryName,
                                                    'isp' => $isp,
                                                    'mobileCarrier' => $mobileCarrier,
                                                    'connectionType' => $connectionType);

                                                $assocMaskValues[$ipMask24][] = array('campaignName' => $campaignName,
                                                    'ipInt' => $ip,
                                                    'ip' => $ipMask,
                                                    'subnet' => '24',
                                                    'visits' => $visits,
                                                    'conversions' => $conversions,
                                                    'revenue' => $revenue,
                                                    'cost' => $cost,
                                                    'profit' => $profit,
                                                    'roi' => $roi,
                                                    'countryCode' => null,
                                                    'countryName' => $countryName,
                                                    'isp' => $isp,
                                                    'mobileCarrier' => $mobileCarrier,
                                                    'connectionType' => $connectionType);

                                                $assocCampaignValues[$campaignName][$ipMask24][] = array('campaignName' => $campaignName,
                                                    'ipInt' => $ip,
                                                    'ip' => $ipMask,
                                                    'subnet' => '24',
                                                    'visits' => $visits,
                                                    'conversions' => $conversions,
                                                    'revenue' => $revenue,
                                                    'cost' => $cost,
                                                    'profit' => $profit,
                                                    'roi' => $roi,
                                                    'countryCode' => null,
                                                    'countryName' => $countryName,
                                                    'isp' => $isp,
                                                    'mobileCarrier' => $mobileCarrier,
                                                    'connectionType' => $connectionType);
                                            }
                                        }

                                    }


                                }
                            }

                            // end of loop
                        }


                    }


                    $seen[] = $ipStr;


                }

                foreach ($dataArray as $campId => $ipArray) {
                    foreach ($ipArray as $ipData => $datas) {
                        if ($datas['conversions'] > 0) {
                            if (!in_array($ipData . '|' . $campId, $ipConversions)) {
                                $ip = ip2long($ipData);
                                $split = explode('.', $ipData);
                                $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                                $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                                $visits = $datas['visits'];
                                $conversions = $datas['conversions'];
                                $revenue = $datas['revenue'];
                                $cost = $datas['cost'];
                                $profit = $datas['profit'];
                                $roi = $datas['roi'];
                                $timestamp = date('Y-m-d');

                                $values[] = array(
                                    'campaignName' => $datas['campaignName'],
                                    'campaignId' => $campId,
                                    'ipInt' => $ip,
                                    'ip' => $ipData,
                                    'visits' => $visits,
                                    'conversions' => $conversions,
                                    'revenue' => $revenue,
                                    'cost' => $cost,
                                    'profit' => $profit,
                                    'roi' => $roi,
                                    'countryCode' => 'Unknown',
                                    'countryName' => 'Unknown',
                                    'isp' => 'Unknown',
                                    'mobileCarrier' => 'Unknown',
                                    'connectionType' => 'Unknown',
                                    'visitTimestamp' => $timestamp);

                                $assocMaskValues[$ipMask][] = array('campaignName' => $datas['campaignName'],
                                    'ipInt' => $ip,
                                    'ip' => $ipMask,
                                    'subnet' => '16',
                                    'visits' => $visits,
                                    'conversions' => $conversions,
                                    'revenue' => $revenue,
                                    'cost' => $cost,
                                    'profit' => $profit,
                                    'roi' => $roi,
                                    'countryCode' => 'Unknown',
                                    'countryName' => 'Unknown',
                                    'isp' => 'Unknown',
                                    'mobileCarrier' => 'Unknown',
                                    'connectionType' => 'Unknown');

                                $assocCampaignValues[$datas['campaignName']][$ipMask][] = array('campaignName' => $datas['campaignName'],
                                    'ipInt' => $ip,
                                    'ip' => $ipMask,
                                    'subnet' => '16',
                                    'visits' => $visits,
                                    'conversions' => $conversions,
                                    'revenue' => $revenue,
                                    'cost' => $cost,
                                    'profit' => $profit,
                                    'roi' => $roi,
                                    'countryCode' => 'Unknown',
                                    'countryName' => 'Unknown',
                                    'isp' => 'Unknown',
                                    'mobileCarrier' => 'Unknown',
                                    'connectionType' => 'Unknown');
                                $assocMaskValues[$ipMask24][] = array('campaignName' => $datas['campaignName'],
                                    'ipInt' => $ip,
                                    'ip' => $ipMask,
                                    'subnet' => '24',
                                    'visits' => $visits,
                                    'conversions' => $conversions,
                                    'revenue' => $revenue,
                                    'cost' => $cost,
                                    'profit' => $profit,
                                    'roi' => $roi,
                                    'countryCode' => 'Unknown',
                                    'countryName' => 'Unknown',
                                    'isp' => 'Unknown',
                                    'mobileCarrier' => 'Unknown',
                                    'connectionType' => 'Unknown');

                                $assocCampaignValues[$datas['campaignName']][$ipMask24][] = array('campaignName' => $datas['campaignName'],
                                    'ipInt' => $ip,
                                    'ip' => $ipMask,
                                    'subnet' => '24',
                                    'visits' => $visits,
                                    'conversions' => $conversions,
                                    'revenue' => $revenue,
                                    'cost' => $cost,
                                    'profit' => $profit,
                                    'roi' => $roi,
                                    'countryCode' => 'Unknown',
                                    'countryName' => 'Unknown',
                                    'isp' => 'Unknown',
                                    'mobileCarrier' => 'Unknown',
                                    'connectionType' => 'Unknown');
                            }
                        }
                    }


                }


                file_put_contents("tmp_files/ASSOC_MASKED_VALUES_INITIAL", json_encode($assocMaskValues, JSON_UNESCAPED_UNICODE));
                file_put_contents("tmp_files/ASSOC_CAMPAIGN_VALUES_INITIAL", json_encode($assocCampaignValues, JSON_UNESCAPED_UNICODE));
                file_put_contents("tmp_files/VALUES", json_encode($values, JSON_UNESCAPED_UNICODE));

                return new Response(
                    json_encode(true)
                );


            } else {
                return new Response(
                    json_encode(false)
                );
            }

        }else{
            return new Response(
                json_encode(array('errorMessage' => 'No conversion on the specified date range'))
            );
        }


    }


    /**
     * @Route("reports/merge-ip-conversion-data-second-phase", name="mergeIpDataConversionSecondPhase")
     */
    public function mergeIpConversionDataSecondPhaseAction(){
        $fileCounter = $this->get('session')->get('FILE_COUNTER');
        $assocMaskValues = json_decode(file_get_contents("tmp_files/ASSOC_MASKED_VALUES_INITIAL"), true);
        $ip = 1255123;
        $executionCount = 0;
        for($x = 1; $x <= $fileCounter; $x++){

            $assocMaskValuesNoConvert = json_decode(file_get_contents("tmp_files/ASSOC_MASKED_VALUES_NO_CONVERT_".$x), true);

            foreach($assocMaskValuesNoConvert as $ipRangeMask => $details){
                foreach($details as $row){
                    $assocMaskValues[$ipRangeMask][] = array('campaignName' => $row['campaignName'],
                        'ipInt' => $ip,
                        'ip' => $ipRangeMask,
                        'subnet' => $row['subnet'],
                        'visits' => $row['visits'],
                        'conversions' => $row['conversions'],
                        'revenue' => $row['revenue'],
                        'cost' => $row['cost'],
                        'profit' => $row['profit'],
                        'roi' => $row['roi'],
                        'countryCode' => $row['countryCode'],
                        'countryName' => $row['countryName'],
                        'isp' => 'Unknown',
                        'mobileCarrier' => 'Unknown',
                        'connectionType' => 'Unknown');
                    $executionCount += 1;
                }


            }

            //   $_SESSION['ASSOC_MASKED_VALUES_FILE_COUNTER'] = $x;
            //  file_put_contents("tmp_files/ASSOC_MASKED_VALUES_".$x, json_encode($assocMaskValues, JSON_UNESCAPED_UNICODE));
            //sleep(5);
        }



        file_put_contents("tmp_files/ASSOC_MASKED_VALUES", json_encode($assocMaskValues, JSON_UNESCAPED_UNICODE));

        return new Response(
            json_encode(true)
        );
    }
    /**
     * @Route("reports/merge-ip-conversion-data-third-phase", name="mergeIpDataConversionThirdPhase")
     */
    public function mergeIpConversionDataThirdPhaseAction(){
        $fileCounter = $this->get('session')->get('FILE_COUNTER');
        $assocCampaignValues = json_decode(file_get_contents("tmp_files/ASSOC_CAMPAIGN_VALUES_INITIAL"), true);
        $ip = 1255123;

        for($x = 1; $x <= $fileCounter; $x++){

            $assocCampaignValuesNoConvert = json_decode(file_get_contents("tmp_files/ASSOC_CAMPAIGN_VALUES_NO_CONVERT_".$x), true);

            foreach($assocCampaignValuesNoConvert as $campaignMask => $details){

                foreach($details as $ipMask => $info){
                    foreach($info as $row) {
                        $assocCampaignValues[$campaignMask][$ipMask][] = array('campaignName' => $campaignMask,
                            'ipInt' => $ip,
                            'ip' => $ipMask,
                            'subnet' => $row['subnet'],
                            'visits' => $row['visits'],
                            'conversions' => $row['conversions'],
                            'revenue' => $row['revenue'],
                            'cost' => $row['cost'],
                            'profit' => $row['profit'],
                            'roi' => $row['roi'],
                            'countryCode' => $row['countryCode'],
                            'countryName' => $row['countryName'],
                            'isp' => 'Unknown',
                            'mobileCarrier' => 'Unknown',
                            'connectionType' => 'Unknown');


                    }


                }



            }

           // sleep(5);

        }


        file_put_contents("tmp_files/ASSOC_CAMPAIGN_VALUES", json_encode($assocCampaignValues, JSON_UNESCAPED_UNICODE));
        return new Response(
            json_encode(true)
        );


    }

    /**
     * @Route("reports/finalizing-first-phase", name="finalizingFirstPhase")
     */
    public function finalizingFirstPhaseAction(){
        $this->get('session')->remove('FILE_COUNTER');
        $values = json_decode(file_get_contents("tmp_files/VALUES"), true);
        $em = $this->getDoctrine()->getManager();
        if(count($values) > 0){
            $batch = 100;
            $i = 1;
            foreach ($values as $row) {
                $reports = new ReportsConversions();
                $reports->setCampaignName($row['campaignName']);
                $reports->setCampaignId($row['campaignId']);
                $reports->setIpInt($row['ipInt']);
                $reports->setIp($row['ip']);
                $reports->setVisits($row['visits']);
                $reports->setConversions($row['conversions']);
                $reports->setRevenue($row['revenue']);
                $reports->setCost($row['cost']);
                $reports->setProfit($row['profit']);
                $reports->setRoi($row['roi']);
                $reports->setCountryCode($row['countryCode']);
                $reports->setCountryName($row['countryName']);
                $reports->setIsp($row['isp']);
                $reports->setMobileCarrier($row['mobileCarrier']);
                $reports->setConnectiontype($row['connectionType']);
                $reports->setVisitTimestamp(new \DateTime($row['visitTimestamp']));
                $em->persist($reports);


                if(($i % $batch) === 0){
                    $em->flush();
                    $em->clear();
                }


                $i++;
            }

            $em->flush();
            $em->clear();
        }


        return new Response(
            json_encode(true)
        );

    }

    /**
     * @Route("reports/finalizing-second-phase", name="finalizingSecondPhase")
     */
    public function finalizingSecondPhaseAction(){
        $assocMaskValues = json_decode(file_get_contents("tmp_files/ASSOC_MASKED_VALUES"), true);
        if(count($assocMaskValues) > 0){
            $em = $this->getDoctrine()->getManager();

            $batch = 100;
            $i = 1;
            $dataItem = array();
            foreach($assocMaskValues as $item => $value) {

                if (count($value) > 1) {
                    $campaignName = array();
                    $ip = '';
                    $ipStr = '';
                    $subnet = '';
                    $visits = '';
                    $conversions = '';
                    $revenue = '';
                    $cost = '';
                    $profit = '';
                    $roi = '';
                    $countryCode = array();
                    $countryName = array();
                    $isp = array();
                    $mobileCarrier = array();
                    $connectionType = array();

                    foreach ($value as $data) {
                        $campaignName[] = $data['campaignName'];
                        $ip = $data['ipInt'];
                        $ipStr = $data['ip'];
                        $subnet = $data['subnet'];
                        $visits += $data['visits'];
                        $conversions += $data['conversions'];
                        $revenue += $data['revenue'];
                        $cost += $data['cost'];
                        $profit += $data['profit'];
                        $roi += $data['roi'];
                        $countryCode[] = $data['countryCode'];
                        $countryName[] = $data['countryName'];
                        $isp[] = $data['isp'];
                        $mobileCarrier[] = $data['mobileCarrier'];
                        $connectionType[] = $data['connectionType'];
                    }

                    if($cost != 0 && $profit != 0){
                        $roiPercent = ($profit / $cost) * 100;
                    }else{
                        $roiPercent = -0;
                    }

                    $campaignName = implode(', ', array_unique($campaignName));
                    $countryCode = implode(', ', array_unique($countryCode));
                    $countryName = implode(', ', array_unique($countryName));
                    $isp = implode(', ', array_unique($isp));
                    $mobileCarrier = implode(', ', array_unique($mobileCarrier));
                    $connectionType = implode(', ', array_unique($connectionType));


                    $reports = new ReportsMaskedConversions();
                    $reports->setCampaignName($campaignName);
                    $reports->setIpInt($ip);
                    $reports->setIp($item);
                    $reports->setSubnet($subnet);
                    $reports->setVisits($visits);
                    $reports->setConversions($conversions);
                    $reports->setRevenue($revenue);
                    $reports->setCost($cost);
                    $reports->setProfit($profit);
                    $reports->setRoi($roiPercent);
                    $reports->setCountryCode($countryCode);
                    $reports->setCountryName($countryName);
                    $reports->setIsp($isp);
                    $reports->setMobileCarrier($mobileCarrier);
                    $reports->setConnectiontype($connectionType);
                    $em->persist($reports);





                }else{
                    foreach($value as $data){
                        if($data['cost'] != 0 && $data['profit'] != 0){
                            $roiPercent = ($data['profit'] / $data['cost']) * 100;
                        }else{
                            $roiPercent = -0;
                        }
                        $reports = new ReportsMaskedConversions();
                        $reports->setCampaignName($data['campaignName']);
                        $reports->setIpInt($data['ipInt']);
                        $reports->setIp($item);
                        $reports->setSubnet($data['subnet']);
                        $reports->setVisits($data['visits']);
                        $reports->setConversions($data['conversions']);
                        $reports->setRevenue($data['revenue']);
                        $reports->setCost($data['cost']);
                        $reports->setProfit($data['profit']);
                        $reports->setRoi($roiPercent);
                        $reports->setCountryCode($data['countryCode']);
                        $reports->setCountryName($data['countryName']);
                        $reports->setIsp($data['isp']);
                        $reports->setMobileCarrier($data['mobileCarrier']);
                        $reports->setConnectiontype($data['connectionType']);
                        $em->persist($reports);

                    }
                }

                //  usleep(25000);


                if(($i % $batch) === 0){
                    $em->flush();
                    $em->clear();
                }


                $i++;
            }

            $em->flush();
            $em->clear();

            return new Response(
                json_encode(true)
            );
        }else{
            return new Response(
                json_encode(false)
            );
        }
    }


    /**
     * @Route("reports/finalizing-third-phase", name="finalizingThirdPhase")
     */
    public function finalizingThirdPhaseAction(){

        $assocCampaignValues = json_decode(file_get_contents("tmp_files/ASSOC_CAMPAIGN_VALUES"), true);
        if(count($assocCampaignValues) > 0){
            $em = $this->getDoctrine()->getManager();

            $batch = 100;
            $i = 1;
            $dataItem = array();
            foreach($assocCampaignValues as $item => $data) {
                foreach($data as $value) {
                if (count($value) > 1) {
                    $campaignName = '';
                    $ip = '';
                    $ipStr = '';
                    $subnet = '';
                    $visits = '';
                    $conversions = '';
                    $revenue = '';
                    $cost = '';
                    $profit = '';
                    $roi = '';
                    $countryCode = array();
                    $countryName = array();
                    $isp = array();
                    $mobileCarrier = array();
                    $connectionType = array();

                    foreach ($value as $data) {
                        $campaignName = $data['campaignName'];
                        $ip = $data['ipInt'];
                        $ipStr = $data['ip'];
                        $subnet = $data['subnet'];
                        $visits += $data['visits'];
                        $conversions += $data['conversions'];
                        $revenue += $data['revenue'];
                        $cost += $data['cost'];
                        $profit += $data['profit'];
                        $roi += $data['roi'];
                        $countryCode[] = $data['countryCode'];
                        $countryName[] = $data['countryName'];
                        $isp[] = $data['isp'];
                        $mobileCarrier[] = $data['mobileCarrier'];
                        $connectionType[] = $data['connectionType'];

                    }

                    if ($cost != 0 && $profit != 0) {
                        $roiPercent = ($profit / $cost) * 100;
                    } else {
                        $roiPercent = -0;
                    }

                    $campaignName = $campaignName;
                    $countryCode = implode(', ', array_unique($countryCode));
                    $countryName = implode(', ', array_unique($countryName));
                    $isp = implode(', ', array_unique($isp));
                    $mobileCarrier = implode(', ', array_unique($mobileCarrier));
                    $connectionType = implode(', ', array_unique($connectionType));

                    $reports = new ReportsCampaignConversions();
                    $reports->setCampaignName($campaignName);
                    $reports->setIpInt($ip);
                    $reports->setIp($ipStr);
                    $reports->setSubnet($subnet);
                    $reports->setVisits($visits);
                    $reports->setConversions($conversions);
                    $reports->setRevenue($revenue);
                    $reports->setCost($cost);
                    $reports->setProfit($profit);
                    $reports->setRoi($roiPercent);
                    $reports->setCountryCode($countryCode);
                    $reports->setCountryName($countryName);
                    $reports->setIsp($isp);
                    $reports->setMobileCarrier($mobileCarrier);
                    $reports->setConnectiontype($connectionType);
                    $em->persist($reports);


                } else {
                    foreach ($value as $data) {
                        if ($data['cost'] != 0 && $data['profit'] != 0) {
                            $roiPercent = ($data['profit'] / $data['cost']) * 100;
                        } else {
                            $roiPercent = -0;
                        }
                        $reports = new ReportsCampaignConversions();
                        $reports->setCampaignName($data['campaignName']);
                        $reports->setIpInt($data['ipInt']);
                        $reports->setIp($data['ip']);
                        $reports->setSubnet($data['subnet']);
                        $reports->setVisits($data['visits']);
                        $reports->setConversions($data['conversions']);
                        $reports->setRevenue($data['revenue']);
                        $reports->setCost($data['cost']);
                        $reports->setProfit($data['profit']);
                        $reports->setRoi($roiPercent);
                        $reports->setCountryCode($data['countryCode']);
                        $reports->setCountryName($data['countryName']);
                        $reports->setIsp($data['isp']);
                        $reports->setMobileCarrier($data['mobileCarrier']);
                        $reports->setConnectiontype($data['connectionType']);
                        $em->persist($reports);

                    }
                }

                //  usleep(25000);

                    /*
                if (($i % $batch) === 0) {
                    $em->flush();
                    $em->clear();
                }
*/
                $i++;
            }
            }

            $em->flush();
            $em->clear();

            return new Response(
              json_encode(true)
            );
        }else{
            return new Response(
                json_encode(false)
            );
        }

    }

    /**
     * @Route("reports/final-phase", name="finalPhase")
     */
    public function finalPhaseAction(){
        $campaignName = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'campaignName'))->getContent(), true);
        $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'countryName'))->getContent(), true);
        $isps = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'isp'))->getContent(), true);
        $mobileCarrier = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'mobileCarrier'))->getContent(), true);
        $connectionType = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'connectionType'))->getContent(), true);
        $ips = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'ip'))->getContent(), true);


        if($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions', 'cost','16') != 0 && $this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','profit','16') != 0){
            $roi = ($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','profit','16') / $this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','cost','16')) * 100;
        }else{
            $roi = '-100';
        }

        $return = array('campaignName' => $campaignName,
            'geos' => $geos,
            'isps' => $isps,
            'mobileCarrier' => $mobileCarrier,
            'connectionType' => $connectionType,
            'ips' => $ips,
            'visits' => number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','visits' ,'16'), 0),
            'conversions' => number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','conversions','16'), 0),
            'revenue' => '$' . number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','revenue','16'), 2),
            'cost' => '$' . number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','cost','16'), 2),
            'profit' => '$' . number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','profit','16'), 2),
            'roi' => number_format($roi, 2) . '%'

        );

        $this->clearTmpFilesAction();

        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("reports/get-imported-data-report"), name="getImportedDataReport")
     */
    public function getImportedDataReportAction(){
        $this->clearConversionReportAction();
        $assocMaskValues = array();
        $assocCampaignValues = array();
        $data = json_decode($_POST['param'], true);
        foreach ($data['campaign'] as $campaign) {
            if($campaign != 'All'){
                $dataCampaignNameId = explode('|', $campaign);
                $dataCampaignId = $dataCampaignNameId[0];
                $dataCampaignName = $dataCampaignNameId[1];
                $return = $this->getImportedDataById($dataCampaignId);

                foreach($return as $row) {
                    $dataCampaignName = $row['campaignName'];
                    $split = explode('.', $row['ip']);

                    $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                    $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                    $dataCountryName = $row['countryName'];
                    $isp = $row['isp'];
                    $mobileCarrier = $row['mobileCarrier'];
                    $connectionType = $row['connectionType'];
                    $assocMaskValues[$ipMask][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '16',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);


                    $assocCampaignValues[$dataCampaignName][$ipMask][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '16',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);

                    $assocMaskValues[$ipMask24][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '24',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);


                    $assocCampaignValues[$dataCampaignName][$ipMask24][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '24',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);
                }
            }
        }

        $this->insertConversionsMaskReport($assocMaskValues);
        $this->insertConversionsCampaignReport($assocCampaignValues);

        $campaignName = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'campaignName'))->getContent(), true);
        $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'countryName'))->getContent(), true);
        $isps = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'isp'))->getContent(), true);
        $mobileCarrier = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'mobileCarrier'))->getContent(), true);
        $connectionType = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
            'column' => 'connectionType'))->getContent(), true);


        $return = json_encode(array('success' => true, 'message' => 'Records Successfully Updated',
            'campaignName' => $campaignName,
            'geos' => $geos,
            'isps' => $isps,
            'mobileCarrier' => $mobileCarrier,
            'connectionType' => $connectionType,
            'visits' => number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','visits','16'), 0),
        ));

        return new Response($return);
    }


    public function insertConversionsCampaignReport($assocCampaignValues){
        $em = $this->getDoctrine()->getManager();
        $reports = new ReportsCampaignConversions();
        $batch = 5;
        $i = 1;
        $dataItem = array();
        foreach($assocCampaignValues as $item => $data) {
            foreach($data as $value) {
                if (count($value) > 1) {
                    $campaignName = '';
                    $ip = '';
                    $ipStr = '';
                    $subnet = '';
                    $visits = '';
                    $conversions = '';
                    $revenue = '';
                    $cost = '';
                    $profit = '';
                    $roi = '';
                    $countryCode = array();
                    $countryName = array();
                    $isp = array();
                    $mobileCarrier = array();
                    $connectionType = array();

                    foreach ($value as $data) {
                        $campaignName = $data['campaignName'];
                        $ip = $data['ipInt'];
                        $ipStr = $data['ip'];
                        $subnet = $data['subnet'];
                        $visits += $data['visits'];
                        $conversions += $data['conversions'];
                        $revenue += $data['revenue'];
                        $cost += $data['cost'];
                        $profit += $data['profit'];
                        $roi += $data['roi'];
                        $countryCode[] = $data['countryCode'];
                        $countryName[] = $data['countryName'];
                        $isp[] = $data['isp'];
                        $mobileCarrier[] = $data['mobileCarrier'];
                        $connectionType[] = $data['connectionType'];

                    }

                    if ($cost != 0 && $profit != 0) {
                        $roiPercent = ($profit / $cost) * 100;
                    } else {
                        $roiPercent = -0;
                    }

                    $campaignName = $campaignName;
                    $countryCode = implode(', ', array_unique($countryCode));
                    $countryName = implode(', ', array_unique($countryName));
                    $isp = implode(', ', array_unique($isp));
                    $mobileCarrier = implode(', ', array_unique($mobileCarrier));
                    $connectionType = implode(', ', array_unique($connectionType));


                    $reports->setCampaignName($campaignName);
                    $reports->setIpInt($ip);
                    $reports->setIp($ipStr);
                    $reports->setSubnet($subnet);
                    $reports->setVisits($visits);
                    $reports->setConversions($conversions);
                    $reports->setRevenue($revenue);
                    $reports->setCost($cost);
                    $reports->setProfit($profit);
                    $reports->setRoi($roiPercent);
                    $reports->setCountryCode($countryCode);
                    $reports->setCountryName($countryName);
                    $reports->setIsp($isp);
                    $reports->setMobileCarrier($mobileCarrier);
                    $reports->setConnectiontype($connectionType);
                    $em->persist($reports);


                } else {
                    foreach ($value as $data) {
                        if ($data['cost'] != 0 && $data['profit'] != 0) {
                            $roiPercent = ($data['profit'] / $data['cost']) * 100;
                        } else {
                            $roiPercent = -0;
                        }

                        $reports->setCampaignName($data['campaignName']);
                        $reports->setIpInt($data['ipInt']);
                        $reports->setIp($data['ip']);
                        $reports->setSubnet($data['subnet']);
                        $reports->setVisits($data['visits']);
                        $reports->setConversions($data['conversions']);
                        $reports->setRevenue($data['revenue']);
                        $reports->setCost($data['cost']);
                        $reports->setProfit($data['profit']);
                        $reports->setRoi($roiPercent);
                        $reports->setCountryCode($data['countryCode']);
                        $reports->setCountryName($data['countryName']);
                        $reports->setIsp($data['isp']);
                        $reports->setMobileCarrier($data['mobileCarrier']);
                        $reports->setConnectiontype($data['connectionType']);
                        $em->persist($reports);

                    }
                }

                //  usleep(25000);

                if (($i % $batch) == 0) {
                    $em->flush();
                    $em->clear();
                }

                $i++;
            }
        }

        $em->flush();
        $em->clear();

    }

    public function insertConversionsMaskReport($assocMaskValues){
        $em = $this->getDoctrine()->getManager();
        $reports = new ReportsMaskedConversions();
        $batch = 5;
        $i = 1;
        $dataItem = array();
        foreach($assocMaskValues as $item => $value) {

            if (count($value) > 1) {
                $campaignName = array();
                $ip = '';
                $ipStr = '';
                $subnet = '';
                $visits = '';
                $conversions = '';
                $revenue = '';
                $cost = '';
                $profit = '';
                $roi = '';
                $countryCode = array();
                $countryName = array();
                $isp = array();
                $mobileCarrier = array();
                $connectionType = array();

                foreach ($value as $data) {
                    $campaignName[] = $data['campaignName'];
                    $ip = $data['ipInt'];
                    $ipStr = $data['ip'];
                    $subnet = $data['subnet'];
                    $visits += $data['visits'];
                    $conversions += $data['conversions'];
                    $revenue += $data['revenue'];
                    $cost += $data['cost'];
                    $profit += $data['profit'];
                    $roi += $data['roi'];
                    $countryCode[] = $data['countryCode'];
                    $countryName[] = $data['countryName'];
                    $isp[] = $data['isp'];
                    $mobileCarrier[] = $data['mobileCarrier'];
                    $connectionType[] = $data['connectionType'];
                }

                if($cost != 0 && $profit != 0){
                    $roiPercent = ($profit / $cost) * 100;
                }else{
                    $roiPercent = -0;
                }

                $campaignName = implode(', ', array_unique($campaignName));
                $countryCode = implode(', ', array_unique($countryCode));
                $countryName = implode(', ', array_unique($countryName));
                $isp = implode(', ', array_unique($isp));
                $mobileCarrier = implode(', ', array_unique($mobileCarrier));
                $connectionType = implode(', ', array_unique($connectionType));



                $reports->setCampaignName($campaignName);
                $reports->setIpInt($ip);
                $reports->setIp($item);
                $reports->setSubnet($subnet);
                $reports->setVisits($visits);
                $reports->setConversions($conversions);
                $reports->setRevenue($revenue);
                $reports->setCost($cost);
                $reports->setProfit($profit);
                $reports->setRoi($roiPercent);
                $reports->setCountryCode($countryCode);
                $reports->setCountryName($countryName);
                $reports->setIsp($isp);
                $reports->setMobileCarrier($mobileCarrier);
                $reports->setConnectiontype($connectionType);
                $em->persist($reports);





            }else{
                foreach($value as $data){
                    if($data['cost'] != 0 && $data['profit'] != 0){
                        $roiPercent = ($data['profit'] / $data['cost']) * 100;
                    }else{
                        $roiPercent = -0;
                    }

                    $reports->setCampaignName($data['campaignName']);
                    $reports->setIpInt($data['ipInt']);
                    $reports->setIp($item);
                    $reports->setSubnet($data['subnet']);
                    $reports->setVisits($data['visits']);
                    $reports->setConversions($data['conversions']);
                    $reports->setRevenue($data['revenue']);
                    $reports->setCost($data['cost']);
                    $reports->setProfit($data['profit']);
                    $reports->setRoi($roiPercent);
                    $reports->setCountryCode($data['countryCode']);
                    $reports->setCountryName($data['countryName']);
                    $reports->setIsp($data['isp']);
                    $reports->setMobileCarrier($data['mobileCarrier']);
                    $reports->setConnectiontype($data['connectionType']);
                    $em->persist($reports);

                }
            }

            //  usleep(25000);

            if(($i % $batch) == 0){
                $em->flush();
                $em->clear();
            }

            $i++;
        }

        $em->flush();
        $em->clear();
    }


    public function getImportedDataById($id){
        $api = $this->getDoctrine()
            ->getRepository('AppBundle:ReportsConversionsImported')
            ->findByIgid($id);


        $data = array();
        for($x = 0; $x < count($api); $x++){
            $data[] =  array('id' => $api[$x]->getId(),
                'campaignName' => $api[$x]->getCampaignName(),
                'campaignId' => $api[$x]->getCampaignId(),
                'ipInt' => $api[$x]->getIpInt(),
                'ip' => $api[$x]->getIp(),
                'visits' => $api[$x]->getVisits(),
                'conversions' => $api[$x]->getConversions(),
                'revenue' => $api[$x]->getRevenue(),
                'cost' => $api[$x]->getCost(),
                'profit' => $api[$x]->getProfit(),
                'roi' => $api[$x]->getRoi(),
                'countryCode' => $api[$x]->getCountryCode(),
                'countryName' => $api[$x]->getCountryName(),
                'isp' => $api[$x]->getIsp(),
                'mobileCarrier' => $api[$x]->getMobileCarrier(),
                'connectionType' => $api[$x]->getConnectionType(),
                'visitTimestamp' => $api[$x]->getVisitTimestamp()
            );
        }


        return $data;


    }

    /**
     * @Route("reports/import-file"), name="importFile"
     */
    public function importFileAction(){
        $label = $_POST['importLabel'];
        $file = $_FILES['importFile']['tmp_name'];
        $fileName = $_FILES['importFile']['name'];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $assocMaskValues = array();
        $assocCampaignValues = array();
        if($label != null || $label != ''){
            if($ext == 'csv'){

                if(count($this->checkImportLabel($label)) == false){
                    $igid = $this->insertImportLabel(htmlspecialchars($label));
                    //Import uploaded file to Database
                    $handle = fopen($_FILES['importFile']['tmp_name'], "r");
                    $flag = true;
                    $values = array();
                    $null = null;
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        if($flag) { $flag = false; continue; }

                        $values[] = array(
                            'campaignName' => $data[0],
                            'campaignId' => 0,
                            'ipInt' => 0,
                            'ip' => $data[5],
                            'visits' => 1,
                            'conversions' => 0,
                            'revenue' => 0,
                            'cost' => 0,
                            'profit' => 0,
                            'roi' => 0,
                            'countryCode' => 'Unknown',
                            'countryName' => $data[1],
                            'isp' => $data[2],
                            'mobileCarrier' => $data[3],
                            'connectionType' => $data[4],
                            'visitTimestamp' => 0,
                            'igid' => $igid);
                        $dataCampaignName = $data[0];
                        $split = explode('.', $data[5]);
                        $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                        $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                        $dataCountryName = $data[1];
                        $isp = $data[2];
                        $mobileCarrier = $data[3];
                        $connectionType = $data[4];
                        $assocMaskValues[$ipMask][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => 0,
                            'ip' => $ipMask,
                            'subnet' => '16',
                            'visits' => 1,
                            'conversions' => 0,
                            'revenue' => 0,
                            'cost' => 0,
                            'profit' => 0,
                            'roi' => 0,
                            'countryCode' => 0,
                            'countryName' => $dataCountryName,
                            'isp' => $isp,
                            'mobileCarrier' => $mobileCarrier,
                            'connectionType' => $connectionType);


                        $assocCampaignValues[$dataCampaignName][$ipMask][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => 0,
                            'ip' => $ipMask,
                            'subnet' => '16',
                            'visits' => 1,
                            'conversions' => 0,
                            'revenue' => 0,
                            'cost' => 0,
                            'profit' => 0,
                            'roi' => 0,
                            'countryCode' => 0,
                            'countryName' => $dataCountryName,
                            'isp' => $isp,
                            'mobileCarrier' => $mobileCarrier,
                            'connectionType' => $connectionType);

                        $assocMaskValues[$ipMask24][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => 0,
                            'ip' => $ipMask,
                            'subnet' => '24',
                            'visits' => 1,
                            'conversions' => 0,
                            'revenue' => 0,
                            'cost' => 0,
                            'profit' => 0,
                            'roi' => 0,
                            'countryCode' => 0,
                            'countryName' => $dataCountryName,
                            'isp' => $isp,
                            'mobileCarrier' => $mobileCarrier,
                            'connectionType' => $connectionType);


                        $assocCampaignValues[$dataCampaignName][$ipMask24][] = array('campaignName' => $dataCampaignName,
                            'ipInt' => 0,
                            'ip' => $ipMask,
                            'subnet' => '24',
                            'visits' => 1,
                            'conversions' => 0,
                            'revenue' => 0,
                            'cost' => 0,
                            'profit' => 0,
                            'roi' => 0,
                            'countryCode' => 0,
                            'countryName' => $dataCountryName,
                            'isp' => $isp,
                            'mobileCarrier' => $mobileCarrier,
                            'connectionType' => $connectionType);

                    }

                    fclose($handle);

                    $this->insertImportedIpData($values);
                    $this->clearConversionReportAction();
                    $this->insertConversionsMaskReport($assocMaskValues);
                    $this->insertConversionsCampaignReport($assocCampaignValues);
                    $campaignName = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                        'column' => 'campaignName'))->getContent(), true);
                    $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                        'column' => 'countryName'))->getContent(), true);
                    $isps = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                        'column' => 'isp'))->getContent(), true);
                    $mobileCarrier = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                        'column' => 'mobileCarrier'))->getContent(), true);
                    $connectionType = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                        'column' => 'connectionType'))->getContent(), true);

                    $return = json_encode(array('success' => true, 'message' => 'File Successfully Imported',
                        'campaignName' => $campaignName,
                        'geos' => $geos,
                        'isps' => $isps,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType,
                        'visits' => number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','visits','16'), 0),
                    ));

                }else{
                    $return = json_encode(array('success' => false, 'message' => 'Label already exists'));
                }


            }else{
                $return = json_encode(array('success' => false, 'message' => 'Please Import CSV file only'));
            }
        }else{
            $return = json_encode(array('success' => false, 'message' => 'Please Insert Label'));
        }

        return new Response($return);
    }

    /**
     * @Route("reports/update-import-file"), name="updateImportFile"
     */
    public function updateImportFileAction(){
        $igid = $_POST['labelToUpdate'];
        $file = $_FILES['importFileUpdate']['tmp_name'];
        $fileName = $_FILES['importFileUpdate']['name'];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $assocMaskValues = array();
        $assocCampaignValues = array();
        if($igid != null || $igid != ''){
            if($ext == 'csv'){
                //Import uploaded file to Database
                $handle = fopen($_FILES['importFileUpdate']['tmp_name'], "r");
                $flag = true;
                $values = array();
                $null = null;
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if($flag) { $flag = false; continue; }

                    $values[] = array(
                        'campaignName' => $data[0],
                        'campaignId' => 0,
                        'ipInt' => 0,
                        'ip' => $data[5],
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 'Unknown',
                        'countryName' => $data[1],
                        'isp' => $data[2],
                        'mobileCarrier' => $data[3],
                        'connectionType' => $data[4],
                        'visitTimestamp' => 0,
                        'igid' => $igid);

                    $dataCampaignName = $data[0];
                    $split = explode('.', $data[5]);
                    $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
                    $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';
                    $dataCountryName = $data[1];
                    $isp = $data[2];
                    $mobileCarrier = $data[3];
                    $connectionType = $data[4];
                    $assocMaskValues[$ipMask][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '16',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);


                    $assocCampaignValues[$dataCampaignName][$ipMask][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '16',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);

                    $assocMaskValues[$ipMask24][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '24',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);


                    $assocCampaignValues[$dataCampaignName][$ipMask24][] = array('campaignName' => $dataCampaignName,
                        'ipInt' => 0,
                        'ip' => $ipMask,
                        'subnet' => '24',
                        'visits' => 1,
                        'conversions' => 0,
                        'revenue' => 0,
                        'cost' => 0,
                        'profit' => 0,
                        'roi' => 0,
                        'countryCode' => 0,
                        'countryName' => $dataCountryName,
                        'isp' => $isp,
                        'mobileCarrier' => $mobileCarrier,
                        'connectionType' => $connectionType);

                }

                fclose($handle);

                $this->insertImportedIpData($values);
                $this->clearConversionReportAction();
                $this->insertConversionsMaskReport($assocMaskValues);
                $this->insertConversionsCampaignReport($assocCampaignValues);
                $campaignName = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                    'column' => 'campaignName'))->getContent(), true);
                $geos = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                    'column' => 'countryName'))->getContent(), true);
                $isps = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                    'column' => 'isp'))->getContent(), true);
                $mobileCarrier = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                    'column' => 'mobileCarrier'))->getContent(), true);
                $connectionType = json_decode($this->forward('AppBundle:Filters:getFilters', array('bundle' => 'AppBundle:ReportsConversions',
                    'column' => 'connectionType'))->getContent(), true);

                $return = json_encode(array('success' => true, 'message' => 'File Successfully Imported',
                    'campaignName' => $campaignName,
                    'geos' => $geos,
                    'isps' => $isps,
                    'mobileCarrier' => $mobileCarrier,
                    'connectionType' => $connectionType,
                    'visits' => number_format($this->getConversionsColumnSum('AppBundle:ReportsMaskedConversions','visits','16'), 0),
                ));


            }else{
                $return = json_encode(array('success' => false, 'message' => 'Please Import CSV file only'));
            }
        }else{
            $return = json_encode(array('success' => false, 'message' => 'Please Insert Label'));
        }


        return new Response($return);
    }

    /**
     * @Route("reports/delete-label"), name="deleteLabel"
     */
    public function deleteLabelAction(){
        $data = json_decode($_POST['param']);
        $deletedRows = array();
        for($i = 0; $i < count($data); $i++){
            $deletedRows[] = $this->forward('AppBundle:Deletes:deleteIndividualColumn', array('appBundle' => 'AppBundle:ImportGroup',
                'column' => 'id',
                'value' => $data[$i]))->getContent();
        }

        return new Response(json_encode($deletedRows));
    }


    public function insertImportedIpData($values){
        if(count($values) > 0){
            $em = $this->getDoctrine()->getManager();
            $batch = 5;
            $i = 1;

            foreach ($values as $row) {
                $groupId = $em->getRepository('AppBundle:ImportGroup')->findOneById($row['igid']);
                $reports = new ReportsConversionsImported();
                $reports->setCampaignName($row['campaignName']);
                $reports->setCampaignId($row['campaignId']);
                $reports->setIpInt($row['ipInt']);
                $reports->setIp($row['ip']);
                $reports->setVisits($row['visits']);
                $reports->setConversions($row['conversions']);
                $reports->setRevenue($row['revenue']);
                $reports->setCost($row['cost']);
                $reports->setProfit($row['profit']);
                $reports->setRoi($row['roi']);
                $reports->setCountryCode($row['countryCode']);
                $reports->setCountryName($row['countryName']);
                $reports->setIsp($row['isp']);
                $reports->setMobileCarrier($row['mobileCarrier']);
                $reports->setConnectiontype($row['connectionType']);
                $reports->setVisitTimestamp(new \DateTime(date('Y-m-d')));
                $reports->setIgid($groupId);
                $em->persist($reports);

                if(($i % $batch) == 0){
                    $em->flush();
                    $em->clear();
                }

                $i++;
            }

            $em->flush();
            $em->clear();
        }
    }

    public function checkImportLabel($label){
        $appBundle = 'AppBundle:ImportGroup';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p.description
                    FROM $appBundle p
                    WHERE p.description = :label")
                    ->setParameter("label", $label);

        $result = $query->getResult();
        return $result;
    }

    public function insertImportLabel($description){
        $em = $this->getDoctrine()->getManager();
        $group = new ImportGroup();
        $group->setDescription($description);
        $em->persist($group);
        $em->flush();
        $em->clear();

        return $group->getId();

    }

    public function getConversionsColumnSum($appBundle, $column, $subnet){

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT SUM(p.$column)
                    FROM $appBundle p
                    WHERE p.subnet = $subnet");

        $result = $query->getSingleScalarResult();
        return $result;


    }

    /**
     * @Route("/reports/clear-tmp-files", name="clearTmpFiles")
     */
    public function clearTmpFilesAction(){


        $dir = 'tmp_files';
        foreach(glob("{$dir}/*") as $file)
        {
            unlink($file);
        }

        return new Response(json_encode(true));

    }



    /**
     * @Route("/reports/conversions/save-data")
     */
    public function saveDataAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $i = 0;
        $batch = 100;
        foreach($data['items'] as $row){
            $listData = $em->getRepository('AppBundle:ReportsMaskedConversions')->find($row['id']);
            $listExists = $em->getRepository('AppBundle:ReportsConversionsSaved')->findOneBy(array('ip' => $listData->getIp(), 'isp' => $listData->getIsp()));
            if(!$listExists){
                $listEntity = new ReportsConversionsSaved();
                $listEntity->setIp($listData->getIp());
                $listEntity->setIsp($listData->getIsp());
                $listEntity->setMobileCarrier($listData->getMobileCarrier());
                $listEntity->setGeo($listData->getCountryName());
                $em->persist($listEntity);
                if(($i % $batch) == 0){
                    $em->flush();
                    $em->clear();
                }
            }
        }

        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }

}
