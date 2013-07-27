<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Cmar\MeetingBundle\Entity\Group;

class GroupRepositoryTest extends WebTestCase
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
            ->getRepository('CmarMeetingBundle:Group');

        //DELETE DATABASE
        $this->em->createQuery("DELETE CmarMeetingBundle:Meeting m")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Recording r")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Group g")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:User u")->getResult();
    }

    public function testRepository()
    {
        $key = "PECESAZULES";
        $name = "Peces Azules";
        $description = "Grupo de los Peces Azules";
        $type = "public";
        
        $group = new Group();
        $group->setKey($key);
        $group->setType($type);
        $group->setName($name);
        $group->setDescription($description);
        
        $this->em->persist($group);
        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findAll()));
    }
}