<?php

namespace AppBundle\Form\Type;

use AppBundle\Doctrine\DBAL\CivilityEnum;
use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProfileFormType extends AbstractType
{
    protected function buildUserForm(FormBuilder $builder, array $options)
    {

        $builder
            ->add('civility', 'choice', array(
                'choices' => GenderEnum::getChoices(),
                'expanded' => true,
                'multiple' => false,
            ))
            ->add('lastname')
            ->add('firstname')
            ->add('username')
            ->add('email', 'email');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'label_format' => 'form.user.%name%',
        ));
    }

}
