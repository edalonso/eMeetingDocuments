<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cmar\MeetingBundle\Entity\Log_Total
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Log_Total
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $datetime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;

    /**
     * @var integer $participants
     *
     * @ORM\Column(name="participants", type="integer")
     */
    private $participants;

    /**
     * @var integer $active_rooms
     *
     * @ORM\Column(name="active_rooms", type="integer")
     */
    private $active_rooms;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datetime
     *
     * @param datetime $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * Get datetime
     *
     * @return datetime 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set participants
     *
     * @param integer $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * Get participants
     *
     * @return integer 
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set active_rooms
     *
     * @param integer $activeRooms
     */
    public function setActiveRooms($activeRooms)
    {
        $this->active_rooms = $activeRooms;
    }

    /**
     * Get active_rooms
     *
     * @return integer 
     */
    public function getActiveRooms()
    {
        return $this->active_rooms;
    }
}