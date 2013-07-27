<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class WizardUsersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('public')
            ->add('users', null, array('required' => false))
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_wizarduserstype';
    }
}
