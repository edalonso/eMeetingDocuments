<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cmar\MeetingBundle\Entity\NickName
 *
 * @ORM\Table(name="nickname")
 * @ORM\Entity(repositoryClass="Cmar\MeetingBundle\Entity\NickNameRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class NickName
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
     * @var string $nickname
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="nickname", type="string", length=255, nullable=false)
     */
    private $nickname;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity="Meeting", inversedBy="id")
     * @ORM\JoinColumn(name="meeting_id", referencedColumnName="id")
     */
    private $meeting;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank = 0;

    public function __construct(Nick $nickname = null)
    {
        $this->nickname = $nickname;
    }

    public function __toString()
    {
        return $this->nickname;
    }


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
     * Set nickname
     *
     * @param string $nickname
     */
    public function setNickName($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getnickName()
    {
        return $this->nickname;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set meeting
     *
     * @param integer $meeting
     */
    public function setMeeting($meeting)
    {
        $this->meeting = $meeting;
    }

    /**
     * Get meeting
     *
     * @return integer 
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * Set user
     *
     * @param integer $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }
}
