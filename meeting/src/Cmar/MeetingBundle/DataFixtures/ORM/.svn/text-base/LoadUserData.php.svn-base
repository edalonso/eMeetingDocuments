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
        $user->setPassword('kk00');
        $user->setName('Vicente');
        $user->setSurname('Goyanes de Miguel');
        $user->setEmail('vgoya@gmail.com');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('isma');
        $user->setPassword('kk00');
        $user->setName('Isma');
        $user->setSurname('Guerra Bouzas');
        $user->setEmail('isma@teltek.es');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('pnietoiglesias');
        $user->setPassword('kk00');
        $user->setName('Pablo');
        $user->setSurname('Nieto Iglesias');
        $user->setEmail('pnieto@gmail.com');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('iriadp');
        $user->setPassword('kk00ADO');
        $user->setName('Iria');
        $user->setSurname('Díaz Pérez');
        $user->setEmail('iriadp@uvigo.es');
        $manager->persist($user);

        $user = new User();
        $user->setLogin('rubenrua');
        $user->setPassword('kk00');
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