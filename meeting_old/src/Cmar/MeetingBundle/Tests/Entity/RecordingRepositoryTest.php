<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\Recording;

class RecordingRepositoryTest extends WebTestCase
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
            ->getRepository('CmarMeetingBundle:Recording');

        //DELETE DATABASE
        $this->em->createQuery("DELETE CmarMeetingBundle:Meeting m")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Recording r")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Group g")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:User u")->getResult();
    }

    public function testRepository()
    {
        $title = "title";
        $url = "123<>U45;";
        $date = new \DateTime("now");
        
        $recording = new Recording();
        $recording->setTitle($title);
        $recording->setUrl($url);
        $recording->setDateCreated($date);

        $this->em->persist($recording);
        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findAll()));
    }

}