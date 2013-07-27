<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;


use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\Group;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Entity\NickName;
use Cmar\MeetingBundle\Form\MeetingType;

/**
 * User Controller.
 *
 */
class UserController extends Controller
{
    /**
     * Index
     *
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');
        $repo_nickname = $em->getRepository('CmarMeetingBundle:NickName');

        //$meetings_scheduled = $repo->findByStateAndUser(Meeting::STATE_SCHEDULED, $user);
        //$meetings_finished = $repo->findByStatesAndUser(array(Meeting::STATE_CANCELLED, Meeting::STATE_FINISHED), $user);
        //$other_meetings_now = $repo->findByStateAndNotUser(Meeting::STATE_NOW, $user);

        //$meetings_now = $repo->findByStatesAndUser(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), $user);

        //ordenar $meeting_now por orden de rank
        $meetings_now = $repo->findByUserAndStatesOrderByRank($user, array(Meeting::STATE_NOW, Meeting::STATE_LOCKED));


        $nicknames = array();
        foreach ($meetings_now as $meeting) {
            try {
                $nicknames[$meeting->getId()] = $repo_nickname->findOneNickNameByUserAndMeeting($user, $meeting);
            } catch (\Exception $e) {
                $nicknames[$meeting->getId()] = null;
            }
        }


        $all_users = $em->getRepository('CmarMeetingBundle:User')->findAll();
        return array(
                     'user' => $user,
                     'all_users' => $all_users,
                     'meetings_now' =>  $meetings_now,
                     'nicknames' => $nicknames
                     //'other_meetings_now' =>  $other_meetings_now,
                     //'meetings_scheduled' => $meetings_scheduled,
                     );
    }



    /**
     * Redirec to a Ado Connect recording
     *
     * @Route("/recording/{id}", name="index_recording", requirements = {"id" = "\d+"})
     * @Template("CmarMeetingBundle:Room:room.html.twig")
     **/
    public function recordingAction(Recording $recording)
    {
        if ($recording->getState() == Recording::STATE_LOCKED) {
            throw $this->createNotFoundException('This recording is locked.');
        } else {
            $user = $this->get('security.context')->getToken()->getUser();	
            return array(
                         'url' => $recording->getUrl(), 
                         'title' => $recording->getTitle()
                         );
        }
    }

    /**
     * Redirec to a Ado Connect recording to public recordings
     *
     * @Route("/recording_public/{id}", name="index_public_recording")
     * @Template("CmarMeetingBundle:Room:room.html.twig")
     **/
    public function recordingPublicAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Recording');
        $recording = $repo->find($id);

