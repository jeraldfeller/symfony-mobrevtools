<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/4/2017
 * Time: 1:52 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\IpConditions;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Campaign;
use AppBundle\Entity\Campaigngroups;
use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\Verticals;
use AppBundle\Entity\Groups;

use AppBundle\Entity\BotRules;
use AppBundle\Entity\BotRuleSet;
use AppBundle\Entity\BotConditions;
use AppBundle\Entity\BlacklistRules;
use AppBundle\Entity\BlacklistRuleSet;
use AppBundle\Entity\BlacklistConditions;
use AppBundle\Entity\BidAdjustmentRules;
use AppBundle\Entity\BidAdjustmentConditions;
use AppBundle\Entity\IpRules;
use AppBundle\Entity\IpCon;






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
     * @Route("/campaign/bot-settings/{tid}/{page}", name="campaign")
     */
    public function indexAction($tid, $page)
    {
        $campaigns = $this->getCampaigns($tid);
        $groups = $this->getGroups();
        $verticals = $this->getVerticals();
        $carriers = array();
        $dateNow = date('m/d/Y');
        if ($page == 'ExoClick') {
            $carriers = $this->getCarriersDistinct($page);
        }
        return $this->render(
            'campaign/campaign.html.twig', array('page' => $page,
                'tid' => $tid,
                'campaigns' => $campaigns,
                'groups' => $groups,
                'verticals' => $verticals,
                'carriers' => $carriers,
                'dateNow' => $dateNow
            )
        );
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

    public function getGroups()
    {

        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p
                FROM AppBundle:Groups p
                ORDER BY p.groupName ASC
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
                AND v.id = cg.verId
                "
        );
        $result = $sql->getResult();

        return new Response(
            json_encode($result)
        );

    }


    public function getCampaignDetailsAllByMatch($cid, $cgid)
    {

        $campaign = "AppBundle:Campaign";
        $trafficSource = "AppBundle:Trafficsource";
        $campaignGroups = "AppBundle:Campaigngroups";
        $groups = "AppBundle:Groups";
        $verticals = "AppBundle:Verticals";
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "SELECT ca.id as cid,
                       ca.campId,
                       ca.vid,
                       ca.campName,
                       g.id as gid,
                       g.groupName,
                       cg.id as cgid,
                       cg.geo,
                       v.verticalName,
                       v.id as verId,
                       t.trafficName
                FROM $campaign ca, $trafficSource t, $groups g, $campaignGroups cg, $verticals v
                WHERE ca.id = $cid
                AND ca.id = cg.cid
                AND g.id = cg.gid
                AND v.id = cg.verId
                AND t.id = ca.tid
                "
        );
        $result = $sql->getResult();

        $return = array($cid =>
            array('info' => $result,
                'botRules' => $this->getCampaignBotRulesById($cgid),
                'botConditions' => $this->getCampaignBotConditionsById($cgid),
                'blacklistRules' => $this->getCampaignBlacklistRulesById($cgid),
                'blacklistConditions' => $this->getCampaignBlacklistConditionsById($cgid),
                'ipRules' => $this->getCampaignIpRulesById($cgid),
                'ipConditions' => $this->getCampaignIpConditionsById($cgid),
                'carriers' => $this->getCarriersDistinct($result[0]['trafficName']),
                'bidAdjustmentRules' => $this->getCampaignBidAdjustmentRulesById($cgid),
                'bidAdjustmentConditions' => $this->getCampaignBidAdjustmentConditionsById($cgid)

            )
        );

        return $return;
    }


    public function getCampaignBotRulesById($cgid)
    {

        $appBundle = 'AppBundle:BotRules';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p
                    FROM $appBundle p
                    WHERE p.cgid = $cgid ");

        $result =  $query->getResult();
        $return = array();

        for($i = 0; $i < count($result); $i++){
            $dateFrom = (array)$result[$i]->getDateFrom();
            $dateFromObject = new \DateTime($dateFrom['date']);
            $dateFromFormat = $dateFromObject->format('m/d/Y');
            $dateUpdated = (array)$result[$i]->getDateUpdated();
            $dateUpdatedObject = new \DateTime($dateUpdated['date']);
            $dateUpdatedFormat = $dateUpdatedObject->format('m/d/Y');

            $return[] = array(
                'active' => $result[$i]->getActive(),
                'bid' => $result[$i]->getBid(),
                'cgid' => $result[$i]->getCgid()->getId(),
                'dateFrom' => $dateFromFormat,
                'dateTime' => $result[$i]->getDatetime(),
                'dateTimeUnix' => $result[$i]->getDateTimeUnix(),
                'dateUpdated' => $dateUpdatedFormat,
                'frequency' => $result[$i]->getFrequency(),
                'opt' => $result[$i]->getOpt(),
                'val' => $result[$i]->getVal(),
                'visits' => $result[$i]->getVisits()
            );


        }



        return $return;
    }

    public function getCampaignBotConditionsById($cgid)
    {
        $ruleSet = array();

        $appBundleBotRules = 'AppBundle:BotRules';
        $appBundleBotRuleSet = 'AppBundle:BotRuleSet';
        $appBundleBotConditions = 'AppBundle:BotConditions';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT p.bid
                    FROM $appBundleBotRules p
                    WHERE p.cgid = $cgid ");

        $content = $query->getResult();

        if (count($content) > 0) {
            $bid = $content[0]['bid'];
            $em = $this->getDoctrine()->getManager();
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

            $content1 = $query->getResult();

            return $content1;
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

        $trafficName = $data['trafficName'];
        $tid = $data['tid'];


        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];
        $zeroParkToken = $apiCredentials[0]['zeropark'];
        $exoClickToken = $apiCredentials[0]['exoclick'];


        $campaignExists = array();

        $campaigns = $this->getCampaigns($tid);
        if($trafficName == 'Zeropark'){

            foreach($campaigns as $x){
                $campaignExists[] = $x['campId'];
            }

            $query = array('interval' => 'TODAY',
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

        }else if($trafficName == 'ExoClick'){
            $campaignExistsExoClick = array();
            $url = 'https://api.exoclick.com/v1/campaigns';
            $params = array();
            $apiResponse = json_decode($this->forward('AppBundle:ExoClickApi:exoClickGetCampaigns', array(
                'token' => $exoClickToken))->getContent(), true);
            foreach($campaigns as $x){
                $campaignExists[] = $x['vid'];
                $campaignExistsExoClick[] = $x['campId'];
            }
        }



        $output = '';
        if($trafficName == 'Zeropark'){

            foreach($apiResponse['elements'] as $key => $details){
                if(!in_array($details['details']['id'], $campaignExists )){
                    $url = explode("/", $details['details']['url']);
                    $geo = (isset($details['details']['geo']) ? $details['details']['geo'] : 'N/A');
                    $output .= '<tr>';
                    $output .= '<td>';
                    $output .= '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">';
                    $output .= '<input type="checkbox" class="checkboxes camp-record" value="1" name="table_records" data-voluumid="' . end($url) . '" data-campid="'. $details['details']['id'] . '" data-campname="' . $details['details']['name'] . '" data-geo="' . $geo . '" />';
                    $output .= '<span></span>';
                    $output .= '</label>';
                    $output .= '</td>';
                    $output .= '<td>' . $details['details']['name'] . '</td>';
                    $output .= '<td>' . end($url) . '</td>';
                    $output .= '</tr>';



                    $disable = '';
                    $noExists = 0;
                }else{
                    $noExists = 1;

                }
            }

        }else if($trafficName == 'ExoClick'){
            $dateNow = date('Y-m-d');
            $exoClick = $this->getTrafficSourceByName('ExoClick');

            $from = date('Y-m-d', strtotime('-30 days'));
            $to = date('Y-m-d', strtotime('+1 days'));
            $tz = 'America/Chicago';
            $sort = 'visit';
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
                'filter1Value' => $exoClick[0]['trafficSourceId']
            );



            $voluumCampaignToMatchGetCampid = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);
            
            //echo '<pre>' , var_dump($apiCampaignsReturn) , '</pre>';
            $noExists = 1;
            if(!isset($voluumCampaignToMatchGetCampid['error'])){
                $i = 0;
                foreach($voluumCampaignToMatchGetCampid['rows'] as $voluumRow){
                    if(!in_array($voluumRow['campaignId'], $campaignExists )){
                        $geo = (isset($voluumRow['geo']) ? $voluumRow['geo'] : 'N/A');
                        if($geo == 'N/A'){
                            $geo = json_decode($this->forward('AppBundle:Common:getGeoCodeByCountry', array('country' => $voluumRow['campaignCountry']))->getContent(), true);
                        }
                        $output .= '<tr>';
                        $output .= '<td class="a-center"><input id="checkBoxId_' . $i . '" style="width: 20px; height: 20px;" type="checkbox" data-voluumid="' . $voluumRow['campaignId'] . '" data-campname="' .  $voluumRow['campaignName'] . '" data-geo="' . $geo . '" class="flat camp-record" name="table_records"></td>';

                        $output .= '<td>' . $voluumRow['campaignName'] . '</td>';
                        $output .= '<td>';
                        $output .= '<select data-selectid="' . $i . '" class="form-control" onchange="setDataAttribute(this)">';
                        $output .= '<option value="0">-- select campaign --</option>';
                        $output .= '<option value="none">None</option>';
                        foreach($apiResponse as $row){
                            if($row['status'] != -1){
                                if(!in_array($row['id'], $campaignExistsExoClick )){
                                    $output .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                }
                            }


                        }
                        $output .= '</select>';

                        $output .= '</td>';
                        $output .= '</tr>';
                        $disable = '';
                        $noExists = 0;
                        $i++;
                    }else{
                        $noExists = 1;

                    }


                }
            }


        }


        if($noExists == 1){
            $output .= '<tr>';
            $output .='<td colspan="3">No Campaign Available</td>';
            $output .='</tr>';
            $disable = 'disabled';
        }




        return new Response($output);


    }

    /**
     * @Route("/campaign/import-campaigns", name="importCampaigns")
     */
    public function importCampaignAction(){
        $data = json_decode($_POST['param'], true);
        $em = $this->getDoctrine()->getManager();
        $i = 1;
        $batch = 20;

        foreach($data['items'] as $row) {

            $tid = $em->getRepository('AppBundle:TrafficSource')->findOneById($row['tid']);
            $campaign = new Campaign();
            $campaign->setTid($tid);
            $campaign->setCampId($row['campId']);
            $campaign->setVid($row['vid']);
            $campaign->setCampName($row['campName']);
            $campaign->setGeo($row['geo']);
            $em->persist($campaign);
            if(($i % $batch) == 0){
                $em->flush();
                $em->clear();
            }
            $i++;
        }

        $em->flush();
        $em->clear();

        return new Response(json_encode(true));
    }

    /**
     * @Route("/campaign/add-group", name="addGroup")
     */
    public function addGroup(){
        $data = $_POST['param'];
        $em = $this->getDoctrine()->getManager();

        $group = $em->getRepository('AppBundle:Groups')
            ->findByGroupName($data);
        if ($group) {
            $message = 'Group already exists';
            $data = array();
            $error = TRUE;
        }else{

            $newGroup = new Groups();
            $newGroup->setGroupName($data);
            $em->persist($newGroup);
            $em->flush();
            $lastId = $newGroup->getId();

            $message = 'Group successfully added';
            $error = FALSE;
            $data = array('id' => $lastId, 'groupName' => $group);


        }


        return new Response (
            $this->makeResponse($error,$message, $data)
        );


    }

    /**
     * @Route("/campaign/get-groups", name="getGroup")
     */
    public function getGroup(){

        $groups = $this->getDoctrine()
            ->getRepository('AppBundle:Groups')
            ->findAll();



        $output = '';
        $output .= '<option></option>';


        if(count($groups) == 0){
            return new Response(json_encode(array()));
        }else{
            for($x = 0; $x < count($groups); $x++){
                $output .= '<option value="' . $groups[$x]->getId() . '">' . $groups[$x]->getGroupName() . '</option>';

            }
            return new Response($output);
        }

        return new Response($output);

    }

    /**
     * @Route("/campaign/delete-group", name="deleteGroup")
     */
    public function deleteGroup(){
        $gid = $_POST['param'];
        $em = $this->getDoctrine()->getManager();


        //$group = $em->getRepository('AppBundle:Groups')->find($gid);

        $campaignGroups = $em->getRepository('AppBundle:Campaigngroups')->findByGid($gid);


        if ($campaignGroups) {
            $message = 'Cannot delete group. This group is used.';
            $data = array();
            $error = TRUE;
        }else{

            $deleteGroup = $em->getRepository('AppBundle:Groups')->find($gid);
            $em->remove($deleteGroup);
            $em->flush($deleteGroup);


            $message = 'Group successfully deleted';
            $error = FALSE;
            $data = array('id' => $gid);


        }

        return new Response (
            $this->makeResponse($error,$message, $data)
        );

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
     * @Route("/campaign/get-group-campaign-match", name="getGroupCampaignMatch")
     */
    public function getGroupCampaignMatch(){

        $data = explode(',', $_POST['param']);
        $cid = $data[0];
        $em = $this->getDoctrine()->getManager();

        $campaignGroups = $em->getRepository('AppBundle:Campaigngroups')->findByCid($cid);

        if($campaignGroups){
            $error = FALSE;
            $message = 'Campaign Group Matched';
            $data = $this->getCampaignDetailsAllByMatch($cid, $campaignGroups[0]->getId());
        }else{
            $error = FALSE;
            $message = 'No Campaign Matched (add as new)';
            $data = array();
        }

        return new Response($this->makeResponse($error, $message, $data));

    }

    /**
 * @Route("/campaign/add-bot-rule", name="addBotRule")
 */
    public function addBotRule(){

        $data = json_decode($_POST['param'], true);
        $this->deleteRules('AppBundle:BotRules', $data['options'][0]['cgid']);
        $startFrom = date("Y-m-d", strtotime($data['options'][0]['startDate']));
        $time = explode(':', $data['options'][0]['startTime']);
        $dateTimeUnix = strtotime($data['options'][0]['startDate'] . ' ' . $time[0] . ':00');
        $dateNow = date('Y-m-d');


        $em = $this->getDoctrine()->getManager();
        $cgid = $em->getRepository('AppBundle:Campaigngroups')->findOneById($data['options'][0]['cgid']);
        $newBot = new BotRules();
        $newBot->setCgid($cgid);
        $newBot->setOpt(0);
        $newBot->setVisits(0);
        $newBot->setVal(0);
        $newBot->setDateTimeUnix($dateTimeUnix);
        $newBot->setDateFrom(new \DateTime($startFrom));
        $newBot->setDateTime($time[0] . ':00');
        $newBot->setFrequency($data['options'][0]['frequency']);
        $newBot->setActive($data['options'][0]['active']);
        $newBot->setDateUpdated(new \DateTime($dateNow));
        $em->persist($newBot);
        $em->flush();
        $lastId = $newBot->getBid();
        $bid = $em->getRepository('AppBundle:BotRules')->findOneByBid($lastId);
        $values = array();
        if(count($data['items']) > 0){

            foreach($data['items'] as $set){
                $newBotSet = new BotRuleSet();
                $newBotSet->setBid($bid);
                $em->persist($newBotSet);
                $em->flush();
                $lastSetId = $newBotSet->getBrsid();
                foreach($set['conditions'] as $con => $var){
                    $brsid = $em->getRepository('AppBundle:BotRuleSet')->findOneByBrsid($lastSetId);
                    $botConditions = new BotConditions();
                    $botConditions->setBrsid($brsid);
                    $botConditions->setRuleVariable($var['variable']);
                    $botConditions->setRuleCondition($var['operator']);
                    $botConditions->setValue1($var['value1']);
                    $botConditions->setValue2($var['value2']);
                    $em->persist($botConditions);
                    $em->flush();
                }


            }

        }

        $message = 'Bot Rule successfully added';
        $error = FALSE;
        $returnData = array('cgid' => $data['options'][0]['cgid'],
            'botRule' =>
                array($data
                )
        );

        return new Response($this->makeResponse($error, $message, $returnData));


    }


    /**
     * @Route("/campaign/add-blacklist-rule", name="addBlacklistRule")
     */
    public function addBlacklistRule(){

        $data = json_decode($_POST['param'], true);
        $this->deleteRules('AppBundle:BlacklistRules', $data['options'][0]['cgid']);
        $startFrom = date("Y-m-d", strtotime($data['options'][0]['startDate']));
        $time = explode(':', $data['options'][0]['startTime']);
        $dateTimeUnix = strtotime($data['options'][0]['startDate'] . ' ' . $time[0] . ':00');
        $dateNow = date('Y-m-d');


        $em = $this->getDoctrine()->getManager();
        $cgid = $em->getRepository('AppBundle:Campaigngroups')->findOneById($data['options'][0]['cgid']);
        $newBlacklist = new BlacklistRules();
        $newBlacklist->setCgid($cgid);
        $newBlacklist->setDateTimeUnix($dateTimeUnix);
        $newBlacklist->setStartFrom(new \DateTime($startFrom));
        $newBlacklist->setDateTime($time[0] . ':00');
        $newBlacklist->setFrequency($data['options'][0]['frequency']);
        $newBlacklist->setActive($data['options'][0]['active']);
        $newBlacklist->setActiontype('pause');
        $newBlacklist->setDateUpdated(new \DateTime($dateNow));
        $em->persist($newBlacklist);
        $em->flush();
        $lastId = $newBlacklist->getBlid();
        $blid = $em->getRepository('AppBundle:BlacklistRules')->findOneByBlid($lastId);
        $values = array();
        if(count($data['items']) > 0){
            foreach($data['items'] as $set){
                $newBlacklistSet = new BlacklistRuleSet();
                $newBlacklistSet->setBlid($blid);
                $em->persist($newBlacklistSet);
                $em->flush();
                $lastSetId = $newBlacklistSet->getBlrsid();
                foreach($set['conditions'] as $con => $var){
                    $blrsid = $em->getRepository('AppBundle:BlacklistRuleSet')->findOneByBlrsid($lastSetId);
                    $blacklistConditions = new BlacklistConditions();
                    $blacklistConditions->setBlrsid($blrsid);
                    $blacklistConditions->setRuleVariable($var['variable']);
                    $blacklistConditions->setRuleCondition($var['operator']);
                    $blacklistConditions->setValue1($var['value1']);
                    $blacklistConditions->setValue2($var['value2']);
                    $em->persist($blacklistConditions);
                    $em->flush();
                }

            }

        }

        $message = 'Blacklist Rule successfully added';
        $error = FALSE;
        $returnData = array('cgid' => $data['options'][0]['cgid'],
            'blacklistRule' =>
                array($data
                )
        );

        return new Response($this->makeResponse($error, $message, $returnData));


    }

    public function deleteRules($appBundle, $cgid){;
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "DELETE FROM $appBundle p
             WHERE p.cgid = $cgid
            "
        );
        $numDeleted = $sql->execute();
        return new Response(
            json_encode($numDeleted)
        );

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
     * @Route("/campaign/get-placement-report", name="getPlacementReport")
     */
    public function getPlacementReport()
    {

        $apiCredentials = json_decode($this->forward('AppBundle:System:getApiCredentialsAll', array())->getContent(), true);
        $voluumSessionId = $apiCredentials[0]['voluum'];

        $aColumns = array('yesterday', '3day', '7day', 'placement', 'conversions', 'revenue', 'cost', 'profit', 'cpv', 'epv', 'roi');
        $iColumnCount = count($aColumns);


        $input =& $_GET;
        $vid = '';
        $trafficName = '';
        $interval = '';
        if (isset($input['vid']) || $input['vid'] != '') {
            $vid = $input['vid'];
        }
        if (isset($input['trafficName']) || $input['trafficName'] != '') {
            $trafficName = $input['trafficName'];
        }

        if ($trafficName == 'Zeropark') {
            $customVariable = 'customVariable1';
        } else if ($trafficName == 'ExoClick') {
            $customVariable = 'customVariable3';
        }

        $sLimit = "";
        if (isset($input['iDisplayStart']) && $input['iDisplayLength'] != '-1') {
            $sLimit = $input['iDisplayStart'];
        }


        $iTotal = 20;

        /**
         * Output
         */

        $output = array(
            "sEcho" => intval($input['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $input['iDisplayLength'],
            "aaData" => array()
        );


        $split = explode(':', date('H:m'));
        $yesterday = date('Y-m-d', strtotime('-1 days')) . 'T00:00:00Z';
        $today = date('Y-m-d') . 'T' . $split[0] . ':00:00Z';
        $threeDay = $today = date('Y-m-d', strtotime('-3 days')) . 'T' . $split[0] . ':00:00Z';
        $sevenDay = $today = date('Y-m-d', strtotime('-7 days')) . 'T' . $split[0] . ':00:00Z';
        $tz = 'America/Chicago';
        $sort = 'revenue';
        $direction = 'desc';
        $limit = $input['iDisplayLength'];
        $url = 'https://portal.voluum.com/report?';
        if ($trafficName == 'Zeropark') {
            $query = array('from' => $yesterday,
                'to' => $today,
                'tz' => $tz,
                'sort' => $sort,
                'direction' => $direction,
                'columns' => 'customVariable1',
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
                'groupBy' => 'custom-variable1',
                'offset' => 0,
                'limit' => $limit,
                'include' => 'active',
                'filter1' => 'campaign',
                'filter1Value' => $vid
            );

            $returnedDataYesterday = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);
        } else if ($trafficName == 'ExoClick') {
            $query = array('from' => $yesterday,
                'to' => $today,
                'tz' => $tz,
                'sort' => $sort,
                'direction' => $direction,
                'columns' => 'customVariable3',
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
                'groupBy' => 'custom-variable3',
                'offset' => 0,
                'limit' => $limit,
                'include' => 'active',
                'filter1' => 'campaign',
                'filter1Value' => $vid
            );

            $returnedDataYesterday = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                'query' => $query,
                'method' => 'GET',
                'sessionId' => $voluumSessionId))->getContent(), true);
        }

        if (!isset($returnedDataYesterday['error'])) {
            foreach ($returnedDataYesterday['rows'] as $item) {
                $row = array();

                if ($trafficName == 'Zeropark') {
                    $tz = 'America/Chicago';
                    $limit = 100;
                    $placement = $item[$customVariable];
                    $queryThreeDay = array('from' => $threeDay,
                        'to' => $today,
                        'tz' => $tz,
                        'columns' => 'offerName',
                        'columns' => 'visits',
                        'columns' => 'clicks',
                        'columns' => 'visits',
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
                        'groupBy' => 'offer',
                        'offset' => 0,
                        'limit' => $limit,
                        'include' => 'traffic',
                        'filter1' => 'campaign',
                        'filter1Value' => $vid,
                        'filter2' => 'custom-variable-1',
                        'filter2Value' => $placement
                    );


                    $querySevenDay = array('from' => $sevenDay,
                        'to' => $today,
                        'tz' => $tz,
                        'columns' => 'offerName',
                        'columns' => 'visits',
                        'columns' => 'clicks',
                        'columns' => 'visits',
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
                        'groupBy' => 'offer',
                        'offset' => 0,
                        'limit' => $limit,
                        'include' => 'traffic',
                        'filter1' => 'campaign',
                        'filter1Value' => $vid,
                        'filter2' => 'custom-variable-1',
                        'filter2Value' => $placement
                    );


                    $returnedDataThreeDay = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                        'query' => $queryThreeDay,
                        'method' => 'GET',
                        'sessionId' => $voluumSessionId))->getContent(), true);

                    $returnedDataSevenDay = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                        'query' => $querySevenDay,
                        'method' => 'GET',
                        'sessionId' => $voluumSessionId))->getContent(), true);

                } else if ($trafficName == 'ExoClick') {
                    $tz = 'America/Chicago';
                    $limit = 100;
                    $placement = $item[$customVariable];
                    $queryThreeDay = array('from' => $threeDay,
                        'to' => $today,
                        'tz' => $tz,
                        'columns' => 'offerName',
                        'columns' => 'visits',
                        'columns' => 'clicks',
                        'columns' => 'visits',
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
                        'groupBy' => 'offer',
                        'offset' => 0,
                        'limit' => $limit,
                        'include' => 'traffic',
                        'filter1' => 'campaign',
                        'filter1Value' => $vid,
                        'filter2' => 'custom-variable-3',
                        'filter2Value' => $placement
                    );


                    $querySevenDay = array('from' => $sevenDay,
                        'to' => $today,
                        'tz' => $tz,
                        'columns' => 'offerName',
                        'columns' => 'visits',
                        'columns' => 'clicks',
                        'columns' => 'visits',
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
                        'groupBy' => 'offer',
                        'offset' => 0,
                        'limit' => $limit,
                        'include' => 'traffic',
                        'filter1' => 'campaign',
                        'filter1Value' => $vid,
                        'filter2' => 'custom-variable-3',
                        'filter2Value' => $placement
                    );


                    $returnedDataThreeDay = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                        'query' => $queryThreeDay,
                        'method' => 'GET',
                        'sessionId' => $voluumSessionId))->getContent(), true);

                    $returnedDataSevenDay = json_decode($this->forward('AppBundle:VoluumApi:getVoluumReports', array('url' => $url,
                        'query' => $querySevenDay,
                        'method' => 'GET',
                        'sessionId' => $voluumSessionId))->getContent(), true);

                    if (!isset($returnedDataThreeDay['error']) && !isset($returnedDataSevenDay['error'])) {
                        for ($i = 0; $i < $iColumnCount; $i++) {
                            $row[] = $item[$customVariable];
                            $row[] = '$' . number_format($item['profit'], 2) . ' / ' . number_format($item['roi'], 2) . '%';
                            $row[] = '$' . number_format($returnedDataThreeDay['totals']['profit'], 2) . ' / ' . number_format($returnedDataThreeDay['totals']['roi'], 2) . '%';
                            $row[] = '$' . number_format($returnedDataSevenDay['totals']['profit'], 2) . ' / ' . number_format($returnedDataSevenDay['totals']['roi'], 2) . '%';
                            $row[] = $item['conversions'];
                            $row[] = '$' . number_format($item['revenue'], 2);
                            $row[] = '$' . number_format($item['cost'], 2);
                            $row[] = '$' . number_format($item['profit'], 2);
                            $row[] = '$' . number_format($item['cpv'], 4);
                            $row[] = '$' . number_format($item['epv'], 4);
                            $row[] = number_format($item['roi'], 2) . '%';
                            //$row[] = bcdiv($item['roi'], 1, 2) . '%';  // set decimal without rounding


                        }

                        $output['aaData'][] = $row;
                    }


                }


            }


            //var_dump( $output['aaData']);



        }

        return new Response(json_encode($output));
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

}