<?php

namespace LDAPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
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
     * @var string
     */
    private $password;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var string
     */
    private $description;

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
     * @return Users
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
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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
     * Set isActive
     *
     * @param boolean $isActive
     * @return Users
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Users
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Users
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
     * @return Users
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
     * @var string
     */
    private $username;
    

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addresses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add addresses
     *
     * @param \LDAPBundle\Entity\Address $addresses
     * @return Users
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
     * @var \SystemBundle\Entity\User
     */
    private $systemUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $events;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addressLinkTypes;


    /**
     * Set systemUser
     *
     * @param \SystemBundle\Entity\User $systemUser
     * @return Users
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
     * Add events
     *
     * @param \EventBundle\Entity\Event $events
     * @return Users
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
     * Add addressLinkTypes
     *
     * @param \LDAPBundle\Entity\AddressLinkType $addressLinkTypes
     * @return Users
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
}
