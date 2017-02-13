<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 2/3/2017
 * Time: 10:21 PM
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
use AppBundle\Entity\ReportsWhitelist;

class DeletesController extends Controller{

    /**
     * @Route("/delete/reports/{$data}", name="deleteReports")
     */
    public function deleteReportsAction($data = null){

        $appBundle = $data['bundle'];
        $em = $this->getDoctrine()->getEntityManager();
        $batch = 100;
        $i = 1;
        $deletedId = array();
        foreach($data['items'] as $row){
            $data = $em->getRepository($appBundle)->find($row['id']);
            $em->remove($data);
            if(($batch % $i) == 0){
                $em->flush();
                $em->clear();
            }
            $deletedId[] = $row['id'];
            $i++;
        }
        $em->flush();
        $em->clear();

        return new Response(
            json_encode($deletedId)
        );
    }


    /**
     * @Route("/delete/reports-all/{$data}", name="deleteReportsAll")
     */
    public function deleteReportsAllAction($data = null){

        $appBundle = $data;
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "DELETE FROM $appBundle p"
        );
        $numDeleted = $sql->execute();
        return new Response(
            json_encode($numDeleted)
        );
    }

    /**
     * @Route("/delete/individual/{$appBundle}/{$column}/{$value}", name="deleteIndividual")
     */
    public function deleteIndividualColumnAction($appBundle = null, $column = null, $value = null){
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "DELETE FROM $appBundle p WHERE p.$column = $value"
        );
        $numDeleted = $sql->execute();
        return new Response(
            json_encode($numDeleted)
        );
    }

}