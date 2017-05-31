<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/30/2017
 * Time: 12:50 AM
 */

namespace AppBundle\Command;

use AppBundle\Entity\CampaignRulesPlacementList;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;

use AppBundle\Entity\ReportsIp;


class CronGetLiveVisitsCommand extends ContainerAwareCommand{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:get-live-visits')

            // the short description shown while running "php bin/console list"
            ->setDescription('Get Live Visits')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $voluumService = $this->getContainer()->get('app.voluum_api_controller');
        $apiCredentials = $this->getApiCredentialsAllAction();
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $campaigns = $this->getCampaigns();
        $objectArray = array();
        $em = $this->getContainer()->get('doctrine')->getManager();
        foreach($campaigns as $key){

            $url = 'https://api.voluum.com/report/live/visits/'.$key['vid'].'?';
            $query = array(
                'tz' => 'America/Chicago'
            );
            $returnedData = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);


            $batch = 100;
            $i = 0;
            if(!isset($returnedData['error'])){
                foreach($returnedData['rows'] as $item) {
                    if($item['mobileCarrier'] == NULL || $item['mobileCarrier'] == ''){
                        $mobileCarrier = 'Unknown';
                    }else{
                        $mobileCarrier = $item['mobileCarrier'];
                    }
                    $ip = explode('.', $item['ip']);
                    $ipArray[] = $ip[0] . '.' . $ip[1] . '.0.0/16';

                    $getDuplicate = $this->getDuplicateIp($key['trafficName'], $key['campName'], $item['countryCode'], $ip[0] . '.' . $ip[1] . '.0.0/16');

                    if ($getDuplicate == false) {
                        $entity = new ReportsIp();
                        $entity->setTrafficName($key['trafficName']);
                        $entity->setCampaignName($key['campName']);
                        $entity->setGeo($item['countryCode']);
                        $entity->setMobileCarrier($mobileCarrier);
                        $entity->setIsp($item['isp']);
                        $entity->setIp($ip[0] . '.' . $ip[1] . '.0.0/16');
                        $em->persist($entity);
                        if(($i % $batch) == 0){
                            $em->flush();
                        }

                    }


                    $em->flush();
                    $em->clear();


                }



            }else{
              //  echo '<pre>' , var_dump($returnedData['error']) , '</pre>';
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

    public function getCampaigns(){
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
                       v.verticalName
                FROM $campaign ca, $trafficSource t, $verticals v
                WHERE
                ca.tid = t.id
                AND v.id = ca.verId
                AND ca.campName != 'none'
                "
        );
        $result = $sql->getResult();

        return $result;

    }

    public function getDuplicateIp($trafficName, $campaignName, $countryCode, $ip){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ReportsIp')->findOneBy(array(
            'trafficName' => $trafficName,
            'campaignName' => $campaignName,
            'geo' => $countryCode,
            'ip' => $ip
        ));

        if($entity){
            return true;
        }else{
            false;
        }
    }



}