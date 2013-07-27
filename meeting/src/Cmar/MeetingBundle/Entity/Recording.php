<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cmar\MeetingBundle\Entity\Recording
 *
 * @ORM\Table(name="recording")
 * @ORM\Entity(repositoryClass="Cmar\MeetingBundle\Entity\RecordingRepository")
 */
class Recording
{

    const STATE_REACHABLE = 0;
    const STATE_LOCKED = 1;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $state
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state = self::STATE_REACHABLE;


    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var datetime $dateCreated
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\ManyToOne(targetEntity="Meeting", inversedBy="id")
     * @ORM\JoinColumn(name="meeting_id", referencedColumnName="id")
     */
    private $meeting;

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
     * Set state
     *
     * @param integer $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     */
    public function setDateCreated(\DateTime $dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set meeting
     *
     * @param Meeting $meeting
     */
    public function setMeeting(Meeting $meeting)
    {
        $this->meeting = $meeting;
    }

    /**
     * Get meeting
     *
     * @return Meeting
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

}