<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cmar\MeetingBundle\Entity\Meeting
 *
 * @ORM\Table(name="meeting")
 * @ORM\Entity(repositoryClass="Cmar\MeetingBundle\Entity\MeetingRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Meeting
{
    const STATE_NEW = 0;
    const STATE_NOW = 1;
    const STATE_FINISHED = 2;
    const STATE_SCHEDULED = 3;
    const STATE_CANCELLED = 4;
    const STATE_LOCKED = 5;

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
    private $state = self::STATE_NEW;

    /**
     * @var string $salt
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * Link para entrar como usuario mini-host en ADO
     * @var string $secretsalt
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="secretsalt", type="string", length=255, nullable=false)
     */
    private $secretsalt;

    /**
     * Link para entrar como usuario view en ADO
     * @var string $viewsalt
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="viewsalt", type="string", length=255, nullable=false)
     */
    private $viewsalt;

    /**
     * @var string $title
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean $public
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;

    /**
     * @var User $owner
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */    
    private $owner;


    /**
     * @var Group $group
     *
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="id", cascade={"remove"})
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */    
    private $group = null;

    /**
     * @var ArrayCollection $users
     *
     * @ORM\ManyToMany(targetEntity="User", cascade={"remove"})
     * @ORM\JoinTable(name="meeting_user",
     *      joinColumns={@ORM\JoinColumn(name="meeting_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
    private $users;

    /**
     * @var ArrayCollection $recordings
     *
     * @ORM\OneToMany(targetEntity="Recording", mappedBy="meeting", cascade={"remove"}) 
     */
    private $recordings;


    /**
     * @var ArrayCollection $recordings
     *
     * @ORM\OneToMany(targetEntity="NickName", mappedBy="meeting", cascade={"remove"}) 
     */
    private $nicknames;

    /**
     * @var integer $concurrent
     *
     * @ORM\Column(name="concurrent", type="integer")
     */
    private $concurrent = 0;


    /**
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    public function __construct(User $owner = null)
    {
        $this->owner = $owner;
        $this->created = $this->updated = new \DateTime("now");
        $this->date = new \DateTime("tomorrow");
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recordings = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
        //FIXME
        //return sprintf("%s@%s", $this->title, strftime('%d/%m/%Y %H:%M', $this->date)) ;
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
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set secretsalt
     *
     * @param string $secretsalt
     */
    public function setSecretsalt($secretsalt)
    {
        $this->secretsalt = $secretsalt;
    }

    /**
     * Get secretsalt
     *
     * @return string 
     */
    public function getSecretsalt()
    {
        return $this->secretsalt;
    }

    /**
     * Set viewsalt
     *
     * @param string $viewsalt
     */
    public function setViewsalt($viewsalt)
    {
        $this->viewsalt = $viewsalt;
    }

    /**
     * Get viewsalt
     *
     * @return string 
     */
    public function getViewsalt()
    {
        return $this->viewsalt;
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
     * Set date
     *
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function isNow()
    {
        $now = new \DateTime("now");
        return (($this->date <= $now) and ($this->getFinishDate() >= $now));
    }


    /**
     * Check if the meeting has started in function of their date and duration.
     * @Assert\False(message = "The data meeting has to be future")
     *
     * @return boolean
     */
    public function isStarted()
    {
        return $this->date < new \DateTime("now");
    }

    /**
     * Check if the meeting has locked.
     *
     * @return boolean
     */
    public function isLocked()
    {
        return $this->state == self::STATE_LOCKED;
    }

    
    /**
     * Get meeting status in function of their date and duration.
     * Return -1 if not start, 0 if is now and 1 is finish
     *
     * @return integer
     */
    public function getDateStatus()
    {
        $now = new \DateTime("now");
        if ($now < $this->date) {
            return -1;
        } elseif ($now < $this->getFinishDate()) {
            return 0;
        } else {
            return 1;
        }
    }

    /**
     * Set public
     *
     * @param boolean $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set owner
     *
     * @param User $owner
     */
    public function setOwner(User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set group
     *
     * @param Group $group
     */
    public function setGroup(Group $group)
    {
        $this->group = $group;
    }

    /**
     * Get group
     *
     * @return Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add user
     *
     * @param User $user
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * Remove user
     *
     * @param User $user
     */
    public function removeUser(User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Contains user
     *
     * @param User $user
     *
     * @return boolean
     */
    public function containsUser(User $user)
    {
        return $this->users->contains($user);
    }

    /**
     * Get users
     *
     * @return ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add recording
     *
     * @param Recording $recording
     */
    public function addRecording(Recording $recording)
    {
        $this->recordings[] = $recording;
    }

    /**
     * Remove recording
     *
     * @param Recording $recording
     */
    public function removeRecording(Recording $recording)
    {
        $this->recordings->removeElement($recording);
    }

    /**
     * Contains recording
     *
     * @param Recording $recording
     *
     * @return boolean
     */
    public function containsRecording(Recording $recording)
    {
        return $this->recordings->contains($recording);
    }

    /**
     * Get recordings
     *
     * @return ArrayCollection
     */
    public function getRecordings()
    {
        return $this->recordings;
    }

    /**
     * Set concurrent
     *
     * @param integer $concurrent
     */
    public function setConcurrent($concurrent)
    {
        $this->concurrent = $concurrent;
    }

    /**
     * Get concurrent
     *
     * @return integer 
     */
    public function getConcurrent()
    {
        return $this->concurrent;
    }

    /**
     * Inc concurrent
     *
     */
    public function incConcurrent()
    {
        $this->concurrent += 1;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set nicknames
     *
     * @param $nicknames
     */
    public function setNickNames($nicknames)
    {
        $this->nicknames = $nicknames;
    }

    /**
     * Get nicknames
     *
     * @return nicknames
     */
    public function getNickNames()
    {
        return $this->nicknames;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
