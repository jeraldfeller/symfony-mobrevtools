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



        $pages = json_decode($this->forward('AppBundle:Users:getGroupByUserId', array('id' => $userData['id']))->getContent(), true);
        if($pages['main'] != null){
            $mainParentPages = array();
            foreach($pages['main'] as $page){
                if($page['pageLink'] != ''){
                    if($page['hasChild'] == 1){
                        $subPageOutput = '';
                        foreach($pages['pages'] as $subPage){
                            if($subPage['parent'] == $page['pageId']){
                                $subPageOutput .= '<li class="nav-item">
                                                            <a href="' . $subPage['pageLink'] . '" class="nav-link ">
                                                                <span class="title">' . $subPage['pageName'] . '</span>
                                                            </a>
                                                        </li>';
                            }
                        }
                        $mainParentPages[$page['directoryLevel']] =   '<li class="nav-item isActiveIdentifier">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="' . $page['icon'] . '"></i>
                                    <span class="title">' . $page['pageName'] . '</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                     ' . $subPageOutput . '
                                </ul>
                            </li>';
                    }else{
                        $mainParentPages[$page['directoryLevel']] =   '<li class="nav-item isActiveIdentifier">
                                <a href="' . $page['pageLink'] . '" class="nav-link nav-toggle">
                                    <i class="' . $page['icon'] . '"></i>
                                    <span class="title">' . $page['pageName'] . '</span>
                                </a>
                        </li>';
                    }

                }else{
                    if($page['hasChild'] == 1){
                        $subPageOutput = '';
                        foreach($pages['pages'] as $subPage){
                            if($subPage['parent'] == $page['pageId']){
                                if($subPage['hasChild'] == 1){
                                    $subPageOutputLevelTwo = '';
                                    foreach($pages['pages'] as $subPageLevelTwo) {
                                        if ($subPageLevelTwo['parent'] == $subPage['pageId']) {
                                            $subPageOutputLevelTwo .= '<li class="nav-item">
                                                            <a href="' . $subPageLevelTwo['pageLink'] . '" class="nav-link ">
                                                                <span class="title">' . $subPageLevelTwo['pageName'] . '</span>
                                                            </a>
                                                        </li>';
                                        }
                                    }
                                    if ($subPage['pageLink'] != '') {
                                        $subPageOutput .= '<li class="nav-item">
                                                        <a href="' . $subPage['pageLink'] . '" class="nav-link nav-toggle">
                                                            <span class="title">' . $subPage['pageName'] . '</span>
                                                            <span class="selected"></span>
                                                            <span class="arrow open"></span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                           ' . $subPageOutputLevelTwo . '
                                                        </ul>
                                                    </li>';
                                    } else {
                                        $subPageOutput .= '<li class="nav-item">
                                                        <a href="javascript:;" class="nav-link nav-toggle">
                                                            <span class="title">' . $subPage['pageName'] . '</span>
                                                            <span class="selected"></span>
                                                            <span class="arrow open"></span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                           ' . $subPageOutputLevelTwo . '
                                                        </ul>
                                                    </li>';
                                    }

                                }else{
                                    $subPageOutput .= '<li class="nav-item">
                                                            <a href="' . $subPage['pageLink'] . '" class="nav-link ">
                                                                <span class="title">' . $subPage['pageName'] . '</span>
                                                            </a>
                                                        </li>';
                                }

                            }
                        }



                        $mainParentPages[$page['directoryLevel']] =   '<li class="nav-item isActiveIdentifier">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="' . $page['icon'] . '"></i>
                                    <span class="title">' . $page['pageName'] . '</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                     ' . $subPageOutput . '
                                </ul>
                            </li>';
                    }else{
                        $mainParentPages[$page['directoryLevel']] =   '<li class="nav-item isActiveIdentifier">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="' . $page['icon'] . '"></i>
                                    <span class="title">' . $page['pageName'] . '</span>
                                </a>
                        </li>';
                    }

                }


            }

            $output = '';
            foreach($mainParentPages as $base => $nav){
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

        }else{
            $output = '';
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