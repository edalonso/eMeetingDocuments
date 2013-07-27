<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\Group;


/**
 * Personal controller.
 *
 * @Route("/personal") 
 */
class PersonalController extends Controller
{
  
    /**
     * Index
     *
     * @Route("/", name="index_personal")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');

        $groups = array();
        foreach ($user->getGroups() as $aux) {
            $key = $aux->getKey();
            $groups[] = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $key));
        }

        $meetings_now_user = $repo->findByStateUserAndNotGroup(Meeting::STATE_NOW, $user);

        $meetings_now_group = array();
        foreach ($groups as $aux) {
            try{
                $meetings_now_group[] = $repo->findOneByStateAndGroup(Meeting::STATE_NOW, $aux);
            } catch (\Exception $e) {
            }
        }
        return array(
                     'user' => $user,
                     'groups' => $groups,
                     'meetings_now_user' =>  $meetings_now_user,
                     'meetings_now_group' =>  $meetings_now_group,
                     );
    }

}