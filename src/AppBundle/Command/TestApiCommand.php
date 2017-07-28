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

        /*
        $url = 'https://panel-api.voluum.com/zeropark/campaign/0479fc90-33b5-11e7-8599-0e81439a55b2/isp/bulk/pause';
        $requestResponse = json_decode($this->voluumRequestOption($url, $voluumSessionId), true);

        var_dump($requestResponse);
*/
        $url = 'https://api.voluum.com/zeropark/campaign/0479fc90-33b5-11e7-8599-0e81439a55b2/isp/bulk/pause';
        $query = array(
            'voluumCampaignId' => '05d80905-5d59-429f-bfe4-87660a6fcc18',
            'assocValues' => array("Digital Ocean inc.")
        );


        $response = $this->voluumPutAction($url, $query, 'POST', $voluumSessionId);

        var_dump($response);

    }


    public function voluumRequestOption($url, $sessionId){
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            //CURLOPT_PUT => 1,
            CURLOPT_CUSTOMREQUEST=> 'PUT',
            //CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . '', 'Content-Type: application/json'),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_VERBOSE => 1
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return $resp;

    }


    public function voluumPutAction($url, $query, $sessionId){
        $json = json_encode($query);
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            //CURLOPT_PUT => 1,

            CURLOPT_CUSTOMREQUEST=> 'PUT',
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_HTTPHEADER => array('cwauth-token: ' . $sessionId . '', 'Content-Type: application/json'),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_VERBOSE => 1
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);


        return $resp;

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