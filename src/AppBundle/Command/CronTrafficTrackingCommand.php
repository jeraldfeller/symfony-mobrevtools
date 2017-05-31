<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/31/2017
 * Time: 9:55 AM
 */

namespace AppBundle\Command;


use AppBundle\Entity\CampaignRulesPlacementList;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;

use AppBundle\Entity\TrafficMonitoringCampaignSettings;
use AppBundle\Entity\TrafficMonitoringCampaignSettingsGlobal;
use AppBundle\Entity\ReportsTrafficMonitoring;


class CronTrafficTrackingCommand extends  ContainerAwareCommand{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:traffic-tracking')

            // the short description shown while running "php bin/console list"
            ->setDescription('Executes Traffic Tracking')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $globalSettings = $this->getTrafficMonitoringCampaignGlobalSettings();
        if($globalSettings == 1) {
            $commonService = $this->getContainer()->get('app.common_controller');
            $systemService = $this->getContainer()->get('app.system_controller');
            $voluumService = $this->getContainer()->get('app.voluum_api_controller');

            $apiCredentials = $this->getApiCredentialsAllAction();
            $voluumSessionId = $apiCredentials[0]['voluum'];

            $currentDate = date('Y-m-d');
            $currentDateTime = date('Y-m-d H:00:00');
            $yesterday = date('Y-m-d', strtotime('-1 days'));
            $currentHour = date('H');
            $currentPlusHour = date('H', strtotime('+1 hours'));
            $currentMinusHour = date('H', strtotime('-1 hours'));
            $currentMinus2Hour = date('H', strtotime('-2 hours'));
            $currentMinus24Hour = date('H', strtotime('-24 hours'));
            $currentDateHour = $currentDate . 'T' . $currentHour . ':00:00Z';
            $currentDatePlusHour = $currentDate . 'T' . $currentPlusHour . ':00:00Z';
            $currentDateMinusHour = $currentDate . 'T' . $currentMinusHour . ':00:00Z';
            $currentDateMinus2Hour = $currentDate . 'T' . $currentMinus2Hour . ':00:00Z';
            $currentDateMinus24Hour = $yesterday . 'T' . $currentHour . ':00:00Z';


            if ($currentDateHour == $currentDate . 'T00:00:00Z') {
                $currentDateHour = date('Y-m-d', strtotime('+1 days')) . 'T00:00:00Z';
            }

            $tz = 'America/Chicago';
            $sort = 'visits';
            $direction = 'desc';
            $limit = 1000;
            $include = 'active';
            $query = array('from' => $currentDateMinusHour,
                'to' => $currentDateHour,
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

            $url = 'https://api.voluum.com/report?';
            $activeCampaigns = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
            $dataArray = array();
            $hitPlacements = array();
            $values = array();
            foreach($activeCampaigns['rows'] as $campaignRow){
                if($campaignRow['visits'] >= 10){

                    $trafficSourceName = $campaignRow['trafficSourceName'];
                    $campaignName = $campaignRow['campaignName'];
                    $campaignId =  $campaignRow['campaignId'];
                    $geo = $campaignRow['campaignCountry'];
                    $settings = $this->getCampaignTrafficSettingsByCampid($campaignId);
                    $visitCount = $settings[0]['visit_count'];
                    $settingsId = $settings[0]['id'];

                    if($settings['active'] == 1){
                        switch($trafficSourceName){
                            case 'Zeropark':
                                $customVariable = 'customVariable1';
                                $customVariableQuery = 'custom-variable-1';
                                break;
                            case 'ExoClick':
                                $customVariable = 'customVariable3';
                                $customVariableQuery = 'custom-variable-3';
                                break;
                            case 'TrafficStars':
                                $customVariable = 'customVariable6';
                                $customVariableQuery = 'custom-variable-6';
                                break;
                            case 'PopAds':
                                $customVariable = 'customVariable1';
                                $customVariableQuery = 'custom-variable-1';
                                break;
                            case 'PropellerAds':
                                $customVariable = 'customVariable1';
                                $customVariableQuery = 'custom-variable-1';
                                break;
                            case 'Reporo':
                                $customVariable = 'customVariable4';
                                $customVariableQuery = 'custom-variable-4';
                                break;
                            case 'PlugRush':
                                $customVariable = 'customVariable4';
                                $customVariableQuery = 'custom-variable-4';
                                break;
                            case 'PopCash':
                                $customVariable = 'customVariable1';
                                $customVariableQuery = 'custom-variable-1';
                                break;
                        }

                        $query = array('from' => $currentDateMinusHour,
                            'to' => $currentDateMinusHour,
                            'tz' => $tz,
                            'sort' => $sort,
                            'direction' => $direction,
                            'columns' => $customVariable,
                            'columns' => 'campaignId',
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
                            'columns' => 'errors',
                            'groupBy' => $customVariableQuery,
                            'offset' => 0,
                            'limit' => 5000,
                            'include' => 'active',
                            'filter1' => 'campaign',
                            'filter1Value' => $campaignId
                        );
                        $url = 'https://api.voluum.com/report?';
                        $returnedData = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                        foreach($returnedData['rows'] as $placementRow){

                            $query = array('from' => $currentDateMinus24Hour,
                                'to' => $currentDateHour,
                                'tz' => $tz,
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
                                'limit' => 100,
                                'include' => 'active',
                                'filter1' => 'campaign',
                                'filter1Value' => $campaignId,
                                'filter2' =>  $customVariableQuery,
                                'filter2Value' => $placementRow[$customVariable]
                            );
                            $url = 'https://api.voluum.com/report?';
                            $hasConversion = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                            if($hasConversion['totals']['conversions'] >= 2){

                                $query = array('from' => $currentDateMinus2Hour,
                                    'to' => $currentDateMinusHour,
                                    'tz' => $tz,
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
                                    'limit' => 100,
                                    'include' => 'active',
                                    'filter1' => 'campaign',
                                    'filter1Value' => $campaignId,
                                    'filter2' => $customVariableQuery,
                                    'filter2Value' => $placementRow[$customVariable]
                                );
                                $lastHourVisit = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                                $query = array('from' => $currentDateMinusHour,
                                    'to' => $currentDateHour,
                                    'tz' => $tz,
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
                                    'limit' => 100,
                                    'include' => 'active',
                                    'filter1' => 'campaign',
                                    'filter1Value' => $campaignId,
                                    'filter2' => $customVariableQuery,
                                    'filter2Value' => $placementRow[$customVariable]
                                );
                                $currentHourVisit = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                                $lastHourVisitValue = $lastHourVisit['totals']['visits'];
                                $currentHourVisitValue = $currentHourVisit['totals']['visits'];

                                if($lastHourVisitValue > $visitCount){
                                    if($lastHourVisitValue != 0){
                                        $visitsDifferencePercentage = number_format(( $currentHourVisitValue / $lastHourVisitValue) * 100, 2);
                                    }else{
                                        $visitsDifferencePercentage = number_format( $currentHourVisitValue * 100, 2);
                                    }

                                    if($visitsDifferencePercentage >= 50){
                                        $status = 'Running';
                                    }else{
                                        $status = 'Traffic Stopped';
                                        $notificationSettings = $this->getPlacementNotificationSettings($campaignId, $placementRow[$customVariable]);
                                        if($notificationSettings == false){

                                            $hitPlacements[] = array(
                                                'settingsId' => $settingsId,
                                                'trafficSourceName' => $trafficSourceName,
                                                'campaignName' => $campaignName,
                                                'campaignId' => $campaignId,
                                                'geo' => $geo,
                                                'placement' => $placementRow[$customVariable],
                                                'lastHourTime' => $currentDateMinusHour,
                                                'currentHourTime' => $currentDateTime,
                                                'lastHourVisits' => $lastHourVisitValue,
                                                'currentHourVisits' => $currentHourVisitValue,
                                                'visitPercentage' => number_format($visitsDifferencePercentage, 2),
                                                'status' => $status);
                                        }

                                    }

                                    $isExist = $this->checkPlacementExists($campaignId, $placementRow[$customVariable]);
                                    if($isExist == true){
                                        // next is to update
                                        $this->updateReportsTrafficMonitoring($campaignId, $placementRow[$customVariable], $currentDateTime, $lastHourVisitValue, $currentHourVisitValue, $visitsDifferencePercentage, $status);
                                    }else{
                                        $dataArray[] = array(
                                            'settingsId' => $settingsId,
                                            'trafficSourceName' => $trafficSourceName,
                                            'campaignName' => $campaignName,
                                            'campaignId' => $campaignId,
                                            'geo' => $geo,
                                            'placement' => $placementRow[$customVariable],
                                            'lastHourTime' => $currentDateMinusHour,
                                            'currentHourTime' => $currentDateTime,
                                            'lastHourVisits' => $lastHourVisitValue,
                                            'currentHourVisits' => $currentHourVisitValue,
                                            'visitPercentage' => $visitsDifferencePercentage,
                                            'status' => $status
                                        );
                                        $values[] = "('{$settingsId}', '{$trafficSourceName}','{$campaignName}', '{$campaignId}', '{$placementRow[$customVariable]}', '{$geo}', '{$currentDateTime}', '{$lastHourVisitValue}', '{$currentHourVisitValue}', '{$visitsDifferencePercentage}', '{$status}', 0)";
                                        $em = $this->getContainer()->get('doctrine')->getManager();
                                        $reportsMonitoringEntity = new ReportsTrafficMonitoring();
                                        $reportsMonitoringEntity->setTmcsid($settingsId);
                                        $reportsMonitoringEntity->setTrafficSourceName($trafficSourceName);
                                        $reportsMonitoringEntity->setCampaignName($campaignName);
                                        $reportsMonitoringEntity->setCampaignId($campaignId);
                                        $reportsMonitoringEntity->setPlacement($placementRow[$customVariable]);
                                        $reportsMonitoringEntity->setGeo($geo);
                                        $reportsMonitoringEntity->setTimeStampVisit($currentDateTime);
                                        $reportsMonitoringEntity->setLastHourVisitValue($lastHourVisitValue);
                                        $reportsMonitoringEntity->setCurrentHourVisitValue($currentHourVisitValue);
                                        $reportsMonitoringEntity->setVisitDifferencePercentage($visitsDifferencePercentage);
                                        $reportsMonitoringEntity->setStatus($status);
                                        $reportsMonitoringEntity->setIsDisabledNotification(0);
                                        $em->persist($reportsMonitoringEntity);
                                        $em->flush();

                                    }

                                }

                            }



                        }
                    }





                }
            }




            $message = '';
            if(count($hitPlacements) > 0){
                $message .= '<html>';
                $message .= '    <head>';
                $message .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
                $message .= '      <title>Notification</title>';
                $message .= '    </head>';
                $message .= '    <body>';
                $message .= '      <div class="col-lg-12">';
                $message .= '      <table class="table table-striped">';
                $message .= '        <tr>';
                $message .= '          <th>Traffic Source</th><th>Campaign</th><th>Campaign ID</th><th>Placement</th><th>Geo</th><th>Time Stamp</th><th>Last Hour Visits</th><th>Current Time Visits</th><th>Visits Percentage</th><th>Status</th>';
                $message .= '        </tr>';
                foreach($hitPlacements as $row){
                    $message .= '<tr>';
                    $message .= '<td>' . $row['trafficSourceName'] . '</td>';
                    $message .= '<td>' . $row['campaignName'] . '</td>';
                    $message .= '<td>' . $row['campaignId'] . '</td>';
                    $message .= '<td>' . $row['placement'] . '</td>';
                    $message .= '<td>' . $row['geo'] . '</td>';
                    $message .= '<td>' . $row['currentHourTime'] . '</td>';
                    $message .= '<td>' . $row['lastHourVisits'] . '</td>';
                    $message .= '<td>' . $row['currentHourVisits'] . '</td>';
                    $message .= '<td>' . $row['visitPercentage'] . '</td>';
                    $message .= '<td>' . $row['status'] . '</td>';
                    $message .= '</tr>';
                }

                $message .= '    </table>';
                $message .= '    </div>';
                $message .= '    </body>';
                $message .= '    </html>';

                $subject = 'Traffic Monitoring ' . $row['currentHourTime'];
                $systemService->sendEmail('andrew@mobrevmedia.com', 'andrew@mobrevmedia.com', $subject, $message);
                $systemService->sendEmail('jeraldfeller@gmail.com', 'jeraldfeller@gmail.com', $subject, $message);
            }

        }

    }

