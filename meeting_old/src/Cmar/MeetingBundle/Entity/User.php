<?php

namespace Cmar\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Cmar\MeetingBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Cmar\MeetingBundle\Entity\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User implements UserInterface
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
     * @var string $login
     *
     * @Assert\NotBlank
     * @ORM\Column(name="login", type="string", length=255, nullable=false, unique=true)
     */
    private $login;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $surname
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=false)
     */
    private $surname;

    /**
     * @var string $email
     *
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     * @ORM\Column(name="email", type="string", length=255, nullable=false, unique=true)
     */
    private $email;

    /**
     * @var array $groups
     * 
     * @ORM\ManyToMany(targetEntity="Group", inversedBy="users", cascade={"remove"})
     * @ORM\JoinTable(name="users_staffs")
     */
    private $groups;

    public function __construct() 
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->login;
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
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
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
     * Get name
     *
     * @return string 
     */
    public function getNameAndEmail()
    {
        return $this->getName() . ' ' . $this->getSurname() . ' ' . '&lt;' . $this->getEmail() . '&gt';
    }

    /**
     * Set surname
     *
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set groups
     *
     * @param array $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    /**
     * Add group
     *
     * @param Group $groups
     */
    public function addGroup(Group $group)
    {
        $this->groups[] = $group;
    }

    /**
     * Remove group
     *
     * @param Group $groups
     */
    public function removeGroup(Group $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Contains group
     *
     * @param Group $groups
     *
     * @return boolean
     */
    public function containsGroup(Group $group)
    {
        return $this->groups->contains($group);
    }

    /**
     * Get groups
     *
     * @return array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Returns the roles granted to the user.
     * Part of UserInterface
     *
     * @return Role[] The user roles
     */
    function getRoles()
    {
        if ("rubenrua" == $this->login  or "edu" == $this->login) {
            return array("ROLE_USER", "ROLE_ADMIN");
        } else {
            return array("ROLE_USER");
        }
    }

    /**
     * Returns the salt.
     * Part of UserInterface
     *
     * @return string The salt
     */
    function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     * Part of UserInterface
     *
     * @return string The username
     */
    function getUsername()
    {
        return $this->login;
    }

    /**
     * Removes sensitive data from the user.
     * Part of UserInterface
     *
     * @return void
     */
    function eraseCredentials()
    {
    }

    /**
     * The equality comparison should neither be done by referential equality
     * nor by comparing identities (i.e. getId() === getId()).
     *
     * However, you do not need to compare every attribute, but only those that
     * are relevant for assessing whether re-authentication is required.
     * Part of UserInterface
     *
     * @param UserInterface $user
     * @return Boolean
     */
    function equals(UserInterface $user)
    {
        if (!$user instanceof User) {
            return false;
        }

        if ($this->id !== $user->getId()) {
            return false;
        }
        
        return true;
    }


}