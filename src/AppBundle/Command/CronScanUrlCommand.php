<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/5/2017
 * Time: 12:13 AM
 */

namespace AppBundle\Command;

use AppBundle\Entity\CampaignRulesPlacementList;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ApiCredentials;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Controller\SessionController;

use AppBundle\Entity\ScannedUrls;

class CronScanUrlCommand extends  ContainerAwareCommand{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:scan-url')

            // the short description shown while running "php bin/console list"
            ->setDescription('Executes Scan Url')

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

        $ymd = date('Y-m-d');
        $hmi = date('H:00:00');

        $from = $ymd.'T00:00:00';
        $to = $ymd.'T'.$hmi;
        $currentHour = date('H');

            //$landersClass->clearScannedUrl();

            $tz = 'America/Chicago';
            $sort = 'visits';
            $direction = 'desc';
            $limit = 1000;
            $query = array('from' => $from,
                'to' => $to,
                'tz' => $tz,
                'sort' => $sort,
                'direction' => $direction,
                'columns' => 'landerName',
                'columns' => 'landerUrl',
                'columns' => 'ctr',
                'columns' => 'cr',
                'columns' => 'cv',
                'columns' => 'roi',
                'columns' => 'epv',
                'columns' => 'epc',
                'columns' => 'ap',
                'groupBy' => 'lander',
                'offset' => 0,
                'limit' => $limit,
                'include' => 'active',
            );
            $url = 'https://api.voluum.com/report?';
            $landers = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);


            $query = array();
            $url = 'https://api.voluum.com/setup';

            $domains = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);

            $scannedUrlObj = $this->getUrlsByColumn('isScanned', 1);
            $savedUrls = $this->getScannedUrls();

            $data = array();
            $urlData = array();
            $toScanUrl = array();
            $scannedUrl = array();
            $landerIds = array();
            foreach($scannedUrlObj as $scanObj){
                $scannedUrl[] = $scanObj['url'];
            }
            foreach($domains['domains']['internalDomains'] as $internal){
                $urlData[] = $internal['address'];
                $landerIds[] = array('url' => $internal['address'], 'id' => '');
            }
            foreach($domains['domains']['customDomains'] as $custom){
                $urlData[] = $custom['address'];
                $landerIds[] = array('url' => $custom['address'], 'id' => '');
            }
            foreach($landers['rows'] as $lander){

                if($lander['landerUrl'] != ''){
                    if($lander['visits'] >= 100){

                        $urlData[] = strtok($lander['landerUrl'], '?');
                        $landerIds[] = array('url' => strtok($lander['landerUrl'], '?'), 'id' => $lander['landerId']);
                        $url =  parse_url($lander['landerUrl']);
                        if(isset($url['host'])){
                            $urlData[] = $url['host'];
                            $landerIds[] = array('url' => $url['host'], 'id' => $lander['landerId']);
                        }
                    }
                }
            }

            $uniqueUrl = array_unique($urlData);
            for($i = 0; $i < count($uniqueUrl); $i++){
                if(isset($uniqueUrl[$i])){
                    if(!in_array($uniqueUrl[$i], $scannedUrl)){
                        $toScanUrl[] = $uniqueUrl[$i];
                    }
                }
            }

            if(count($toScanUrl) > 0 ){
                for($i = 0; $i < count($toScanUrl); $i++){
                    //$sendRequestResponse = $apiClass->sendUrlToScan($toScanUrl[$i]);
                    $isUrlExists = $this->checkUrlExist($toScanUrl[$i]);
                    if(count($isUrlExists) == 0){

                        foreach($landerIds as $lanId){
                            if($lanId['url'] == $toScanUrl[$i]){
                                $landerId = $lanId['id'];
                                break;
                            }
                        }

                        $data[] = array(
                            'landerId' => $landerId,
                            'url' => $toScanUrl[$i],
                            'toCheck' => 1
                        );
                    }
                }
            }

            foreach($savedUrls as $url){
                if(!in_array($url['url'], $toScanUrl)){
                    $this->deleteUrl($url['url']);
                }
            }

            if(count($data) > 0){
                $this->insertScannedUrls($data);
            }


            $savedUrls = $this->getScannedUrls();

            $x = 0;
            foreach($savedUrls as $url){
                if(($x % 4) == 0){
                    sleep(60);
                }
                if($url['toCheck'] == true){
                    $sendRequestResponse = $this->sendUrlToScan($toScanUrl[$x]);
                    if(!isset($sendRequestResponse['error'])){
                        $this->updateScannedUrls($toScanUrl[$x], $sendRequestResponse['scan_id']);
                    }
                }
                $x++;
            }




    }


    public function getUrlsByColumn($column, $value){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->findBy(array($column => $value));
        $data = array();
        for($i = 0; $i < count($entity); $i++){
            $data[] = array('url' => $entity[$i]->getUrl());
        }


        return $data;

    }

    public function getScannedUrls(){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->findAll();
        $data = array();
        for($i = 0; $i < count($entity); $i++){
            $data[] = array(
                'url' => $entity[$i]->getUrl(),
                'toCheck' => $entity[$i]->getToCheck()
            );
        }


        return $data;
    }

    public function checkUrlExist($url){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->findBy(array('url' => $url));
        return $entity;
    }

    public function deleteUrl($url){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->findOneBy(array('url' => $url));
        $em->remove($entity);
        $em->flush();

    }

    public function insertScannedUrls($data){
        $em = $this->getContainer()->get('doctrine')->getManager();
        foreach($data as $row){
            $entity = new ScannedUrls();
            $entity->setLanderId($row['landerId']);
            $entity->setUrl($row['url']);
            $entity->setToCheck($row['toCheck']);
            $em->persist($entity);
            $em->flush();
        }


        $em->clear();


    }

    public function updateScannedUrls($url, $scanRequestId){
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->findOneBy(array('url' => $url));
        $entity->setIsScanned(1);
        $entity->setScanRequestId($scanRequestId);
        $em->flush();
    }


    public function sendUrlToScan($url){
        $virustotal_api_key = '15cfb694f80c6bb874886f06b58bf0858a7d2155aa6e1abb3c7cc7de812ec3ed';
        $scan_url = $url;

        $post = array('apikey' => $virustotal_api_key,'url'=> $scan_url);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.virustotal.com/vtapi/v2/url/scan');
        curl_setopt($ch, CURLOPT_POST, True);
        curl_setopt($ch, CURLOPT_VERBOSE, 1); // remove this if your not debugging
        curl_setopt($ch, CURLOPT_RETURNTRANSFER ,True);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);


        $result=curl_exec ($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        print("status = $status_code\n");
        if ($status_code == 200) { // OK
            $js = json_decode($result, true);
            return $js;
        } else {  // Error occured
            return array('error' => $result);

        }
        curl_close ($ch);
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

}