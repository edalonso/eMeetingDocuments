<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Form\WizardMetadataType;
use Cmar\MeetingBundle\Form\WizardDateType;
use Cmar\MeetingBundle\Form\WizardUsersType;

/**
 * Wizard controller.
 *
 * @Route("/wizard")
 */
class WizardController extends Controller
{
    /**
     * Index
     *
     * @Route("/", name="wizard")
     */
    public function indexAction()
    {
        $session = $this->getRequest()->getSession();
        $user = $this->get('security.context')->getToken()->getUser();

        $meeting = new Meeting();
        $meeting->setOwner($user);
	
        $session->set('meeting', $meeting);

        return $this->forward('CmarMeetingBundle:Wizard:metadata');
    }

    /**
     * Metadata: title and description
     *
     * @Route("/metadata", name="wizard_metadata")
     * @Template()
     */
    public function metadataAction()
    {
        $session = $this->getRequest()->getSession();
        
        $meeting = $session->get('meeting');
        $form   = $this->createForm(new WizardMetadataType(), $meeting);
        
        return array(
                     'meeting' => $meeting,
                     'form'   => $form->createView()
                     );
    }
    
    /**
     * Metadata submit
     *
     * @Route("/metadata_submit", name="wizard_metadata_submit")
     * @Method("post")
     * @Template("CmarMeetingBundle:Wizard:metadata.html.twig")
     */
    public function metadataSubmitAction()
    {
        $session = $this->getRequest()->getSession();
        
        $meeting = $session->get('meeting');
        $form   = $this->createForm(new WizardMetadataType(), $meeting);
        
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            return $this->forward('CmarMeetingBundle:Wizard:date');
            //return $this->redirect($this->generateUrl('wizard_date'));
        }

        return array(
                     'meeting' => $meeting,
                     'form'   => $form->createView()
                     );
    }

    /**
     * Date: date and duration
     *
     * @Route("/date", name="wizard_date")
     * @Template()
     */
    public function dateAction()
    {
        $session = $this->getRequest()->getSession();
        
        $meeting = $session->get('meeting');
        $form   = $this->createForm(new WizardDateType(), $meeting);
        
        return array(
                     'meeting' => $meeting,
                     'form'   => $form->createView(),
                     'ErrorForDate' => ''
                     );
    }
    
    /**
     * Date submit
     *
     * @Route("/date_submit", name="wizard_date_submit")
     * @Method("post")
     * @Template("CmarMeetingBundle:Wizard:date.html.twig")
     */
    public function dateSubmitAction()
    {
        $session = $this->getRequest()->getSession();
        $meetingService = $this->get('cmar_meeting');
        
        $meeting = $session->get('meeting');
        $form   = $this->createForm(new WizardDateType(), $meeting);
        
        $request = $this->getRequest();
        
        $form->bindRequest($request);
        
        if ($form->isValid() and ($meetingService->checkAvailabilityForMaxConcurrent($meeting))) {
            if ($meetingService->checkAvailability2ForUser($meeting)){
                return $this->forward('CmarMeetingBundle:Wizard:users');
            } else {
                return array(
                             'meeting' => $meeting,
                             'form'   => $form->createView(),
                             'ErrorForDate'  => 'This user has a meeting at this time'
                             );
                
            }
            //return $this->redirect($this->generateUrl('wizard_users'));
        }
        return array(
                     'meeting' => $meeting,
                     'form'   => $form->createView(),
                     'ErrorForDate'  => 'Exceeded number of meeting at this time'
                     );
        
        
        
    }
    
    /**
     * Users: users and public
     *
     * @Route("/users", name="wizard_users")
     * @Template()
     */
    public function usersAction()
    {
        $session = $this->getRequest()->getSession();
	
        $meeting = $session->get('meeting');
        $form   = $this->createForm(new WizardUsersType(), $meeting);

        return array(
                     'meeting' => $meeting,
                     'form'   => $form->createView()
                     );
    }

    /**
     * Users submit
     *
     * @Route("/users_submit", name="wizard_users_submit")
     * @Method("post")
     * @Template("CmarMeetingBundle:Wizard:users.html.twig")
     */
    public function usersSubmitAction()
    {
        $session = $this->getRequest()->getSession();
	
        $meeting = $session->get('meeting');
        $form   = $this->createForm(new WizardUsersType(), $meeting);

        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
      	    return $this->forward('CmarMeetingBundle:Wizard:persist');
            //return $this->redirect($this->generateUrl('wizard_persist'));
        }

        return array(
                     'meeting' => $meeting,
                     'form'   => $form->createView(),
                     );
    }

    /**
     * Persist
     *
     * @Route("/persist", name="wizard_persist")
     * @Template()
     */
    public function persistAction()
    {
        $session = $this->getRequest()->getSession();
        $meetingService = $this->get('cmar_meeting');
        $meeting = $session->get('meeting');
        $user = $this->get('security.context')->getToken()->getUser();

        $meeting->setOwner($user);
        
        try {
            $meetingService->create($meeting);
        } catch (\Exception $e) {
            //TODO falta por hacer
            return $this->redirect($this->generateUrl('wizard_error'));
        }

        return $this->redirect($this->generateUrl('wizard_end'));
    }


    /**
     * Persist
     *
     * @Route("/error", name="wizard_error")
     * @Template()
     */
    public function errorAction()
    {
        
        return array(
 
                     );
    }

    /**
     * End
     *
     * @Route("/end", name="wizard_end")
     * @Template()
     */
    public function endAction()
    {
        $session = $this->getRequest()->getSession();
	
        $meeting = $session->get('meeting');

        return array(
                     'meeting' => $meeting,
                     );
    }

}
