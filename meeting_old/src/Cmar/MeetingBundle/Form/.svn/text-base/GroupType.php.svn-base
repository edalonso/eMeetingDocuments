<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('key')
            ->add('name')
            ->add('description')
            ->add('type')
            ->add('users', null, array('required' => false))
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_grouptype';
    }
}
