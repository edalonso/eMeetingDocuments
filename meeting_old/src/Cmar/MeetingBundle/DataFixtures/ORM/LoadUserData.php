<?php
namespace Cmar\MeetingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cmar\MeetingBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        $user = new User();
        $user->setLogin('vgoya');
        $user->setPassword('123456');
        $user->setName('Vicente');
        $user->setSurname('Goyanes de Miguel');
        $user->setEmail('vgoya@gmail.com');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('isma');
        $user->setPassword('123456');
        $user->setName('Isma');
        $user->setSurname('Guerra Bouzas');
        $user->setEmail('isma@gmail.com');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('pnietoiglesias');
        $user->setPassword('123456');
        $user->setName('Pablo');
        $user->setSurname('Nieto Iglesias');
        $user->setEmail('pnieto@gmail.com');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('rubenrua');
        $user->setPassword('123456');
        $user->setName('Ruben');
        $user->setSurname('Gonzalez Gonzalez');
        $user->setEmail('rubenrua@gmail.com');
        $manager->persist($user);
        
        $user = new User();
        $user->setLogin('edu');
        $user->setPassword('123456');
        $user->setName('Eduardo');
        $user->setSurname('Alonso');
        $user->setEmail('edu.edalonso@gmail.com');
        $manager->persist($user);

        $manager->flush();
    }
}