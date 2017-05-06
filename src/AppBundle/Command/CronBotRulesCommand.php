<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/15/2017
 * Time: 1:36 AM
 */

namespace AppBundle\Command;

use AppBundle\Entity\CampaignRulesPlacementList;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;


use AppBundle\Entity\BotRules;
use AppBundle\Entity\BotRuleSet;
use AppBundle\Entity\BotConditions;
use AppBundle\Entity\Reportsbot;
use AppBundle\Entity\BannedPlacement;

use AppBundle\Entity\CampaignRules;
use AppBundle\Entity\CampaignRulesConditions;

use AppBundle\Entity\SafeListPlacements;

class CronBotRulesCommand extends ContainerAwareCommand{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:bot-rules')

            // the short description shown while running "php bin/console list"
            ->setDescription('Executes Bot Rules')

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

            if($key['ruleType'] == 'whitelist'){
                $status = 'WHITE LISTED';
            }else{
                $status = 'PAUSED';
            }

            if($key['safeListActive'] == true){
                $safeList = $this->getSafeListPlacement($key['id']);
            }else{
                $safeList = array();
            }

            $em = $this->getContainer()->get('doctrine')->getManager();
            $trafficSourceEntity = $em->getRepository('AppBundle:TrafficSource')
                ->findOneBy(array('trafficName' => $key['trafficName']));

            $customVariable = $trafficSourceEntity->getCustomVariable();
            $customVariableKey = $trafficSourceEntity->getCustomVariableKey();

            $ruleConditions = $this->getCampaignConditionsById($key['campaignRulesId']);


            $dateFrom = (array) $key['startFrom'];
            $timeStart = date('c', $key['datetimeunix']);
            $timeSetStart =  date('Y-m-d', strtotime($dateFrom['date'])) . 'T00:00:00' . date('P');
            $frequency = $key['frequency'];

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


