<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
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
                // replace this example code with whatever you need
                return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                ]);
            }else{
                return $this->redirect('/error');
            }


        }else{
            return $this->redirect('/user/login');
        }


    }



}
