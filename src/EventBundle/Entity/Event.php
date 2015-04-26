<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $dataTypeId;

    /**
     * @var integer
     */
    private $priority;

    /**
     * @var \DateTime
     */
    private $catchTime;

    /**
     * @var integer
     */
    private $sourceUserId;

    /**
     * @var string
     */
    private $sourceIp;

    /**
     * @var integer
     */
    private $sourceGroupId;


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
     * Set dataTypeId
     *
     * @param integer $dataTypeId
     * @return Event
     */
    public function setDataTypeId($dataTypeId)
    {
        $this->dataTypeId = $dataTypeId;

        return $this;
    }

    /**
     * Get dataTypeId
     *
     * @return integer 
     */
    public function getDataTypeId()
    {
        return $this->dataTypeId;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return Event
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set catchTime
     *
     * @param \DateTime $catchTime
     * @return Event
     */
    public function setCatchTime($catchTime)
    {
        $this->catchTime = $catchTime;

        return $this;
    }

    /**
     * Get catchTime
     *
     * @return \DateTime 
     */
    public function getCatchTime()
    {
        return $this->catchTime;
    }

    /**
     * Set sourceUserId
     *
     * @param integer $sourceUserId
     * @return Event
     */
    public function setSourceUserId($sourceUserId)
    {
        $this->sourceUserId = $sourceUserId;

        return $this;
    }

    /**
     * Get sourceUserId
     *
     * @return integer 
     */
    public function getSourceUserId()
    {
        return $this->sourceUserId;
    }

    /**
     * Set sourceIp
     *
     * @param string $sourceIp
     * @return Event
     */
    public function setSourceIp($sourceIp)
    {
        $this->sourceIp = $sourceIp;

        return $this;
    }

    /**
     * Get sourceIp
     *
     * @return string 
     */
    public function getSourceIp()
    {
        return $this->sourceIp;
    }

    /**
     * Set sourceGroupId
     *
     * @param integer $sourceGroupId
     * @return Event
     */
    public function setSourceGroupId($sourceGroupId)
    {
        $this->sourceGroupId = $sourceGroupId;

        return $this;
    }

    /**
     * Get sourceGroupId
     *
     * @return integer 
     */
    public function getSourceGroupId()
    {
        return $this->sourceGroupId;
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
     * @return Event
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ldap_users;


    /**
     * Add ldap_users
     *
     * @param \LDAPBundle\Entity\Users $ldapUsers
     * @return Event
     */
    public function addLdapUser(\LDAPBundle\Entity\Users $ldapUsers)
    {
        $this->ldap_users[] = $ldapUsers;

        return $this;
    }

    /**
     * Remove ldap_users
     *
     * @param \LDAPBundle\Entity\Users $ldapUsers
     */
    public function removeLdapUser(\LDAPBundle\Entity\Users $ldapUsers)
    {
        $this->ldap_users->removeElement($ldapUsers);
    }

    /**
     * Get ldap_users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLdapUsers()
    {
        return $this->ldap_users;
    }
}
