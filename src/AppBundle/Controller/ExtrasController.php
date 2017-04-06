<?php
/**
 * Created by PhpStorm.
 * User: Grabe Grabe
 * Date: 4/6/2017
 * Time: 10:07 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;


class ExtrasController extends Controller{

    /**
     * @Route("/extras/ip-compile", name="ipCompile")
     */
    public function showIpCompileAction()
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $data16['data'] = array();
            $data24['data'] = array();
            file_put_contents("data_table_tmp_files/ip/16.txt", json_encode($data16, JSON_UNESCAPED_UNICODE));
            file_put_contents("data_table_tmp_files/ip/24.txt", json_encode($data24, JSON_UNESCAPED_UNICODE));
            return $this->render(
                'extras/ip-compile.html.twig', array('page' => 'IP Compile')
            );
        }else{
            return $this->redirect('/user/login');
        }


    }


    /**
     * @Route("/extras/execute-compile-ip", name="executeIpCompile")
     */
    public function ipCompile()
    {

        $data = json_decode($_POST['param'], true);

        foreach($data as $row){
            $split = explode('.', $row['ip']);
            $ipMask = $split[0] . '.' . $split[1] . '.0.0/16';
            $ipMask24 = $split[0] . '.' . $split[1] . '.' . $split[2] . '.0/24';

            $mask16[$ipMask][] = array(1);
            $mask24[$ipMask24][] = array(1);
        }



        foreach($mask16 as $key => $value){
            $data16['data'][] = array(
                $key,
                count($value)
            );

        }

        foreach($mask24 as $key => $value){
            $data24['data'][] = array(
                $key,
                count($value)
            );

        }

        file_put_contents("data_table_tmp_files/ip/16.txt", json_encode($data16, JSON_UNESCAPED_UNICODE));
        file_put_contents("data_table_tmp_files/ip/24.txt", json_encode($data24, JSON_UNESCAPED_UNICODE));
        return new Response(json_encode(true));
    }
}