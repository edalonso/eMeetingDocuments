<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cmar\MeetingBundle\Entity\Group
 *
 * @ORM\Table(name="staff")
 * @ORM\Entity(repositoryClass="Cmar\MeetingBundle\Entity\GroupRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Group
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
     * @var string $key
     *
     * @Assert\NotBlank
     * @ORM\Column(name="key_", type="string", length=255, nullable=false, unique=true)
     */
    private $key;

    /**
     * @var string $name
     *
     * @Assert\NotBlank
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string $type
     *
     * @Assert\Choice(
     *     choices = { "personal", "secret", "private", "public" },
     *     message = "Choose a valid type: personal, private, secret, public"
     * )
     * @ORM\Column(name="type", type="string", length=10)
     */
    private $type;

    /**
     * @var array $users
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="groups")
     */
    private $users;

    public function __construct() 
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
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
     * Set key
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set users
     *
     * @param array $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * Add user
     *
     * @param User $users
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * Remove user
     *
     * @param User $users
     */
    public function removeUser(User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Contains user
     *
     * @param User $users
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
     * @return array
     */
    public function getUsers()
    {
        return $this->users;
    }
}