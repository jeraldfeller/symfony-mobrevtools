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


        $apiCredentials = $this->getApiCredentialsAllAction();
        $voluumSessionId = $apiCredentials[0]['voluum'];



        $campaignGroups = $this->getCampaignDetailsAllAction();
        $date = date('Y-m-d');
        $timeStamp = time();
        foreach($campaignGroups as $key) {

            $em = $this->getContainer()->get('doctrine')->getManager();
            $trafficSourceEntity = $em->getRepository('AppBundle:TrafficSource')
                ->findOneBy(array('trafficName' => $key['trafficName']));

            $customVariable = $trafficSourceEntity->getCustomVariable();
            $customVariableKey = $trafficSourceEntity->getCustomVariableKey();

            $botConditions = $this->getCampaignBotConditionsById($key['cgid']);


            $dateFrom = (array) $key['datefrom'];
            $timeStart = date('c', $key['datetimeunix']);
            $split = explode(':', $key['datetime']);
            $timeSetStart =  $dateFrom['date'] . 'T' . $split[0] . ':00:00' . date('P');
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

            if ($dateTimeNow >= $timeStart) {
                if (in_array($dateTimeNow, $commonService->hoursInterval($date, $to, $freq, $format))) {
                    $tz = 'America/Chicago';
                    $sort = 'visits';
                    $direction = 'desc';
                    $limit = '10000';

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
                        'columns' => 'errors',
                        'groupBy' => $customVariable,
                        'offset' => 0,
                        'limit' => $limit,
                        'include' => 'active',
                        'filter1' => 'campaign',
                        'filter1Value' => $key['vid']
                    );
                    $url = 'https://portal.voluum.com/report?';
                    $returnedData = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                    var_dump($returnedData);

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
        $botRules = "AppBundle:BotRules";
        $em = $this->getContainer()->get('doctrine')->getManager();
        $sql = $em->createQuery(
            "SELECT
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
                       b.bid,
                       b.datetimeunix,
                       b.datefrom,
                       b.datetime,
                       b.frequency,
                       b.active,
                       b.dateupdated
                FROM $campaign ca, $trafficSource t, $groups g, $campaignGroups cg, $verticals v, $botRules b
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


    public function getCampaignBotConditionsById($cgid)
    {
        $ruleSet = array();

        $appBundleBotRules = 'AppBundle:BotRules';
        $appBundleBotRuleSet = 'AppBundle:BotRuleSet';
        $appBundleBotConditions = 'AppBundle:BotConditions';
        $em = $this->getContainer()->get('doctrine')->getManager();
        $query = $em->createQuery("
                    SELECT p.bid
                    FROM $appBundleBotRules p
                    WHERE p.cgid = $cgid ");

        $content = $query->getResult();

        if (count($content) > 0) {
            $bid = $content[0]['bid'];
            $em = $this->getContainer()->get('doctrine')->getManager();
            $query = $em->createQuery("
                    SELECT p
                    FROM $appBundleBotRuleSet p
                    WHERE p.bid = $bid ");

            $content1 = $query->getResult();

            if (count($content1) > 0) {


                foreach ($content1 as $row) {


                    $brsid = $row->getBrsid();
                    $query = $em->createQuery("
                    SELECT p
                    FROM $appBundleBotConditions p
                    WHERE p.brsid = $brsid ");
                    $return = $query->getResult();
                    $ruleConditions = array();
                    for($i = 0; $i < count($return); $i++){
                        $ruleConditions[] = array(
                            'bcid' => $return[$i]->getBcid(),
                            'brsid' => $return[$i]->getBrsid()->getBrsid(),
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

}