<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CmarMeetingBundleEntityMeetingProxy extends \Cmar\MeetingBundle\Entity\Meeting implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setState($state)
    {
        $this->__load();
        return parent::setState($state);
    }

    public function getState()
    {
        $this->__load();
        return parent::getState();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setSecretsalt($secretsalt)
    {
        $this->__load();
        return parent::setSecretsalt($secretsalt);
    }

    public function getSecretsalt()
    {
        $this->__load();
        return parent::getSecretsalt();
    }

    public function setViewsalt($viewsalt)
    {
        $this->__load();
        return parent::setViewsalt($viewsalt);
    }

    public function getViewsalt()
    {
        $this->__load();
        return parent::getViewsalt();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setDate(\DateTime $date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function isNow()
    {
        $this->__load();
        return parent::isNow();
    }

    public function isStarted()
    {
        $this->__load();
        return parent::isStarted();
    }

    public function isLocked()
    {
        $this->__load();
        return parent::isLocked();
    }

    public function isMagic()
    {
        $this->__load();
        return parent::isMagic();
    }

    public function getDateStatus()
    {
        $this->__load();
        return parent::getDateStatus();
    }

    public function setPublic($public)
    {
        $this->__load();
        return parent::setPublic($public);
    }

    public function getPublic()
    {
        $this->__load();
        return parent::getPublic();
    }

    public function setMagic($magic)
    {
        $this->__load();
        return parent::setMagic($magic);
    }

    public function getMagic()
    {
        $this->__load();
        return parent::getMagic();
    }

    public function setOwner(\Cmar\MeetingBundle\Entity\User $owner)
    {
        $this->__load();
        return parent::setOwner($owner);
    }

    public function getOwner()
    {
        $this->__load();
        return parent::getOwner();
    }

    public function setGroup(\Cmar\MeetingBundle\Entity\Group $group)
    {
        $this->__load();
        return parent::setGroup($group);
    }

    public function getGroup()
    {
        $this->__load();
        return parent::getGroup();
    }

    public function addUser(\Cmar\MeetingBundle\Entity\User $user)
    {
        $this->__load();
        return parent::addUser($user);
    }

    public function removeUser(\Cmar\MeetingBundle\Entity\User $user)
    {
        $this->__load();
        return parent::removeUser($user);
    }

    public function containsUser(\Cmar\MeetingBundle\Entity\User $user)
    {
        $this->__load();
        return parent::containsUser($user);
    }

    public function getUsers()
    {
        $this->__load();
        return parent::getUsers();
    }

    public function addRecording(\Cmar\MeetingBundle\Entity\Recording $recording)
    {
        $this->__load();
        return parent::addRecording($recording);
    }

    public function removeRecording(\Cmar\MeetingBundle\Entity\Recording $recording)
    {
        $this->__load();
        return parent::removeRecording($recording);
    }

    public function containsRecording(\Cmar\MeetingBundle\Entity\Recording $recording)
    {
        $this->__load();
        return parent::containsRecording($recording);
    }

    public function getRecordings()
    {
        $this->__load();
        return parent::getRecordings();
    }

    public function setConcurrent($concurrent)
    {
        $this->__load();
        return parent::setConcurrent($concurrent);
    }

    public function getConcurrent()
    {
        $this->__load();
        return parent::getConcurrent();
    }

    public function incConcurrent()
    {
        $this->__load();
        return parent::incConcurrent();
    }

    public function setCreated(\DateTime $created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function addNickname(\Cmar\MeetingBundle\Entity\NickName $nickname)
    {
        $this->__load();
        return parent::addNickname($nickname);
    }

    public function removeNickname(\Cmar\MeetingBundle\Entity\NickName $nickname)
    {
        $this->__load();
        return parent::removeNickname($nickname);
    }

    public function containsNickname(\Cmar\MeetingBundle\Entity\NickName $nickname)
    {
        $this->__load();
        return parent::containsNickname($nickname);
    }

    public function getNicknames()
    {
        $this->__load();
        return parent::getNicknames();
    }

    public function setUpdated(\DateTime $updated)
    {
        $this->__load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'state', 'salt', 'secretsalt', 'viewsalt', 'title', 'description', 'url', 'date', 'public', 'magic', 'owner', 'group', 'users', 'recordings', 'nicknames', 'concurrent', 'created', 'updated');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}