<?php

namespace LDAPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
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
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;


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
     * @return address
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
     * Set created
     *
     * @param \DateTime $created
     * @return address
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return address
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
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

   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add users
     *
     * @param \LDAPBundle\Entity\Users $users
     * @return Address
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addressLinkTypes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $events;


    /**
     * Add addressLinkTypes
     *
     * @param \LDAPBundle\Entity\AddressLinkType $addressLinkTypes
     * @return Address
     */
    public function addAddressLinkType(\LDAPBundle\Entity\AddressLinkType $addressLinkTypes)
    {
        $this->addressLinkTypes[] = $addressLinkTypes;

        return $this;
    }

    /**
     * Remove addressLinkTypes
     *
     * @param \LDAPBundle\Entity\AddressLinkType $addressLinkTypes
     */
    public function removeAddressLinkType(\LDAPBundle\Entity\AddressLinkType $addressLinkTypes)
    {
        $this->addressLinkTypes->removeElement($addressLinkTypes);
    }

    /**
     * Get addressLinkTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddressLinkTypes()
    {
        return $this->addressLinkTypes;
    }

    /**
     * Add events
     *
     * @param \EventsBundle\Entity\Event $events
     * @return Address
     */
    public function addEvent(\EventBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \EventsBundle\Entity\Event $events
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
}
