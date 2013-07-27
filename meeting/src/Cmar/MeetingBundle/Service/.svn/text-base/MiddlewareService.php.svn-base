<?php

namespace Cmar\MeetingBundle\Service;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Validator\ValidatorInterface;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

use Symfony\Component\HttpFoundation\Response;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Entity\Group;
                                                                                                                                             

class MiddlewareService
{
    private $doctrine;
    private $adoAdmin;
    private $validator;
    private $logger;

    public function __construct(RegistryInterface $doctrine, AdoAdminInterface $adoAdmin, ValidatorInterface $validator, LoggerInterface $logger = null) 
    {
        $this->logger = $logger;
        $this->doctrine = $doctrine;
        $this->validator = $validator;
        $this->adoAdmin = $adoAdmin;
    }

    /**
     *
     * Crea usuario copiándolo de la base de datos de Campus do mar a nuestra base de datos
     *
     */

    public function createUser($in)
    {
        $em = $this->doctrine->getEntityManager();

        $user = new User();
        $this->mapUser($user, $in);

        $errors = $this->validator->validate($user);
        if (count($errors) > 0) {
            throw new \LogicException("Validation Exception \"" . $errors[0]->getPropertyPath() . "\": " . $errors[0]->getMessageTemplate(), -1);
        } 

        //No carga en la base de datos, suelta el error DDBB Exception             
        $em->persist($user);
        try {
            $em->flush();
        } catch (\Exception $e) {
            $this->logger->info("DDBB Exception"); 
            throw new \LogicException("DDBB Exception", -1);
        }

        try {
            $sal = $this->adoAdmin->principalUpdate($user->getLogin(), $user->getEmail(), $user->getPassword(),
                                                    $user->getName(), $user->getSurname(), "Automatically created user in meeting");  
        } catch (\Exception $e) {
            $this->logger->info("User does not created"); 
            throw new \LogicException("User do not created", -1);
        }
    }
    
    /**
     *
     * Actualiza usuario de la base de datos de Campus do mar en nuestra base de datos
     *
     */
    public function updateUser($old_in, $new_in)
    {
        $em = $this->doctrine->getEntityManager();
        $user = $em->getRepository('CmarMeetingBundle:User')->findOneBy(array('login' => $old_in->{'login'}));
        
        if (!$user) {
            throw new \LogicException("The user does not exist", -1);
        } 
        $old_user = new User();
        $this->mapUser($old_user, $old_in);

        $this->mapUser($user, $new_in);
        $errors = $this->validator->validate($user);
        if (count($errors) > 0) {
            throw new \LogicException("Validation Exception \"" . $errors[0]->getPropertyPath() . "\": " . $errors[0]->getMessageTemplate(), -1);
        } 

        $em->persist($user);
        
        try {
            $em->flush();
        } catch (\Exception $e) {
            $this->logger->info("DDBB Exception"); 
            throw new \LogicException("DDBB Exception", -1);
        }
            

        try {
            $id_user = $this->adoAdmin->principalFindByEmail($old_user->getEmail());
            //TODO comprobar si cambiamos esta frase al actualizar usuario o no
            $sal = $this->adoAdmin->principalUpdate($user->getLogin(), $user->getEmail(), $old_user->getPassword(), $user->getName(), $user->getSurname(), "Automatically updated user in meeting", $id_user);
            $sal2 = $this->adoAdmin->updateUserPassword($user, $user->getPassword(), $id_user);
        } catch (\Exception $e) {
            $this->logger->info("User does not updated"); 
            throw new \LogicException("User does not updated", -1);
        }
    }
    
    
    /**
     *
     * Borra de nuestra base de datos al borrarse en Campus do Mar
     *
     */

