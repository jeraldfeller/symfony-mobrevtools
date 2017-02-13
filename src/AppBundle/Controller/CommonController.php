<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/7/2017
 * Time: 3:31 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class CommonController extends Controller {

    function secondsToTime($seconds, $requestFormat) {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");
        if($requestFormat == 'H'){
            $format = '%h';
        }
        return $dtF->diff($dtT)->format($format);
    }

    function hoursInterval($from, $to, $time, $format) {
        $startTime  = new \DateTime($from . ' 00:00');
        $endTime    = new \DateTime($to . ' 24:00');
        $timeStep   = $time;
        $timeArray  = array();

        if($format == 'H'){
            $f = 'H';
        }else{
            $f = 'M';
        }

        while($startTime <= $endTime)
        {
            $timeArray[] = $startTime->format('c');
            $startTime->add(new \DateInterval('PT'.$timeStep.$f));
        }

        return $timeArray;
    }

    /**
     * @Route("/common/create-date-range/{$startDate}/{$endDate}", name="commonCreateDateRange")
     */
    public function createDateRangeAction($startDate = null, $endDate = null)
    {
        $format = "Y-m-d";
        $begin = new \DateTime($startDate);
        $end = new \DateTime($endDate);

        $interval = new \DateInterval('P1D'); // 1 Day
        $dateRange = new \DatePeriod($begin, $interval, $end);

        $range = [];
        foreach ($dateRange as $date) {
            $range[] = $date->format($format);
        }

        return new Response(
            json_encode($range)
        );
    }

    /**
     * @Route("/common/create-time-range/{$start}/{$end}", name="commonCreateTimeRange")
     */
    public function createTimeRangeAction($start = null, $end = null) {
        $interval = '1 Hours';
        $format = '24';
        $startTime = strtotime($start);
        $endTime   = strtotime($end);
        $returnTimeFormat = ($format == '12')?'Y-m-d g:i:s A':'Y-m-d G:i:s';

        $current   = time();
        $addTime   = strtotime('+'.$interval, $current);
        $diff      = $addTime - $current;

        $times = array();
        while ($startTime < $endTime) {
            $times[] = date($returnTimeFormat, $startTime);
            $startTime += $diff;
        }
        $times[] = date($returnTimeFormat, $startTime);
        return new Response(
            json_encode($times)
        );
    }

    /**
     * @Route("/ajax/get-active-campaigns", name="commonGetActiveCampaigns")
     */

    public function getActiveCampaignsAction(){
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $split = explode(':', date('H:m'));
        $to = date('Y-m-d') . 'T00:00:00Z';
        $from = date('Y-m-d', strtotime('-180 days')) . 'T00:00:00Z';
        $tz = 'America/Chicago';
        $sort = 'campaignName';
        $direction = 'asc';
        $limit = '5000';
        $include = $_POST['param'];
        $query = array('from' => $from,
            'to' => $to,
            'tz' => $tz,
            'sort' => $sort,
            'direction' => $direction,
            'columns' => 'campaignName',
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
            'columns' => 'trafficSourceName',
            'groupBy' => 'campaign',
            'offset' => 0,
            'limit' => $limit,
            'include' => $include,
        );
        $url = 'https://portal.voluum.com/report?';
        $activeCampaigns = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);
        $activeCamp = array();
        if (!isset($activeCampaigns['error'])) {
            foreach ($activeCampaigns['rows'] as $row) {
                $activeCamp[] = array('campaignName' => $row['campaignName'],
                    'campaignId' => $row['campaignId'],
                    'countryName' => $row['campaignCountry']);
            }
        }

        return new Response(
            json_encode($activeCamp)
        );
    }


    /**
     * @Route("/ajax/get-imported-campaigns", name="commonGetImportedCampaigns")
     */

    public function getImportedCampaignsAction(){
        $data = $this->forward('AppBundle:ConversionsReport:getImportedCampaignsAll', array())->getContent();
        $activeCamp = array();

        foreach ($data as $row) {
            $activeCamp[] = array('campaignName' => $row['description'],
                'campaignId' => $row['igid']);
        }

        return new Response(
            json_encode($activeCamp)
        );

    }

}