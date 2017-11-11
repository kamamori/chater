<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class AddressFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', 'text', array(
                'required' => false,
                'label'    => false,
            ))
            ->add('postalCode', 'text', array(
                'label' => false,
            ))
            ->add('city', 'text', array(
                'label' => false,
            ))
            ->add('country', 'text', array(
                'class' => Country::class,
                'label' => false,
            ));
    }
    
   
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Address::class,
        ));
    }

    public function getName()
    {
        return 'address';
    }
}