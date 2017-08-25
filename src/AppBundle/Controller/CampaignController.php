<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/4/2017
 * Time: 1:52 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\IpConditions;
use AppBundle\Entity\ReportedIp;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Campaign;
use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\Verticals;
use AppBundle\Entity\Groups;

use AppBundle\Entity\CampaignRules;
use AppBundle\Entity\CampaignRulesConditions;
use AppBundle\Entity\ListReports;
use AppBundle\Entity\CampaignRulePresets;
use AppBundle\Entity\CampaignRulePresetsConditions;

use AppBundle\Entity\SafeListPlacements;


use AppBundle\Entity\CampaignOptimizationHistory;


use Doctrine\ORM\Tools\Pagination\Paginator;

class CampaignController extends Controller
{


    private function makeResponse($error, $message, $data)
    {
        return json_encode(
            array('data' =>
                array('details' =>
                    array('error' => $error,
                        'message' => $message,
                        'elements' =>
                            $data
                    )
                )
            )
        );
    }


    /**
     * @Route("/campaign/bot-settings/{tid}/{page}", name="campaignB")
     */
    public function indexBAction($tid, $page)
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $campaigns = $this->getCampaigns($tid);
            $groups = $this->getGroups();
            $verticals = $this->getVerticals();
            $carriers = array();
            $dateNow = date('m/d/Y');
            if ($page == 'ExoClick') {
                $carriers = $this->getCarriersDistinct($page);
            }
            return $this->render(
                'campaign/campaign-b.html.twig', array('page' => $page,
                    'tid' => $tid,
                    'campaigns' => $campaigns,
                    'groups' => $groups,
                    'verticals' => $verticals,
                    'carriers' => $carriers,
                    'dateNow' => $dateNow
                )
            );
        }else{
            return $this->redirect('/user/login');
        }

    }

    /**
     * @Route("/campaign/{tid}/{page}", name="campaign")
     */
    public function indexAction($tid, $page)
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                $trafficSource = $this->getTrafficSourceByName($page);
                $campaigns = $this->getCampaigns($tid);
                $verticals = $this->getVerticals();
                $rulePresets = $this->getRulePresets();
                $carriers = array();
                $dateNow = date('m/d/Y');
                if ($page == 'ExoClick') {
                    $carriers = $this->getCarriersDistinct($page);
                }
                return $this->render(
                    'campaign/campaign.html.twig', array('page' => $page,
                        'tid' => $trafficSource[0]->getId(),
                        'trafficSourceId' => $trafficSource[0]->getTrafficSourceId(),
                        'trafficSourceName' => $trafficSource[0]->getTrafficName(),
                        'campaigns' => $campaigns,
                        'verticals' => $verticals,
                        'presets' => $rulePresets,
                        'carriers' => $carriers,
                        'dateNow' => $dateNow
                    )
                );
            }else{
                return $this->redirect('/error');
            }
        }else{
            return $this->redirect('/user/login');
        }

    }


    /**
     * @Route("/campaign/optimization")
     */
    public function campaignOptimizationAction()
    {
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $userData = $this->get('session')->get('userData');
            $url = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            $pageReturn = $this->forward('AppBundle:Users:getAccessiblePages', array(
                'uid' => $userData['id'],
                'page' => $url['path']
            ))->getContent();
            if($pageReturn == 'true'){
                $page = 'Campaign Optimization';
                return $this->render(
                    'campaign/optimization.html.twig', array('page' => $page,
                        'dateNow' => date('m/d/Y')
                    )
                );
            }else{
                return $this->redirect('/error');
            }
        }else{
            return $this->redirect('/user/login');
        }
    }


    /**
     * @Route("/campaign/get-campaigns/{tid}", name="getCampaigns")
     */
    public function getCampaignsForSelect($tid)
    {

        $campaigns = $this->getDoctrine()
            ->getRepository('AppBundle:Campaign')
            ->findByTid($tid);

        $output = '';
        $output .= '<option></option>';
        if (count($campaigns) == 0) {
            return array();
        } else {
            for ($x = 0; $x < count($campaigns); $x++) {
                $output .= '<option data-geo="' . $campaigns[$x]->getGeo() . '" value="' . $campaigns[$x]->getId() . '">' . $campaigns[$x]->getCampName() . '</option>';

            }

            return new Response($output);
        }


    }


    public function getCampaigns($tid)
    {

        $campaigns = $this->getDoctrine()
            ->getRepository('AppBundle:Campaign')
            ->findByTid($tid);


        if (count($campaigns) == 0) {
            return array();
        } else {
            for ($x = 0; $x < count($campaigns); $x++) {
                $data[] = array('id' => $campaigns[$x]->getId(),
                    'tid' => $campaigns[$x]->getTid(),
                    'campId' => $campaigns[$x]->getCampId(),
                    'vid' => $campaigns[$x]->getVid(),
                    'campName' => $campaigns[$x]->getCampName(),
                    'geo' => $campaigns[$x]->getGeo());
            }

            return $data;
        }


    }

    public function getRulePresets(){
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:CampaignRulePresets p
                ORDER BY p.presetName ASC
        ");

        $result = $sql->getResult();

        return $result;
    }

    public function getVerticals()
    {

        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:Verticals p
                ORDER BY p.verticalName ASC
        ");

        $result = $sql->getResult();

        return $result;

    }

    public function getCarriers($trafficName)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:ReportsIp p
                WHERE p.trafficName = '$trafficName'
        ");

        $result = $sql->getResult();

        return $result;

    }

    public function getCarriersDistinct($trafficName)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT DISTINCT p.mobileCarrier
                FROM AppBundle:ReportsIp p
                WHERE p.trafficName = '$trafficName'
        ");

        $result = $sql->getResult();

        return $result;

    }


    public function getTrafficSourceByName($trafficName)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:TrafficSource p
                WHERE p.trafficName = '$trafficName'
        ");

        $result = $sql->getResult();

        return $result;

    }

    /**
     * @Route("/campaign/get-details/all", name="campaignDetailsAll")
     */

    public function getCampaignDetailsAllAction()
    {
        $campaign = "AppBundle:Campaign";
        $trafficSource = "AppBundle:Trafficsource";
        $campaignGroups = "AppBundle:Campaigngroups";
        $groups = "AppBundle:Groups";
        $verticals = "AppBundle:Verticals";
        $em = $this->getDoctrine()->getEntityManager();
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
                       cg.id,
                       v.verticalName
                FROM $campaign ca, $trafficSource t, $groups g, $campaignGroups cg, $verticals v
                WHERE ca.id = cg.cid
                AND ca.tid = t.id
                AND g.id = cg.gid
                AND v.id = ca.verId
                "
        );
        $result = $sql->getResult();

        return new Response(
            json_encode($result)
        );

    }


    /**
     * @Route("/campaign/get-campaign-match", name="getCampaignMatch")
     */
    public function getGroupCampaignMatch(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();
        $campaignGroups = $em->getRepository('AppBundle:Campaign')->findBy(array('vid' => trim($data)));
        if($campaignGroups){
            $error = FALSE;
            $message = 'Campaign Group Matched';
            $data = $this->getCampaignDetailsAllByMatch($campaignGroups[0]->getId());
        }else{
            $error = FALSE;
            $message = 'No Campaign Matched (add as new)';
            $data = array();
        }
        return new Response($this->makeResponse($error, $message, $data));
    }

    public function getCampaignDetailsAllByMatch($id)
    {

        $campaign = "AppBundle:Campaign";
        $trafficSource = "AppBundle:Trafficsource";
        $verticals = "AppBundle:Verticals";
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "SELECT ca.id,
                       ca.campId,
                       ca.vid,
                       ca.campName,
                       ca.safeListActive,
                       v.verticalName,
                       v.id as verId,
                       t.trafficName
                FROM $campaign ca, $trafficSource t, $verticals v
                WHERE ca.id = $id
                AND v.id = ca.verId
                AND t.id = ca.tid
                "
        );
        $result = $sql->getResult();
        $rules = $this->getCampaignRulesBydId($id);
        $return = array($id =>
            array('info' => $result,
                'rulesConditions' => $rules,
                'safeList' => $this->getSafeList($id),
                'carriers' => $this->getCarriersDistinct($result[0]['trafficName'])
            )
        );

        return $return;
    }

    public function getSafeList($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRePository('AppBundle:SafeListPlacements')->findBy(array('cid' => $id));
        $data = array();
        for($x = 0; $x < count($entity); $x++){
            $data[] = $entity[$x]->getPlacement();
        }

        return $data;
    }


    public function getCampaignRulesBydId($id)
    {

        $appBundle = 'AppBundle:CampaignRules';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p
                    FROM $appBundle p
                    WHERE p.cid = $id");

        $result =  $query->getResult();
        $return = array();

        for($i = 0; $i < count($result); $i++){
            $dateFrom = (array)$result[$i]->getStartFrom();
            $dateFromObject = new \DateTime($dateFrom['date']);
            $dateFromFormat = $dateFromObject->format('m/d/Y');
            $dateUpdated = (array)$result[$i]->getDateUpdated();
            $dateUpdatedObject = new \DateTime($dateUpdated['date']);
            $dateUpdatedFormat = $dateUpdatedObject->format('m/d/Y');

            $return[] = array(
                'active' => $result[$i]->getActive(),
                'campaignRulesId' => $result[$i]->getCampaignRulesId(),
                'cid' => $result[$i]->getCid()->getId(),
                'startFrom' => $dateFromFormat,
                'startTime' => $result[$i]->getDateTime(),
                'dateUpdated' => $dateUpdatedFormat,
                'frequency' => $result[$i]->getFrequency(),
                'ruleType' => $result[$i]->getRuleType(),
                'operator' => $result[$i]->getOperator(),
                'conditions' => $this->getRuleConditionsById($result[$i]->getCampaignRulesId())
            );


        }



        return $return;
    }

    public function getRuleConditionsById($id)
    {
        $ruleConditions = array();
        $em = $this->getDoctrine()->getManager();
        $campaignRulesEntity = $em->getRepository('AppBundle:CampaignRules')->find($id);

        $return = $em->getRepository('AppBundle:CampaignRulesConditions')->findBy(array('campaignRule' => $campaignRulesEntity));

        if (count($return) > 0) {
            for($i = 0; $i < count($return); $i++){
                $ruleConditions[] = array(
                    'campaignRulesConditionId' => $return[$i]->getCampaignRulesConditionId(),
                    'campaignRuleId' => $campaignRulesEntity->getCampaignRulesId(),
                    'rule_condition' => $return[$i]->getRuleCondition(),
                    'rule_variable' => $return[$i]->getRuleVariable(),
                    'value1' => $return[$i]->getValue1(),
                    'value2' => $return[$i]->getValue2()
                );
            }

        }




        return $ruleConditions;

    }

    public function getCampaignBlacklistRulesById($cgid)
    {

        $return = array();
        $appBundle = 'AppBundle:BlacklistRules';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p
                    FROM $appBundle p
                    WHERE p.cgid = $cgid ");

        $result = $query->getResult();


        for($i = 0; $i < count($result); $i++){
            $dateFrom = (array)$result[$i]->getStartFrom();
            $dateFromObject = new \DateTime($dateFrom['date']);
            $dateFromFormat = $dateFromObject->format('m/d/Y');
            $dateUpdated = (array)$result[$i]->getDateUpdated();
            $dateUpdatedObject = new \DateTime($dateUpdated['date']);
            $dateUpdatedFormat = $dateUpdatedObject->format('m/d/Y');

            $return[] = array(
                'actionType' => $result[$i]->getActionType(),
                'active' => $result[$i]->getActive(),
                'blid' => $result[$i]->getBlid(),
                'cgid' => $result[$i]->getCgid()->getId(),
                'conv' => $result[$i]->getConv(),
                'convCondition' => $result[$i]->getConvCondition(),
                'convValue1' => $result[$i]->getConvValue1(),
                'convValue2' => $result[$i]->getConvValue2(),
                'cost' => $result[$i]->getCost(),
                'costCondition' => $result[$i]->getCostCondition(),
                'costValue1' => $result[$i]->getCostValue1(),
                'costValue2' => $result[$i]->getCostValue2(),
                'ctr' => $result[$i]->getCtr(),
                'ctrCondition' => $result[$i]->getCtrCondition(),
                'ctrValue1' => $result[$i]->getCtrValue1(),
                'ctrValue2' => $result[$i]->getCtrValue2(),
                'startFrom' => $dateFromFormat,
                'dateTime' => $result[$i]->getDatetime(),
                'dateTimeUnix' => $result[$i]->getDateTimeUnix(),
                'dateUpdated' => $dateUpdatedFormat,
                'frequency' => $result[$i]->getFrequency(),
                'rio' => $result[$i]->getRoi(),
                'roiCondition' => $result[$i]->getRoiCondition(),
                'roiValue1' => $result[$i]->getRoiValue1(),
                'roiValue2' => $result[$i]->getRoiValue2(),
                'visits' => $result[$i]->getVisits(),
                'visitsCondition' => $result[$i]->getVisitsCondition(),
                'visitsValue1' => $result[$i]->getVisitsValue1(),
                'visitsValue2' => $result[$i]->getVisitsValue2()
            );


        }

        return $return;

    }

    public function getCampaignBlacklistConditionsById($cgid)
    {
        $ruleSet = array();

        $appBundleBlacklistRules = 'AppBundle:BlacklistRules';
        $appBundleBlacklistRuleSet = 'AppBundle:BlacklistRuleSet';
        $appBundleBlacklistConditions = 'AppBundle:BlacklistConditions';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p.blid
                    FROM $appBundleBlacklistRules p
                    WHERE p.cgid = $cgid ");

        $content = $query->getResult();

        if (count($content) > 0) {
            $blid = $content[0]['blid'];
            $em = $this->getDoctrine()->getManager();
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


    public function getCampaignIpRulesById($cgid)
    {
        $appBundle = 'AppBundle:IpRules';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p
                    FROM $appBundle p
                    WHERE p.cgid = $cgid ");

        $result = $query->getResult();

        return $result;

    }

    public function getCampaignIpConditionsById($cgid)
    {
        $appBundleIpRules = 'AppBundle:IpRules';
        $appBundleIptRuleSet = 'AppBundle:IpConditions';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p.iid
                    FROM $appBundleIpRules p
                    WHERE p.cgid = $cgid ");

        $content = $query->getResult();

        if (count($content) > 0) {
            $iid = $content[0]['iid'];
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery("
                    SELECT p
                    FROM $appBundleIptRuleSet p
                    WHERE p.iid = $iid ");

            $data = array();
            $content1 = $query->getResult();
            for($x = 0; $x < count($content1); $x++){
                $data[] = array('icid' => $content1[$x]->getIcid(),
                    'iid' => $content1[$x]->getIid(),
                    'carrier' => $content1[$x]->getCarrier()
                );
            }
            return  $data;
        }else{
            return array();
        }




    }


    public function getCampaignBidAdjustmentRulesById($cgid)
    {

        $return = array();
        $appBundle = 'AppBundle:BidAdjustmentRules';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p
                    FROM $appBundle p
                    WHERE p.cgid = $cgid ");

        $result = $query->getResult();

        for($i = 0; $i < count($result); $i++){
            $dateFrom = (array)$result[$i]->getStartFrom();
            $dateFromObject = new \DateTime($dateFrom['date']);
            $dateFromFormat = $dateFromObject->format('m/d/Y');
            $dateUpdated = (array)$result[$i]->getDateUpdated();
            $dateUpdatedObject = new \DateTime($dateUpdated['date']);
            $dateUpdatedFormat = $dateUpdatedObject->format('m/d/Y');

            $return[] = array(
                'active' => $result[$i]->getActive(),
                'baid' => $result[$i]->getBaid(),
                'cgid' => $result[$i]->getCgid()->getId(),
                'conversions' => $result[$i]->getConversions(),
                'startFrom' => $dateFromFormat,
                'dateTime' => $result[$i]->getDatetime(),
                'dateTimeUnix' => $result[$i]->getDateTimeUnix(),
                'dateUpdated' => $dateUpdatedFormat,
                'frequency' => $result[$i]->getFrequency(),
                'reviewLast' => $result[$i]->getReviewLast()
            );


        }

        return $return;


    }

    public function getCampaignBidAdjustmentConditionsById($cgid)
    {
        $return = array();
        $appBundleAdjustmentRules = 'AppBundle:BidAdjustmentRules';
        $appBundleAdjustmentConditions = 'AppBundle:BidAdjustmentConditions';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p.baid
                    FROM $appBundleAdjustmentRules p
                    WHERE p.cgid = $cgid ");

        $content = $query->getResult();

        if (count($content) > 0) {
            $baid = $content[0]['baid'];
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery("
                    SELECT p
                    FROM $appBundleAdjustmentConditions p
                    WHERE p.baid = $baid ");

            $result = $query->getResult();

            for($i = 0; $i < count($result); $i++){
                $return[] = array(
                    'bacid' => $result[$i]->getBacid(),
                    'baid' => $baid,
                    'horizontalCondition' => $result[$i]->getHorizontalCondition(),
                    'value1' => $result[$i]->getValue1(),
                    'value2' => $result[$i]->getValue2(),
                    'verticalCondition' => $result[$i]->getVerticalCondition(),
                    'valuePercent' => $result[$i]->getValuePercent()
                );
            }

            return $return;
        }else{

            return array();
        }




    }


    /**
     * @Route("/campaign/get-api-campaigns", name="campaignGetApiCampaigns")
     */
    public function getApiCampaignAction(){

        $data = json_decode($_POST['data'], true);

        $trafficSourceName = $data['trafficSourceName'];
        $trafficSourceId = $data['trafficSourceId'];


        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $zeroParkToken = $apiCredentials[0]['zeropark'];
        $exoClickToken = $apiCredentials[0]['exoclick'];


        $campaignExists = array();

        $campaigns = $this->getCampaigns($trafficSourceId);
        if($trafficSourceName == 'Zeropark'){

            $dateFrom = date('d/m/Y', strtotime('-'.$data['days'].' days'));
            $dateTo = date('d/m/Y');


            $query = array('interval' => 'CUSTOM',
                'startDate' => $dateFrom,
                'endDate'=> $dateTo,
                'page' => 0,
                'limit' => 1000,
                'sortColumn' => 'SPENT',
                'sortOrder' => 'DESC',
                'showDeleted' => false);
            $url = 'https://panel.zeropark.com/api/stats/campaign/all?';
            $apiResponse = json_decode($this->forward('AppBundle:ZeroparkApi:zeroparkRequest', array('url' => $url,
                'query' => $query,
                'method' => 0,
                'token' => $zeroParkToken))->getContent(), true);

        }


        $output = '';
        $output .= '<option></option>';
        if($trafficSourceName == 'Zeropark'){

            foreach($apiResponse['elements'] as $key => $details){
                if(!in_array($details['details']['id'], $campaignExists )){
                    $url = explode("/", $details['details']['url']);
                    $geo = (isset($details['details']['geo']) ? $details['details']['geo'] : 'N/A');
                    $urlSplit = explode('?', end($url));
                    $output .= '<option value="' . $urlSplit[0] . '" data-voluumid="' .  $urlSplit[0] . '" data-campid="'. $details['details']['id'] . '" data-campname="' . $details['details']['name'] . '" data-geo="' . $geo . '">' . $details['details']['name'] . '</option>';
                    $disable = '';
                    $noExists = 0;
                }else{
                    $noExists = 1;

                }
            }

        }else{

            $traffic = $this->getTrafficSourceByName($trafficSourceName);
            $from = date('Y-m-d', strtotime('-' . $data['days']. ' days'));
            $to = date('Y-m-d', strtotime('+1 days'));
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
                'columns' => 'campaignId',
                'columns' => 'status',
                'columns' => 'cpv',
                'columns' => 'ctr',
                'columns' => 'cr',
                'columns' => 'cv',
                'columns' => 'roi',
                'columns' => 'epv',
                'columns' => 'epc',
                'columns' => 'ap',
                'columns' => 'errors',
                'groupBy' => 'campaign',
                'offset' => 0,
                'limit' => $limit,
                'include' => 'traffic',
                'filter1' => 'traffic-source',
                'filter1Value' => $traffic[0]->getTrafficSourceId()
            );
            $url = 'https://api.voluum.com/report?';



            $voluumCampaignToMatchGetCampid = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);

            $noExists = 1;
            if(!isset($voluumCampaignToMatchGetCampid['error'])){
                $i = 0;
                foreach($voluumCampaignToMatchGetCampid['rows'] as $voluumRow){
                    if($voluumRow['visits'] > 0){
                        if(!in_array($voluumRow['campaignId'], $campaignExists )){
                            $geo = (isset($voluumRow['geo']) ? $voluumRow['geo'] : 'N/A');
                            if($geo == 'N/A'){
                                $geoCode = json_decode($this->forward('AppBundle:Common:getGeoCodeByCountry', array('country' => $voluumRow['campaignCountry']))->getContent(), true);
                                if($geoCode == false){
                                    $geoCode = 'N/A';
                                }
                            }else{
                                $geoCode = $geo;
                            }

                            $output .= '<option value="' . $voluumRow['campaignId'] . '" data-campid="1" data-voluumid="' . $voluumRow['campaignId'] . '" data-campname="' .  $voluumRow['campaignName'] . '" data-geo="' . $geoCode . '">' . $voluumRow['campaignName'] . '</option>';
                            $disable = '';
                            $noExists = 0;
                            $i++;
                        }else{
                            $noExists = 1;

                        }
                    }
                }
            }

        }


        if($noExists == 1){
            $output .= '<option>No Campaign Available</option>';
            $disable = 'disabled';
        }




        return new Response($output);


    }

    /**
     * @Route("/campaign/get-api-exoclick-campaigns", name="campaignGetApiExoclickCampaigns")
     */
    public function getApiExoClickCampaigns(){
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $exoClickToken = $apiCredentials[0]['exoclick'];

        $url = 'https://api.exoclick.com/v1/campaigns';
        $params = array();
        $apiResponse = json_decode($this->forward('AppBundle:ExoClickApi:exoClickGetCampaigns', array('token' => $exoClickToken))->getContent(), true);
        $output = '';
        $output .= '<option value="1">-- none --</option>';
        foreach($apiResponse as $row){
            if($row['status'] != -1){
                $output .= '<option value="' . $row['id'] . '" data-campid="' . $row['id'] . '">' . $row['name'] . '</option>';
            }


        }


        return new Response($output);

    }

    /**
     * @Route("/campaign/add-campaign", name="addCampaign")
     */
    public function addCampaignAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $campaignEntity = $em->getRepository('AppBundle:Campaign')->findOneBy(array('vid' => $data['voluumId']));
        $tid = $em->getRepository('AppBundle:TrafficSource')->find($data['trafficSourceId']);

        if($campaignEntity){
            $campaignEntity->setTid($tid);
            $campaignEntity->setCampId($data['campaignId']);
            $campaignEntity->setVid($data['voluumId']);
            $campaignEntity->setCampName($data['campaignName']);
            $campaignEntity->setVerId($data['verticalId']);
            $campaignEntity->setGeo($data['geo']);
            $em->flush();
            $id = $campaignEntity->getId();
            $return = array(
                'id' => $id,
                'campaignName' => $data['campaignName']
            );
        }else{
            $campaignEntity = new Campaign();
            $campaignEntity->setTid($tid);
            $campaignEntity->setCampId($data['campaignId']);
            $campaignEntity->setVid($data['voluumId']);
            $campaignEntity->setCampName($data['campaignName']);
            $campaignEntity->setVerId($data['verticalId']);
            $campaignEntity->setGeo($data['geo']);
            $campaignEntity->setSafeListActive(0);
            $em->persist($campaignEntity);
            $em->flush();
            $em->clear();
            $id = $campaignEntity->getId();
            $return = array(
                'id' => $id,
                'campaignName' => $data['campaignName']
            );
        }

        return new Response(json_encode($return));
    }


    /**
     * @Route("/campaign/add-preset-rule", name="addPresetRule")
     */
    public function addPresetRuleAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $presetRuleEntity = new CampaignRulePresets();
        $presetRuleEntity->setPresetName($data['presetName']);
        $em->persist($presetRuleEntity);
        $em->flush();
        for($x = 0; $x < count($data['conditions']); $x++){
            $campaignConditionEntity = new CampaignRulePresetsConditions();
            $campaignConditionEntity->setCampaignPresets($presetRuleEntity);
            $campaignConditionEntity->setRuleVariable($data['conditions'][$x]['metric']);
            $campaignConditionEntity->setRuleCondition(strtolower($data['conditions'][$x]['option']));
            $campaignConditionEntity->setValue1($data['conditions'][$x]['value1']);
            $campaignConditionEntity->setValue2($data['conditions'][$x]['value2']);
            $em->persist($campaignConditionEntity);
            $em->flush();
        }
        $em->clear();
        return new Response(json_encode($data));
    }


    /**
     * @Route("/campaign/edit-preset-rule", name="editPresetRule")
     */
    public function editPresetRuleAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $campaignRulePresetEntity = $em->getRepository('AppBundle:CampaignRulePresets')->find($data['id']);
        $campaignRulePresetEntity->setPresetName($data['presetName']);
        $em->flush();
        $campaignCondition = $em->getRepository('AppBundle:CampaignRulePresetsConditions')->findBy(array('campaignPresets' => $campaignRulePresetEntity));
        for($x = 0; $x < count($campaignCondition); $x++){
            $em->remove($campaignCondition[$x]);
        }
        $em->flush();

        for($x = 0; $x < count($data['conditions']); $x++){
            $campaignConditionEntity = new CampaignRulePresetsConditions();
            $campaignConditionEntity->setCampaignPresets($campaignRulePresetEntity);
            $campaignConditionEntity->setRuleVariable($data['conditions'][$x]['metric']);
            $campaignConditionEntity->setRuleCondition(strtolower($data['conditions'][$x]['option']));
            $campaignConditionEntity->setValue1($data['conditions'][$x]['value1']);
            $campaignConditionEntity->setValue2($data['conditions'][$x]['value2']);
            $em->persist($campaignConditionEntity);
            $em->flush();
        }
        $em->clear();
        return new Response(json_encode($data));
    }

    /**
     * @Route("/campaign/delete-preset-rule", name="deletePresetRule")
     */
    public function deletePresetRuleAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $campaignRulePresetEntity = $em->getRepository('AppBundle:CampaignRulePresets')->find($data['id']);
        $em->remove($campaignRulePresetEntity);
        $em->flush();
        $em->clear();
        return new Response(json_encode($data));
    }

    /**
     * @Route("/campaign/add-rule", name="addRule")
     */
    public function addRuleAction(){
        $data = json_decode($_POST['param'], true);
        $dateTimeUnix = strtotime($data['startFrom']);
        $em = $this->getDoctrine()->getManager();
        $campaignEntity = $em->getRepository('AppBundle:Campaign')->find($data['cid']);
        $campaignRuleEntity = new CampaignRules();
        $campaignRuleEntity->setCid($campaignEntity);
        $campaignRuleEntity->setRuleType($data['ruleType']);
        $campaignRuleEntity->setStartFrom(new \DateTime(date('Y-m-d', strtotime($data['startFrom']))));
        $campaignRuleEntity->setDateTime($data['startTime']);
        $campaignRuleEntity->setDatetimeunix($dateTimeUnix);
        $campaignRuleEntity->setFrequency($data['frequency']);
        $campaignRuleEntity->setOperator($data['logicalOperator']);
        $campaignRuleEntity->setActive(1);
        $campaignRuleEntity->setDateUpdated(new \DateTime(date('Y-m-d')));
        $em->persist($campaignRuleEntity);
        $em->flush();
        for($x = 0; $x < count($data['conditions']); $x++){
            $campaignConditionEntity = new CampaignRulesConditions();
            $campaignConditionEntity->setCampaignRule($campaignRuleEntity);
            $campaignConditionEntity->setRuleVariable($data['conditions'][$x]['metric']);
            $campaignConditionEntity->setRuleCondition(strtolower($data['conditions'][$x]['option']));
            $campaignConditionEntity->setValue1($data['conditions'][$x]['value1']);
            $campaignConditionEntity->setValue2($data['conditions'][$x]['value2']);
            $em->persist($campaignConditionEntity);
            $em->flush();
        }
        $em->clear();
        return new Response(json_encode($data));
    }


    /**
     * @Route("/campaign/update-rule", name="editRule")
     */
    public function editRuleAction(){
        $data = json_decode($_POST['param'], true);
        $dateTimeUnix = strtotime($data['startFrom']);
        $em = $this->getDoctrine()->getManager();
        $campaignRulesEntity = $em->getRepository('AppBundle:CampaignRules')->find($data['campaignRulesId']);
        $campaignRulesEntity->setRuleType($data['ruleType']);
        $campaignRulesEntity->setStartFrom(new \DateTime(date('Y-m-d', strtotime($data['startFrom']))));
        $campaignRulesEntity->setDateTime($data['startTime']);
        $campaignRulesEntity->setDatetimeunix($dateTimeUnix);
        $campaignRulesEntity->setFrequency($data['frequency']);
        $campaignRulesEntity->setOperator($data['logicalOperator']);
        $campaignRulesEntity->setDateUpdated(new \DateTime(date('Y-m-d')));
        $em->flush();

        $campaignCondition = $em->getRepository('AppBundle:CampaignRulesConditions')->findBy(array('campaignRule' => $campaignRulesEntity));
        for($x = 0; $x < count($campaignCondition); $x++){
            $em->remove($campaignCondition[$x]);
        }
        $em->flush();

        for($x = 0; $x < count($data['conditions']); $x++){
            $campaignConditionEntity = new CampaignRulesConditions();
            $campaignConditionEntity->setCampaignRule($campaignRulesEntity);
            $campaignConditionEntity->setRuleVariable($data['conditions'][$x]['metric']);
            $campaignConditionEntity->setRuleCondition(strtolower($data['conditions'][$x]['option']));
            $campaignConditionEntity->setValue1($data['conditions'][$x]['value1']);
            $campaignConditionEntity->setValue2($data['conditions'][$x]['value2']);
            $em->persist($campaignConditionEntity);
            $em->flush();
        }
        $em->clear();
        return new Response(json_encode($data));
    }


    /**
     * @Route("/campaign/update-change-rule-status", name="updateChangeRuleStatus")
     */
    public function updatChangeRuleStatusAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $campaignRulesEntity = $em->getRepository('AppBundle:CampaignRules')->find($data['campaignRulesId']);
        $campaignRulesEntity->setActive($data['active']);
        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }

    /**
     * @Route("/campaign/delete-campaign-rule", name="deleteCampaignRule")
     */
    public function deleteCampaignRuleAction(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();
        $campaignRulesEntity = $em->getRepository('AppBundle:CampaignRules')->find($data);
        $em->remove($campaignRulesEntity);
        $em->flush();
        return new Response(json_encode(true));
    }


    /**
     * @Route("/campaign/save-data")
     */
    public function saveDataAction(){

        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $campaignEntity = $em->getRepository('AppBundle:Campaign')->find($data['cid']);
        $verticalEntity = $em->getRepository('AppBundle:Verticals')->find($campaignEntity->getVerId());
        $batch = 100;
        $x = 1;
        if($data['applyAll'] == true){
            if($data['type']){
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findBy(array('type' => $data['type']));
            }else{
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findAll();
            }

            for($i = 0; $i < count($listData); $i++){
                $listExists = $em->getRepository('AppBundle:ListReports')->findOneBy(array('cid' => $listData[$i]->getCid(), 'placement' => $listData[$i]->getPlacement()));
                if($listExists){
                    $listExists->setTid($listData[$i]->getTid());
                    $listExists->setCid($listData[$i]->getCid());
                    $listExists->setCampName($campaignEntity->getCampName());
                    $listExists->setGeo($campaignEntity->getGeo());
                    $listExists->setVerticalName($verticalEntity->getVerticalName());
                    $listExists->setTrafficName($data['trafficSource']);
                    $listExists->setType($listData[$i]->getType());
                    $listExists->setPlacement($listData[$i]->getPlacement());
                    $listExists->setVisits($listData[$i]->getVisits());
                    $listExists->setClicks($listData[$i]->getClicks());
                    $listExists->setCtr($listData[$i]->getCtr());
                    $listExists->setConversions($listData[$i]->getConversions());
                    $listExists->setRevenue($listData[$i]->getRevenue());
                    $listExists->setCost($listData[$i]->getCost());
                    $listExists->setProfit($listData[$i]->getProfit());
                    $listExists->setCpv($listData[$i]->getCpv());
                    $listExists->setEpv($listData[$i]->getEpv());
                    $listExists->setRoi($listData[$i]->getRoi());
                    $listExists->setDateExecuted($listData[$i]->getDateExecuted());
                    $listExists->setStatus($listData[$i]->getStatus());
                    $em->flush();
                }else{

                    $listEntity = new ListReports();
                    $listEntity->setTid($listData[$i]->getTid());
                    $listEntity->setCid($listData[$i]->getCid());
                    $listEntity->setCampName($campaignEntity->getCampName());
                    $listEntity->setGeo($campaignEntity->getGeo());
                    $listEntity->setVerticalName($verticalEntity->getVerticalName());
                    $listEntity->setTrafficName($data['trafficSource']);
                    $listEntity->setType($listData[$i]->getType());
                    $listEntity->setPlacement($listData[$i]->getPlacement());
                    $listEntity->setVisits($listData[$i]->getVisits());
                    $listEntity->setClicks($listData[$i]->getClicks());
                    $listEntity->setCtr($listData[$i]->getCtr());
                    $listEntity->setConversions($listData[$i]->getConversions());
                    $listEntity->setRevenue($listData[$i]->getRevenue());
                    $listEntity->setCost($listData[$i]->getCost());
                    $listEntity->setProfit($listData[$i]->getProfit());
                    $listEntity->setCpv($listData[$i]->getCpv());
                    $listEntity->setEpv($listData[$i]->getEpv());
                    $listEntity->setRoi($listData[$i]->getRoi());
                    $listEntity->setDateExecuted($listData[$i]->getDateExecuted());
                    $listEntity->setStatus($listData[$i]->getStatus());
                    $em->persist($listEntity);
                    if(($x % $batch) == 0){
                        $em->flush();
                        $em->clear();
                    }
                }
            }



        }else{
            foreach($data['items'] as $row){
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->find($row['id']);
                $listExists = $em->getRepository('AppBundle:ListReports')->findOneBy(array('cid' => $listData->getCid(), 'placement' => $listData->getPlacement()));
                if($listExists){
                    $listExists->setTid($listData->getTid());
                    $listExists->setCid($listData->getCid());
                    $listExists->setCampName($campaignEntity->getCampName());
                    $listExists->setGeo($campaignEntity->getGeo());
                    $listExists->setVerticalName($verticalEntity->getVerticalName());
                    $listExists->setTrafficName($data['trafficSource']);
                    $listExists->setType($listData->getType());
                    $listExists->setPlacement($listData->getPlacement());
                    $listExists->setVisits($listData->getVisits());
                    $listExists->setClicks($listData->getClicks());
                    $listExists->setCtr($listData->getCtr());
                    $listExists->setConversions($listData->getConversions());
                    $listExists->setRevenue($listData->getRevenue());
                    $listExists->setCost($listData->getCost());
                    $listExists->setProfit($listData->getProfit());
                    $listExists->setCpv($listData->getCpv());
                    $listExists->setEpv($listData->getEpv());
                    $listExists->setRoi($listData->getRoi());
                    $listExists->setDateExecuted($listData->getDateExecuted());
                    $listExists->setStatus($listData->getStatus());
                    $em->flush();
                }else{
                    $listEntity = new ListReports();
                    $listEntity->setTid($listData->getTid());
                    $listEntity->setCid($listData->getCid());
                    $listEntity->setCampName($campaignEntity->getCampName());
                    $listEntity->setGeo($campaignEntity->getGeo());
                    $listEntity->setVerticalName($verticalEntity->getVerticalName());
                    $listEntity->setTrafficName($data['trafficSource']);
                    $listEntity->setType($listData->getType());
                    $listEntity->setPlacement($listData->getPlacement());
                    $listEntity->setVisits($listData->getVisits());
                    $listEntity->setClicks($listData->getClicks());
                    $listEntity->setCtr($listData->getCtr());
                    $listEntity->setConversions($listData->getConversions());
                    $listEntity->setRevenue($listData->getRevenue());
                    $listEntity->setCost($listData->getCost());
                    $listEntity->setProfit($listData->getProfit());
                    $listEntity->setCpv($listData->getCpv());
                    $listEntity->setEpv($listData->getEpv());
                    $listEntity->setRoi($listData->getRoi());
                    $listEntity->setDateExecuted($listData->getDateExecuted());
                    $listEntity->setStatus($listData->getStatus());
                    $em->persist($listEntity);
                    if(($x % $batch) == 0){
                        $em->flush();
                        $em->clear();
                    }
                }

            }
        }


        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }



    /**
     * @Route("/campaign/resume-placements", name="resume-placements")
     */
    public function resumePlacementsAction(){
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $zeroParkToken = $apiCredentials[0]['zeropark'];
        $exoClickToken = $apiCredentials[0]['exoclick'];
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $targets = array();
        if($data['applyAll'] == true){
            if($data['type']){
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findBy(array('type' => $data['type']));
            }else{
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findAll();
            }
            for($i = 0; $i < count($listData); $i++){
                $targets[] = $listData[$i]->getPlacement();
            }
        }else{
            foreach($data['items'] as $row){
                $targets[] = $row['placement'];
            }
        }


        if(count($targets) > 0 ){
            if($data['source'] == 'Zeropark'){
                if(count($targets) > 50) {
                    $chunks = array_chunk($targets, 50, true);

                    foreach ($chunks as $chunk) {
                        $targetArray = array();
                        foreach ($chunk as $target) {
                            $targetArray[] = $target;
                        }


                        $query = array('hash' => implode(',', $targetArray));
                        $url = 'https://panel.zeropark.com/api/campaign/' . $data['campId'] . '/targets/resume/?';
                        $return = json_decode($this->forward('AppBundle:ZeroparkApi:zeroparkRequest', array('url' => $url,
                            'query' => $query,
                            'method' => 1,
                            'token' => $zeroParkToken))->getContent(), true);

                        for($i = 0; $i < count($return['hashes']); $i++){
                            $botReportEntity = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findOneBy(array('cid' => $data['cid'], 'placement' => $return['hashes'][$i]));
                            if($botReportEntity){
                                $botReportEntity->setStatus('RESUMED');
                                $em->flush();

                            }
                        }

                    }
                }else{
                    $query = array('hash' => implode(',', $targets));
                    $url = 'https://panel.zeropark.com/api/campaign/' . $data['campId'] . '/targets/resume/?';
                    $return = json_decode($this->forward('AppBundle:ZeroparkApi:zeroparkRequest', array('url' => $url,
                        'query' => $query,
                        'method' => '1',
                        'token' => $zeroParkToken))->getContent(), true);

                    for($i = 0; $i < count($return['hashes']); $i++){
                        $botReportEntity = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findOneBy(array('cid' => $data['cid'], 'placement' => $return['hashes'][$i]));
                        if($botReportEntity){
                            $botReportEntity->setStatus('RESUMED');
                            $em->flush();

                        }
                    }
                }

            }

        }

        return new Response(json_encode($return));
    }




    /**
     * @Route("/campaign/delete-data")
     */
    public function deleteDataAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $batch = 100;
        $i = 1;
        if($data['applyAll'] == true){
            if($data['type']){
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findBy(array('type' => $data['type']));
            }else{
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->findAll();
            }

            for($x = 0; $x < count($listData); $x++) {
                $em->remove($listData[$x]);
                if (($i % $batch) == 0) {
                    $em->flush();
                    $em->clear();
                }
            }
        }else{
            foreach($data['items'] as $row){
                $listData = $em->getRepository('AppBundle:CampaignRulesPlacementList')->find($row['id']);
                if($listData){
                    $em->remove($listData);
                    if(($i % $batch) == 0){
                        $em->flush();
                        $em->clear();
                    }
                }
            }
        }
        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }

    /**
     * @Route("/campaign/add-vertical", name="addVertical")
     */
    public function addVertical(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();

        $group = $em->getRepository('AppBundle:Verticals')
            ->findByVerticalName($data);
        if ($group) {
            $message = 'Vertical already exists';
            $data = array();
            $error = TRUE;
        }else{

            $newVertical = new Verticals();
            $newVertical->setVerticalName($data);
            $em->persist($newVertical);
            $em->flush();
            $lastId = $newVertical->getId();

            $message = 'Vertical successfully added';
            $error = FALSE;
            $data = array('id' => $lastId, 'groupName' => $group);


        }


        return new Response (
            $this->makeResponse($error,$message, $data)
        );
    }

    /**
     * @Route("/campaign/update-safe-list", name="updateSafeList")
     */
    public function updateSafeList(){
        $data = json_decode($_POST['param'], true);
        $chunkSize = 100;
        $x = 1;
        $this->forward('AppBundle:Deletes:deleteIndividualColumn', array('appBundle' => 'AppBundle:SafeListPlacements',
            'column' => 'cid',
            'value' => $data['cid']))->getContent();

        $em = $this->getDoctrine()->getManager();
        $campaignEntity = $em->getRepository('AppBundle:Campaign')->find($data['cid']);

        foreach($data['items'] as $row){
            if($row['placement'] != ''){
                $entity = new SafeListPlacements();
                $entity->setCid($campaignEntity);
                $entity->setPlacement($row['placement']);
                $em->persist($entity);

                if(( $x % $chunkSize ) == 0){
                    $em->flush();
                }
                $x++;
            }
        }

        $em->flush();
        $em->clear();


        return new Response(json_encode($data['items']));

    }


    /**
     * @Route("/campaign/update-safe-list-active", name="updateSafeListActive")
     */
    public function updateSafeListActive(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Campaign')->find($data['cid']);
        $entity->setSafeListActive($data['isActive']);
        $em->flush();

        return new Response(json_encode(true));

    }


    /**
     * @Route("/campaign/get-verticals", name="getVeritical")
     */
    public function getVertical(){

        $groups = $this->getDoctrine()
            ->getRepository('AppBundle:Verticals')
            ->findAll();



        $output = '';
        $output .= '<option></option>';


        if(count($groups) == 0){
            return new Response(json_encode(array()));
        }else{
            for($x = 0; $x < count($groups); $x++){
                $output .= '<option value="' . $groups[$x]->getId() . '">' . $groups[$x]->getVerticalName() . '</option>';

            }
            return new Response($output);
        }

        return new Response($output);

    }

    /**
     * @Route("/campaign/delete-vertical", name="deleteVertical")
     */
    public function deleteVertical(){
        $vid = $_POST['param'];
        $em = $this->getDoctrine()->getManager();


        $campaignGroups = $em->getRepository('AppBundle:Campaigngroups')->findByVerId($vid);


        if ($campaignGroups) {
            $message = 'Cannot delete vertical. This group is used.';
            $data = array();
            $error = TRUE;
        }else{

            $deleteVertical = $em->getRepository('AppBundle:Verticals')->find($vid);
            $em->remove($deleteVertical);
            $em->flush($deleteVertical);


            $message = 'GroupVertical successfully deleted';
            $error = FALSE;
            $data = array('id' => $vid);


        }

        return new Response (
            $this->makeResponse($error,$message, $data)
        );

    }


    /**
     * @Route("/campaign/add-campaign-group", name="addCampaignGroup")
     */

    public function addCampaignGroup(){
        $data = explode(',',$_POST['param']);
        $cid = $data[0];
        $gid = $data[1];
        $verId = $data[2];
        $geo = $data[3];
        $appBundle = 'AppBundle:Campaigngroups';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p
                    FROM $appBundle p
                    WHERE p.cid = $cid
                    AND p.gid = $gid
                    AND p.verId = $verId
                    AND p.geo = '$geo'
                    ");

        $result = $query->getResult();


        if(count($result) > 0){
            $message = 'Campaign Group already exists';
            $error = TRUE;
            $data = array();


        }else {
            $cidEnt = $em->getRepository('AppBundle:Campaign')->findOneById($cid);
            $gidEnt = $em->getRepository('AppBundle:Groups')->findOneById($gid);
            $verIdEnt = $em->getRepository('AppBundle:Verticals')->findOneById($verId);
            $em = $this->getDoctrine()->getManager();
            $campaign = new Campaigngroups();
            $campaign->setCid($cidEnt);
            $campaign->setGid($gidEnt);
            $campaign->setVerId($verIdEnt);
            $campaign->setGeo($geo);
            $em->persist($campaign);
            $em->flush();
            $lastId = $campaign->getId();


            $getCampaign = $this->getCampaignsByCid($cid);

            $message = 'Campaign Group successfully added';
            $error = FALSE;
            $data = array('id' => $lastId,
                'campaign' =>
                    array('cgid' => $lastId,
                        'cid' => $getCampaign[0]['cid'],
                        'campId' => $getCampaign[0]['campId'],
                        'name' => $getCampaign[0]['campName'],
                        'gid' => $getCampaign[0]['gid'],
                        'verId' => $getCampaign[0]['verId'],
                        'geo' => $getCampaign[0]['geo']
                    )
            );

        }

        return new Response($this->makeResponse($error, $message, $data));


    }

    public function getCampaignsByCid($cid){
        $campaign = "AppBundle:Campaign";
        $campaignGroups = "AppBundle:Campaigngroups";
        $groups = "AppBundle:Groups";
        $verticals = "AppBundle:Verticals";
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "SELECT
                       ca.id as cid,
                       ca.campId,
                       ca.vid,
                       ca.campName,
                       ca.geo,
                       g.id as gid,
                       g.groupName,
                       g.groupName,
                       v.verticalName,
                       v.id as verId
                FROM $campaign ca, $groups g, $campaignGroups cg, $verticals v
                WHERE ca.id = $cid
                AND cg.cid = $cid
                AND v.id = cg.verId
                "
        );
        $result = $sql->getResult();

        return $result;


    }

    /**
     * @Route("/campaign/add-bid-adjustment-rule", name="addBidAdjustmentRule")
     */
    public function addBidAdjustmentRule(){
        $data = json_decode($_POST['param'], true);
        $this->deleteRules('AppBundle:BidAdjustmentRules', $data['options'][0]['cgid']);

        $startFrom = date("Y-m-d", strtotime($data['options'][0]['startDate']));
        $time = explode(':', $data['options'][0]['startTime']);

        $dateTimeUnix = strtotime($data['options'][0]['startDate'] . ' ' . $time[0] . ':00');
        $dateNow = date('Y-m-d');

        $em = $this->getDoctrine()->getManager();
        $cgid = $em->getRepository('AppBundle:Campaigngroups')->findOneById($data['options'][0]['cgid']);
        $newBidRules = new BidAdjustmentRules();
        $newBidRules->setCgid($cgid);
        $newBidRules->setDateTimeUnix($dateTimeUnix);
        $newBidRules->setStartFrom(new \DateTime($startFrom));
        $newBidRules->setDateTime($time[0] . ':00');
        $newBidRules->setFrequency($data['options'][0]['frequency']);
        $newBidRules->setActive($data['options'][0]['active']);
        $newBidRules->setReviewlast($data['options'][0]['reviewLast']);
        $newBidRules->setConversions($data['options'][0]['bidMinimumConversions']);
        $newBidRules->setDateUpdated(new \DateTime($dateNow));
        $em->persist($newBidRules);
        $em->flush();
        $lastId = $newBidRules->getBaid();
        $baid = $em->getRepository('AppBundle:BidAdjustmentRules')->findOneByBaid($lastId);


        $values = array();
        foreach($data['items'] as $row){
            if(isset($row['bidLessThan']) && isset($row['bidBetween']) && isset($row['bidGreaterThan']) && isset($row['bidRoiFirstValue']) && isset($row['bidRoiSecondValue']) && isset($row['bidIncrease']) && isset($row['bidDecrease']) && isset($row['bidRoiPercentValue'])){
                if($row['bidLessThan'] == true){
                    $horizontalCondition = 'lessThan';
                }else if($row['bidBetween'] == true){
                    $horizontalCondition = 'between';
                }else if($row['bidGreaterThan'] == true){
                    $horizontalCondition = 'greaterThan';
                }

                if($row['bidIncrease'] == true){
                    $verticalCondition = 'increase';
                }else if($row['bidDecrease'] == true){
                    $verticalCondition = 'decrease';
                }

                $bidConditions = new BidAdjustmentConditions();
                $bidConditions->setBaid($baid);
                $bidConditions->setHorizontalcondition($horizontalCondition);
                $bidConditions->setVerticalcondition($verticalCondition);
                $bidConditions->setValue1($row['bidRoiFirstValue']);
                $bidConditions->setValue2($row['bidRoiSecondValue']);
                $bidConditions->setValuepercent($row['bidRoiPercentValue']);
                $em->persist($bidConditions);
                $em->flush();

            }

        }


        $message = 'Bid Adjustment Rule successfully added';
        $error = FALSE;
        $returnData = array('cgid' => $data['options'][0]['cgid'],
            'bidAdjustmentRule' =>
                array($data
                )
        );

        return new Response ($this->makeResponse($error, $message, $returnData));


    }


    /**
     * @Route("/ajax/get-placement-list/{trafficSourceId}")
     */

    public function ajaxGetReportsBot($trafficSourceId = null){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.campaignRulesPlacementId', 'p.type', 'p.placement', 'p.visits', 'p.clicks' , 'p.ctr', 'p.conversions', 'p.revenue', 'p.cost', 'p.profit', 'p.cpv', 'p.epv', 'p.roi', 'p.status' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.campaignRulesPlacementId';

        // DB table to use
        $sTable = 'AppBundle:CampaignRulesPlacementList';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }else{
            // custom filter


            if(isset($input['type'])){

                if($input['type'] != '' || $input['type'] != null){

                    $aFilteringRules[] = "p.type = '". $input['type'] ."'";
                }
            }


        }

        if(isset($input['id'])){

            $id = $input['id'];
        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE p.tid = '" . $trafficSourceId . "' AND p.cid = $id AND ".implode(" AND ", $aFilteringRules) ;
        } else {
            $sWhere = "WHERE p.tid = '" . $trafficSourceId . "' AND p.cid = $id";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);


        if($input['iDisplayLength'] == '-1'){

            $sQuery = $em->createQuery("
            SELECT $aQueryColumns
            FROM ".$sTable." p ".$sWhere.$sOrder."")

            ;
            $rResult = $sQuery->getResult();


            $sQuery = $em->createQuery("
            SELECT p
            FROM ".$sTable." p ".$sWhere.$sOrder."")

            ;
        }else{
            $sQuery = $em->createQuery("
            SELECT $aQueryColumns
            FROM ".$sTable." p ".$sWhere.$sOrder."")
                    ->setFirstResult($firstResult)
                    ->setMaxResults($maxResults)
                ;
                $rResult = $sQuery->getResult();


                $sQuery = $em->createQuery("
            SELECT p
            FROM ".$sTable." p ".$sWhere.$sOrder."")
                ->setFirstResult($firstResult)
                ->setMaxResults($maxResults)
            ;
        }

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."");

        $iTotal = count($paginator = new Paginator($sQuery));

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $row = array();
            $row[] = '<td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" data-id="' . $column['campaignRulesPlacementId'] . '" data-placement="' . $column['placement'] . '" />
                             <span></span>
                        </label>
                      </td>';
            $row[] = strtoupper($column['type']);
            $row[] = $column['placement'];
            $row[] = $column['visits'];
            $row[] = $column['clicks'];
            $row[] = bcdiv($column['ctr'], 1, 2) . '%';
            $row[] = $column['conversions'];
            $row[] = '$' . bcdiv($column['revenue'], 1, 2);
            $row[] = '$' . bcdiv($column['cost'], 1, 2);
            $row[] = '$' . bcdiv($column['profit'], 1, 2);
            $row[] = bcdiv($column['cpv'], 1, 4);
            $row[] = bcdiv($column['epv'], 1, 4);
            $row[] = bcdiv($column['roi'], 1, 2) . '%';
            $row[] = $column['status'];
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );
    }



    /**
     * @Route("/ajax/get-rule-presets")
     */
    public function ajaxGetRulePresets(){

        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 't.id', 't.presetName' );

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'id';

        // DB table to use
        $sTable = 'AppBundle:CampaignRulePresets';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);



        $sQuery = $em->createQuery("
        SELECT $aQueryColumns
        FROM ".$sTable." t ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $sQuery = $em->createQuery("
        SELECT t
        FROM ".$sTable." t ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT t
        FROM ".$sTable." t ".$sWhere.$sOrder."");

        $iTotal = count($paginator = new Paginator($sQuery));

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $row = array();
            $row[] = $column['presetName'];
            $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#editModal"  data-action="edit" data-id="' . $column['id'] . '" data-name="' . $column['presetName'] . '" data-conditions="' . htmlentities($this->getRulePresetConditionByRuleId($column['id'])) .'" onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#deleteModal" data-action="delete" data-id="' . $column['id'] . '" data-name="' . $column['presetName'] . '" onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
            $output['aaData'][] = $row;
        }
        return new Response( json_encode( $output ) );


    }


    /**
     * @Route("/campaign/get-campaign-rule-presets")
     */

    public function getCampaignRulePresets(){
        $data = $_POST['param'];
        return new Response($this->getRulePresetConditionByRuleId($data));
    }

    public function getRulePresetConditionByRuleId($id){

        $em = $this->getDoctrine()->getManager();
        $ruleEntity = $em->getRepository('AppBundle:CampaignRulePresets')->find($id);
        $conditionsEntity = $em->getRepository('AppBundle:CampaignRulePresetsConditions')->findBy(array('campaignPresets' => $ruleEntity));

        $data = array();
        for($x = 0; $x < count($conditionsEntity); $x++){
            $data[] = array(
                'campaignPresetsId' => $conditionsEntity[$x]->getCampaignPresets()->getId(),
                'ruleVariable' => $conditionsEntity[$x]->getRuleVariable(),
                'ruleCondition' => $conditionsEntity[$x]->getRuleCondition(),
                'value1' => $conditionsEntity[$x]->getValue1(),
                'value2' => $conditionsEntity[$x]->getValue2()
            );
        }


        return json_encode($data);
    }



    /**
     * @Route("/campaign/delete-campaign-group", name="deleteCampaignGroup")
     */
    public function deleteCampaignGroup(){
        $cid = $_POST['param'];
        $appBundle = 'AppBundle:Campaign';
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "DELETE FROM $appBundle p
             WHERE p.id = $cid
            "
        );
        $numDeleted = $sql->execute();



        $message = 'Campaign Group successfully added';
        $error = FALSE;
        $data = array('id' => $cid);


        return new Response($this->makeResponse($error, $message, $data));


    }


    /**
     * @Route("/campaign/add-ip-rule", name="addIpRule")
     */
    public function addIpRule(){

        $data = json_decode($_POST['param'], true);

        $this->deleteRules('AppBundle:IpRules', $data['options'][0]['cgid']);
        $dateNow = date('Y-m-d');

        $em = $this->getDoctrine()->getManager();
        // $cgid = $em->getRepository('AppBundle:Campaigngroups')->findOneById($data['options'][0]['cgid']);
        $newIpRules = new IpRules();
        $newIpRules->setCgid($data['options'][0]['cgid']);
        $newIpRules->setActive($data['options'][0]['active']);
        $newIpRules->setFrequency($data['options'][0]['frequency']);
        $newIpRules->setDateupdated(new \DateTime($dateNow));
        $em->persist($newIpRules);
        $em->flush();
        $lastId = $newIpRules->getIid();
        $iid = $em->getRepository('AppBundle:IpRules')->findOneByIid($lastId);
        $values = array();
        if(count($data['items']) > 0){
            foreach($data['items'] as $set){
                $values[] = "('{$lastId}', '{$set['carrier']}')";

                $ipConditions = new IpConditions();
                $ipConditions->setIid($iid);
                $ipConditions->setCarrier($set['carrier']);
                $em->persist($ipConditions);
                $em->flush();

            }

        }


        $message = 'Ip Blacklist Rule successfully added';
        $error = FALSE;
        $returnData = array('cgid' => $data['options'][0]['cgid'],
            'ipRule' =>
                array($data
                )
        );

        return new Response ($this->makeResponse($error, $message, $returnData));
    }


    /**
     * @Route("/campaign/reset")
     */
    public function campaignResetAction(){
        $data = json_decode($_POST['param'], true);
        $id = $data['id'];
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $zeroParkToken = $apiCredentials[0]['zeropark'];
        $query = array();
        $url = 'https://panel.zeropark.com/api/campaign/' . $id . '/targets/resume';
        $returnedData = json_decode($this->forward('AppBundle:ZeroparkApi:zeroparkRequest', array('url' => $url,
            'query' => $query,
            'method' => 1,
            'token' => $zeroParkToken))->getContent(), true);

        if (!isset($returnedData['error'])) {
            $return = array(
                'success' => true
            );
        }else{
            $return = array(
                'success' => false,
                'message' => $returnedData['error']
            );
        }


        return new Response(
            json_encode($return)
        );
    }



    /**
     * @Route("/campaign/get-campaign-optimization")
     */

    public function getCampaignOptimizationAction(){

        $data = json_decode($_POST['param'], true);
        if($data['type'] == 'default'){
            $from = date('Y-m-d', strtotime('-3 days'));
            $to = date('Y-m-d', strtotime($data['to']));
            $from = $from.'T00:00:00Z';
            $to = $to.'T00:00:00Z';
        }else{
            $from = date('Y-m-d', strtotime($data['from']));
            $timeFrom = explode(':', $data['fromTime']);
            $to = date('Y-m-d', strtotime($data['to']));
            $timeTo = explode(':', $data['toTime']);
            $from = $from.'T'.$timeFrom[0].':00:00Z';
            $to = $to.'T'.$timeTo[0].':00:00Z';
        }

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
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
            'columns' => 'campaignId',
            'columns' => 'status',
            'columns' => 'cpv',
            'columns' => 'ctr',
            'columns' => 'cr',
            'columns' => 'cv',
            'columns' => 'roi',
            'columns' => 'epv',
            'columns' => 'epc',
            'columns' => 'ap',
            'columns' => 'errors',
            'groupBy' => 'campaign',
            'offset' => 0,
            'limit' => $limit,
            'include' => 'ACTIVE',
            'conversionTimeMode' => 'VISIT'
        );
        $url = 'https://api.voluum.com/report?';
        $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
            'query' => $query,
            'method' => 'GET',
            'sessionId' => $voluumSessionId))->getContent(), true);

        $item['data'] = array();
        foreach($apiResponse['rows'] as $row){
            if(!isset($row['campaignCountry'])){
                $country = 'Global';
            }else{
                $country = $row['campaignCountry'];
            }

                if($row['visits'] >= 100){
                    $item['data'][] = array(
                        '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                           <input type="checkbox" class="checkboxes report-record" value="1" name="table_records" 
                                data-id="' . $row['campaignId'] . '" />
                              
                             <span></span>
                        </label>
                      ',
                        '<a href="#" onClick="getOptimizationReports(this)" data-id="'.$row['campaignId'].'" data-name="'.$row['campaignName'].'">'.$row['campaignName'].'</a>',
                        $row['trafficSourceName'],
                        $country,
                        '<button 
                        data-id="' . $row['campaignId'] . '"
                        title="Optimized" class="btn blue btn-xs optimizeCampaign" onClick="optimizeCampaign(this)"><i class="icon icon-magnifier"></i></button>'
                    );

                }
        }


        file_put_contents("data_table_tmp_files/campaign/optimization.txt", json_encode($item, JSON_UNESCAPED_UNICODE));

        return new Response(
            json_encode(true)
        );
    }


    /**
     * @Route("/campaign/get-campaign-by-id")
     */

    public function getCampaignByIdAction()
    {

        $data = json_decode($_POST['param'], true);

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();
        $flowId = null;
        $path = array();
        $x = $data['index'];
            $url = 'https://api.voluum.com/campaign/'.$data['items'][$x]['id'];
            $apiResponse = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);
        $campaignName = '';
        $campaignId = '';
            if(isset($apiResponse['id'])){
                $campaignId = $apiResponse['id'];
                $campaignName = $apiResponse['name'];
               if(isset($apiResponse['redirectTarget']['flow'])){
                   $flowId = $apiResponse['redirectTarget']['flow']['id'];
                   $url = 'https://api.voluum.com/flow/'.$apiResponse['redirectTarget']['flow']['id'];
                   $apiResponseFlow = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                       'query' => $query,
                       'method' => 'GET',
                       'sessionId' => $voluumSessionId))->getContent(), true);

                   foreach($apiResponseFlow['conditionalPathsGroups'] as $group){
                       for($p = 0; $p < count($group['paths']); $p++){
                           for($f = 0; $f < count($group['paths'][$p]['landers']); $f++){
                               $pathLanders[$group['id']][$group['paths'][$p]['id']][] = array(
                                   'landerId' => $group['paths'][$p]['landers'][$f]['lander']['id']
                               );
                           }
                           for($f = 0; $f < count($group['paths'][$p]['offers']); $f++){
                               $path[$group['id']][$group['paths'][$p]['id']][] = array(
                                   'offerId' => $group['paths'][$p]['offers'][$f]['offer']['id']
                               );
                           }

                       }
                   }
               }
            }


            $from = date('Y-m-d', strtotime($data['from']));
            $timeFrom = explode(':', $data['fromTime']);
            $to = date('Y-m-d', strtotime($data['to']));
            $timeTo = explode(':', $data['toTime']);
            $from = $from.'T'.$timeFrom[0].':00:00Z';
            $to = $to.'T'.$timeTo[0].':00:00Z';
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
                'columns' => 'campaignId',
                'columns' => 'status',
                'columns' => 'cpv',
                'columns' => 'ctr',
                'columns' => 'cr',
                'columns' => 'cv',
                'columns' => 'roi',
                'columns' => 'epv',
                'columns' => 'epc',
                'columns' => 'ap',
                'columns' => 'errors',
                'groupBy' => 'offer',
                'offset' => 0,
                'limit' => $limit,
                'include' => 'ACTIVE',
                'conversionTimeMode' => 'VISIT',
                'filter1' => 'campaign',
                'filter1Value' => $apiResponse['id']
            );
            $url = 'https://api.voluum.com/report?';
            $apiResponseOffer = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);


            if(isset($apiResponseOffer['rows'])){
                $campaignOffers = $apiResponseOffer['rows'];
            }else{
                $campaignOffers = $apiResponseOffer;
            }



            $query = array('from' => $from,
                'to' => $to,
                'tz' => $tz,
                'sort' => $sort,
                'direction' => $direction,
                'columns' => 'campaignName',
                'columns' => 'campaignId',
                'columns' => 'status',
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
                'include' => 'ACTIVE',
                'conversionTimeMode' => 'VISIT',
                'filter1' => 'campaign',
                'filter1Value' => $apiResponse['id']
            );


            $apiResponseLander = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);

            if(isset($apiResponseLander['rows'])){
                $campaignLanders = $apiResponseLander['rows'];
            }else{
                $campaignLanders = $apiResponseLander;
            }



        $data['index'] += 1;

        if(isset($data['items'][$data['index']])){
            $hasNext = true;
        }else{
            $hasNext = false;
        }




        if(count($path) > 0 ){
            $return = array(
                'success' => true,
                'hasNext' => $hasNext,
                'items' => $data,
                'campaignName' => $campaignName,
                'campaignId' => $campaignId,
                'data' => array(
                    'flowId' => $flowId,
                    'flowOffers' => $path,
                    'flowLanders' => $pathLanders,
                    'campaignOffers' => $campaignOffers,
                    'campaignLanders' => $campaignLanders
                )

            );
        }else{
            $return = array(
                'success' => false,
                'hasNext' => $hasNext,
                'items' => $data,
                'campaignName' => $campaignName,
                'data' => array()
            );
        }
        return new Response(
            json_encode($return)
        );


    }


    /**
     * @Route("/campaign/execute-flow-optimization")
     */

    public function executeFlowOptimizationAction()
    {

        $data = json_decode($_POST['param'], true);
        $dateTime = date('Y-m-d H:i:s');
        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $query = array();


        if($data['flowId'] != null) {
            $url = 'https://api.voluum.com/flow/' . $data['flowId'];
            $apiResponseFlow = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);

            if (isset($apiResponseFlow['id'])) {
                for ($g = 0; $g < count($apiResponseFlow['conditionalPathsGroups']); $g++) {
                    for ($x = 0; $x < count($data['data']); $x++) {
                        $groupId = $data['data'][$x]['groupId'];
                        if ($groupId == $apiResponseFlow['conditionalPathsGroups'][$g]['id']) {
                            for ($p = 0; $p < count($data['data'][$x]['conditionalPaths']); $p++) {
                                for ($cp = 0; $cp < count($apiResponseFlow['conditionalPathsGroups'][$g]['paths']); $cp++) {
                                    if ($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['id'] == $data['data'][$x]['conditionalPaths'][$p]['conditionPathId']) {
                                        if (count($data['data'][$x]['conditionalPaths'][$p]['losingOffers']) > 0) {
                                            for ($lf = 0; $lf < count($data['data'][$x]['conditionalPaths'][$p]['losingOffers']); $lf++) {
                                                for ($f = 0; $f < count($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['offers']); $f++) {
                                                    if ($data['data'][$x]['conditionalPaths'][$p]['losingOffers'][$lf]['offerId'] == $apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['offers'][$f]['offer']['id']) {
                                                        unset($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['offers'][$f]);

                                                    }
                                                }
                                            }
                                        }
                                    }

                                    $reassigned = array_values($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['offers']);
                                    $apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['offers'] = $reassigned;
                                }
                            }
                        }
                    }


                    for ($x = 0; $x < count($data['landerData']); $x++) {
                        $groupId = $data['landerData'][$x]['groupId'];
                        if ($groupId == $apiResponseFlow['conditionalPathsGroups'][$g]['id']) {
                            for ($p = 0; $p < count($data['landerData'][$x]['conditionalPaths']); $p++) {
                                for ($cp = 0; $cp < count($apiResponseFlow['conditionalPathsGroups'][$g]['paths']); $cp++) {
                                    if ($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['id'] == $data['landerData'][$x]['conditionalPaths'][$p]['conditionPathId']) {
                                        if (count($data['landerData'][$x]['conditionalPaths'][$p]['losingLanders']) > 0) {
                                            for ($lf = 0; $lf < count($data['landerData'][$x]['conditionalPaths'][$p]['losingLanders']); $lf++) {
                                                for ($f = 0; $f < count($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['landers']); $f++) {
                                                    if ($data['data'][$x]['conditionalPaths'][$p]['losingLanders'][$lf]['landerId'] == $apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['landers'][$f]['lander']['id']) {
                                                        unset($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['landers'][$f]);

                                                    }
                                                }
                                            }
                                        }
                                    }

                                    $reassigned = array_values($apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['landers']);
                                    $apiResponseFlow['conditionalPathsGroups'][$g]['paths'][$cp]['landers'] = $reassigned;
                                }
                            }
                        }
                    }


                }

                $return = array(
                    'success' => true
                );


                $postReponse = json_decode($this->forward('AppBundle:VoluumApi:putVoluum', array('url' => $url,
                    'query' => $apiResponseFlow,
                    'method' => 'PUT',
                    'sessionId' => $voluumSessionId))->getContent(), true);


            } else {
                $return = array(
                    'success' => false
                );
            }


            $em = $this->getDoctrine()->getManager();
            if(count($data['offerReports']['offers']) > 0){
                $campaignId = $data['offerReports']['campaignId'];
                $type = 'offer';
                $dataSet = json_encode($data['offerReports']['offers']);

                $offerReportEntity = new CampaignOptimizationHistory();
                $offerReportEntity->setCampaignId($campaignId);
                $offerReportEntity->setType($type);
                $offerReportEntity->setData($dataSet);
                $offerReportEntity->setDateCreated(new \DateTime($dateTime));
                $em->persist($offerReportEntity);
            }
            if(count($data['landerReports']['landers']) > 0){
                $campaignId = $data['offerReports']['campaignId'];
                $type = 'lander';
                $dataSet = json_encode($data['landerReports']['landers']);

                $offerReportEntity = new CampaignOptimizationHistory();
                $offerReportEntity->setCampaignId($campaignId);
                $offerReportEntity->setType($type);
                $offerReportEntity->setData($dataSet);
                $offerReportEntity->setDateCreated(new \DateTime($dateTime));
                $em->persist($offerReportEntity);
            }
            $em->flush();

        }



        return new Response(
            json_encode($return)
        );


    }

    /**
     * @Route("/campaign/get-campaign-optimization-report")
     */

    public function getCampaignOptimizationReportAction()
    {
        $em = $this->getDoctrine()->getManager();
        $campaignId = $_POST['param'];
        $data = array();
        $entity = $em->getRepository('AppBundle:CampaignOptimizationHistory')->findBy(array('campaignId' => $campaignId), array('dateCreated' => 'ASC'));
        if($entity){
            $offerCount = 1;
            $landerCount = 1;
            for($x = 0; $x < count($entity); $x++){
                if($entity[$x]->getType() == 'offer'){
                    $data['offers'][] = array(
                            'title' => 'Optimize Offer #'.$offerCount,
                            'data' => $entity[$x]->getData(),
                            'date' => $entity[$x]->getDateCreated()->format('m/d/Y H:i:s')
                    );

                    $offerCount++;
                }
                if($entity[$x]->getType() == 'lander'){
                    $data['landers'][] = array(
                        'title' => 'Optimize Lander #'.$landerCount,
                        'data' => $entity[$x]->getData(),
                        'date' => $entity[$x]->getDateCreated()->format('m/d/Y H:i:s')
                    );

                    $landerCount++;
                }
            }
        }


        return new Response(
            json_encode($data)
        );
    }


        public function getTrafficSourceById($id){
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('AppBundle:TrafficSource')->findOneBy(array('trafficSourceId' => $id));
        if($entity){
            return $entity->getTrafficName();
        }else{
            return 'Traffic Source Not Found';
        }
    }

}