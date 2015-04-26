<?php

namespace LDAPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressLinkType
 */
class AddressLinkType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return AddressLinkType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * @var \SystemBundle\Entity\User
     */
    private $systemUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addresses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $events;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set systemUser
     *
     * @param \SystemBundle\Entity\User $systemUser
     * @return AddressLinkType
     */
    public function setSystemUser(\SystemBundle\Entity\User $systemUser = null)
    {
        $this->systemUser = $systemUser;

        return $this;
    }

    /**
     * Get systemUser
     *
     * @return \SystemBundle\Entity\User 
     */
    public function getSystemUser()
    {
        return $this->systemUser;
    }

    /**
     * Add addresses
     *
     * @param \LDAPBundle\Entity\Address $addresses
     * @return AddressLinkType
     */
    public function addAddress(\LDAPBundle\Entity\Address $addresses)
    {
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \LDAPBundle\Entity\Address $addresses
     */
    public function removeAddress(\LDAPBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add events
     *
     * @param \EventBundle\Entity\Event $events
     * @return AddressLinkType
     */
    public function addEvent(\EventBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \EventBundle\Entity\Event $events
     */
    public function removeEvent(\EventBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add users
     *
     * @param \LDAPBundle\Entity\Users $users
     * @return AddressLinkType
     */
    public function addUser(\LDAPBundle\Entity\Users $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \LDAPBundle\Entity\Users $users
     */
    public function removeUser(\LDAPBundle\Entity\Users $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
