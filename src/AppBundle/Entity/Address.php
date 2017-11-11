<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;


/**
 * @ORM\Entity
 * @ORM\Table(name="address")
 */
class Address
{
    
    use TimestampableEntity;


    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address;

    /**
     * @Assert\Regex(pattern="/^[0-9]{5}$/", message="address.postalCode.regexp")
     * @ORM\Column(type="string")
     */
    protected $postalCode;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string")
     */
    protected $city;

   /**
     * @Assert\NotBlank
     * @ORM\Column(type="string")
     */
    protected $country;

}