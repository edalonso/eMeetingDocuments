<?php
namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Form\PasswordType;


/**
 * Secutiry Controller.
 *
 */

class SecurityController extends Controller
{
    /**
     * Login Security
     *
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('CmarMeetingBundle:Security:login.html.twig', array(
                                                                                 // last username entered by the user
                                                                                 'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                                                                                 'error'         => $error,
                                                                                 ));
    }

    /**
     * @Route("/welcome", name="index_welcome")
     * @Template()
     */
    public function welcomeAction(Request $request)
    {
        $error = false;
        if ($request->getMethod() == 'POST') {
            if ($email = filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
                $this->welcomeMailTo($email);
                return $this->redirect($this->generateUrl('mail_sent'));
            }
            $error = true;
        }
        return array('error' => $error);
    }


    /**
     * @Route("/mail/sent", name="mail_sent")
     * @Template()
     */
    public function mailSentAction()
    {
        return array();
    }


    /**
     * @Route("/recover/{email}/{hash}", name="recover")
     * @Template()
     */
    public function recoverAction($email, $hash, Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:User');

        try{
            $user = $repo->findOneUserByEmail($email);
        }catch(\Exception $e){
            return $this->redirect($this->generateUrl('recover_error'));
        }

        if($hash != $this->getHash($user)){
            return $this->redirect($this->generateUrl('recover_error'));
        }

        if ($request->getMethod() == 'POST') {
            $password = $request->get('password');
            $user->setPassword(trim($password));
            $em->persist($user);
            $em->flush();
            //$dirplus->updateUser($user);
            return $this->redirect($this->generateUrl('recover_update'));
           
        } else {
            //TODO DELETE FORM FILE
            return array(
                         'user' => $user,
                         'hash' => $hash,
                         );
        }
    }


    /**
     * @Route("/recover/error", name="recover_error")
     * @Template()
     */
    public function recoverHashErrorAction()
    {
        return array(
                     );
    }


    /**
     * @Route("/recover/update", name="recover_update")
     * @Template()
     */
    public function recoverUpdateAction()
    {
        return array(
                     );
    }


    /**
     *
     */
    private function getHash(User $user)
    {
        $secert_string = "EraseUnaVezElMundoAlReves";
        $now = new \DateTime("now");
       
        return sha1($secert_string . $user->getLogin() . $now->format("m-Y-d"));
    }


    private function welcomeMailTo($email)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:User');

        //$dirplus = $this->get("cmar_welcome.dirplus");

        //TODO Si no existe user tendria que avisar???
        try{
            $user = $repo->findOneUserByEmail($email);
            //$user = $dirplus->getUser($email);
        }catch(\Exception $e){
            throw $this->createNotFoundException('User does not exist or email incorrect');
            //return false;
        }
   
        $url = $this->generateUrl('recover', array('email'=> $email, 'hash' => $this->getHash($user)), true);

        $message = \Swift_Message::newInstance()
            ->setSubject('Acceso al sistema Digital do Campus do Mar - ' . $user->getName() . " " . $user->getSurname())
            ->setFrom(array('no-reply@campusdomar.es' => 'El Equipo de DigiMAR'))
            ->setTo($email)
            ->setBody($this->renderView('CmarMeetingBundle::email.txt.twig', array('user' => $user, 'url' => $url)))
            ->addPart($this->renderView('CmarMeetingBundle::email.html.twig', array('user' => $user, 'url' => $url)), 'text/html')
            ;
        $this->get('mailer')->send($message);
    }

}