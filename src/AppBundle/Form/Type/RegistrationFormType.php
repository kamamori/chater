<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType 
{
    // private $em;
    
    // public function __construct($entity, $em)
    // {
    //   $this->em = $em;
    // }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
            ->add('username')
        ;
    }

    public function getName()
    {
        return 'user_registration';
    }
}