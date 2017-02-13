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

class NavmenuController extends Controller{

    public function getNavmenuAction(){
        $uri = explode('/', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $baseUri = $uri[1];
        $navmenu = array('home' => '<li class="nav-item isActiveIdentifier">
                                <a href="/" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>',
                    'offers' => '<li class="nav-item isActiveIdentifier">
                                <a href="/offers" class="nav-link nav-toggle">
                                    <i class="fa fa-tags"></i>
                                    <span class="title">Offers</span>
                                </a>
                            </li>',
                    'reports' => '<li class="nav-item start isActiveIdentifier">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="icon icon-docs"></i>
                                                <span class="title">Reports</span>
                                                <span class="selected"></span>
                                                <span class="arrow open"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="/reports/bot" class="nav-link ">
                                                        <span class="title">Bot</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/blacklist" class="nav-link ">
                                                        <span class="title">Blacklist</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/whitelist" class="nav-link ">
                                                        <span class="title">Whitelist</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/ip" class="nav-link ">
                                                        <span class="title">IP</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/log-tracker" class="nav-link ">
                                                        <span class="title">Log Tracker</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/reports/conversions" class="nav-link ">
                                                        <span class="title">Conversions</span>
                                                    </a>
                                                 </li>
                                                <li class="nav-item">
                                                    <a href="/reports/metrics" class="nav-link ">
                                                        <span class="title">Metrics</span>
                                                    </a>
                                                </li>
                                                 <li class="nav-item">
                                                    <a href="/reports/traffic-monitoring" class="nav-link ">
                                                        <span class="title">Traffic Monitoring</span>
                                                    </a>
                                                 </li>
                                            </ul>
                                        </li>',
                    'global-settings' => '<li class="nav-item start isActiveIdentifier">
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
                                            </ul>
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
}