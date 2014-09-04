<?php

namespace Tinkhouse\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @ORM\ManyToOne(targetEntity="Tinkhouse\UserBundle\Entity\tH\UserType")
     */
    protected $usertype;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Set usertype
     *
     * @param \Tinkhouse\UserBundle\Entity\tH\UserType $usertype
     * @return User
     */
    public function setUsertype(\Tinkhouse\UserBundle\Entity\tH\UserType $usertype = null)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return \Tinkhouse\UserBundle\Entity\tH\UserType 
     */
    public function getUsertype()
    {
        return $this->usertype;
    }
}
