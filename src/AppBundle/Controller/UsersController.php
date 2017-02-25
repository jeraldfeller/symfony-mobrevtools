<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{

    /**
     * @Route("/user/login")
     */
    public function renderLoginForm()
    {
        return $this->render(
            'login/login.html.twig'
        );
    }


    /**
     * @Route("/user/create-account")
     */
    public function createAction(){
        $users = new User();
        $users->setUid('2017012');
        $users->setEmail('andrew@mobrevmedia.com');
        $users->setPassword('mobrev$37');
        $users->setIsActive(true);


        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Users (no quesries yet)
        $em->persist($users);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response(
            json_encode(array('uid' => $users->getId()))
        );
    }

    /**
     * @Route("/user/get-account/{param}")
     */
    public function showActionById($param){

            $users = $this->getDoctrine()
                ->getRepository('AppBundle:UsersEntity')
                ->find($param);

            if(!$param){
                throw $this->createNotFoundException(
                    'No users found for id' . $param
                );
            }


        return new Response(
            json_encode(array('id' => $users->getId(),
                'uid' => $users->getUid(),
                'email' => $users->getEmail(),
                'password' => $users->getPassword()))
        );
    }

    /**
     * @Route("/user/get-account-all")
     */
    public function showActionAll(){
        $users = $this->getDoctrine()
            ->getRepository('AppBundle:UsersEntity')
            ->findAll();
        $data = array();
        for($x = 0; $x < count($users); $x++){
            $data[] = array('id' => $users[$x]->getId(),
                'uid' => $users[$x]->getUid(),
                'email' => $users[$x]->getEmail(),
                'password' => $users[$x]->getPassword());
        }
        return new Response(
            json_encode($data)
        );
    }

    public function updateAction($id, $email, $password){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:UsersEntity')->find($id);

        if(!$id){
            throw $this->createNotFoundException(
                'No users found for id' . $id
            );
        }

        $users->setEmail($email);
        $users->setPassword($password);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }


    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
    }

    /**
     * @Route("/user/login-action")
     */
    public function loginAction(){
        $email = $_POST['_email'];
        $password = $_POST['_password'];
        $users = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneBy(
                array('email' => $email, 'password' => $password)
            );

        if(count($users) == 1){
            $return = array('success' => true,
               'email' => $users->getEmail(),
               'password' => $users->getPassword(),
               'isActive' => $users->getIsActive()
                );

            $this->get('session')->set('isLoggedIn', true);
            $this->get('session')->set('userData', $return);
            $voluumToken = json_decode($this->forward('AppBundle:VoluumApi:voluumLogin', array())->getContent(), true);
            $zeroparkToken = json_decode($this->forward('AppBundle:ZeroparkApi:zeroparkLogin', array())->getContent(), true);
            $exoClickToken = json_decode($this->forward('AppBundle:ExoClickApi:exoClickLogin', array())->getContent(), true);


            $this->forward('AppBundle:System:registerToken', array('JSESSIONID' => $zeroparkToken,
                'VOLUUMSESSIONID' => $voluumToken['token'],
                'EXOSESSIONTOKEN' => $exoClickToken));


            $tokens = array($voluumToken, $zeroparkToken, $exoClickToken);
            return $this->redirectToRoute('homepage', array(), 301);
           

        }else{
            $return = array('success' => false,
                'email' => null,
                'password' => null);

            return $this->redirect('login?message=Invalid Username or Password');
        }


    }


    /**
     * @Route("/user/logout")
     */
    public function logout(){
        $this->get('session')->clear();
        return $this->redirectToRoute('homepage', array(), 301);
    }



}
