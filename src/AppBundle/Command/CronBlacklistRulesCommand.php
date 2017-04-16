<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/15/2017
 * Time: 1:36 AM
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;


use AppBundle\Entity\BlacklistRules;
use AppBundle\Entity\BlacklistRuleSet;
use AppBundle\Entity\BlacklistConditions;
use AppBundle\Entity\ReportsBlacklist;
use AppBundle\Entity\BannedPlacement;

class CronBlacklistRulesCommand extends ContainerAwareCommand{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:blacklist-rules')

            // the short description shown while running "php bin/console list"
            ->setDescription('Executes Blacklist Rules')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $commonService = $this->getContainer()->get('app.common_controller');
        $exoClickService = $this->getContainer()->get('app.exoclick_api');
        $voluumService = $this->getContainer()->get('app.voluum_api_controller');
        $zeroparkService = $this->getContainer()->get('app.zeropark_api_controller');


        $apiCredentials = $this->getApiCredentialsAllAction();
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $zeroparkSessionId = $apiCredentials[0]['zeropark'];
        $exoclickSessionId = $apiCredentials[0]['exoclick'];



        $campaignGroups = $this->getCampaignDetailsAllAction();
        $date = date('Y-m-d');
        $timeStamp = time();


        foreach($campaignGroups as $key) {

            $em = $this->getContainer()->get('doctrine')->getManager();
            $trafficSourceEntity = $em->getRepository('AppBundle:TrafficSource')
                ->findOneBy(array('trafficName' => $key['trafficName']));

            $customVariable = $trafficSourceEntity->getCustomVariable();
            $customVariableKey = $trafficSourceEntity->getCustomVariableKey();

            $blacklistConditions = $this->getCampaignBlacklistConditionsById($key['cgid']);


            $dateFrom = (array) $key['startfrom'];
            $timeStart = date('c', $key['datetimeunix']);
            $split = explode(':', $key['datetime']);
            $timeSetStart =  date('Y-m-d', strtotime($dateFrom['date'])) . 'T' . $split[0] . ':00:00' . date('P');
            $frequency = $key['frequency'];
            $timeNow = date('c', strtotime($timeStart . '+' . $frequency . ' hours'));


            //echo date('Y-m-dH:i:00P') . '<br>';
            $ymd = date('Y-m-d');
            $hmi = date('H:i:00P');
            $hmiPlus = date('H:00:00P', strtotime('+1 hours'));
            $dateTimeNow = $ymd . 'T' . $hmi;
            $dateTimeTo = $ymd . 'T' . $hmiPlus;
            if ($frequency >= 3600) {
                $freq = $frequency / 3600;
                $to = date('Y-m-d', strtotime('+' . $freq . 'hours'));
                $format = 'H';
            } else if ($frequency >= 86400) {
                $freq = $frequency / 86400;
                $to = date('Y-m-d', strtotime('+' . $freq . 'days'));
                $format = 'H';
            } else {
                $freq = $frequency / 60;
                $to = date('Y-m-d');
                $format = 'M';
            }

            $output->writeln([
                $key['trafficName'], $key['campName']
            ]);
            if ($dateTimeNow >= $timeStart) {
                if (in_array($dateTimeNow, $commonService->hoursInterval($date, $to, $freq, $format))) {
                    $tz = 'America/Chicago';
                    $sort = 'visits';
                    $direction = 'desc';
                    $limit = '1000';

                    $query = array('from' => $timeSetStart,
                        'to' => $dateTimeTo,
                        'tz' => $tz,
                        'sort' => $sort,
                        'direction' => $direction,
                        'columns' => $customVariableKey,
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
                        'groupBy' => $customVariable,
                        'offset' => 0,
                        'limit' => $limit,
                        'include' => 'active',
                        'filter1' => 'campaign',
                        'filter1Value' => $key['vid']
                    );
                    $url = 'https://panel-api.voluum.com/report?';
                    $returnedData = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                    if ($key['active'] == 1) {
                        if (!isset($returnedData['error'])) {
                            $targets = array();
                            foreach ($returnedData['rows'] as $item) {
                                if ($key['traffic_name'] == 'Zeropark') {
                                    if ($item['status'] == 'ACTIVE') {
                                        $ruleSetCount = 1;
                                        if (count($blacklistConditions) > 0) {

                                            foreach ($blacklistConditions as $index => $conditions) {

                                                $match = array();
                                                $tomatch = array();
                                                $pauseMatchCount = 0;
                                                $conditionCount = 0;
                                                $matchCount = 0;
                                                foreach($conditions as $blacklistCon){
                                                    $variable = $blacklistCon['rule_variable'];
                                                    $condition = $blacklistCon['rule_condition'];
                                                    $value1 = $blacklistCon['value1'];
                                                    $value2 = $blacklistCon['value2'];

                                                    $match[] = $variable;
                                                    if ($condition == 'lessthan') {

                                                        if ($item[$variable] <= $value1) {
                                                            $tomatch[] = $variable;

                                                        }
                                                    } else if ($condition == 'greaterthan') {

                                                        if ($item[$variable] >= $value1) {
                                                            $tomatch[] = $variable;
                                                        }
                                                    } else {

                                                        if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                            $tomatch[] = $variable;
                                                        }
                                                    }

                                                    $result = array_diff($match, $tomatch);

                                                    if (count($result) == 0) {
                                                        $matchCount = $matchCount + 1;
                                                    }

                                                    $conditionCount++;
                                                }

                                                if ($conditionCount == $matchCount) {
                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBlacklistReport($key['bid'],
                                                        $key['tid'],
                                                        $key['cgid'],
                                                        $key['trafficName'],
                                                        $key['geo'],
                                                        $key['verticalName'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['cost'],
                                                        $item['conversions'],
                                                        $item['roi'],
                                                        $key['campName'],
                                                        $key['frequency'],
                                                        $key['datetimeunix'],
                                                        $timeStamp
                                                    );

                                                }

                                                unset($match);
                                                unset($tomatch);



                                            }

                                            $ruleSetCount++;
                                        }



                                    }else if($item['status'] == 'PAUSED') {

                                        if (count($blacklistConditions) > 0) {
                                            $isResumed = 0;
                                            foreach ($blacklistConditions as $index => $conditions) {
                                                $matchUnpause = array();
                                                $tomatchUnpause = array();
                                                $unpauseMatchCount = 0;
                                                $unpauseConditionCount = 0;
                                                $unpauseMatchCount = 0;
                                                foreach($conditions as $blacklistCon) {
                                                    $variable = $blacklistCon['rule_variable'];
                                                    $condition = $blacklistCon['rule_condition'];
                                                    $value1 = $blacklistCon['value1'];
                                                    $value2 = $blacklistCon['value2'];

                                                    $matchUnpause[] = $variable;
                                                    if ($condition == 'lessthan') {

                                                        if ($item[$variable] <= $value1) {
                                                            $tomatchUnpause[] = $variable;

                                                        }
                                                    } else if ($condition == 'greaterthan') {

                                                        if ($item[$variable] >= $value1) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    } else {

                                                        if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    }
                                                    $result = array_diff($matchUnpause, $tomatchUnpause);
                                                    if (count($result) > 0) {
                                                        $unpauseMatchCount = $unpauseMatchCount + 1;

                                                    }

                                                    $unpauseConditionCount++;
                                                }



                                                if ($unpauseMatchCount == $unpauseConditionCount) {
                                                    if($isResumed == 0){
                                                        $isBan = $this->getBannedPlacement($item[$customVariableKey]);
                                                        if(count($isBan) == 0){
                                                            $query = array('hash' => implode(',', $item[$customVariableKey])
                                                            );
                                                            $url = 'https://panel.zeropark.com/api/campaign/' . $key['campId'] . '/targets/resume/?' . http_build_query($query);
                                                            $response = $zeroparkService->zeroparkRequestAction($url, $query, 'POST', $zeroparkSessionId);                                                            echo '<pre>' , var_dump($response) , '</pre>';
                                                            //$campaignClass->updateBlacklistReport($key['cgid'], $item[$customVariable]);


                                                            if(!isset($response['error'])){
                                                                $this->updateBlacklistReport(
                                                                    $key['cgid'],
                                                                    $item[$customVariable],
                                                                    $item['visits'],
                                                                    $item['clicks'],
                                                                    $item['ctr'],
                                                                    $item['cost'],
                                                                    $item['roi'],
                                                                    $item['conversions'],
                                                                    $key['frequency'],
                                                                    $key['dateTimeUnix'],
                                                                    $timeStamp);
                                                                $isResumed = 1;
                                                            }
                                                        }

                                                    }

                                                }
                                                unset($matchUnpause);
                                                unset($tomatchUnpause);

                                            }


                                        }
                                    }


                                }else if($key['traffic_name'] == 'ExoClick'){
                                    $match = array();
                                    $tomatch = array();
                                    $pauseMatchCount = 0;
                                    $conditionCount = 0;
                                    $matchCount = 0;
                                    if (count($blacklistConditions) > 0) {
                                        foreach ($blacklistConditions as $index => $conditions) {
                                            foreach($conditions as $blacklistCon){
                                                $variable = $blacklistCon['rule_variable'];
                                                $condition = $blacklistCon['rule_condition'];
                                                $value1 = $blacklistCon['value1'];
                                                $value2 = $blacklistCon['value2'];

                                                $match[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatch[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                } else {

                                                    if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                        $tomatch[] = $variable;
                                                    }
                                                }

                                                $result = array_diff($match, $tomatch);


                                                if (count($result) == 0) {
                                                    $matchCount = $matchCount + 1;

                                                }

                                                $conditionCount++;
                                            }
                                            //  echo '<pre>' , var_dump($result) , '</pre>';
                                            // echo $key['camp_name'] . '| ' .  $item[$customVariable] . ' - ' . count($result) . ': ' . $item['visits'] . '<br>';

                                            if ($conditionCount == $matchCount) {
                                                $this->insertBlacklistReport($key['bid'],
                                                    $key['tid'],
                                                    $key['cgid'],
                                                    $key['trafficName'],
                                                    $key['geo'],
                                                    $key['verticalName'],
                                                    $item[$customVariableKey],
                                                    $item['visits'],
                                                    $item['clicks'],
                                                    $item['ctr'],
                                                    $item['cost'],
                                                    $item['conversions'],
                                                    $item['roi'],
                                                    $key['campName'],
                                                    $key['frequency'],
                                                    $key['datetimeunix'],
                                                    $timeStamp);
                                            }

                                            unset($match);
                                            unset($tomatch);


                                        }


                                    }


                                    /**
                                     * Match Unpause
                                     */

                                    $matchUnpause = array();
                                    $tomatchUnpause = array();
                                    $unpauseMatchCount = 0;
                                    $unpauseConditionCount = 0;
                                    $unpauseMatchCount = 0;

                                    if (count($blacklistConditions) > 0) {
                                        $isResumed = 0;
                                        foreach ($blacklistConditions as $index => $conditions) {
                                            foreach($conditions as $blacklistCon) {
                                                $variable = $blacklistCon['rule_variable'];
                                                $condition = $blacklistCon['rule_condition'];
                                                $value1 = $blacklistCon['value1'];
                                                $value2 = $blacklistCon['value2'];

                                                $matchUnpause[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatchUnpause[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatchUnpause[] = $variable;
                                                    }
                                                } else {

                                                    if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                        $tomatchUnpause[] = $variable;
                                                    }
                                                }
                                                $result = array_diff($matchUnpause, $tomatchUnpause);


                                                if (count($result) > 0) {
                                                    $unpauseMatchCount = $unpauseMatchCount + 1;

                                                }

                                                $unpauseConditionCount++;
                                            }



                                            if ($unpauseMatchCount == $unpauseConditionCount) {
                                                if($isResumed == 0){
                                                    if ($key['traffic_name'] = 'ExoClick') {

                                                        $isBan = $this->getBannedPlacement($item[$customVariableKey]);
                                                        if(count($isBan) == 0){
                                                            $response = $exoClickService->exoClickDeleteBlockDomain($exoclickSessionId, $key['campId'], $item[$customVariableKey]);
                                                            if(!isset($response['error'])){
                                                                $this->updateBlacklistReport(
                                                                    $key['cgid'],
                                                                    $item[$customVariableKey],
                                                                    $item['visits'],
                                                                    $item['clicks'],
                                                                    $item['ctr'],
                                                                    $item['cost'],
                                                                    $item['roi'],
                                                                    $item['conversions'],
                                                                    $key['frequency'],
                                                                    $key['datetimeunix'],
                                                                    $timeStamp);
                                                            }
                                                        }

                                                        $isResumed = 1;
                                                    }
                                                }

                                            }

                                            unset($matchUnpause);
                                            unset($tomatchUnpause);

                                        }


                                    }




                                }else{
                                    $match = array();
                                    $tomatch = array();
                                    $pauseMatchCount = 0;
                                    $conditionCount = 0;
                                    $matchCount = 0;
                                    if (count($blacklistConditions) > 0) {
                                        foreach ($blacklistConditions as $index => $conditions) {
                                            foreach($conditions as $blacklistCon){
                                                $variable = $blacklistCon['rule_variable'];
                                                $condition = $blacklistCon['rule_condition'];
                                                $value1 = $blacklistCon['value1'];
                                                $value2 = $blacklistCon['value2'];

                                                $match[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatch[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                } else {

                                                    if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                        $tomatch[] = $variable;
                                                    }
                                                }

                                                $result = array_diff($match, $tomatch);


                                                if (count($result) == 0) {
                                                    $matchCount = $matchCount + 1;

                                                }

                                                $conditionCount++;
                                            }
                                            //  echo '<pre>' , var_dump($result) , '</pre>';
                                            // echo $key['camp_name'] . '| ' .  $item[$customVariable] . ' - ' . count($result) . ': ' . $item['visits'] . '<br>';

                                            if ($conditionCount == $matchCount) {
                                                $this->insertBlacklistReport($key['bid'],
                                                    $key['tid'],
                                                    $key['cgid'],
                                                    $key['trafficName'],
                                                    $key['geo'],
                                                    $key['verticalName'],
                                                    $item[$customVariableKey],
                                                    $item['visits'],
                                                    $item['clicks'],
                                                    $item['ctr'],
                                                    $item['cost'],
                                                    $item['conversions'],
                                                    $item['roi'],
                                                    $key['campName'],
                                                    $key['frequency'],
                                                    $key['datetimeunix'],
                                                    $timeStamp);
                                            }

                                            unset($match);
                                            unset($tomatch);


                                        }


                                    }


                                    /**
                                     * Match Unpause
                                     */

                                    $matchUnpause = array();
                                    $tomatchUnpause = array();
                                    $unpauseMatchCount = 0;
                                    $unpauseConditionCount = 0;
                                    $unpauseMatchCount = 0;

                                    if (count($blacklistConditions) > 0) {
                                        $isResumed = 0;
                                        foreach ($blacklistConditions as $index => $conditions) {
                                            foreach($conditions as $blacklistCon) {
                                                $variable = $blacklistCon['rule_variable'];
                                                $condition = $blacklistCon['rule_condition'];
                                                $value1 = $blacklistCon['value1'];
                                                $value2 = $blacklistCon['value2'];

                                                $matchUnpause[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatchUnpause[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatchUnpause[] = $variable;
                                                    }
                                                } else {

                                                    if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                        $tomatchUnpause[] = $variable;
                                                    }
                                                }
                                                $result = array_diff($matchUnpause, $tomatchUnpause);


                                                if (count($result) > 0) {
                                                    $unpauseMatchCount = $unpauseMatchCount + 1;

                                                }

                                                $unpauseConditionCount++;
                                            }



                                            if ($unpauseMatchCount == $unpauseConditionCount) {
                                                if($isResumed == 0){
                                                    if ($key['traffic_name'] = 'ExoClick') {

                                                        $isBan = $this->getBannedPlacement($item[$customVariableKey]);
                                                        if(count($isBan) == 0){
                                                                $this->updateBlacklistReport(
                                                                    $key['cgid'],
                                                                    $item[$customVariableKey],
                                                                    $item['visits'],
                                                                    $item['clicks'],
                                                                    $item['ctr'],
                                                                    $item['cost'],
                                                                    $item['roi'],
                                                                    $item['conversions'],
                                                                    $key['frequency'],
                                                                    $key['datetimeunix'],
                                                                    $timeStamp);
                                                        }

                                                        $isResumed = 1;
                                                    }
                                                }

                                            }

                                            unset($matchUnpause);
                                            unset($tomatchUnpause);

                                        }


                                    }




                                }
                            }


                            switch($key['traffic_name']){
                                case 'Zeropark':

                                    if(count($targets) > 0){
                                        $targetsToPause = array_unique($targets);

                                        echo 'Target count: ' . count( $targetsToPause) . '<br>';
                                        if(count($targetsToPause) > 100){

                                            $chunks = array_chunk($targetsToPause, 100, true);
                                            foreach($chunks as $chunk){
                                                $targetArray = array();
                                                foreach($chunk as $target){
                                                    $targetArray[] = $target;
                                                }
                                                $query = array('hash' => implode(',', $targetArray)
                                                );
                                                $url = 'https://panel.zeropark.com/api/campaign/' . $key['campId'] . '/targets/pause/?' . http_build_query($query);
                                                $response = $zeroparkService->zeroparkRequestAction($url, $query, 'POST', $zeroparkSessionId);
                                                echo $key['trafficName'] . '<br>';
                                                echo $key['campId'] . '<br>';
                                                echo $key['campName'] . '<br>';
                                                echo '<pre>' , var_dump($response) , '</pre>';
                                                echo '<hr>';
                                            }

                                        }else{
                                            $query = array('hash' => implode(',', $targetsToPause)
                                            );
                                            $url = 'https://panel.zeropark.com/api/campaign/' . $key['campId'] . '/targets/pause/?' . http_build_query($query);
                                            $response = $zeroparkService->zeroparkRequestAction($url, $query, 'POST', $zeroparkSessionId);
                                            echo $key['trafficName'] . '<br>';
                                            echo $key['campId'] . '<br>';
                                            echo $key['campName'] . '<br>';
                                            echo '<pre>' , var_dump($response) , '</pre>';
                                        }



                                    }
                                    break;

                                case 'ExoClick':
                                    if(count($targets) > 0){
                                        $response = json_decode($exoClickService->exoClickPostBlockDomain($exoclickSessionId, $key['campId'], array_unique($targets))->getContent(), true);
                                        echo $key['trafficName'] . '<br>';
                                        echo $key['campId'] . '<br>';
                                        echo $key['campName'] . '<br>';
                                        echo '<pre>' , var_dump($response) , '</pre>';
                                    }
                                    break;
                            }
                        } else {
                            echo '<pre>', var_dump($returnedData['error']), '</pre>';
                        }
                    }
                }

            }
        }



        $output->writeln([
            'Success'
        ]);

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

    public function getCampaignDetailsAllAction()
    {
        $campaign = "AppBundle:Campaign";
        $trafficSource = "AppBundle:Trafficsource";
        $campaignGroups = "AppBundle:Campaigngroups";
        $groups = "AppBundle:Groups";
        $verticals = "AppBundle:Verticals";
        $blacklistRules = "AppBundle:BlacklistRules";
        $em = $this->getContainer()->get('doctrine')->getManager();
        $sql = $em->createQuery(
            "SELECT
                       t.id as tid,
                       ca.id,
                       ca.campId,
                       ca.vid,
                       ca.campName,
                       ca.geo,
                       t.trafficName,
                       g.id,
                       g.groupName,
                       cg.id as cgid,
                       v.verticalName,
                       b.blid,
                       b.active,
                       b.actiontype,
                       b.datetimeunix,
                       b.startfrom,
                       b.datetime,
                       b.frequency
                FROM $campaign ca, $trafficSource t, $groups g, $campaignGroups cg, $verticals v, $blacklistRules b
                WHERE ca.id = cg.cid
                AND ca.tid = t.id
                AND g.id = cg.gid
                AND v.id = cg.verId
                AND b.cgid = cg.id
                AND ca.campName != 'none'
                "
        );
        $result = $sql->getResult();

        return $result;

    }


    public function getCampaignBlacklistConditionsById($cgid)
    {
        $ruleSet = array();

        $appBundleBlacklistRules = 'AppBundle:BlacklistRules';
        $appBundleBlacklistRuleSet = 'AppBundle:BlacklistRuleSet';
        $appBundleBlacklistConditions = 'AppBundle:BlacklistConditions';
        $em = $this->getContainer()->get('doctrine')->getManager();
        $query = $em->createQuery("
                    SELECT p.blid
                    FROM $appBundleBlacklistRules p
                    WHERE p.cgid = $cgid ");

        $content = $query->getResult();

        if (count($content) > 0) {
            $blid = $content[0]['blid'];
            $em = $this->getContainer()->get('doctrine')->getManager();
            $query = $em->createQuery("
                    SELECT p
                    FROM $appBundleBlacklistRuleSet p
                    WHERE p.blid = $blid");

            $content1 = $query->getResult();

            if (count($content1) > 0) {

                foreach ($content1 as $row) {
                    $blrsid = $row->getBlrsid();
                    $query = $em->createQuery("
                    SELECT p
                    FROM $appBundleBlacklistConditions p
                    WHERE p.blrsid = $blrsid");


                    $return = $query->getResult();
                    $ruleConditions = array();
                    for($i = 0; $i < count($return); $i++){
                        $ruleConditions[] = array(
                            'blcid' => $return[$i]->getBlcid(),
                            'blrsid' => $return[$i]->getBlrsid()->getBlrsid(),
                            'rule_condition' => $return[$i]->getRuleCondition(),
                            'rule_variable' => $return[$i]->getRuleVariable(),
                            'value1' => $return[$i]->getValue1(),
                            'value2' => $return[$i]->getValue2()
                        );
                    }

                    $ruleSet[] = $ruleConditions;
                }


            }

        }


        return $ruleSet;

    }

    public function insertBlacklistReport($bid, $tid, $cgid, $traffic_source, $geo, $vertical, $placement, $visits, $clicks, $ctr, $cost, $conversions, $roi, $campaignName, $frequency, $startFrom, $dateExecuted){


        $em = $this->getContainer()->get('doctrine')->getManager();
        $botReportEntity = $em->getRepository('AppBundle:ReportsBlacklist')->findOneBy(array('cgid' => $cgid, 'placement' => $placement));

        if($botReportEntity){
            $botReportEntity->setBid($bid);
            $botReportEntity->setTid($tid);
            $botReportEntity->setCgid($cgid);
            $botReportEntity->setTrafficSource($traffic_source);
            $botReportEntity->setGeo($geo);
            $botReportEntity->setVertical($vertical);
            $botReportEntity->setPlacement($placement);
            $botReportEntity->setVisits($visits);
            $botReportEntity->setClicks($clicks);
            $botReportEntity->setCtr($ctr);
            $botReportEntity->setCost($cost);
            $botReportEntity->setConversions($conversions);
            $botReportEntity->setRoi($roi);
            $botReportEntity->setCampaignName($campaignName);
            $botReportEntity->setFrequency($frequency);
            $botReportEntity->setStartFrom($startFrom);
            $botReportEntity->setDateExecuted($dateExecuted);
            $botReportEntity->setStatus('PAUSED');

            $em->flush();

        }else{
            $botReportEntity = new Reportsbot();
            $botReportEntity->setBid($bid);
            $botReportEntity->setTid($tid);
            $botReportEntity->setCgid($cgid);
            $botReportEntity->setTrafficSource($traffic_source);
            $botReportEntity->setGeo($geo);
            $botReportEntity->setVertical($vertical);
            $botReportEntity->setPlacement($placement);
            $botReportEntity->setVisits($visits);
            $botReportEntity->setClicks($clicks);
            $botReportEntity->setCtr($ctr);
            $botReportEntity->setCost($cost);
            $botReportEntity->setConversions($conversions);
            $botReportEntity->setRoi($roi);
            $botReportEntity->setCampaignName($campaignName);
            $botReportEntity->setFrequency($frequency);
            $botReportEntity->setStartFrom($startFrom);
            $botReportEntity->setDateExecuted($dateExecuted);
            $botReportEntity->setStatus('PAUSED');
            $em->persist($botReportEntity);
            $em->flush();
        }

    }


    public function updateBlacklistReport($cgid, $placement, $visits, $clicks, $ctr, $cost, $roi, $conversions, $frequency, $dateTimeUnix, $timestamp){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $botReportEntity = $em->getRepository('AppBundle:ReportsBlacklist')->findOneBy(array('cgid' => $cgid, 'placement' => $placement));
        $botReportEntity->setVisits($visits);
        $botReportEntity->setClicks($clicks);
        $botReportEntity->setCtr($ctr);
        $botReportEntity->setCost($cost);
        $botReportEntity->setConversions($conversions);
        $botReportEntity->setRoi($roi);
        $botReportEntity->setFrequency($frequency);
        $botReportEntity->setStartFrom($dateTimeUnix);
        $botReportEntity->setDateExecuted($timestamp);
        $botReportEntity->setStatus('RESUMED');
        $em->persist($botReportEntity);
        $em->flush();
    }


    public function getBannedPlacement($placement){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $bannedPlacementEntity = $em->getRepository('AppBundle:BannedPlacement')->findOneBy(array('placement' => $placement));

        if($bannedPlacementEntity){
            $data = array('placement' => $bannedPlacementEntity->getPlacement());
        }else{
            $data = array();
        }


        return $data;

    }

}