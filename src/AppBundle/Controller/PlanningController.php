<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 5/10/2017
 * Time: 12:35 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\ApiAccess;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;


class PlanningController extends Controller{

    /**
     * @Route("/planning/create-campaign")
     */
    public function showCreateCampaignPageAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
        $data = array('data' => array());
        file_put_contents("data_table_tmp_files/planning/campaigns.txt", json_encode($data, JSON_UNESCAPED_UNICODE));

        $trafficSource = json_decode($this->forward('AppBundle:VoluumApi:voluumGetTrafficSource', array())->getContent(), true);
            $countries = json_decode($this->forward('AppBundle:VoluumApi:voluumGetCountries', array())->getContent(), true);
            $flow = json_decode($this->forward('AppBundle:VoluumApi:voluumGetFlow', array())->getContent(), true);
            $domain = json_decode($this->forward('AppBundle:VoluumApi:voluumGetDomain', array())->getContent(), true);
            return $this->render(
                'planning/create-campaign.html.twig', array(
                    'trafficSources' => $trafficSource['trafficSources'],
                    'countries' => $countries,
                    'flows' => $flow['flows'],
                    'domains' => $domain['customDomains'],
                    'page' => 'Create Campaign'
                )
            );
        }else{
            return $this->redirect('/user/login');
        }


    }


    /**
     * @Route("/planning/add-campaigns")
     */
    public function addCampaignsAction(){
        $this->clearTmpFilesAction();
        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $trafficSource = json_decode($this->forward('AppBundle:VoluumApi:voluumGetTrafficSource', array())->getContent(), true);
        $countries = json_decode($this->forward('AppBundle:VoluumApi:voluumGetCountries', array())->getContent(), true);
        $flows = json_decode($this->forward('AppBundle:VoluumApi:voluumGetFlow', array())->getContent(), true);


        $query = array();

        $success = array();
        $failed = array();
        $apiResponse = array();


        $tableData = array();
        foreach($data as $row){

            for($i = 1; $i <= $row['count']; $i++){

                if($i > 9){
                    $counter = $i;
                }else{
                    $counter = '0'.$i;
                }
                $name = trim($row['name']);
                $source = trim($row['source']);
                $costModel = trim($row['model']);
                $country = trim($row['geo']);
                $tags = $row['tags'];
                $flow = trim($row['flow']);
                $domain = trim($row['domain']);

                if($country == "Global"){
                    $query = array(
                        'costModel' => array('type' => $costModel),
                        'namePostfix' => $name . ' ' . $counter,
                        'redirectTarget' => array(
                            'flow' => array('id' => $flow)
                        ),
                        'tags' => $tags,
                        'trafficSource' => array('id' => $source)
                    );


                }else{
                    $query = array(
                        'costModel' => array('type' => $costModel),
                        'country' => array('code' => $country),
                        'namePostfix' => $name . ' ' . $counter,
                        'redirectTarget' => array(
                            'flow' => array('id' => $flow)
                        ),
                        'tags' => $tags,
                        'trafficSource' => array('id' => $source)
                    );
                }


                if($country != 'Global'){
                    foreach($countries as $geo){
                        if($geo['code'] == $country){
                            $tableGeo = $geo['name'];
                        }
                    }
                }else{
                    $tableGeo = 'Global';
                }

                foreach($trafficSource['trafficSources'] as $sou){
                    if($sou['id'] == $source){
                        $tableSource = $sou['name'];
                    }
                }

                foreach($flows['flows'] as $flo){
                    if($flo['id'] == $flow){
                        $tableFlow = $flo['name'];
                    }
                }



                $url = 'https://panel-api.voluum.com/campaign';
                $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:postVoluum', array('url' => $url,
                    'query' => $query,
                    'method' => 'POST',
                    'sessionId' => $voluumSessionId))->getContent(), true);
                if(!isset($apiResponse['error'])){
                    $success[] = $name . ' ' . $counter;
                    $message = 'Campaigns Successfully Created';
                    $error = FALSE;

                    $campaigUrlParse = parse_url($apiResponse['url']);
                    $tableData[] = array(
                        'name' => $name . ' ' . $counter,
                        'domain' => $campaigUrlParse['scheme'].'://'.$domain.$campaigUrlParse['path'].$campaigUrlParse['query'],
                        'costModel' => $costModel,
                        'country' => $tableGeo,
                        'source' => $tableSource,
                        'flow' => $tableFlow,
                    );

                }else{
                    $failed = $name;
                    $message = 'Campaign name must be unique';
                    $error = TRUE;
                }





                $apiResponseArray[] = $apiResponse;

            }

        }


        foreach($tableData as $row){
            $data['data'][] = array(
                $row['name'],
                $row['domain'],
                $row['source'],
                $row['country'],
                $row['costModel']
            );
        }


        file_put_contents("data_table_tmp_files/planning/campaigns.txt", json_encode($data, JSON_UNESCAPED_UNICODE));


        $data = array('success' => $success, 'failed' => $failed, 'apiResponse' => $apiResponseArray);
        $return = $this->makeResponse($error,$message, $data);

        return new Response($return);
    }

    public function clearTmpFilesAction(){


        $dir = 'data_table_tmp_files/planning';
        foreach(glob("{$dir}/*") as $file)
        {
            unlink($file);
        }

        return new Response(json_encode(true));

    }


    public function makeResponse($error, $message, $data){
        return json_encode(
            array('data' =>
                array('details' =>
                    array('error' => $error ,
                        'message' => $message,
                        'elements' =>
                            $data
                    )
                )
            )
        );
    }

}