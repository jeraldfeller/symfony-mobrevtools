<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/1/2017
 * Time: 1:38 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use AppBundle\Entity\TrafficSource;
use AppBundle\Entity\MenuPages;

use Symfony\Component\HttpFoundation\Session\Session;

class NavmenuController extends Controller{

    public function getNavmenuAction(){

        $session = new Session();
        $userData = $session->get('userData');

        $uri = explode('/', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $baseUri = $uri[1];

        $campaignNav = $this->getCampgaignNavigation();
        $campNavArr = array();



      //  $pages = json_decode($this->forward('AppBundle:Users:getGroupByUserId', array('id' => $userData['id']))->getContent(), true);
        foreach($campaignNav as $nav){
            $campNavArr[] = '<li class="nav-item">
                            <a href="/campaign/bot-settings/' . $nav['id'] . '/' . $nav['trafficName'] . '" class="nav-link ">
                                <span class="title">' . $nav['trafficName'] . '</span>
                            </a>
                          </li>';
        }

        $campNav = implode(' ', $campNavArr);

        $navmenu = array('home' => '<li class="nav-item isActiveIdentifier">
                                <a href="/" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>',
                    'campaigns' => '<li class="nav-item isActiveIdentifier">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-bullhorn"></i>
                                                <span class="title">Campaigns</span>
                                                <span class="selected"></span>
                                                <span class="arrow open"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            ' .  $campNav . '
                                        </ul>
                                    </li>
                                    ',
                    'offer-search' => '<li class="nav-item isActiveIdentifier">
                                            <a href="/offer-search" class="nav-link nav-toggle">
                                                <i class="fa fa-exchange"></i>
                                                <span class="title">Offer Search</span>
                                                <span class="selected"></span>
                                                <span class="arrow open"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="/offer-search/offer-preset-searches" class="nav-link ">
                                                        <span class="title">Preset Searches</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/offer-search/offer-groups" class="nav-link ">
                                                        <span class="title">Offer Groups</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>',
                    'tools' => '<li class="nav-item isActiveIdentifier">
                                                    <a href="javascript:;" class="nav-link nav-toggle">
                                                        <i class="fa fa-cubes"></i>
                                                        <span class="title">Tools</span>
                                                        <span class="selected"></span>
                                                        <span class="arrow open"></span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li class="nav-item">
                                                            <a href="/tools/cost-update" class="nav-link nav-toggle">
                                                                <span class="title">Cost Update</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="/tools/offers" class="nav-link ">
                                                                <span class="title">Offers</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="/tools/landers" class="nav-link ">
                                                                <span class="title">Landers</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="/tools/lander-presets" class="nav-link ">
                                                                <span class="title">Lander Presets</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="/tools/ip-compiler" class="nav-link ">
                                                                <span class="title">IP Compiler</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>',
                    'reports' => '<li class="nav-item isActiveIdentifier">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="icon icon-docs"></i>
                                                <span class="title">Data Reports</span>
                                                <span class="selected"></span>
                                                <span class="arrow open"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="/reports/bot" class="nav-link ">
                                                        <span class="title">Bot Lists</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/blacklist" class="nav-link ">
                                                        <span class="title">Blacklists</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/whitelist" class="nav-link ">
                                                        <span class="title">Whitelists</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/ip" class="nav-link ">
                                                        <span class="title">IP Data</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/conversions" class="nav-link ">
                                                        <span class="title">Conversion Data</span>
                                                    </a>
                                                 </li>
                                                <li class="nav-item">
                                                    <a href="/reports/metrics" class="nav-link ">
                                                        <span class="title">Metrics</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>',
                    'monitoring' => '<li class="nav-item isActiveIdentifier">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-desktop"></i>
                                                <span class="title">Monitoring</span>
                                                <span class="selected"></span>
                                                <span class="arrow open"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="/monitoring/domain" class="nav-link ">
                                                        <span class="title">Domains</span>
                                                    </a>
                                                </li>
                                                 <li class="nav-item">
                                                    <a href="/monitoring/traffic" class="nav-link ">
                                                        <span class="title">Traffic</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/monitoring/exploit-log" class="nav-link ">
                                                        <span class="title">Exploit Log</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/monitoring/data-log" class="nav-link ">
                                                        <span class="title">Data Log</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>',
                    'global-settings' => '<li class="nav-item isActiveIdentifier">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-gears"></i>
                                                <span class="title">Global Settings</span>
                                                <span class="selected"></span>
                                                <span class="arrow open"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="/global-settings/api-access" class="nav-link ">
                                                        <span class="title">API Access</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/global-settings/traffic-source" class="nav-link ">
                                                        <span class="title">Traffic Source</span>
                                                    </a>
                                                </li>
                                                 <li class="nav-item">
                                                    <a href="/global-settings/affiliate" class="nav-link ">
                                                        <span class="title">Affiliate Network</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:;" class="nav-link nav-toggle">
                                                        <span class="title">Manage Users</span>
                                                        <span class="selected"></span>
                                                        <span class="arrow open"></span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li class="nav-item">
                                                            <a href="/global-settings/manage-users/groups" class="nav-link ">
                                                                <span class="title">Groups</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="/global-settings/manage-users/users" class="nav-link ">
                                                                <span class="title">Users</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                        </li>'
        );


        $output = '';
        foreach($navmenu as $base => $nav){
            if($baseUri == ''){

                if($base == 'home'){
                    $output .= str_replace('isActiveIdentifier', 'active open', $nav);
                }else{
                    $output .= $nav;
                }
            }else if($baseUri == $base){
                $output .= str_replace('isActiveIdentifier', 'active open', $nav);
            }else{
                $output .= $nav;
            }

        }

        return new Response(
            $output
        );
    }

    public function getCampgaignNavigation(){
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery("
            SELECT p.id, p.trafficName
                FROM AppBundle:TrafficSource p
                WHERE p.trafficName != 'Voluum'
                ORDER BY p.trafficName ASC
        ");

        $result = $sql->getResult();

        return $result;

    }

    /**
     * @Route("/nav/menu-pages", name="menuPages")
     */
    public function getMenuPagesAction(){
        $pages = $this->getDoctrine()
            ->getRepository('AppBundle:MenuPages')
            ->findAll();
        $data = array();
        for($x = 0; $x < count( $pages); $x++){
            $data[] = array('pageId' =>  $pages[$x]->getPageId(),
                            'pageName' => $pages[$x]->getPageName(),
                            'pageLink' => $pages[$x]->getPageLink(),
                            'parent' => $pages[$x]->getParent()
                );
        }
        return new Response(
            json_encode($data)
        );
    }
}