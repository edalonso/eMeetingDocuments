<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Group;

class UserTest extends \PHPUnit_Framework_TestCase
{

    public function testUser()
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
      
      $this->assertEquals($login, $user->getLogin());
      $this->assertEquals($password, $user->getPassword());
      $this->assertEquals($name, $user->getName());
      $this->assertEquals($surname, $user->getSurname());
      $this->assertEquals(array("ROLE_USER"), $user->getRoles());
      $this->assertEquals($email, $user->getEmail());
    }
    
    public function testUserAdmin()
    {
      $user = new User();
      $user->setLogin("rubenrua");
      $this->assertEquals(array("ROLE_USER","ROLE_ADMIN"), $user->getRoles());
    }

    public function testUsersInMeeting()
    {
      $user = new User();
      $group1 = new Group();
      $group2 = new Group();
      $group3 = new Group();
      
      $this->assertEquals(0, count($user->getGroups()));
      
      $user->addGroup($group1);
      $user->addGroup($group2);
      $user->addGroup($group3);
      $this->assertEquals(3, count($user->getGroups()));
      
      $user->removeGroup($group2);
      $this->assertEquals(2, count($user->getGroups()));
      
      $this->assertTrue($user->containsGroup($group1));
      $this->assertFalse($user->containsGroup($group2));
    }
}