<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 3/14/2017
 * Time: 4:40 PM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\SettingsPresets;
use AppBundle\Entity\ApiAccess;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;


class LandersController extends Controller {

    /**
     * @Route("/tools/landers")
     */
    public function showLandersPageAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $this->getLandersToFileAction();
            $countries = json_decode($this->forward('AppBundle:VoluumApi:voluumGetCountries', array())->getContent(), true);
            $presets = json_decode($this->forward('AppBundle:Settings:getPresets', array())->getContent(), true);
            return $this->render(
                'landers/landers.html.twig', array('countries' => $countries,
                    'presets' => $presets,
                    'page' => 'Landers')
            );
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/tools/add-landers")
     */
    public function addLandersAction(){

        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://core.voluum.com/landers';


        $success = array();
        $failed = array();
        $apiResponse = array();



        foreach($data as $row){

            $landerName = trim($row['landerName']);
            $presets = '';

            if($row['landerPresets'] == 'No Preset'){
                $presets = '';
            }else{
                $presets = $row['landerPresets'];
            }

            $landerOffer = trim($row['landerOffer']);
            $landerUrl = trim($row['landerUrl']);
            $landerGeo = trim($row['landerGeo']);

            if($landerGeo == 'Global'){
                $query = array('namePostfix' => $landerName,
                    'numberOfOffers' =>  $landerOffer,
                    'tags' => array(),
                    'url' => $landerUrl.$presets
                );
            }else {

                 $query = array( 'country' => array('code' => $landerGeo),
                     'namePostfix' => $landerName,
                     'numberOfOffers' =>  $landerOffer,
                     'tags' => array(),
                     'url' => $landerUrl.$presets
                 );
            }


                $apiResponse[] = json_decode($this->forward('AppBundle:VoluumApi:postVoluum', array('url' => $url,
                    'query' => $query,
                    'method' => 'POST',
                    'sessionId' => $voluumSessionId))->getContent(), true);
                //var_dump($apiResponse);
                if(!isset($apiResponse['error'])){
                    $success[] = $landerName;
                }else{
                   $failed[] = $landerName;
                }
        }

        $message = 'Landers Successfully Added';
        $error = FALSE;
        $data = array('success' => $success, 'failed' => $failed, 'apiResponse' => $apiResponse);
        $return = $this->makeResponse($error,$message, $data);

        return new Response($return);
    }

    /**
     * @Route("/tools/get-edit-lander")
     */
    public function editLanderAction(){

        $data = $_POST['param'];
        $presets = json_decode($this->forward('AppBundle:Settings:getPresets', array())->getContent(), true);
        $countries = json_decode($this->forward('AppBundle:VoluumApi:voluumGetCountries', array())->getContent(), true);
        $offer = json_decode($this->forward('AppBundle:VoluumApi:voluumGetLander', array('landerId' => $data))->getContent(), true);
        $fullUrl = explode('?', $offer['url']);
        $url = $fullUrl[0];
        $presetsParameter = explode('&', $fullUrl[1]);
        $presetArray = array();
        for($x = 0; $x < count($presetsParameter); $x++){
            $trimPreset = substr($presetsParameter[$x], 0, strpos($presetsParameter[$x], "="));
            $presetArray[] = $trimPreset . '={' . $trimPreset . '}';
        }

        $preset = implode('&', $presetArray);


        $return = array(
            'countries' => $countries,
            'presets' => $presets,
            'offer' => $offer,
            'url' => $url,
            'preset' => '?'.$preset
        );
        return new Response(json_encode($return));
    }

    /**
     * @Route("/tools/put-lander")
     */
    public function putLandersAction(){

        $data = json_decode($_POST['param'], true);
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $url = 'https://panel-api.voluum.com/lander/' . trim($data['landerId']);
        $success = array();
        $failed = array();
        $apiResponse = array();



            $landerName = trim($data['landerName']);
            $presets = '';

            if($data['landerPresets'] == 'No Preset'){
                $presets = '';
            }else{
                $presets = $data['landerPresets'];
            }

            $landerOffer = trim($data['landerOffer']);
            $landerUrl = trim($data['landerUrl']);
            $landerGeo = trim($data['landerGeo']);

            if($landerGeo == 'Global'){
                $query = array('namePostfix' => $landerName,
                    'numberOfOffers' =>  $landerOffer,
                    'tags' => array(),
                    'url' => $landerUrl.$presets
                );
            }else {

                $query = array( 'country' => array('code' => $landerGeo),
                    'namePostfix' => $landerName,
                    'numberOfOffers' =>  $landerOffer,
                    'tags' => array(),
                    'url' => $landerUrl.$presets
                );
            }


            $apiResponse[] = json_decode($this->forward('AppBundle:VoluumApi:voluumPutLander', array('url' => $url,
                'query' => $query,
                'sessionId' => $voluumSessionId))->getContent(), true);
            if(!isset($apiResponse['error'])){
                $success[] = $landerName;
            }else{
                $failed[] = $landerName;
            }

        $this->getLandersToFileAction();
        $message = 'Lander Successfully Updated';
        $error = FALSE;
        $data = array('success' => $success, 'failed' => $failed, 'apiResponse' => $apiResponse);
        $return = $this->makeResponse($error,$message, $data);

        return new Response($return);
    }


    /**
     * @Route("/ajax/get-landers-to-file")
     */

    public function getLandersToFileAction(){

        $this->clearTmpFilesAction();

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $from = date('Y-m-d', strtotime('-30 days')) . 'T00:00:00Z';

        $to = date('Y-m-d').'T00:00:00Z';
        $tz = 'America/Chicago';
        $sort = 'visits';
        $direction = 'desc';
        $limit = '10000';

        $query = array('from' => $from,
            'to' => $to,
            'tz' => $tz,
            'sort' => $sort,
            'direction' => $direction,
            'columns' => 'landerName',
            'columns' => 'landerUrl',
            'columns' => 'landerCountry',
            'columns' => 'numberOfOffers',
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
            'groupBy' => 'lander',
            'offset' => 0,
            'limit' => $limit,
            'include' => 'traffic',
            'conversionTimeMode' => 'VISIT'
        );


        $url = 'https://portal.voluum.com/report?';
        $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);
        foreach($apiResponse['rows'] as $row){
                if($row['landerCountry'] == null){
                    $country = 'Global';
                }else{
                    $country = $row['landerCountry'];
                }

            $data['data'][] = array(
                $row['landerName'],
                $row['landerUrl'],
                $row['numberOfOffers'],
                $country,
                '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"
                                                data-action="edit"
                                                data-id="' . $row['landerId'] . '"
                                                onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeleteGroup" data-action="delete"
                                                data-action="delete"
                                                data-id="' . $row['landerId'] . '"
                                                onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>'
            );

        }

        file_put_contents("data_table_tmp_files/landers/landers.txt", json_encode($data, JSON_UNESCAPED_UNICODE));
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


    /**
     * @Route("tools/clear-tmp-files", name="clearTmpFiles")
     */
    public function clearTmpFilesAction(){


        $dir = 'data_table_tmp_files/landers';
        foreach(glob("{$dir}/*") as $file)
        {
            unlink($file);
        }

        return new Response(json_encode(true));

    }



}