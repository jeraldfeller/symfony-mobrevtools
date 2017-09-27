<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/6/2017
 * Time: 2:52 AM
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
use Symfony\Component\VarDumper\Cloner\Data;

class CronScanUrlFetchResultCommand extends  ContainerAwareCommand{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('cron:scan-url-fetch-response')

            // the short description shown while running "php bin/console list"
            ->setDescription('Executes Fetch Scan Response')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $systemService = $this->getContainer()->get('app.system_controller');
        $voluumService = $this->getContainer()->get('app.voluum_api_controller');
        $apiCredentials = $this->getApiCredentialsAllAction();
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $ymd = date('Y-m-d');
        $hmi = date('H:00:00');

        $from = $ymd.'T00:00:00';
        $to = $ymd.'T'.$hmi;
        $currentHour = date('H');

        $scannedUrlObj = $this->getUrlsByColumn('isScanned', 1);
        $domainResults = array();

        $i = 0;

        foreach($scannedUrlObj as $row){
            if($row['toCheck'] == true){
                $landersCampaign = array();
                $tz = 'America/Chicago';
                $sort = 'visits';
                $direction = 'desc';
                $limit = 1000;
                $query = array('from' => $from,
                    'to' => $to,
                    'tz' => $tz,
                    'sort' => $sort,
                    'direction' => $direction,
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
                    'limit' => $limit,
                    'include' => 'TRAFFIC',
                    'conversionTimeMode' => 'VISIT',
                    'filter1' => 'lander',
                    'filter1Value' => $row['landerId']
                );
                if($row['landerId'] != ''){
                    $url = 'https://panel-api.voluum.com/report?';
                    $returnedData = json_decode($voluumService->getVoluumReportsAction($url, $query, 'GET', $voluumSessionId)->getContent(), true);
                    if(!isset($returnedData['errors'])){
                        foreach($returnedData['rows'] as $returnRow){
                            $landersCampaign[] = $returnRow['campaignName'];
                        }

                        $landersCampaignString = implode(', ', $landersCampaign);
                    }else{
                        $landersCampaignString = 'No Campaigns';
                    }
                }else{
                    $landersCampaignString = 'No Campaigns';
                }



                if(($i % 4) == 0){
                    sleep(60);
                }
                $sendRequestResponse = $this->requestUrlResult($row['scanRequestId']);

                $scanResults = array();
                $detected = false;
                if(isset($sendRequestResponse['scans'])){
                    foreach($sendRequestResponse['scans'] as $key => $value){
                        if($value['detected'] == true){
                            $detected = true;
                            $result = $value['result'];
                        }
                    }
                }


                if($detected == true){
                    $domainResults[] = array('domain' => $row['url'], 'result' => $result, 'campaigns' => $landersCampaignString);
                    $this->updateScannedUrl($row['scanId'], 0, $result, $landersCampaignString);
                }

                $i++;
            }


        }


        if(count($domainResults) > 0){
            $message = '';

            $message .= '<html>';
            $message .= '    <head>';
            $message .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
            $message .= '      <title>Notification</title>';
            $message .= '    </head>';
            $message .= '    <body>';
            $message .= '      <div class="col-lg-12">';
            $message .= '      <table class="table table-striped">';
            $message .= '        <tr>';
            $message .= '          <th>Domain</th><th>Flag Type</th><th>Campaigns</th>';
            $message .= '        </tr>';
            foreach($domainResults as $domain){
                $output->write([
                    $domain['domain'] . ' | ' . strtoupper($domain['result']) . ' | ' . $domain['campaigns']
                ]);
                $message .= '<tr>';
                $message .= '<td>' . $domain['domain'] . '</td>';
                $message .= '<td>' . strtoupper($domain['result']) . '</td>';
                $message .= '<td>' . $domain['campaigns'] . '</td>';
                $message .= '</tr>';
            }
            $message .= '    </table>';
            $message .= '    </div>';
            $message .= '    </body>';
            $message .= '    </html>';


            $subject = 'Domain Reports ' . date('Y-m-d H:i:s');
       //     $systemService->sendEmail('andrew@mobrevmedia.com', 'andrew@mobrevmedia.com', $subject, $message);
            $systemService->sendEmail('jeraldfeller@gmail.com', 'jeraldfeller@gmail.com', $subject, $message);

        }
    }


    public function getUrlsByColumn($column, $value){

        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->findBy(array($column => $value));
        $data = array();
        for($i = 0; $i < count($entity); $i++){
            $data[] = array(
                'scanId' => $entity[$i]->getScanId(),
                'landerId' =>  $entity[$i]->getLanderId(),
                'url' => $entity[$i]->getUrl(),
                'scanRequestId' => $entity[$i]->getScanRequestId(),
                'toCheck' => $entity[$i]->getToCheck()
            );
        }


        return $data;

    }


    public function updateScannedUrl($id, $isSafe, $flagType, $campaigns){
        $dateUpdated = date('Y-m-d H:i:s');
        $em = $this->getContainer()->get('doctrine')->getManager();
        $entity = $em->getRepository('AppBundle:ScannedUrls')->find($id);
        $entity->setHasReturned(1);
        $entity->setIsScanned(0);
        $entity->setIsSafe($isSafe);
        $entity->setFlagType($flagType);
        $entity->setDateUpdated(new \DateTime($dateUpdated));
        $entity->setCampaigns($campaigns);
        $em->flush();
    }


    public function requestUrlResult($url){
        $api_key = getenv('15cfb694f80c6bb874886f06b58bf0858a7d2155aa6e1abb3c7cc7de812ec3ed') ? getenv('15cfb694f80c6bb874886f06b58bf0858a7d2155aa6e1abb3c7cc7de812ec3ed') :'15cfb694f80c6bb874886f06b58bf0858a7d2155aa6e1abb3c7cc7de812ec3ed';
        $scan_url = $url;

        $post = array('apikey' => $api_key,'resource'=> $scan_url);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.virustotal.com/vtapi/v2/url/report');
        curl_setopt($ch, CURLOPT_POST, True);
        curl_setopt($ch, CURLOPT_VERBOSE, 0); // remove this if your not debugging
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate'); // please compress data
        curl_setopt($ch, CURLOPT_USERAGENT, "gzip, My php curl client");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER ,True);
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