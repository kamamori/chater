<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use FOS\UserBundle\Model\User as BaseUser;



/**
 * @ORM\Entity
 */
class User extends BaseUser
{

    use TimestampableEntity;

    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $civility
     *
     * @ORM\Column(name="civility", type="gender_enum", nullable=true)
     */
    private $civility;
    
    /**
     * @var string $firstname
     * 
     * @Assert\NotBlank
     * @ORM\Column(type="string", nullable=true)
     */
    protected $firstname;

    /**
     * @var string $lastname
     * 
     * @Assert\NotBlank
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lastname;

    // /** 
    //  * @Assert\NotBlank
    //  * @ORM\Column(type="string", nullable=true)
    //  */
    // protected $username;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phoneNumber;
    
    /**
     * @var boolean $online
     * 
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $online;
    
    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="user", cascade={"remove", "persist"})
    */
    protected $messages;
    
    public function __construct()
    {
        parent::__construct();
    }
    
}