<?php

namespace SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LDAPBundle\Entity\Users;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="system_users")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Datetime
     *
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    /**
     * @var \Datetime
     *
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\ManyToMany(targetEntity="SystemBundle\Entity\Group")
     * @ORM\JoinTable(name="system_users_groups",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @var Users
     */
    private $ldap_user;

    /**
     * Set ldap_user
     *
     * @param Users $ldapUser
     * @return User
     */
    public function setLdapUser(Users $ldapUser = null)
    {
        $this->ldap_user = $ldapUser;

        return $this;
    }

    /**
     * Get ldap_user
     *
     * @return Users
     */
    public function getLdapUser()
    {
        return $this->ldap_user;
    }

    /**
     * @ORM\prePersist
     */
    public function prePersist()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
    }

    /**
     * @ORM\preUpdate
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }


}