    public function deleteUser($in)
    {
        $em = $this->doctrine->getEntityManager();
        $user = $em->getRepository('CmarMeetingBundle:User')->findOneBy(array('login'=> $in->{'login'}));
        if ($user == NULL ) {
            $this->logger->info("User does not exist"); 
            throw new \LogicException("User does not exist");
        } else {
            $id_user = $this->adoAdmin->principalFindByEmail($user->getEmail());
            $xml = $this->adoAdmin->principalDelete($id_user);
            $em->remove($user);
            try {
                $em->flush();
            } catch (\Exception $e) {
                $this->logger->info("DDBB Exception"); 
                throw new \LogicException("DDBB Exception", -1);
            }
        }
    }
    
    
    /**
     *
     * Crea grupo copiándolo de la base de datos de Campus do mar a nuestra base de datos
     *
     */

    public function createGroup($in)
    {
        $em = $this->doctrine->getEntityManager();
        
        $group = new Group();
        $this->mapGroup($group, $in);
        
        $errors = $this->validator->validate($group);
        if (count($errors) > 0) {
            throw new \LogicException("Validation Exception \"" . $errors[0]->getPropertyPath() . "\": " . $errors[0]->getMessageTemplate(), -1);
        } 

        $xml = $this->adoAdmin->principalUpdateforGroups($group->getName(), $group->getDescription());
        $em->persist($group);
        
        try {
            $em->flush();
        } catch (\Exception $e) {
            $this->logger->info("DDBB Exception"); 
            throw new \LogicException("DDBB Exception", -1);
        }
    }
    
    /**
     *
     * Actuliza grupo de la base de datos de Campus do mar en nuestra base de datos
     *
     */

