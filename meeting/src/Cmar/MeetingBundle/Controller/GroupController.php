<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\Group;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Form\MeetingType;

/**
 * Group Controller.
 *
 * @Route("/group")
 */
class GroupController extends Controller
{
    /**
     * Index
     *
     * @Route("/{key}", name="indexgroup")
     * @Template()
     */
    public function indexAction($key)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $key));

        if (!$group) {
            throw $this->createNotFoundException('Unable to find Group entity.');
        }
        
        $user = $this->get('security.context')->getToken()->getUser();

        if (!$group->containsUser($user)) {
            throw $this->createNotFoundException('Unable to find User in this Group.');
        }


        $repo = $em->getRepository('CmarMeetingBundle:Meeting');

        $meetings_scheduled = $repo->findByStateAndGroup(Meeting::STATE_SCHEDULED, $group);
        $meetings_now = $repo->findByStateAndGroup(Meeting::STATE_NOW, $group);

        //$other_meetings_now = $repo->findByStateAndNotUser(Meeting::STATE_NOW, $user);
        
        return array(
                     'group' => $group,
                     'meetings_scheduled' => $meetings_scheduled,
                     'meetings_now' =>  $meetings_now,
                     //'other_meetings_now' =>  $other_meetings_now
                     );
    }



    /**
     * Redirec to a Ado Connect recording
     *
     * @Route("/recording/{id}", name="indexgroup_recording", requirements = {"id" = "\d+"})
     **/
    public function recordingAction(Recording $recording)
    {
        $user = $this->get('security.context')->getToken()->getUser();	
        $ado_factory = $this->get('cmar_meeting.ado_factory');
        $client = $ado_factory->getClient($user->getEmail(), $user->getPassword());

        return $this->redirect($recording->getUrl() . "?session=" . $client->getSession());
    }


    /**
     * Create a immediate meeting
     *
     * @Route("/immediate/{key}", name="indexgroup_immediate")
     **/
    public function immediateAction($key)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $meetingService = $this->get('cmar_meeting');
        $em = $this->getDoctrine()->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $key));
        $request = $this->getRequest();

        if (!$group->containsUser($user)) {
            throw $this->createNotFoundException('Unable to find User in this Group.');
        }

        if (0 == intval($request->get("duration"))){
            throw $this->createNotFoundException('Integer required');
        } elseif ($request->get("public")!="public" AND $request->get("public")!="private"){
            throw $this->createNotFoundException('Invalid Permission Value');
        }


        try {
            $meetingService->createImmediateByGroup($request->get("duration"), $user, $group, $request->get("public") == "public"?true:false);
        } catch (\Exception $e) {
            $this->get('session')->setFlash('error', $e->getMessage());
            return $this->redirect($this->generateUrl('indexgroup', array('key'=>$group->getKey())));
        }
    
        $this->get('session')->setFlash('notice', 'Create OK!');
        return $this->redirect($this->generateUrl('indexgroup', array('key'=>$group->getKey())));
    }


    /**
     * Cancel a Meeting entity.
     *
     * @Route("/cancel/{id}", name="indexgroup_cancel", requirements = {"id" = "\d+"})
     */
    public function cancelAction(Meeting $meeting)
    {
        $user = $this->get('security.context')->getToken()->getUser();	

        if ($meeting->getState() == Meeting::STATE_FINISHED) {
            $error_type = 'Meeting Finished';
            return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => $error_type));
        } elseif ($meeting->getState() != Meeting::STATE_NOW) {
            $error_type = 'The meeting was cancelled';
            return $this->render('CmarMeetingBundle:Room:error.html.twig', array('error_type' => $error_type));
        }
        //if ($meeting->getOwner()->getId() == $user->getId()){
        if (!$meeting->getGroup()->containsUser($user)) {
            throw $this->createNotFoundException('Unable to find User in this Group.');
        }

        $meetingService = $this->get('cmar_meeting');
        
        $meetingService->stop($meeting, Meeting::STATE_CANCELLED);
        
        $this->get('session')->setFlash('notice', 'Cancel OK!');
        return $this->redirect($this->generateUrl('indexgroup', array('key'=>$meeting->getGroup()->getKey())));

        /*} else {
            throw $this->createNotFoundException('Do not have privileges');
            }*/
    }


    /**
     * Deletes a Meeting entity.
     *
     * @Route("/delete/{id}", name="indexgroup_delete", requirements = {"id" = "\d+"})
     */
    public function deleteAction(Meeting $meeting)
    {
        // FIXME No borrar meeting historico
        // FIXME al borrar tengo que actualizar concurrent del resto
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();	

        //if ($meeting->getOwner()->getId() == $user->getId()){
        if (!$group->containsUser($user)) {
            throw $this->createNotFoundException('Unable to find User in this Group.');
        }
        $em->remove($meeting);
        $em->flush();
        
        $this->get('session')->setFlash('notice', 'Delete OK!');
        return $this->redirect($this->generateUrl('indexgroup', array('key'=>$meeting->getGroup()->getKey())));
        /*} else {
            throw $this->createNotFoundException('Do not have privileges');
            }*/
    }


    /**
     * Edit a Meeting entity.
     *
     * @Route("/edit/{id}", name="indexgroup_edit", requirements = {"id" = "\d+"})
     * @Template()
     */
    public function editAction(Meeting $meeting)
    {
        $form = $this->createForm(new MeetingType(), $meeting);

        $user = $this->get('security.context')->getToken()->getUser();	

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
     * @Route("/update/{id}", name="indexgroup_update")
     * @Method("post")
     * @Template("CmarMeetingBundle:Default:edit.html.twig")
     */
    public function updateAction($id)
    {
        // FIXME No editar meeting historicos
        $em = $this->getDoctrine()->getEntityManager();

        $user = $this->get('security.context')->getToken()->getUser();	

        if ($meeting->getOwner()->getId() == $user->getId()){
            $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Meeting entity.');
            }
            
            $editForm = $this->createForm(new MeetingType(), $entity);
            $request = $this->getRequest();
            
            $editForm->bindRequest($request);
            
            if ($editForm->isValid()) {
                $em->persist($entity);
                $em->flush();
                
                return $this->redirect($this->generateUrl('indexgroup', array('key'=>$meeting->getGroup()->getKey())));
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
     * Show Historical Meetings
     *
     * @Route("/historical/{key}", name="indexgroup_historical")
     * @Route("/historical/{key}/{string_month}", name="indexgroup_month")
     * @Template()
     */
    public function historicalAction($key, $string_month = null)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $key));

        if (!$group) {
            throw $this->createNotFoundException('Unable to find Group entity.');
        }

        if (!$string_month){
            $now = new \DateTime("now");
            $string_month = $now->format('Y-m');
        }

        if(!$month = \DateTime::createFromFormat('Y-m-d H:i:s', $string_month . '-01 00:00:00')) {
            throw $this->createNotFoundException('Date bad format');            
        }
        


        $user = $this->get('security.context')->getToken()->getUser();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');

        $meetings_finished = $repo->findByStatesUserAndMonthGroup(array(Meeting::STATE_CANCELLED, Meeting::STATE_FINISHED), $user, $group, $month);
        $num_meetings = $repo->findMonthsAndRecordingsGroup($user, $group);

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
                     'group' => $group,
                     'string_month' => $string_month,
                     'num_meetings' => $num_meetings,
                     'meetings_finished' => $meetings_finished
                     );
    }
}
