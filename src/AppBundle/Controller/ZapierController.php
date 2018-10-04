<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 10/12/2017
 * Time: 4:23 PM
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Entity\ClickFunnelOrders;

class ZapierController extends Controller
{

    /**
     * @Route("/zapier/orders")
     */

    public function zapierPostOrdersAction(){
        $data = $_GET;
        $em = $this->getDoctrine()->getManager();
        $entity = new ClickFunnelOrders();
        if(isset($_GET['last_name'])){
            $entity->setLastName($data['last_name']);
            $entity->setFirstName($data['first_name']);
            $entity->setProductsName($data['products_name']);
        }else{
            $entity->setLastName(1);
            $entity->setFirstName(1);
            $entity->setProductsName(json_encode($_POST));
        }

        $em->persist($entity);
        $em->flush();
        return new Response(
            json_encode(
                true
            )
        );
    }
}