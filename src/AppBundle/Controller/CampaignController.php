<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/4/2017
 * Time: 1:52 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Campaign;
use AppBundle\Entity\Campaigngroups;
use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\Verticals;
use AppBundle\Entity\Groups;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CampaignController extends Controller {


    /**
     * @Route("/campaign/get-details/all", name="campaignDetailsAll")
     */

    public function getCampaignDetailsAllAction(){
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
}