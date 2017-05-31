<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/7/2017
 * Time: 2:34 PM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MetricsController extends Controller {

    /**
     * @Route("reports/metrics")
     */
    public function showMetricsReportAction(){

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'reports/metrics.html.twig', array('page' => 'Metrics', 'filters' => array())
            );
        }else{
            return $this->redirect('/user/login');
        }


    }

    /**
     * @Route("reports/get-metrics-report")
     */

    public function getMetricsReportAction(){
        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $split = explode('|', $data['campaign']);
        $campaignId = $split[0];
        $dates = json_decode($this->forward('AppBundle:Common:createDateRange', array('startDate' => $data['from'],
            'endDate' => date('Y-m-d', strtotime($data['to'] . '+1 days'))))->getContent());
        $dataArray = array();

        $dataReturnArray = array();
        for($x = 0; $x < count($dates); $x++){
            if($data['includeHours'] == 1){
                $dateHours = json_decode($this->forward('AppBundle:Common:createTimeRange', array('start' => date('Y-m-d', strtotime($dates[$x])),
                    'end' => date('Y-m-d', strtotime($dates[$x] . '+1 days'))))->getContent());
                for($i = 0; $i < count($dateHours); $i++){
                    if($i != 23){
                        $splitDateHours = explode(' ', $dateHours[$i]);
                        $plusOneDateHour = date('Y-m-d H:i:s', strtotime($dateHours[$i]. '+1 Hours'));
                        $splitDateHoursPlusOneHour = explode(' ', $plusOneDateHour);
                        $from = $splitDateHours[0].'T'.$splitDateHours[1].'Z';
                        $to = $splitDateHoursPlusOneHour[0].'T'.$splitDateHoursPlusOneHour[1].'Z';
                        $sort = 'visits';
                        $direction = 'desc';
                        $limit = 20000;
                        $url = 'https://api.voluum.com/report?';
                        $query = array('from' => $from,
                            'to' => $to,
                            'tz' => $data['tz'],
                            'sort' => $sort,
                            'direction' => $direction,
                            'columns' => 'offerName',
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
                            'columns' => 'affiliateNetworkName',
                            'groupBy' => 'offer',
                            'offset' => 0,
                            'limit' => $limit,
                            'include' => 'traffic',
                            'filter1' => 'campaign',
                            'filter1Value' => $campaignId
                        );
                        $returnedData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                            'query' => $query,
                            'method' => 'GET',
                            'sessionId' => $voluumSessionId))->getContent(), true);
                    }

                    $dataArray[$dateHours[$i]] = array(
                        'cr' => $returnedData['totals']['cr'],
                        'cv' => $returnedData['totals']['cv'],
                        'ctr' => $returnedData['totals']['ctr'],
                        'cpv' => $returnedData['totals']['cpv'],
                        'epv' => $returnedData['totals']['epv'],
                        'visits' => $returnedData['totals']['visits'],
                        'conversions' => $returnedData['totals']['conversions'],
                        'cost' => $returnedData['totals']['cost'],
                        'profit' => $returnedData['totals']['profit']
                    );

                }

            }else{
                $from = date('Y-m-d', strtotime($dates[$x])) . 'T00:00:00Z';
                $to = date('Y-m-d', strtotime($dates[$x] . '+1 days')) . 'T00:00:00Z';
                $sort = 'visits';
                $direction = 'desc';
                $limit = 20000;
                $url = 'https://api.voluum.com/report?';
                $query = array('from' => $from,
                    'to' => $to,
                    'tz' => $data['tz'],
                    'sort' => $sort,
                    'direction' => $direction,
                    'columns' => 'offerName',
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
                    'columns' => 'affiliateNetworkName',
                    'groupBy' => 'offer',
                    'offset' => 0,
                    'limit' => $limit,
                    'include' => 'traffic',
                    'filter1' => 'campaign',
                    'filter1Value' => $campaignId
                );
                $returnedData = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                    'query' => $query,
                    'method' => 'GET',
                    'sessionId' => $voluumSessionId))->getContent(), true);
                $dataArray[$dates[$x]] = array(
                    'cr' => $returnedData['totals']['cr'],
                    'cv' => $returnedData['totals']['cv'],
                    'ctr' => $returnedData['totals']['ctr'],
                    'cpv' => $returnedData['totals']['cpv'],
                    'epv' => $returnedData['totals']['epv'],
                    'visits' => $returnedData['totals']['visits'],
                    'conversions' => $returnedData['totals']['conversions'],
                    'cost' => $returnedData['totals']['cost'],
                    'profit' => $returnedData['totals']['profit']
                );
            }


        }


        return new Response(
            json_encode($dataReturnArray = array(
                'count' => count($dates),
                'data' => $dataArray
            ))
        );
    }
}