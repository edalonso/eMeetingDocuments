<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cmar\MeetingBundle\Entity\Log
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Log
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
     * @var integer $sco_id
     *
     * @ORM\Column(name="sco_id", type="integer")
     */
    private $sco_id;

    /**
     * @var integer $participants
     *
     * @ORM\Column(name="participants", type="integer")
     */
    private $participants;

    /**
     * @var integer $length_minutes
     *
     * @ORM\Column(name="length_minutes", type="integer")
     */
    private $length_minutes;


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
     * Set sco_id
     *
     * @param integer $scoId
     */
    public function setScoId($scoId)
    {
        $this->sco_id = $scoId;
    }

    /**
     * Get sco_id
     *
     * @return integer 
     */
    public function getScoId()
    {
        return $this->sco_id;
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
     * Set length_minutes
     *
     * @param integer $lengthMinutes
     */
    public function setLengthMinutes($lengthMinutes)
    {
        $this->length_minutes = $lengthMinutes;
    }

    /**
     * Get length_minutes
     *
     * @return integer 
     */
    public function getLengthMinutes()
    {
        return $this->length_minutes;
    }
}