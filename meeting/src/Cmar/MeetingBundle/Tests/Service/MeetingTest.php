<?php

namespace Cmar\MeetingBundle\Test\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Cmar\MeetingBundle\Service\MeetingService;
use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Group;

class MeetingTest extends WebTestCase
{

    private $em;
    private $meetingRepository;
    private $meetingService;

    public function setUp() 
    {
        //INIT TEST SUITE
        $kernel = static::createKernel();
        $kernel->boot();
        $this->em = $kernel->getContainer()
            ->get('doctrine.orm.entity_manager');
        $this->meetingRepository = $this->em
            ->getRepository('CmarMeetingBundle:Meeting');

        //CREATE MEETING SERVICE
        //Uso a Mock for AdoAdmin
        $adoAdmin = $this->getMock('Cmar\MeetingBundle\Service\AdoAdminInterface');
        $doctrine = $kernel->getContainer()->get('doctrine');
        $logger = $kernel->getContainer()->get('logger');
        $concurrentRooms = 5;
        $this->meetingService = new MeetingService($doctrine, $adoAdmin, $concurrentRooms, $logger);

        //DELETE DATABASE
        $this->em->createQuery("DELETE CmarMeetingBundle:Meeting m")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Group g")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:User u")->getResult();
    }

    public function testCreateImmediate()
    {
        $this->assertEquals(0, count($this->meetingRepository->findAll()));

        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $user2->setEmail("vgoya@gmail.com");

        $users = array("edu - edu@gmail.com", "luis - luis@uvigo.es", "ruben - rubenrua@gmail.com", "vicente - vgoya@gmail.com");
        $duration = 30;
        $title = "Meeting for testCreateImmediate";

        $meeting = $this->createMeeting($user, $title, true);
        $this->meetingService->createImmediate($title, $duration, $user, false);
        $this->meetingService->addUsers($meeting, $users);

        $this->assertEquals(1, count($this->meetingRepository->findAll()));
        $this->assertEquals(true, $meeting->containsUser($user2));

        //TEST meeting owner is $user
        //TEST Meeting status is NOW
        //TEST ...
    }


    /*public function testCreateImmediateByGroup()
    {   
        $user = $this->createUser("user");   
        $duration = 30;
        $group = $this->createGroup("Peces", $user);
        
        $this->meetingService->createImmediateByGroup($duration, $user, $group, true);
        $this->assertEquals(false, $this->meetingRepository->checkAvailability2ForGroup($group, $user));
        
        $this->assertEquals(1, count($this->meetingRepository->findByStateAndGroup(Meeting::STATE_NEW, $group)));
        }*/
    

    /*public function testA()
    {
        $this->assertEquals(0, count($this->meetingRepository->findAll()));

        $user = $this->createUser("user");   
        $duration = 30;

        $this->meetingService->createImmediate($duration, $user, "public");

        $this->assertEquals(1, count($this->meetingRepository->findAll()));
        //TEST meeting owner is $user
        //TEST Meeting status is NOW
        //TEST ...
        }*/


    /*
    public function testGetConcurrent()
    {
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $user3 = $this->createUser("user3");
        $user4 = $this->createUser("user4");
        $user5 = $this->createUser("user5");
        $user6 = $this->createUser("user6");
        $user7 = $this->createUser("user7");

        $duration = 30;
        $title = "Meeting for testGetConcurrent";
        $meeting = array();

        $datatime = '2012-01-17 10:00:00';
        $meeting[1] = $this->createMeeting($user, $title, 270, $datatime);
        $this->assertEquals($meeting[1], $this->meetingService->create($meeting[1]));
        $this->assertEquals(0, $meeting[1]->getConcurrent());
        
        $datatime = '2012-01-17 10:30:00';
        $meeting[2] = $this->createMeeting($user2, $title, 210, $datatime);
        $this->meetingService->create($meeting[2]);
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 11:00:00';
        $meeting[3] = $this->createMeeting($user3, $title, 150, $datatime);
        $this->meetingService->create($meeting[3]);
        $this->assertEquals(2, $meeting[3]->getConcurrent());
        $this->assertEquals(2, $meeting[2]->getConcurrent());
        $this->assertEquals(2, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 11:30:00';
        $meeting[4] = $this->createMeeting($user4, $title, 90, $datatime);
        $this->meetingService->create($meeting[4]);
        $this->assertEquals(3, $meeting[4]->getConcurrent());
        $this->assertEquals(3, $meeting[3]->getConcurrent());
        $this->assertEquals(3, $meeting[2]->getConcurrent());
        $this->assertEquals(3, $meeting[1]->getConcurrent());

        $datatime = '2012-01-17 12:00:00';
        $meeting[5] = $this->createMeeting($user5, $title, $duration, $datatime);
        $this->meetingService->create($meeting[5]);
        $this->assertEquals(4, $meeting[5]->getConcurrent());
        $this->assertEquals(4, $meeting[4]->getConcurrent());
        $this->assertEquals(4, $meeting[3]->getConcurrent());
        $this->assertEquals(4, $meeting[2]->getConcurrent());
        $this->assertEquals(4, $meeting[1]->getConcurrent());

        $datatime = '2012-01-17 12:15:00';
        $meeting[6] = $this->createMeeting($user6, $title, 10, $datatime);
        $this->meetingService->create($meeting[6]);
        $this->assertEquals(5, $meeting[6]->getConcurrent());//No crea el meeting
        $this->assertEquals(5, $meeting[5]->getConcurrent());
        $this->assertEquals(5, $meeting[4]->getConcurrent());
        $this->assertEquals(5, $meeting[3]->getConcurrent());
        $this->assertEquals(5, $meeting[2]->getConcurrent());
        $this->assertEquals(5, $meeting[1]->getConcurrent());

        $datatime = '2012-01-17 12:15:00';
        $meeting[7] = $this->createMeeting($user7, $title, 10, $datatime);
        $this->meetingService->create($meeting[7]);//Al crear el sexto da un error de máximo de concurrentes

        }*/
   

    /*
    public function testCreateMeetingB(){
        
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $user3 = $this->createUser("user3");
        $user4 = $this->createUser("user4");
        $user5 = $this->createUser("user5");
        $user6 = $this->createUser("user6");
        $user7 = $this->createUser("user7");
        $user8 = $this->createUser("user8");
        $user9 = $this->createUser("user9");
        $user10 = $this->createUser("user10");

        $duration = 30;
        $title = "Meeting for testCreateMeetingAndGetConcurrent";
        $meeting = array();

        $datatime = '2012-01-17 9:00:00';
        $meeting[1] = $this->createMeeting($user, $title, 90, $datatime);
        $this->assertEquals($meeting[1], $this->meetingService->create($meeting[1]));
        $this->assertEquals(0, $meeting[1]->getConcurrent());
        
        $datatime = '2012-01-17 10:10:00';
        $meeting[2] = $this->createMeeting($user2, $title, $duration, $datatime);
        $this->meetingService->create($meeting[2]);
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 11:00:00';
        $meeting[3] = $this->createMeeting($user3, $title, $duration, $datatime);
        $this->meetingService->create($meeting[3]);
        $this->assertEquals(0, $meeting[3]->getConcurrent());
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 10:50:00';
        $meeting[4] = $this->createMeeting($user4, $title, 130, $datatime);
        $this->meetingService->create($meeting[4]);
        $this->assertEquals(1, $meeting[4]->getConcurrent());
        $this->assertEquals(1, $meeting[3]->getConcurrent());
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 11:15:00';
        $meeting[5] = $this->createMeeting($user5, $title, 65, $datatime);
        $this->meetingService->create($meeting[5]);
        $this->assertEquals(2, $meeting[5]->getConcurrent());
        $this->assertEquals(2, $meeting[4]->getConcurrent());
        $this->assertEquals(2, $meeting[3]->getConcurrent());
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 12:00:00';
        $meeting[6] = $this->createMeeting($user6, $title, 45, $datatime);
        $this->meetingService->create($meeting[6]);
        $this->assertEquals(2, $meeting[6]->getConcurrent());
        $this->assertEquals(2, $meeting[5]->getConcurrent());
        $this->assertEquals(2, $meeting[4]->getConcurrent());
        $this->assertEquals(2, $meeting[3]->getConcurrent());
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 8:00:00';
        $meeting[7] = $this->createMeeting($user7, $title, 90, $datatime);
        $this->meetingService->create($meeting[7]);
        $this->assertEquals(1, $meeting[7]->getConcurrent());
        $this->assertEquals(2, $meeting[6]->getConcurrent());
        $this->assertEquals(2, $meeting[5]->getConcurrent());
        $this->assertEquals(2, $meeting[4]->getConcurrent());
        $this->assertEquals(2, $meeting[3]->getConcurrent());
        $this->assertEquals(1, $meeting[2]->getConcurrent());
        $this->assertEquals(1, $meeting[1]->getConcurrent());

        
        $datatime = '2012-01-17 10:00:00';
        $meeting[8] = $this->createMeeting($user8, $title, 150, $datatime);
        $this->meetingService->create($meeting[8]);
        $this->assertEquals(3, $meeting[8]->getConcurrent());
        $this->assertEquals(1, $meeting[7]->getConcurrent());
        $this->assertEquals(3, $meeting[6]->getConcurrent());
        $this->assertEquals(3, $meeting[5]->getConcurrent());
        $this->assertEquals(3, $meeting[4]->getConcurrent());
        $this->assertEquals(3, $meeting[3]->getConcurrent());
        $this->assertEquals(2, $meeting[2]->getConcurrent());
        $this->assertEquals(2, $meeting[1]->getConcurrent());
        
        
        $datatime = '2012-01-17 9:40:00';
        $meeting[9] = $this->createMeeting($user9, $title, 150, $datatime);
        $this->meetingService->create($meeting[9]);
        $this->assertEquals(4, $meeting[9]->getConcurrent());
        $this->assertEquals(4, $meeting[8]->getConcurrent());
        $this->assertEquals(1, $meeting[7]->getConcurrent());
        $this->assertEquals(4, $meeting[6]->getConcurrent());
        $this->assertEquals(4, $meeting[5]->getConcurrent());
        $this->assertEquals(4, $meeting[4]->getConcurrent());
        $this->assertEquals(4, $meeting[3]->getConcurrent());
        $this->assertEquals(3, $meeting[2]->getConcurrent());
        $this->assertEquals(3, $meeting[1]->getConcurrent());

        }*/



    /*public function testCreate(){
        
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $user3 = $this->createUser("user3");
        $user4 = $this->createUser("user4");
        $user5 = $this->createUser("user5");
        $user6 = $this->createUser("user6");

        $duration = 30;
        $title = "Meeting for testcheckDisponibility";
        $datatime = '2012-01-17 9:00:00';
        $meeting_state = Meeting::STATE_SCHEDULED;
        
        $meeting[1] = $this->createMeeting($user, $title, 90, $datatime);

        $datatime = '2012-01-17 10:10:00';
        $meeting[2] = $this->createMeeting($user2, $title, $duration, $datatime);

        $datatime = '2012-01-17 11:00:00';
        $meeting[10] = $this->createMeeting($user3, $title, $duration, $datatime);
        $this->assertEquals($meeting[10], $this->meetingService->create($meeting[10]));

        $datatime = '2012-01-17 11:00:00';
        $meeting[3] = $this->createMeeting($user4, $title, $duration, $datatime);

        $datatime = '2012-01-17 10:50:00';
        $meeting[4] = $this->createMeeting($user5, $title, 130, $datatime);

        $datatime = '2012-01-17 11:15:00';
        $meeting[5] = $this->createMeeting($user6, $title, 65, $datatime);

        $datatime = '2012-01-17 12:00:00';
        $meeting[6] = $this->createMeeting($user, $title, 45, $datatime);

        $this->assertEquals($meeting[6], $this->meetingService->create($meeting[6]));

        $datatime = '2012-01-17 8:00:00';
        $concurrent = 2;
        $meeting[7] = $this->createMeeting($user, $title, $duration, $datatime);

        $datatime = '2012-01-17 10:00:00';
        $concurrent = 7;
        $meeting[8] = $this->createMeetingAndFlush($user, $title, 150, $datatime, $meeting_state, $concurrent);


        $datatime = '2012-01-17 9:40:00';
        $meeting[9] = $this->createMeeting($user, $title, 150, $datatime);
        $this->assertEquals($meeting[9], $this->meetingService->create($meeting[9]));


        }*/


    /*
     *
     */
    public function testaccessControl() {
        
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $user3 = 'anom.';

        $title = "Meeting for testAccessControl";
        
        $meeting[1] = $this->createMeeting($user, $title, true);

        $meeting[2] = $this->createMeeting($user, $title, false);


        //Meetings públicos de usuario
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[1], $user, false));//Usuario entra en su propio meeting
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[1], $user, true));//Usuario entra en su propio meeting con SecretSalt
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[1], $user2, false));//Entra en el Meeting ya que es público aunque no es el propietario
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[1], $user2, true));//Usuario entra en un meeting propio de usuario si le pasan el SecretSalt

        $this->assertEquals(true, $this->meetingService->accessControl($meeting[1], $user3, true));//Usuario anónimo entra en un meeting propio de usuario si le pasan el SecretSalt
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[1], $user3, false));//Usuario anónimo entra en el Meeting ya que es público aunque no es el propietario y le pasen sepa el Salt

        //Meetings privados de usuario
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[2], $user, false));//Usuario entra en su propio meeting con Salt
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[2], $user, true));//Usuario entra en su propio meeting con SecretSalt
        $this->assertEquals(false, $this->meetingService->accessControl($meeting[2], $user2, false));//Nadie más que el usuario entra en su propio meeting
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[2], $user2, true));//Usuario entra en un meeting privado propio de usuario con el SecretSalt

        $this->assertEquals(false, $this->meetingService->accessControl($meeting[2], $user3, false));//Nadie más que el usuario entra en su propio meeting
        $this->assertEquals(true, $this->meetingService->accessControl($meeting[2], $user3, true));//Usuario anónimo entra en un meeting privado propio de usuario con el SecretSalt

    }
    
    private function createUser($name)
    {
        $user = new User();
        $user->setLogin($name);
        $user->setName($name);
        $user->setSurname($name);
        $user->setEmail($name);  
        $user->setPassword($name);
        
        $this->em->persist($user);
        return $user;
    }


    private function createMeetingAndFlush($user, $title, $meeting_state, $concurrent)
    {

        $meeting = new Meeting();
        $meeting->setTitle($title);

        $meeting->setConcurrent($concurrent);
        $meeting->setPublic(true);
        $meeting->setState($meeting_state);
        $meeting->setOwner($user);
        $meeting->setSecretSalt(rand());
        $meeting->setSalt(rand());

        $this->em->persist($meeting);
        $this->em->flush();
        return $meeting;
    }

    private function createMeeting($user, $title, $public = true)
    {

        $meeting = new Meeting();
        $meeting->setTitle($title);

        $meeting->setUrl($title . '@campusdomar.es');
        $meeting->setPublic($public);
        $meeting->setOwner($user);
        $meeting->setSalt($user->getLogin());
        $secret = md5($user->getLogin());
        $meeting->setSecretSalt($secret);

        return $meeting;
    }

    private function createMeetingGroup($user, $title, $meeting_state, $group, $public = true)
    {

        $meeting = new Meeting();
        $meeting->setTitle($title);

        //var_dump($datatime_string); 

        $meeting->setPublic($public);
        $meeting->setState($meeting_state);
        $meeting->seturl($title);
        $meeting->setSalt($group->getKey());
        $secret = md5($group->getName());
        $meeting->setSecretSalt($secret);
        $meeting->setOwner($user);
        $meeting->setGroup($group);

        $this->em->persist($meeting);
        return $meeting;
    }

    private function createGroup($name, $user)
    {
        $group = new Group();
        $group->setType($name);
        $group->setName($name);
        $group->setKey($name);
        $group->setDescription($name);
        $group->addUser($user);

        $this->em->persist($group);
        return $group;
    }

}