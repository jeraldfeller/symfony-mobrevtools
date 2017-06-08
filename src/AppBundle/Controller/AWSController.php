<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 6/4/2017
 * Time: 1:27 AM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AWSController extends Controller{

    /**
     * @Route("/tools/aws/invalidate")
     */
    public function showOffersPageAction(){
        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'aws/invalidate.html.twig', array(
                  'page' => 'Invalidate'
                )
            );
        }else{
            return $this->redirect('/user/login');
        }


    }


}