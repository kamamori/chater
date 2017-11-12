<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;


class ProfileFormType extends \FOS\UserBundle\Form\Type\ProfileFormType
{
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildUserForm($builder, $options);
        $builder
            ->add('phoneNumber')
            ->add('birthDate')
            ->add('address');
    }
}