            if ($dateTimeNow >= $timeStart) {
                if (in_array($dateTimeNow, $commonService->hoursInterval($date, $to, $freq, $format))) {
                    $tz = 'America/New_York';
                    $sort = 'visits';
                    $direction = 'desc';
                    $limit = 10000;
                    $output->writeln([
                        $key['ruleType'], $key['trafficName'], $key['campName']
                    ]);
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
                    $zeroParkToResumeTargets = array();

                    if ($key['active'] == 1) {
                        if (!isset($returnedData['error'])) {
                            $targets = array();
                            foreach ($returnedData['rows'] as $item) {
                                if(!in_array($item[$customVariableKey], $safeList)){
                                    if ($key['trafficName'] == 'Zeropark') {
                                        $ruleSetCount = 1;
                                        if (count($ruleConditions) > 0) {
                                            $match = array();
                                            $tomatch = array();
                                            $pauseMatchCount = 0;
                                            $conditionCount = 0;
                                            $matchCount = 0;
                                            foreach ($ruleConditions as $conditions ) {

                                                $variable = $conditions['rule_variable'];
                                                $condition = $conditions['rule_condition'];
                                                $value1 = $conditions['value1'];
                                                $value2 = $conditions['value2'];

                                                $match[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatch[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                } else if ($condition == 'equalto'){
                                                    if ($item[$variable] == $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                }
                                                else {

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
                                            if($key['operator'] == 'and'){
                                                if ($conditionCount == $matchCount) {
                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBotReport($key['campaignRulesId'],
                                                        $key['tid'],
                                                        $key['id'],
                                                        $key['ruleType'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['conversions'],
                                                        $item['revenue'],
                                                        $item['cost'],
                                                        $item['profit'],
                                                        $item['cpv'],
                                                        $item['epv'],
                                                        $item['roi'],
                                                        $timeStamp,
                                                        $status
                                                    );


                                                }

                                                unset($match);
                                                unset($tomatch);
                                                //   $ruleSetCount++;
                                            }else{
                                                if ($matchCount > 0) {
                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBotReport($key['campaignRulesId'],
                                                        $key['tid'],
                                                        $key['id'],
                                                        $key['ruleType'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['conversions'],
                                                        $item['revenue'],
                                                        $item['cost'],
                                                        $item['profit'],
                                                        $item['cpv'],
                                                        $item['epv'],
                                                        $item['roi'],
                                                        $timeStamp,
                                                        $status
                                                    );
                                                }

                                                unset($match);
                                                unset($tomatch);
                                                $ruleSetCount++;
                                            }






                                        }

                                        if($key['ruleType'] == 'botRule' || $key['ruleType'] == 'blacklistRule'){
                                            $isResumed = 0;
                                            if (count($ruleConditions) > 0) {
                                                $matchUnpause = array();
                                                $tomatchUnpause = array();
                                                $unpauseMatchCount = 0;
                                                $unpauseConditionCount = 0;
                                                $unpauseMatchCount = 0;
                                                foreach ($ruleConditions as $conditions ) {
                                                    $variable = $conditions['rule_variable'];
                                                    $condition = $conditions['rule_condition'];
                                                    $value1 = $conditions['value1'];
                                                    $value2 = $conditions['value2'];

                                                    $matchUnpause[] = $variable;
                                                    if ($condition == 'lessthan') {

                                                        if ($item[$variable] <= $value1) {
                                                            $tomatchUnpause[] = $variable;

                                                        }
                                                    } else if ($condition == 'greaterthan') {

                                                        if ($item[$variable] >= $value1) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    } else if ($condition == 'equalto'){
                                                        if ($item[$variable] == $value1) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    }
                                                    else {

                                                        if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    }

                                                    $result = array_diff($matchUnpause, $tomatchUnpause);
                                                    if (count($result) == 0) {
                                                        $unpauseMatchCount = $unpauseMatchCount + 1;
                                                    }

                                                    $unpauseConditionCount++;

                                                }
                                                if($key['operator'] == 'and'){
                                                    if ($unpauseMatchCount == $unpauseConditionCount) {
                                                        if ($isResumed == 0) {
                                                            $zeroParkToResumeTargets[] =$item[$customVariableKey];

                                                            if(!isset($response['error'])){
                                                                $this->updateBotReport(
                                                                    $key['id'],
                                                                    $item[$customVariableKey],
                                                                    $item['visits'],
                                                                    $item['clicks'],
                                                                    $item['ctr'],
                                                                    $item['conversions'],
                                                                    $item['revenue'],
                                                                    $item['cost'],
                                                                    $item['profit'],
                                                                    $item['cpv'],
                                                                    $item['epv'],
                                                                    $item['roi'],
                                                                    $timeStamp);
                                                            }
                                                            $isResumed = 1;
                                                        }
                                                    }

                                                    unset($matchUnpause);
                                                    unset($tomatchUnpause);
                                                }else{
                                                    if ($unpauseMatchCount > 0) {
                                                        $targets[] = $item[$customVariableKey];
                                                        $this->updateBotReport(
                                                            $key['id'],
                                                            $item[$customVariableKey],
                                                            $item['visits'],
                                                            $item['clicks'],
                                                            $item['ctr'],
                                                            $item['conversions'],
                                                            $item['revenue'],
                                                            $item['cost'],
                                                            $item['profit'],
                                                            $item['cpv'],
                                                            $item['epv'],
                                                            $item['roi'],
                                                            $timeStamp);
                                                    }

                                                    unset($match);
                                                    unset($tomatch);
                                                    // $ruleSetCount++;
                                                }

                                            }
                                        }



                                    }else if($key['trafficName'] == 'ExoClick'){
                                        $ruleSetCount = 1;
                                        if (count($ruleConditions) > 0) {
                                            $match = array();
                                            $tomatch = array();
                                            $pauseMatchCount = 0;
                                            $conditionCount = 0;
                                            $matchCount = 0;
                                            foreach ($ruleConditions as $conditions ) {
                                                $variable = $conditions['rule_variable'];
                                                $condition = $conditions['rule_condition'];
                                                $value1 = $conditions['value1'];
                                                $value2 = $conditions['value2'];

                                                $match[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatch[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                } else if ($condition == 'equalto'){
                                                    if ($item[$variable] == $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                }
                                                else {

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
                                            if($key['operator'] == 'and'){
                                                if ($conditionCount == $matchCount) {
                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBotReport($key['campaignRulesId'],
                                                        $key['tid'],
                                                        $key['id'],
                                                        $key['ruleType'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['conversions'],
                                                        $item['revenue'],
                                                        $item['cost'],
                                                        $item['profit'],
                                                        $item['cpv'],
                                                        $item['epv'],
                                                        $item['roi'],
                                                        $timeStamp,
                                                        $status
                                                    );


                                                }

                                                unset($match);
                                                unset($tomatch);
                                                //    $ruleSetCount++;
                                            }else{
                                                if ($matchCount > 0) {
                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBotReport($key['campaignRulesId'],
                                                        $key['tid'],
                                                        $key['id'],
                                                        $key['ruleType'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['conversions'],
                                                        $item['revenue'],
                                                        $item['cost'],
                                                        $item['profit'],
                                                        $item['cpv'],
                                                        $item['epv'],
                                                        $item['roi'],
                                                        $timeStamp,
                                                        $status
                                                    );
                                                }

                                                unset($match);
                                                unset($tomatch);
                                                //$ruleSetCount++;
                                            }
                                        }

                                        if($key['ruleType'] == 'botRule' || $key['ruleType'] == 'blacklistRule'){
                                            $isResumed = 0;
                                            if (count($ruleConditions) > 0) {
                                                $matchUnpause = array();
                                                $tomatchUnpause = array();
                                                $unpauseMatchCount = 0;
                                                $unpauseConditionCount = 0;
                                                $unpauseMatchCount = 0;
                                                foreach ($ruleConditions as $conditions ) {
                                                    $variable = $conditions['rule_variable'];
                                                    $condition = $conditions['rule_condition'];
                                                    $value1 = $conditions['value1'];
                                                    $value2 = $conditions['value2'];

                                                    $matchUnpause[] = $variable;
                                                    if ($condition == 'lessthan') {

                                                        if ($item[$variable] <= $value1) {
                                                            $tomatchUnpause[] = $variable;

                                                        }
                                                    } else if ($condition == 'greaterthan') {

                                                        if ($item[$variable] >= $value1) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    } else if ($condition == 'equalto'){
                                                        if ($item[$variable] == $value1) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    }
                                                    else {

                                                        if ($item[$variable] >= $value1 && $item[$variable] <= $value2) {
                                                            $tomatchUnpause[] = $variable;
                                                        }
                                                    }

                                                    $result = array_diff($matchUnpause, $tomatchUnpause);
                                                    if (count($result) == 0) {
                                                        $unpauseMatchCount = $unpauseMatchCount + 1;
                                                    }

                                                    $unpauseConditionCount++;

                                                }
                                                if($key['operator'] == 'and'){
                                                    if ($unpauseMatchCount == $unpauseConditionCount) {
                                                        if ($isResumed == 0) {
                                                            $response = $exoClickService->exoClickDeleteBlockDomain($exoclickSessionId, $key['campId'], $item[$customVariableKey]);
                                                            if(!isset($response['error'])){
                                                                $this->updateBotReport(
                                                                    $key['id'],
                                                                    $item[$customVariableKey],
                                                                    $item['visits'],
                                                                    $item['clicks'],
                                                                    $item['ctr'],
                                                                    $item['conversions'],
                                                                    $item['revenue'],
                                                                    $item['cost'],
                                                                    $item['profit'],
                                                                    $item['cpv'],
                                                                    $item['epv'],
                                                                    $item['roi'],
                                                                    $timeStamp);
                                                            }
                                                            $isResumed = 1;
                                                        }
                                                    }

                                                    unset($matchUnpause);
                                                    unset($tomatchUnpause);
                                                }else{
                                                    if ($unpauseMatchCount > 0) {
                                                        $targets[] = $item[$customVariableKey];
                                                        $response = $exoClickService->exoClickDeleteBlockDomain($exoclickSessionId, $key['campId'], $item[$customVariableKey]);
                                                        $this->updateBotReport(
                                                            $key['id'],
                                                            $item[$customVariableKey],
                                                            $item['visits'],
                                                            $item['clicks'],
                                                            $item['ctr'],
                                                            $item['conversions'],
                                                            $item['revenue'],
                                                            $item['cost'],
                                                            $item['profit'],
                                                            $item['cpv'],
                                                            $item['epv'],
                                                            $item['roi'],
                                                            $timeStamp);
                                                    }

                                                    unset($match);
                                                    unset($tomatch);
                                                    //  $ruleSetCount++;
                                                }

                                            }
                                        }

                                    }else{
                                        if (count($ruleConditions) > 0) {
                                            $match = array();
                                            $tomatch = array();
                                            $pauseMatchCount = 0;
                                            $conditionCount = 0;
                                            $matchCount = 0;
                                            foreach ($ruleConditions as $conditions ) {
                                                $variable = $conditions['rule_variable'];
                                                $condition = $conditions['rule_condition'];
                                                $value1 = $conditions['value1'];
                                                $value2 = $conditions['value2'];

                                                $match[] = $variable;
                                                if ($condition == 'lessthan') {

                                                    if ($item[$variable] <= $value1) {
                                                        $tomatch[] = $variable;

                                                    }
                                                } else if ($condition == 'greaterthan') {

                                                    if ($item[$variable] >= $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                } else if ($condition == 'equalto'){
                                                    if ($item[$variable] == $value1) {
                                                        $tomatch[] = $variable;
                                                    }
                                                }
                                                else {

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
                                            if($key['operator'] == 'and'){
                                                if ($conditionCount == $matchCount) {

                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBotReport($key['campaignRulesId'],
                                                        $key['tid'],
                                                        $key['id'],
                                                        $key['ruleType'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['conversions'],
                                                        $item['revenue'],
                                                        $item['cost'],
                                                        $item['profit'],
                                                        $item['cpv'],
                                                        $item['epv'],
                                                        $item['roi'],
                                                        $timeStamp,
                                                        $status
                                                    );


                                                }

                                                unset($match);
                                                unset($tomatch);
                                                // $ruleSetCount++;
                                            }else{
                                                if ($matchCount > 0) {
                                                    $targets[] = $item[$customVariableKey];
                                                    $this->insertBotReport($key['campaignRulesId'],
                                                        $key['tid'],
                                                        $key['id'],
                                                        $key['ruleType'],
                                                        $item[$customVariableKey],
                                                        $item['visits'],
                                                        $item['clicks'],
                                                        $item['ctr'],
                                                        $item['conversions'],
                                                        $item['revenue'],
                                                        $item['cost'],
                                                        $item['profit'],
                                                        $item['cpv'],
                                                        $item['epv'],
                                                        $item['roi'],
                                                        $timeStamp,
                                                        $status
                                                    );
                                                }

                                                unset($match);
                                                unset($tomatch);
                                                // $ruleSetCount++;
                                            }
                                        }
                                    }
                                }
                                }



                            /**
                             * Zeropark resume targets
                             */


                            /*
                            if(count($zeroParkToResumeTargets) > 0 ){
                                $query = array('hash' => implode(',', $zeroParkToResumeTargets));
                                $url = 'https://panel.zeropark.com/api/campaign/' . $key['campId'] . '/target/sresume/?' . http_build_query($query);
                                $return = $zeroparkService->zeroparkRequestAction($url, $query, 'POST', $zeroparkSessionId);
                                $output->writeln([
                                    json_encode($return)
                                ]);

                            }
                            */
                            switch($key['trafficName']){
                                case 'Zeropark':
                                    if(count($targets) > 0){
                                        $targetsToPause = array_unique($targets);

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
                                                $response = $zeroparkService->zeroparkRequestAction($url, $query, 1, $zeroparkSessionId);
                                                $output->writeln([
                                                    json_encode($response)
                                                ]);

                                            }

                                        }else{
                                            $query = array('hash' => implode(',', $targetsToPause)
                                            );
                                            $url = 'https://panel.zeropark.com/api/campaign/' . $key['campId'] . '/targets/pause/?' . http_build_query($query);
                                            $response = json_decode($zeroparkService->zeroparkRequestAction($url, $query, 1, $zeroparkSessionId), true);
                                            $output->writeln([
                                            json_encode($response)
                                            ]);
                                        }

                                    }

                                    break;

                                case 'ExoClick':
                                    if(count($targets) > 0){
                                        $response = json_decode($exoClickService->exoClickPostBlockDomain($exoclickSessionId, $key['campId'], array_unique($targets))->getContent(), true);
                                        $output->writeln([
                                            json_encode($response)
                                        ]);
                                    }
                                    break;
                            }

                        }else {
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
        $verticals = "AppBundle:Verticals";
        $campaignRules = "AppBundle:CampaignRules";
        $em = $this->getContainer()->get('doctrine')->getManager();
        $sql = $em->createQuery(
            "SELECT
                       t.id as tid,
                       ca.id,
                       ca.campId,
                       ca.vid,
                       ca.campName,
                       ca.geo,
                       ca.safeListActive,
                       t.trafficName,
                       v.verticalName,
                       cr.campaignRulesId,
                       cr.startFrom,
                       cr.datetimeunix,
                       cr.frequency,
                       cr.active,
                       cr.operator,
                       cr.dateUpdated,
                       cr.ruleType
                FROM $campaign ca, $trafficSource t, $verticals v, $campaignRules cr
                WHERE
                ca.tid = t.id
                AND v.id = ca.verId
                AND cr.cid = ca.id
                AND ca.campName != 'none'
                "
        );
        $result = $sql->getResult();

        return $result;

    }


    public function getCampaignConditionsById($id)
    {
        $ruleConditions = array();
        $em = $this->getContainer()->get('doctrine')->getManager();
        $ruleEntity = $em->getRepository('AppBundle:CampaignRules')->find($id);
        $conditionsEntity = $em->getRepository('AppBundle:CampaignRulesConditions')->findBy(array('campaignRule' => $ruleEntity));

        if($conditionsEntity){
            for($i = 0; $i < count($conditionsEntity); $i++){
                $ruleConditions[] = array(
                    'campaignRulesConditionId' => $conditionsEntity[$i]->getCampaignRulesConditionId(),
                    'campaignRuleId' => $conditionsEntity[$i]->getCampaignRule(),
                    'rule_condition' => $conditionsEntity[$i]->getRuleCondition(),
                    'rule_variable' => $conditionsEntity[$i]->getRuleVariable(),
                    'value1' => $conditionsEntity[$i]->getValue1(),
                    'value2' => $conditionsEntity[$i]->getValue2()
                );
            }
        }


        return $ruleConditions;
    }

    public function insertBotReport($campaignRulesId, $tid, $cid, $type, $placement, $visits, $clicks, $ctr, $conversions, $revenue, $cost, $profit, $cpv, $epv, $roi, $dateExecuted, $status){


        $em = $this->getContainer()->get('doctrine')->getManager();
        $botReportEntity = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findOneBy(array('cid' => $cid, 'placement' => $placement));

        if($botReportEntity){
            $botReportEntity->setCampaignRulesId($campaignRulesId);
            $botReportEntity->setTid($tid);
            $botReportEntity->setCid($cid);
            $botReportEntity->setType($type);
            $botReportEntity->setPlacement($placement);
            $botReportEntity->setVisits($visits);
            $botReportEntity->setClicks($clicks);
            $botReportEntity->setCtr($ctr);
            $botReportEntity->setConversions($conversions);
            $botReportEntity->setRevenue($revenue);
            $botReportEntity->setCost($cost);
            $botReportEntity->setProfit($profit);
            $botReportEntity->setCpv($cpv);
            $botReportEntity->setEpv($epv);
            $botReportEntity->setRoi($roi);
            $botReportEntity->setDateExecuted($dateExecuted);
            $botReportEntity->setStatus($status);

            $em->flush();

        }else{
            $botReportEntity = new CampaignRulesPlacementList();
            $botReportEntity->setCampaignRulesId($campaignRulesId);
            $botReportEntity->setTid($tid);
            $botReportEntity->setCid($cid);
            $botReportEntity->setType($type);
            $botReportEntity->setPlacement($placement);
            $botReportEntity->setVisits($visits);
            $botReportEntity->setClicks($clicks);
            $botReportEntity->setCtr($ctr);
            $botReportEntity->setConversions($conversions);
            $botReportEntity->setRevenue($revenue);
            $botReportEntity->setCost($cost);
            $botReportEntity->setProfit($profit);
            $botReportEntity->setCpv($cpv);
            $botReportEntity->setEpv($epv);
            $botReportEntity->setRoi($roi);
            $botReportEntity->setDateExecuted($dateExecuted);
            $botReportEntity->setStatus($status);
            $em->persist($botReportEntity);
            $em->flush();
        }

    }


    public function updateBotReport($cid, $placement, $visits, $clicks, $ctr, $conversions, $revenue, $cost, $profit, $cpv, $epv, $roi, $dateExecuted){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $botReportEntity = $em->getRepository('AppBundle:ReportsBlacklist')->findOneBy(array('id' => $cid, 'placement' => $placement));
        if($botReportEntity) {
            $botReportEntity->setVisits($visits);
            $botReportEntity->setClicks($clicks);
            $botReportEntity->setCtr($ctr);
            $botReportEntity->setConversions($conversions);
            $botReportEntity->setRevenue($revenue);
            $botReportEntity->setCost($cost);
            $botReportEntity->setProfit($profit);
            $botReportEntity->setCpv($cpv);
            $botReportEntity->setEpv($epv);
            $botReportEntity->setRoi($roi);
            $botReportEntity->setDateExecuted($dateExecuted);
            $botReportEntity->setStatus('RESUMED');
            $em->flush();
        }
    }


    public function insertBannedPlacement($placement, $visits, $cost, $conversions, $ctr, $roi){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $botReportEntity = new BannedPlacement();
        $botReportEntity->setPlacement($placement);
        $botReportEntity->setVisits($visits);
        $botReportEntity->setCost($cost);
        $botReportEntity->setConversions($conversions);
        $botReportEntity->setCtr($ctr);
        $botReportEntity->setRoi($roi);
        $em->persist($botReportEntity);
        $em->flush();
    }

    public function getSafeListPlacement($cid){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $safeList = $em->getRepository('AppBundle:SafeListPlacements')->findBy(array('cid' => $cid));
        $data = array();
        for($x = 0; $x < count($safeList); $x++){
            $data[] = $safeList[$x]->getPlacement();
        }


        return $data;

    }

}