        if ($recording->getState() == Recording::STATE_LOCKED) {
            $this->get('session')->setFlash('error', 'This recording is locked');
            return $this->redirect($this->generateUrl('recording_public_list', array('secretsalt' => $recording->getMeeting()->getSecretSalt())));
        } else {
            return array(
                         'url' => $recording->getUrl(),
                         'title' => $recording->getTitle()
                         );
        }
    }


    /**
     * Create a immediate meeting
     *
     * @Route("/immediate", name="index_immediate")
     **/
    public function immediateAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();	
        $meetingService = $this->get('cmar_meeting');
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');

        $numRooms = $meetingService->getNumRooms();
        $numRoomsForNonMagic = $meetingService->getNumRoomsForNonMagic();

        $num_active_meetings = count($repo->findByStatesAndUser(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), $user));
        $num_magic_rooms = count($repo->findByStatesAndMagicRoom(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), true));

        if ($request->get("public")!="public" AND $request->get("public")!="private"){
            throw $this->createNotFoundException('Invalid Permission Value');
        }

        if (strlen($request->get("meeting_name")) > 60) {
            $this->get('session')->setFlash('error', 'Title too long');
            return $this->redirect($this->generateUrl('index'));
        }
        
        if (($num_magic_rooms == ($numRooms-$numRoomsForNonMagic)) AND ($request->get("Checkbox_magic") == 'on')) {//Acción cuando hacemos sala mágica desde el menú administrador
            $this->get('session')->setFlash('error', 'Number of Magic Rooms complete');
            return $this->redirect($this->generateUrl('index'));
        }
        $magic_room = false;
        if ($request->get("Checkbox_magic") == 'on') {
            $magic_room = true;
        }

        try {
            $meeting = $repo->findOneByStatesAndTitle(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), $request->get("meeting_name"));
            $this->get('session')->setFlash('error', 'Select other Title');
            return $this->redirect($this->generateUrl('index'));
        } catch (\Exception $e) {
            try {
                $meetingService->createMeeting($request->get("meeting_name"), $user, $request->get("Nick_name"), $request->get("public") == "public"?true:false, $request->get("meeting_description"), $magic_room);
            } catch (\Exception $e) {
                $this->get('session')->setFlash('error', 'Error in ADO, you may need to change the title');
                return $this->redirect($this->generateUrl('index'));
            }
            $this->get('session')->setFlash('notice', 'Created OK!');
            return $this->redirect($this->generateUrl('index'));   
        }
    }
    
    /**
     * Change eMeeting to Magic or Non Magic.
     *
     * @Route("/magic/{magic}/{id}", name="magic_meeting", requirements = {"id" = "\d+"})
     *
     */
    public function changeToMagic($id, $magic = false)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');
        $meetingService = $this->get('cmar_meeting');

        $meeting = $repo->find($id);
        $numRoomsForNonMagic = $meetingService->getNumRoomsForNonMagic();
        $numRooms = $meetingService->getNumRooms();
        $num_magic_rooms = count($repo->findByStatesAndMagicRoom(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), true));

        if ($num_magic_rooms == ($numRooms-$numRoomsForNonMagic) AND $magic) {
            $this->get('session')->setFlash('error', 'Number of Magic Rooms complete');
            return $this->redirect($this->generateUrl('index'));
        }

        if ($magic) {
            $meeting->setMagic(true);
        } else {
            $meeting->setMagic(false);
        }

        $em->persist($meeting);
        $em->flush();

        $this->get('session')->setFlash('notice', 'Update State OK!');
        return $this->redirect($this->generateUrl('index'));   

    }

    /**
     * Add Users to Meeting entity.
     *
     * @Route("/changenick", name="change_nickname")
     */
    public function changenickName(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $meeting = $em->getRepository('CmarMeetingBundle:Meeting')->find($request->get('id_meeting'));
        $user = $em->getRepository('CmarMeetingBundle:User')->find($request->get('id_user'));

        if ($request->get('Nick_name') == null) {
            $this->get('session')->setFlash('error', 'The nick name must not be empty string!');
            return $this->redirect($this->generateUrl('index'));
        }

        $nickname = $em->getRepository('CmarMeetingBundle:NickName')->find($request->get('id_nickname'));

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        if (!$nickname) {
            $nickname = new NickName();
        }
        $nickname->setNickName($request->get("Nick_name"));
        $nickname->setMeeting($meeting);
        $nickname->setUser($user);
        $em->persist($nickname);
        $em->flush();

        $this->get('session')->setFlash('notice', 'Changed Nick Name OK!');
        return $this->redirect($this->generateUrl('index'));

    }

    /**
     * Update order of meetings
     *
     * @Route("/updaterank", name="update_rank")
     */
    public function updateRank()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $repo_nickname = $em->getRepository('CmarMeetingBundle:NickName');

        $id_meetings = explode(",", $_POST['data']);
        $rank = 1;
        foreach ($id_meetings as $id_meeting) {
            $meeting = $em->getRepository('CmarMeetingBundle:Meeting')->find($id_meeting);
            $nickname = $repo_nickname->findOneNickNameByUserAndMeeting($user, $meeting);
            if ((!$meeting) OR (!$nickname)) {
                throw $this->createNotFoundException('Unable to find eMeeting or NickName entity.');
            }
            $nickname->setRank($rank);
            $em->persist($nickname);
            $rank++;
        }
        $em->flush();

        return new Response("ok");
    }

    /**
     * Add Users to Meeting entity.
     *
     * @Route("/addusers", name="addusers_meeting")
     */
    public function addUsersAction(Request $request)
    {
        $meetingService = $this->get('cmar_meeting');
        $em = $this->getDoctrine()->getEntityManager();
        $meeting = $em->getRepository('CmarMeetingBundle:Meeting')->find($request->get('id'));

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        $arrayIdUsers = explode(",", $request->get("pre-populated")); 
        $no_owner = true;
        foreach ($arrayIdUsers as $id) {
            if ($id == $meeting->getOwner()->getId()) $no_owner = false;
        }
        if ($no_owner) {
            $this->get('session')->setFlash('notice', 'You cannot delete the meeting creator!');
            return $this->redirect($this->generateUrl('index'));
        }
        foreach ($arrayIdUsers as $id) {
            $users[$id] = $em->getRepository('CmarMeetingBundle:User')->find($id);
        }

        $meetingService->addusers($meeting, $users);
 
        $this->get('session')->setFlash('notice', 'Managed Users!');
        return $this->redirect($this->generateUrl('index'));

    }

    /**
     * Add Users to Meeting entity.
     *
     * @Route("/updateviewsalt/{id}", name="updateviewsalt_meeting", requirements = {"id" = "\d+"}, defaults={"secret" = false})
     * @Route("/updatesecretsalt/{id}", name="updatesecretsalt_meeting", requirements = {"id" = "\d+"}, defaults={"secret" = true})
     */
    public function UpdateSalt($secret, Request $request)
    {
        
        $meetingService = $this->get('cmar_meeting');
        $em = $this->getDoctrine()->getEntityManager();
        $meeting = $em->getRepository('CmarMeetingBundle:Meeting')->find($request->get('id'));

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        if ($secret) {
            $meeting->setSecretSalt($meetingService->udpateSecretSalt($meeting));
        } else {
            $meeting->setViewSalt($meetingService->udpateViewSalt($meeting));
        }

        $em->persist($meeting);
        $em->flush();                
        
        $this->get('session')->setFlash('notice', 'The URL was successfully updated!');
        return $this->redirect($this->generateUrl('index'));

    }

    /**
     * Cancel a Meeting entity.
     *
     * @Route("/cancel/{id}", name="index_cancel", requirements = {"id" = "\d+"})
     */
    public function cancelAction(Meeting $meeting)
    {
        $user = $this->get('security.context')->getToken()->getUser();	
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($meeting->getId());

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        if ($meeting->getState() == Meeting::STATE_FINISHED) {
            $error_type = 'eMeeting finished';
            return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => $error_type));
        } elseif (($meeting->getState() != Meeting::STATE_NOW) AND ($meeting->getState() != Meeting::STATE_LOCKED)) {
            $error_type = 'eMeeting cancelled';
            return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => $error_type));
        }

        if ($meeting->getOwner()->getId() == $user->getId()){
            $meetingService = $this->get('cmar_meeting');
            $meetingService->stop($meeting, Meeting::STATE_CANCELLED);
            $meetingService->deleteFromNickname($meeting);
            $this->get('session')->setFlash('notice', 'Deleted OK!');
            return $this->redirect($this->generateUrl('index'));

        } else {
            throw $this->createNotFoundException('Do not have privileges');
        }
    }


    /**
     * Edit a Meeting entity.
     *
     * @Route("/edit/{id}", name="index_edit", requirements = {"id" = "\d+"})
     * @Template()
     */
    public function editAction(Meeting $meeting)
    {
        $form = $this->createForm(new MeetingType(), $meeting);

        if ($meeting->getOwner() != $user){
            throw $this->createNotFoundException('Do not have privileges');
        }
        
        return array(
                     'meeting' => $meeting,
                     'edit_form'   => $form->createView()
                     );
    }

    /**
     * Edits an existing Meeting entity.
     *
     * @Route("/update/{id}", name="index_update")
     * @Method("post")
     * @Template("CmarMeetingBundle:Default:edit.html.twig")
     */
    public function updateAction($id)
    {
        // FIXME No editar meeting historicos
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        $user = $this->get('security.context')->getToken()->getUser();	
        if ($meeting->getOwner()->getId() == $user->getId()){

            $editForm = $this->createForm(new MeetingType(), $entity);
            $request = $this->getRequest();
            
            $editForm->bindRequest($request);
            
            if ($editForm->isValid()) {
                $em->persist($entity);
                $em->flush();                
                return $this->redirect($this->generateUrl('index'));
            }
            
            return array(
                         'meeting'      => $entity,
                         'edit_form'   => $editForm->createView(),
                         );
        
        } else {
            throw $this->createNotFoundException('Do not have privileges');
        }
    }




    /**
     * Show Recordings of  Meetings
     *
     * @Route("/recordings/{meeting_id}", name="index_search_meeting")
     */
    public function recordingsAction($meeting_id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $meetings = $em->getRepository('CmarMeetingBundle:Meeting')->findAll();
        if (!$meeting_id){
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }
 
        $meeting = $em->getRepository('CmarMeetingBundle:Meeting')->find($meeting_id);

        $user = $this->get('security.context')->getToken()->getUser();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');

        return array(
                     'meeting' => $meeting
                     );
    }

    /**
     * Show Historical Meetings
     *
     * @Route("/historical", name="index_historical")
     * @Route("/historical/{string_month}", name="index_month")
     * @Template()
     */
    public function historicalAction($string_month = null)
    {

        if (!$string_month){
            $now = new \DateTime("now");
            $string_month = $now->format('Y-m');
        }

        if(!$month = \DateTime::createFromFormat('Y-m-d H:i:s', $string_month . '-01 00:00:00')) {
            throw $this->createNotFoundException('Date bad format');            
        }
        
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');

        //En All recordings se ven todas las grabaciones con todos los eMeetings
        $num_meetings = $repo->findMonthsAndRecordings(array(Meeting::STATE_NOW, Meeting::STATE_CANCELLED, Meeting::STATE_FINISHED), $user);//Solo meeting Finished or Cancelled
        $meetings_finished = $repo->findByStatesUserAndMonth(array(Meeting::STATE_NOW, Meeting::STATE_CANCELLED, Meeting::STATE_FINISHED), $user, $month);
        
        $included = false;
        foreach ($num_meetings as $num_meeting) {
            $mes = $num_meeting["MES"];
            if ($mes == $string_month and !$included) $included = true;
        }

        if (!$included) {
            $num_meetings[] = array("MES" => $string_month,
                                    0 => $string_month,
                                    "NUMMEETING" => 0,
                                    1 => 0,
                                    "NUMRECORD" => 0,
                                    2 => 0);
        }

        return array(
                     'meetings' => count($meetings_finished),
                     'string_month' => $string_month,
                     'num_meetings' => $num_meetings,
                     'meetings_finished' => $meetings_finished
                     );
    }


    /**
     * 
     *
     * @Route("/change_password/{email}", name="change_password")
     * 
     */
    public function changePasswordAction($email, Request $request)
    {
        $meetingService = $this->get('cmar_meeting');
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:User');

        try{
            $user = $repo->findOneUserByEmail($email);
        }catch(\Exception $e){
            $this->get('session')->setFlash('error', 'User not found!');
            return $this->redirect($this->generateUrl('index'));
        }

        if ($request->getMethod() == 'POST') {
            $password = $request->get('cmar_meetingbundle_passwordtype_second');
            $meetingService->updateUserPassword($user, trim($password));
            $user->setPassword(trim($password));
            $em->persist($user);
            $em->flush();
            
            //$dirplus->updateUser($user);

            $this->get('session')->setFlash('notice', 'Password changed OK!');
            return $this->redirect($this->generateUrl('index'));
        } else {
            $this->get('session')->setFlash('error', 'Password was not changed!');
            return $this->redirect($this->generateUrl('index'));
        }
    }


    /**
     * 
     *
     * @Route("/r_list/{id}", name="recording_list", requirements = {"id" = "\d+"})
     * @Template()
     */
    public function recordingListAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        return array(
                     'meeting' => $entity,
                     'user' => $entity->getOwner()
                     );
    }

    /**
     * Bloquea las grabaciones cambiando el estado en la BBDD
     *
     * @Route("/locked_record/{locked}/{id}", name="locked_recording", requirements = {"id" = "\d+"})
     * @Template("CmarMeetingBundle:User:recordingList.html.twig")
     */
    public function lockedRecordingAction($id, $locked = false)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $recording = $em->getRepository('CmarMeetingBundle:Recording')->find($id);

        if (!$recording) {
            throw $this->createNotFoundException('Unable to find Recording entity.');
        }

        if ($locked and $recording->getState() == Recording::STATE_REACHABLE) {
            $recording->setState(Recording::STATE_LOCKED);
            $em->persist($recording);
        } else {
            $recording->setState(Recording::STATE_REACHABLE);
            $em->persist($recording);
        }
        $em->flush();

        return array(
                     'meeting' => $recording->getMeeting(),
                     'user' => $recording->getMeeting()->getOwner()
                     );
    }

    /**
     * URL de acceso público a las grabaciones del eMeeting correspondiente
     *
     * @Route("/r_public_list/{secretsalt}", name="recording_public_list")
     * @Template()
     */
    public function recordingPublicListAction($secretsalt)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->findOneBySaltOrSecretSalt($secretsalt, false);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        return array('meeting' => $entity);
    }

    /**
     * Bloquea los eMeeting cambiando el estado en la BBDD
     *
     * @Route("/locked/{locked}/{id}", name="locked_meeting", requirements = {"id" = "\d+"})
     */
    public function lockedAction($id, $locked = false)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $meeting = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        if (($meeting->getState() == Meeting::STATE_NOW) OR ($meeting->getState() == Meeting::STATE_LOCKED)) {
            if ($locked) {
                $meeting->setState(Meeting::STATE_LOCKED);
                $em->persist($meeting);
                $this->get('session')->setFlash('notice', 'Disabled OK!');
            } else {
                $meeting->setState(Meeting::STATE_NOW);
                $em->persist($meeting);
                $this->get('session')->setFlash('notice', 'Enabled OK!');
            }
            $em->flush();
        }
        return $this->redirect($this->generateUrl('index'));
    }

    /**
     * 
     *
     * @Route("/u_form/{id}", name="user_form", requirements = {"id" = "\d+"})
     * @Template()
     */
    public function userFormAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eMeeting entity.');
        }

        return array('meeting' => $entity);
    }

    /**
     * Load by AJAX the Adobe Connect Test
     *
     * @Route("/adobe_test", name="ado_test")
     * @Template()
     */
    public function adoTestAction()
    {
        return array();
    }

    /**
     * Devuelve lista de usuarios para el autocomplete
     *
     * @Route("/u_list", name="user_list")
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:User');


        $term = $request->get('q');
        $query = $repo->findUsersByTerm($term);
        $email = array();
        foreach ($query as $user) {
            $email[] = array("id" => $user->getId(), "name" => $user->getNameAndEmail());
        }
        return new Response(json_encode($email));
    }

    /**
     * Cambia el estado para mostrar el meeting, si minimizado true se minimiza en caso contrario no se minimiza
     *
     * @Route("/minimized/{id_meeting}/{id_user}/{minimized}", name="minimized_meeting", requirements = {"id" = "\d+"})
     */
    public function minimizedAction($id_meeting, $id_user, $minimized = false)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:NickName');

        $nickname_column = $repo->findOneMinimizedByMeeting($id_meeting, $id_user);
        
        $nickname_column->setMinimized((boolean)$minimized);
        $em->persist($nickname_column);
        $em->flush();

        return $this->redirect($this->generateUrl('index'));
    }
    
    /**
     * Admin App
     *
     * @Route("/admin", name="admin")
     * @Secure(roles="ROLE_ADMIN")
     * @Template()
     */
    public function adminAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $logs = $em->getRepository('CmarMeetingBundle:Log')->findAll();
        $logs_total = $em->getRepository('CmarMeetingBundle:Log_Total')->findAll();

        $scoid_array = array();
        $date_array = array();
        $data_log = array();
        $data_log_total = array();
        foreach ($logs as $log_aux) {
            $id = $log_aux->getScoId();
            $participants = $log_aux->getParticipants();
            $date = $log_aux->getDateTime()->format('d-M-Y');
            $length_minutes = $log_aux->getLengthminutes();
            foreach ($logs as $log_aux2){
                if ($id == $log_aux2->getScoId()) {
                    if ($participants < $log_aux2->getParticipants() AND $date == $log_aux2->getDateTime()->format('d-M-Y')) { $participants = $log_aux2->getParticipants(); }
                    if ($length_minutes < $log_aux2->getLengthminutes()) { $length_minutes = $log_aux2->getLengthMinutes(); }
                }
            }

            if(!in_array($log_aux->getScoId(), $scoid_array) OR !in_array($log_aux->getDateTime()->format('d-M-Y'), $date_array)){
                $data_log[] = array(
                                'participants' => $participants, 
                                'lenghtminutes' => $length_minutes,
                                'datetime' => $log_aux->getDateTime()->format('d\/M\/Y'),
                                'scoId' => $log_aux->getScoId()
                                );
            }
            $scoid_array[] = $log_aux->getScoId();
            $date_array[] = $log_aux->getDateTime()->format('d-M-Y');
            array_shift($logs);
        }

        $date_array = array();
        foreach ($logs_total as $log_aux) {
            $date = $log_aux->getDateTime()->format('d-M-Y');
            $participants = $log_aux->getParticipants();
            $active_rooms = 0;
            foreach ($logs_total as $log_aux2){
                if ($date == $log_aux2->getDateTime()->format('d-M-Y')) {
                    if ($active_rooms < $log_aux2->getActiveRooms()) { $active_rooms = $log_aux2->getActiveRooms(); }
                    if ($participants < $log_aux2->getParticipants()) { $participants = $log_aux2->getParticipants(); }
                }
            }
            if(!in_array($log_aux->getDateTime()->format('d-M-Y'), $date_array)){
                $data_log_total[] = array(
                                          'participants' => $participants, 
                                          'datetime' => $log_aux->getDateTime()->format('d\/M\/Y'),
                                          'active_rooms' => $active_rooms
                                          );
            }
            $date_array[] = $log_aux->getDateTime()->format('d-M-Y');
            array_shift($logs_total);
        }

        return array(
                     'data'       => $data_log,
                     'data_total' => $data_log_total
                     );
    }
}
