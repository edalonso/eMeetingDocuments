<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('password', 'password')
            ->add('name')
            ->add('surname')
            ->add('email')
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_usertype';
    }
}
