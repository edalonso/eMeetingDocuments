<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MeetingType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('magic')
            ->add('public')
            ->add('users', null, array('required' => false))
            ->add('owner')
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_meetingtype';
    }
}
