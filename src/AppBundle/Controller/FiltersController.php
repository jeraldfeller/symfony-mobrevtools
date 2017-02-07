<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/3/2017
 * Time: 10:37 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\Reportsbot;
use AppBundle\Entity\ReportsBlacklist;


class FiltersController extends Controller{

    /**
     * @Route("/filters/{$bundle}/{$column}", name="getFilters")
     */
    public function getFiltersAction($bundle = null, $column = null){

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
                    SELECT DISTINCT p.$column
                    FROM $bundle p
                    ORDER BY p.$column ASC");

        $result = $query->getResult();

        return new Response(
            json_encode($result)
        );
    }

}