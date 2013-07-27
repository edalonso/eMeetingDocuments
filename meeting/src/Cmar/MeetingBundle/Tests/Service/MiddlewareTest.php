<?php

namespace Cmar\MeetingBundle\Test\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Cmar\MeetingBundle\Service\MeetingService;
use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Group;

class MiddlewareTest extends WebTestCase
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

    public function testcreateUser()
    {


    }

}