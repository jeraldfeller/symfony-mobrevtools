<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

use AppBundle\Entity\User;
use AppBundle\Entity\UsersGroup;
use AppBundle\Entity\UsersGroupMember;
use AppBundle\Entity\UsersGroupPages;
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

    public function getUsersAll(){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        return $users;
    }

    public function getUsersBy($param){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findOneBy($param);

        return $users;
    }

    public function getGroupBy($param){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:UsersGroup')->findOneBy($param);

        return $users;
    }

    public function getGroupUserBy($param){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:UsersGroupMember')->findOneBy($param);

        return $users;
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
                'id' => $users->getId(),
                'firstName' => $users->getFirstName(),
                'lastName' => $users->getLastName(),
               'email' => $users->getEmail(),
               'password' => $users->getPassword(),
               'isActive' => $users->getIsActive()
                );

            $this->get('session')->set('isLoggedIn', true);
            $this->get('session')->set('userData', $return);
           // $voluumToken = json_decode($this->forward('AppBundle:VoluumApi:voluumLogin', array())->getContent(), true);
           // $zeroparkToken = json_decode($this->forward('AppBundle:ZeroparkApi:zeroparkLogin', array())->getContent(), true);
          //  $exoClickToken = json_decode($this->forward('AppBundle:ExoClickApi:exoClickLogin', array())->getContent(), true);


            /*
           $this->forward('AppBundle:System:registerToken', array(
                'VOLUUMSESSIONID' => $voluumToken['token'],
                'EXOSESSIONTOKEN' => $exoClickToken[0]['token']));


            */

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


    /**
     * @Route("/global-settings/manage-users/groups", name="groups")
     */
    public function showGroupsAction()
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $pages = json_decode($this->forward('AppBundle:Navmenu:getMenuPages', array())->getContent(), true);
            foreach($pages as $page){
                if($page['parent'] == 0){
                    $navPageMain[$page['pageName']] = array('pageName' => $page['pageName'],
                        'pageId' => $page['pageId'],
                        'pageLink' => $page['pageLink'],
                        'childPages' => array());
                }
            }

            foreach($navPageMain as $pageMain){
                foreach($pages as $childpage){
                    if($childpage['parent'] == $pageMain['pageId']){
                        $navPageMain[$pageMain['pageName']]['childPages'][] = array('pageName' =>$childpage['pageName'],
                            'pageId' => $childpage['pageId'],
                            'pageLink' => $childpage['pageLink']);
                    }
                }

            }

            return $this->render(
                'users/groups.html.twig', array('page' => 'Groups', 'pages' => $navPageMain)
            );
        }else{
            return $this->redirect('/user/login');
        }


    }



    /**
     * @Route("/global-settings/manage-users/groups/group-id/{groupId}", name="manageUsersGroups")
     */
    public function showManageUsersGroupAction($groupId = null)
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            $group = $this->getGroupBy(array('usersGroupId' => $groupId));
            $users = $this->getUsersAll();
            $data = array();
            for($x = 0; $x < count($users); $x++){
                if($users[$x]->getUserLevel() != 'Admin'){
                    $data[] = array(
                        'uid' => $users[$x]->getId(),
                        'name' => $users[$x]->getFirstName() . ' ' . $users[$x]->getLastName()
                    );
                }
            }

            return $this->render(
                'users/manage-groups-pages.html.twig', array('page' => 'Groups',
                    'group' => array('groupId' => $group->getUsersGroupId(), 'groupName' => $group->getUsersGroupName()),
                    'users' => $data)
            );
        }else{
            return $this->redirect('/user/login');
        }

    }

    /**
     * @Route("/global-settings/manage-users/users", name="users")
     */
    public function showUsersAction()
    {

        $isLoggedIn = $this->get('session')->get('isLoggedIn');
        if($isLoggedIn){
            return $this->render(
                'users/users.html.twig', array('page' => 'Users')
            );
        }else{
            return $this->redirect('/user/login');
        }


    }

    /**
     * @Route("/manage-users/add-user", name="addUser")
     */
    public function addUserAction()
    {
        $data = json_decode($_POST['param'], true);

        $isExists = $this->getUsersBy(array('email' => $data['email']));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'Email address already exists'
            );
        }else{
            $users = new User();
            $users->setUid(time());
            $users->setFirstName($data['firstName']);
            $users->setLastName($data['lastName']);
            $users->setEmail($data['email']);
            $users->setPassword('mobrev$37');
            $users->setUserLevel('Regular');
            $users->setDateAdded(new \DateTime(Date('Y-m-d')));
            $users->setIsActive($data['enabled']);


            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Users (no quesries yet)
            $em->persist($users);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();


            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'User Successfully Added'
            );
        }


        return new Response(
            json_encode($return)
        );
    }

    /**
     * @Route("/manage-users/edit-user", name="editUser")
     */
    public function editUserAction()
    {
        $data = json_decode($_POST['param'], true);

            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository('AppBundle:User')->find($data['uid']);

            $users->setFirstName($data['firstName']);
            $users->setLastName($data['lastName']);
            $users->setEmail($data['email']);
            $users->setPassword($data['password']);
            $users->setIsActive($data['enabled']);

            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Users (no quesries yet)
            $em->persist($users);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();

            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'User Successfully Updated'
            );
        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/manage-users/delete-user", name="deleteUser")
     */
    public function deleteUserAction()
    {
        $data = json_decode($_POST['param'], true);

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->find($data['uid']);

        $em->remove($users);

        $em->flush();

        $return = array(
            'type' => 'success',
            'title' => 'Success',
            'message' => 'User Successfully Updated'
        );
        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/manage-users/add-group", name="addGroup")
     */
    public function addGroupAction()
    {
        $data = json_decode($_POST['param'], true);

        $isExists = $this->getGroupBy(array('usersGroupName' => $data['groupName']));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'Group already exists'
            );
        }else{
            $group = new UsersGroup();
            $group->setUsersGroupName($data['groupName']);
            $group->setPermission('Read/Write');


            $em = $this->getDoctrine()->getManager();
            // tells Doctrine you want to (eventually) save the Users (no quesries yet)
            $em->persist($group);
            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            $lastId = $group->getUsersGroupId();
            $usersGroupId = $em->getRepository('AppBundle:UsersGroup')->findOneByUsersGroupId($lastId);

            for($x = 0; $x < count($data['pages']); $x++){

                $pageId = $em->getRepository('AppBundle:MenuPages')->findOneByPageId($data['pages'][$x]);

                $groupPages = new UsersGroupPages();
                $groupPages->setUsersGroup($usersGroupId);
                $groupPages->setPage($pageId);
                $em->persist($groupPages);
                // actually executes the queries (i.e. the INSERT query)
                $em->flush();
            }




            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Group Successfully Added'
            );
        }


        return new Response(
            json_encode($return)
        );
    }



    /**
     * @Route("/manage-users/edit-group", name="editGroup")
     */
    public function editGroupAction()
    {

        $data = json_decode($_POST['param'], true);
        $this->forward('AppBundle:Deletes:deleteIndividualColumn', array('appBundle' => 'AppBundle:UsersGroup', 'column' => 'usersGroupId', 'value' => $data['groupId']))->getContent();
        $isExists = $this->getGroupBy(array('usersGroupName' => $data['groupName']));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'Group already exists'
            );
        }else{
            $group = new UsersGroup();
            $group->setUsersGroupName($data['groupName']);
            $group->setPermission('Read/Write');


            $em = $this->getDoctrine()->getManager();
            // tells Doctrine you want to (eventually) save the Users (no quesries yet)
            $em->persist($group);
            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            $lastId = $group->getUsersGroupId();
            $usersGroupId = $em->getRepository('AppBundle:UsersGroup')->findOneByUsersGroupId($lastId);

            for($x = 0; $x < count($data['pages']); $x++){

                $pageId = $em->getRepository('AppBundle:MenuPages')->findOneByPageId($data['pages'][$x]);

                $groupPages = new UsersGroupPages();
                $groupPages->setUsersGroup($usersGroupId);
                $groupPages->setPage($pageId);
                $em->persist($groupPages);
                // actually executes the queries (i.e. the INSERT query)
                $em->flush();
            }




            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Group Successfully Updated'
            );
        }


        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/manage-users/delete-group", name="deleteGroup")
     */
    public function deleteGroupAction()
    {

        $data = $_POST['param'];
        $this->forward('AppBundle:Deletes:deleteIndividualColumn', array('appBundle' => 'AppBundle:UsersGroup', 'column' => 'usersGroupId', 'value' => $data))->getContent();
            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Group Successfully Deleted');
        return new Response(
            json_encode($return)
        );
    }

    public function getUsersGroupPagesByGroupId($groupId){
        $em = $this->getDoctrine()->getEntityManager();
        $groupEntity = $em->getRepository('AppBundle:UsersGroup')->findOneByUsersGroupId($groupId);
        $groupPagesEntity = $em->getRepository('AppBundle:UsersGroupPages')->findBy(array('usersGroup' => $groupEntity));


        $data = array();
        for($x = 0; $x < count($groupPagesEntity); $x++){
            $data[] = $groupPagesEntity[$x]->getPage()->getPageId();
        }
        return $data;


    }

    /**
     * @Route("/manage-users/get-group-by-user-id/{id}", name="getGroupByUserId")
     */
    public function getGroupByUserIdAction($id = null){
        $userEntity = $this->getUsersBy(array('id' => $id));
        $groupMemberEntity = $this->getGroupUserBy(array('user' => $userEntity));


        var_dump($groupMemberEntity->getUsersGroupId());
        //$groupEntity = $groupMemberEntity->getUsersGroup();
       // $pages = $this->getUsersGroupPagesByGroupId($groupEntity->getUsersGroupId());

        return new Response(json_encode($userEntity->getEmail()));
    }


    /**
     * @Route("/manage-users/group-add-user", name="groupAddUser")
     */
    public function groupAddUserAction()
    {
        $data = json_decode($_POST['param'], true);

        $userEntity = $this->getUsersBy(array('id' => $data['userId']));
        $isExists = $this->getGroupUserBy(array('user' => $userEntity));
        if($isExists){
            $return = array(
                'type' => 'warning',
                'title' => 'Warning',
                'message' => 'User already on this group'
            );
        }else{

            $em = $this->getDoctrine()->getManager();
            $groupEntity = $em->getRepository('AppBundle:UsersGroup')->findOneByUsersGroupId($data['groupId']);
            $group = new UsersGroupMember();
            $group->setUsersGroup($groupEntity);
            $group->setUser($userEntity);
                $em->persist($group);
                // actually executes the queries (i.e. the INSERT query)
                $em->flush();


            $return = array(
                'type' => 'success',
                'title' => 'Success',
                'message' => 'User Successfully Added'
            );
            }






        return new Response(
            json_encode($return)
        );
    }


    /**
     * @Route("/manage-users/delete-user-from-group", name="deleteUserFromGroup")
     */
    public function deleteUserFromGroupAction()
    {

        $data = json_decode($_POST['param'], true);
        $userEntity = $this->getUsersBy(array('id' => $data['uid']));
        //$this->forward('AppBundle:Deletes:deleteIndividualColumn', array('appBundle' => 'AppBundle:UsersGroupMember', 'column' => 'user', 'value' => $userEntity))->getContent();

        $uid = $data['uid'];
        $guid = $data['guid'];
        $appBundle ='AppBundle:UsersGroupMember';
        $em = $this->getDoctrine()->getEntityManager();
        $sql = $em->createQuery(
            "DELETE FROM $appBundle p WHERE p.user = $uid  AND p.usersGroup = $guid"
        );
        $sql->execute();

        $return = array(
            'type' => 'success',
            'title' => 'Success',
            'message' => 'User Successfullu Removed');
        return new Response(
            json_encode($return)
        );
    }



    /**
     * @Route("ajax/get-users")
     */

    public function getUsersAction(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.id', 'p.uid', 'p.firstName', 'p.lastName', 'p.email', 'p.password', 'p.userLevel', 'p.isActive');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.uid';

        // DB table to use
        $sTable = 'AppBundle:User';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }else{
            // custom filter


            if(isset($input['traffic']) || isset($input['geo']) || isset($input['vertical']) || isset($input['ctr1']) || isset($input['ctr2'])){

                if($input['traffic'] != '' || $input['traffic'] != null){

                    $aFilteringRules[] = "p.trafficSource LIKE '%". $input['traffic'] ."%'";
                }

                if($input['geo'] != '' || $input['geo'] != null){
                    $aFilteringRules[] = "p.geo LIKE '%".$input['geo']."%'";
                }

                if($input['vertical'] != '' || $input['vertical'] != null){
                    $aFilteringRules[] = "p.vertical LIKE '%".$input['vertical']."%'";
                }


                if($input['ctr1'] != '' || $input['ctr1'] || $input['ctr2'] != '' || $input['ctr2']){

                    if($input['ctr1'] != '' && $input['ctr2'] == ''){
                        $aFilteringRules[] = "p.ctr = ".$input['ctr1'];
                    }else if($input['ctr1'] == '' && $input['ctr2'] != ''){

                        $aFilteringRules[] = "p.ctr = ".$input['ctr2'];
                    }else if($input['ctr1'] != '' || $input['ctr1'] && $input['ctr2'] != '' || $input['ctr2']){

                        $aFilteringRules[] = "(p.ctr >= ".$input['ctr1']." AND p.ctr <= ".$input['ctr2'].")";
                    }



                }

                if (!empty($aFilteringRules)) {
                    $aFilteringRules = array('('.implode(" AND ", $aFilteringRules).')');
                }
            }

        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);



        $sQuery = $em->createQuery("
        SELECT $aQueryColumns
        FROM ".$sTable." p ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."");

        $iTotal = count($paginator = new Paginator($sQuery));

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $row = array();
            if($column['userLevel'] != 'Admin'){
                $row[] = $column['firstName'] . ' ' . $column['lastName'];
                $row[] = $column['email'];
                $row[] = ($column['isActive'] == true ? 'Enabled' : 'Disabled' );
                $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditUser"
                                                data-action="edit" data-id="' . $column['id'] . '"
                                                data-first-name="' . $column['firstName'] . '"
                                                data-last-name="' . $column['lastName'] . '"
                                                data-email="' . $column['email'] . '"
                                                data-password="' . $column['password'] . '"
                                                data-is-active="' . $column['isActive']  .'"
                                                onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeleteUser" data-action="delete"
                                                data-id="' . $column['id'] . '"
                                                data-first-name="' . $column['firstName'] . '"
                                                data-last-name="' . $column['lastName'] . '"
                                                onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
                $output['aaData'][] = $row;
            }

        }
        return new Response( json_encode( $output ) );
    }


    /**
     * @Route("ajax/get-groups")
     */

    public function getGroupsAction(){
        $em = $this->getDoctrine()->getManager();
        $aColumns = array( 'p.usersGroupId', 'p.usersGroupName');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'p.users_group_id';

        // DB table to use
        $sTable = 'AppBundle:UsersGroup';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }else{
            // custom filter


            if(isset($input['traffic']) || isset($input['geo']) || isset($input['vertical']) || isset($input['ctr1']) || isset($input['ctr2'])){

                if($input['traffic'] != '' || $input['traffic'] != null){

                    $aFilteringRules[] = "p.trafficSource LIKE '%". $input['traffic'] ."%'";
                }

                if($input['geo'] != '' || $input['geo'] != null){
                    $aFilteringRules[] = "p.geo LIKE '%".$input['geo']."%'";
                }

                if($input['vertical'] != '' || $input['vertical'] != null){
                    $aFilteringRules[] = "p.vertical LIKE '%".$input['vertical']."%'";
                }


                if($input['ctr1'] != '' || $input['ctr1'] || $input['ctr2'] != '' || $input['ctr2']){

                    if($input['ctr1'] != '' && $input['ctr2'] == ''){
                        $aFilteringRules[] = "p.ctr = ".$input['ctr1'];
                    }else if($input['ctr1'] == '' && $input['ctr2'] != ''){

                        $aFilteringRules[] = "p.ctr = ".$input['ctr2'];
                    }else if($input['ctr1'] != '' || $input['ctr1'] && $input['ctr2'] != '' || $input['ctr2']){

                        $aFilteringRules[] = "(p.ctr >= ".$input['ctr1']." AND p.ctr <= ".$input['ctr2'].")";
                    }



                }

                if (!empty($aFilteringRules)) {
                    $aFilteringRules = array('('.implode(" AND ", $aFilteringRules).')');
                }
            }

        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);



        $sQuery = $em->createQuery("
        SELECT $aQueryColumns
        FROM ".$sTable." p ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;

        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($paginator);

        $sQuery = $em->createQuery("
        SELECT p
        FROM ".$sTable." p ".$sWhere.$sOrder."");

        $iTotal = count($paginator = new Paginator($sQuery));

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $row = array();
                $row[] = $column['usersGroupName'];
                $row[] = '<div class="btn-group">
                                        <button type="button" class="btn blue btn-xs"> Action</button>
                                        <button type="button" class="btn blue btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="groups/group-id/' .$column['usersGroupId'] . '"><i class="fa fa-users"></i> Manage Users</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalEditGroup"
                                                data-action="edit" data-id="' . $column['usersGroupId'] . '"
                                                data-name="' . $column['usersGroupName'] . '"
                                                data-pages="' . json_encode($this->getUsersGroupPagesByGroupId($column['usersGroupId'])) . '"
                                                onClick="pushData(this)"><i class="fa fa-edit"></i> Edit</a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalDeleteGroup" data-action="delete"
                                                data-action="edit" data-id="' . $column['usersGroupId'] . '"
                                                data-name="' . $column['usersGroupName'] . '"
                                                onClick="pushData(this)"><i class="fa fa-times-circle"></i> Remove</a>
                                            </li>
                                        </ul>
                       </div>';
                $output['aaData'][] = $row;


        }
        return new Response( json_encode( $output ) );
    }


    /**
     * @Route("/ajax/groups/get-users/{groupId}")
     */

    public function getGroupUsersAction($groupId = null){
        $em = $this->getDoctrine()->getManager();
        $groupEntity = $this->getGroupBy(array('usersGroupId' => $groupId));
        $aColumns = array( 'ugm.usersGroupMemberId', 'p.usersGroup', 'p.user');

        // Indexed column (used for fast and accurate table cardinality)
        $sIndexColumn = 'ugm.usersGroupMemberId';

        // DB table to use
        $sTable = 'AppBundle:UsersGroupMember';

        // Input method (use $_GET, $_POST or $_REQUEST)
        $input = $_GET;

        /**
         * Paging
         */
        $firstResult = "";
        $maxResults = "";
        if ( isset( $input['iDisplayStart'] ) && $input['iDisplayLength'] != '-1' ) {
            $firstResult = intval( $input['iDisplayStart'] );
            $maxResults = intval( $input['iDisplayLength'] );
        }


        /**
         * Ordering
         */
        $aOrderingRules = array();
        if ( isset( $input['iSortCol_0'] ) ) {
            $iSortingCols = intval( $input['iSortingCols'] );
            for ( $i=0 ; $i<$iSortingCols ; $i++ ) {
                if ( $input[ 'bSortable_'.intval($input['iSortCol_'.$i]) ] == 'true' ) {
                    $aOrderingRules[] =
                        $aColumns[ intval( $input['iSortCol_'.$i] ) ]
                        . " " .($input['sSortDir_'.$i]==='asc' ? 'asc' : 'desc');
                }
            }
        }

        if (!empty($aOrderingRules)) {
            $sOrder = " ORDER BY ".implode(", ", $aOrderingRules);
        } else {
            $sOrder = "";
        }


        /**
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $iColumnCount = count($aColumns);
        $aFilteringRules = array();
        if ( isset($input['sSearch']) && $input['sSearch'] != "" ) {
            $aFilteringRules = array();
            for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
                if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' ) {
                    $aFilteringRules[] = $aColumns[$i]." LIKE '%". $input['sSearch'] ."%'";
                }
            }


            if (!empty($aFilteringRules)) {
                $aFilteringRules = array('(' . implode(" OR ", $aFilteringRules) . ')');
            }
        }else{
            // custom filter

                if (!empty($aFilteringRules)) {
                    $aFilteringRules = array('('.implode(" AND ", $aFilteringRules).')');
                }


        }




// Individual column filtering
        for ( $i=0 ; $i<$iColumnCount ; $i++ ) {
            if ( isset($input['bSearchable_'.$i]) && $input['bSearchable_'.$i] == 'true' && $input['sSearch_'.$i] != '' ) {
                $aFilteringRules[] = $aColumns[$i]." LIKE '%" . $input['sSearch_'.$i] ."%'";
            }
        }

        if (!empty($aFilteringRules)) {
            $sWhere = " WHERE ugm.user = u.id ".implode(" AND ", $aFilteringRules);
        } else {
            $sWhere = "WHERE ugm.user = u.id";
        }


        /**
         * SQL queries
         * Get data to display
         */
        $aQueryColumns = implode(', ', $aColumns);

        $usersGroupMemberBundle = 'AppBundle:UsersGroupMember';
        $userBundle = 'AppBundle:User';
        $usersGroupBundle =  'AppBundle:UsersGroup';

        $sQuery = $em->createQuery("
        SELECT ug.usersGroupId, ug.usersGroupName, u.id, u.firstName, u.lastName, u.email
        FROM $usersGroupBundle ug, $usersGroupMemberBundle ugm, $userBundle u $sWhere $sOrder ")
            ->setFirstResult($firstResult)
            ->setMaxResults($maxResults)
        ;
        $rResult = $sQuery->getResult();


        $paginator = new Paginator($sQuery);
        $iFilteredTotal = count($rResult);

        $sQuery = $em->createQuery("
        SELECT ug, u
        FROM $usersGroupBundle ug, $usersGroupMemberBundle ugm, $userBundle u $sWhere $sOrder ");

        $iTotal = count($sQuery);

        /**
         * Output
         */


        $output = array(
            "sEcho"                => intval($input['sEcho']),
            "iTotalRecords"        => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData"               => array(),
        );


        foreach($rResult as $column){
            $row = array();
                $row[] = $column['firstName'] . ' ' . $column['lastName'];
                $row[] = $column['email'];
                $row[] = '<button data-toggle="modal" data-target="#modalDeleteUser" class="btn red btn-sm" onclick="pushData(this)" data-id="' . $column['id'] . '" data-name="' . $column['firstName'] . ' ' . $column['lastName'] . '"><i class="fa fa-times"></i> Remove</button>';
                $output['aaData'][] = $row;


        }
        return new Response( json_encode( $output ) );
    }

}
