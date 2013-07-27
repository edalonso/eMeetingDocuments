<?php

namespace Cmar\MeetingBundle\Service;

use Doctrine\ORM\Event\LifecycleEventArgs;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;

class EntityListener
{
    public function __construct()
    {
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        
        if ($entity instanceof User) {
            // do something with the Product
            // var_dump($args);exit;
        } elseif  ($entity instanceof Meeting) {
            // do something with the Product
            // var_dump($args);exit;
        }
    }
    
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        
        if ($entity instanceof User) {
            // do something with the Product
            // var_dump($args);exit;
        } elseif  ($entity instanceof Meeting) {
            // do something with the Product
            // var_dump($args);exit;
        }
    }
    
    
    public function preDelete(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        
        if ($entity instanceof User) {
            // do something with the Product
            // var_dump($args);exit;
        } elseif  ($entity instanceof Meeting) {
            // do something with the Product
            // var_dump($args);exit;
        }
    }   
}