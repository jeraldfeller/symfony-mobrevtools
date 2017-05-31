<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/26/2017
 * Time: 11:01 PM
 */

namespace AppBundle\Command;
use AppBundle\Entity\CampaignRulesPlacementList;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


use AppBundle\Entity\ScannedUrls;
use Symfony\Component\VarDumper\Cloner\Data;

class TestApiCommand extends  ContainerAwareCommand{


    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('test:run-api')

            // the short description shown while running "php bin/console list"
            ->setDescription('Executes Test Api')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $commonService = $this->getContainer()->get('app.common_controller');
        $apiCredentials = $this->getApiCredentialsAllAction();
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $url = 'https://api.voluum.com/report?';
        $query = array('from' => '2017-05-01T00:00:00Z',
            'to' => '2017-05-05T00:00:00Z',
            'tz' => 'America/New_York',
            'sort' => 'visitTimestamp',
            'direction' => 'desc',
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
            'offset' =>  0,
            'limit' => 10,
            'include' => 'TRAFFIC',
            'filter1' => 'campaign',
            'filter1Value' => '4d864f72-3da3-4563-aa32-94b8f5c78ab4'
        );

        $response = $this->getVoluumReportsAction($url, $query, 'POST', $voluumSessionId);

        var_dump($response);

    }




    public function getVoluumReportsAction($url = null, $query = null , $method = null, $sessionId = null){


        $url = $url . http_build_query($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . ''),
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return $resp;
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