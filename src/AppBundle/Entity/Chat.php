<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;



/**
 * @ORM\Entity
 * @ORM\Table(name="chat_room")
 */
class Chat
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
    protected $messages;
    
    
    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", nullable=true)
     */
    protected $maxChatMessages;
    
    
}