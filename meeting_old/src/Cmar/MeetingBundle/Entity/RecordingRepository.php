<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * RecordingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecordingRepository extends EntityRepository
{

    public function findOneRecordingByTitle($title)
    {
        return $this->getEntityManager()
            ->createQuery("SELECT m FROM CmarMeetingBundle:Recording m
                           WHERE m.title = :title")
            ->setParameter('title', $title)
            ->getSingleResult();

    }

}