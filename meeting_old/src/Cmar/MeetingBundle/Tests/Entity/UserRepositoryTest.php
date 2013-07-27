<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Cmar\MeetingBundle\Entity\User;

class UserRepositoryTest extends WebTestCase
{

    private $em;
    private $repo;

    public function setUp() 
    {
        //INIT TEST SUITE
        $kernel = static::createKernel();
        $kernel->boot();
        $this->em = $kernel->getContainer()
            ->get('doctrine.orm.entity_manager');
        $this->repo = $this->em
            ->getRepository('CmarMeetingBundle:User');
        
        //DELETE DATABASE
        $this->em->createQuery("DELETE CmarMeetingBundle:Meeting m")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Recording r")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Group g")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:User u")->getResult();
    }
    
    
    public function testRepository()
    {
        $login = "login";
        $password = "123<>U45;";
        $name = "Login Gomez Gomez";
        $surname = "Gomez";
        $email = "login@pr.es";
        
        $user = new User();
        $user->setLogin($login);
        $user->setPassword($password);
        $user->setName($name);
        $user->setSurname($surname);
        $user->setEmail($email);

        $this->em->persist($user);
        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findAll()));
    }
}