    public function getApiCredentialsAllAction(){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $apiCredentials = $em
            ->getRepository('AppBundle:ApiCredentials')
            ->findAll();

        $data = array();
        for($x = 0; $x < count( $apiCredentials); $x++){
            $data[] =array('id' =>  $apiCredentials[$x]->getId(),
                'voluum' =>  $apiCredentials[$x]->getVoluum(),
                'zeropark' =>  $apiCredentials[$x]->getZeropark(),
                'exoclick' =>  $apiCredentials[$x]->getExoclick()
            );
        }



        return $data;

    }

    public function getTrafficMonitoringCampaignGlobalSettings(){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em
            ->getRepository('AppBundle:TrafficMonitoringCampaignSettingsGlobal')
            ->find(1);
        return $entity->getIsActive();
    }

    public function getCampaignTrafficSettingsByCampid($campid){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em
            ->getRepository('AppBundle:TrafficMonitoringCampaignSettings')
            ->findOneBy(array('campaignId' => $campid));

        return array(
            'id' => $entity->getId(),
            'campaignName' => $entity->getCampaignName(),
            'visitCount' => $entity->getVisitCount(),
            'active' => $entity->getActive()
        );
    }

    public function getPlacementNotificationSettings($campid, $placement){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em
            ->getRepository('AppBundle:ReportsTrafficMonitoring')
            ->findOneBy(array('campaignId' => $campid, 'placement' => $placement));

        return $entity->getIsDisabledNotification();
    }

    public function checkPlacementExists($campid, $placement){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em
            ->getRepository('AppBundle:ReportsTrafficMonitoring')
            ->findOneBy(array('campaignId' => $campid, 'placement' => $placement));
        if($entity){
            return true;
        }else{
            return false;
        }

    }

    public function updateReportsTrafficMonitoring($campid, $placement, $currentDateTime, $lastHourVisitValue, $currentHourVisitValue, $visitsDifferencePercentage, $status){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em
            ->getRepository('AppBundle:ReportsTrafficMonitoring')
            ->findOneBy(array('campaignId' => $campid, 'placement' => $placement));

        $entity->setTimeStampVisit($currentDateTime);
        $entity->setLastHourVisitValue($lastHourVisitValue);
        $entity->setCurrentHourVisitValue($currentHourVisitValue);
        $entity->setVisitDifferencePercentage($visitsDifferencePercentage);
        $entity->setStatus($status);
        $em->flush();
    }

}