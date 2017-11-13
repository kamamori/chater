<?php
/**
 * Created by PhpStorm.
 * User: kamamori
 * Date: 13/11/17
 * Time: 18:53
 */

namespace AppBundle\Form\Type;


use AppBundle\Entity\ChatRoom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChatRoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', ChatRoom::class);
    }

}