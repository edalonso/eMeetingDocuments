<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Cmar\MeetingBundle\Entity\Group;
use Cmar\MeetingBundle\Entity\User;

class GroupTest extends \PHPUnit_Framework_TestCase
{

    public function testGroup()
    {
       $name = "Peces Azules";
       $description = "Grupo de los Peces Azules";
       $type = "public";
       $key = "PECESAZULES";
    
       $group = new Group();
       $group->setType($type);
       $group->setName($name);
       $group->setDescription($description);
       $group->setKey($key);

       $this->assertEquals($type, $group->getType());
       $this->assertEquals($name, $group->getName());
       $this->assertEquals($description, $group->getDescription());
       $this->assertEquals($key, $group->getKey());
       $this->assertNotEquals($description . "    ", $group->getDescription());
    }


    public function testGroupBadType()
    {
        //TODO
    }

    public function testUsersInGroup()
    {
       $group = new Group();
       $user1 = new User();
       $user2 = new User();
       $user3 = new User();
       
       $this->assertEquals(0, count($group->getUsers()));
       
       $group->addUser($user1);
       $group->addUser($user2);
       $group->addUser($user3);
       $this->assertEquals(3, count($group->getUsers()));

       $group->removeUser($user2);
       $this->assertEquals(2, count($group->getUsers()));
       
       $this->assertTrue($group->containsUser($user1));
       $this->assertFalse($group->containsUser($user2));
    }
}