    public function updateGroup($in)
    {
        $em = $this->doctrine->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $in->{'key'}));
        
        $this->mapGroup($group, $in);
        
        $errors = $this->validator->validate($group);
        if (count($errors) > 0) {
            throw new \LogicException("Validation Exception \"" . $errors[0]->getPropertyPath() . "\": " . $errors[0]->getMessageTemplate(), -1);
        } 

        $xml = $this->adoAdmin->principalUpdateforGroups($in->{'name'}, $in->{'description'});
        $em->persist($group);
        
        try {
            $em->flush();
        } catch (\Exception $e) {
            $this->logger->info("DDBB Exception"); 
            throw new \LogicException("DDBB Exception", -1);
        }
    }

    
    /**
     *
     * Actuliza el Role de un ususario en un grupo, no tengo que hacer esto desde aplicación Meeting
     *
     */

    public function updateRoleInGroup($in)
    {
        /*$em = $this->doctrine->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $in->{'key'}));
        
        $this->mapGroup($group, $in);
        
        $errors = $this->validator->validate($group);
        if (count($errors) > 0) {
            throw new \LogicException("Validation Exception \"" . $errors[0]->getPropertyPath() . "\": " . $errors[0]->getMessageTemplate(), -1);
        } 

        $xml = $this->adoAdmin->principalUpdateforGroups($in->{'name'}, $in->{'description'});
        $em->persist($group);
        
        try {
            $em->flush();
        } catch (\Exception $e) {
            $this->logger->info("DDBB Exception"); 
            throw new \LogicException("DDBB Exception", -1);
            }*/
    }
    
    
    /**
     *
     * Borra grupo de nuestra base de datos al borrarse en la de Campus do Mar
     *
     */

    public function deleteGroup($in)
    {
        $em = $this->doctrine->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('name' => $in->{'name'}));
        
        $this->mapGroup($group, $in);
        if ($group == NULL ) {
            $this->logger->info("Group does not exist"); 
            throw new \LogicException("Group does not exist");
        } else {

            $id_group = $this->adoAdmin->principalFindByName($group->getName());
            $xml = $this->adoAdmin->principalDelete($id_group);
            
            $em->remove($group);

            try {
                $em->flush();
            } catch (\Exception $e) {
                $this->logger->info("DDBB Exception"); 
                throw new \LogicException("DDBB Exception", -1);
            }
        }
    }
    
    /**
     *
     * Borra usuario de un grupo de nuestra base de datos
     *
     */

    public function leaveGroup($u_in, $g_in)
    {
        $em = $this->doctrine->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('name' => $g_in->{'name'}));
        $user = $em->getRepository('CmarMeetingBundle:User')->findOneBy(array('login' => $u_in->{'login'}));

        $id_user = $this->adoAdmin->principalFindByEmail($u_in->{'mail'});
        $id_group = $this->adoAdmin->principalFindByName($g_in->{'name'});
        
        if ($group == NULL ) {
            $this->logger->info("Group does not exist"); 
            throw new \LogicException("Group does not exist");
        } elseif ($user == NULL ) {
            $this->logger->info("User does not exist"); 
            throw new \LogicException("User does not exist");
        } else {
            $xml = $this->adoAdmin->groupMembershipUpdate($id_group, $id_user, 'false');
            $user->removeGroup($group);

            $em->persist($user);
            try {
                $em->flush();
            } catch (\Exception $e) {
                $this->logger->info("DDBB Exception"); 
                throw new \LogicException("DDBB Exception", -1);
            }
        }
    }
    
    
    /**
     *
     * Introduce usuario en un grupo
     *
     */

    public function joinGroup($u_in, $g_in)
    {
        $em = $this->doctrine->getEntityManager();
        $group = $em->getRepository('CmarMeetingBundle:Group')->findOneBy(array('key' => $g_in->{'key'}));
        $user = $em->getRepository('CmarMeetingBundle:User')->findOneBy(array('login' => $u_in->{'login'}));

        $id_user = $this->adoAdmin->principalFindByEmail($user->getEmail());
        $id_group = $this->adoAdmin->principalFindByName($group->getName());
        
        if ($group == NULL ) {
            throw new \LogicException("Group does not exist");
        } elseif ($user == NULL ) {
            throw new \LogicException("User does not exist");
        } else {
            $xml = $this->adoAdmin->groupMembershipUpdate($id_group, $id_user, 'true');
            $user->addGroup($group);            
            $em->persist($user);
            try {
                $em->flush();
            } catch (\Exception $e) {
                $this->logger->info("DDBB Exception"); 
                throw new \LogicException("DDBB Exception", -1);
            }
        }
    }
    
    
    
    
    private function mapUser($user, $data)
    {
        if (isset($data->{'login'}))
            $user->setLogin($data->{'login'});
        if (isset($data->{'password'}))
            $user->setPassword($data->{'password'});
        if (isset($data->{'name'}))
            $user->setName($data->{'name'});
        if (isset($data->{'surname1'}) AND isset($data->{'surname2'})){
            $user->setSurname($data->{'surname1'} . " " . $data->{'surname2'});
        } elseif (isset($data->{'surname1'})) {
            $user->setSurname($data->{'surname1'});
        }
        if (isset($data->{'mail'}))
            $user->setEmail($data->{'mail'});
        /*if (isset($data->{'phoneNumber'}))
          $user->setPhoneNumber($data->{'phoneNumber'});
          if (isset($data->{'url'}))
          $user->setUrl($data->{'url'});
          if (isset($data->{'type'}))
          $user->setType($data->{'type'});
          if (isset($data->{'photo'}))
          $user->setPhoto($data->{'photo'});
          if (isset($data->{'organization'}))
          $user->setOrganization($data->{'organization'});
          if (isset($data->{'mentor'}))
          $user->setMentor($data->{'mentor'});*/
        
        return $user;
    }
    
    
    private function mapGroup($group, $data)
    {
        if (isset($data->{'name'}))
            $group->setName($data->{'name'});
        if (isset($data->{'description'}))
            $group->setDescription($data->{'description'});
        if (isset($data->{'type'}))
            $group->setType($data->{'type'});
        if (isset($data->{'key'}))
            $group->setKey($data->{'key'});
        
        return $group;
    }

}

