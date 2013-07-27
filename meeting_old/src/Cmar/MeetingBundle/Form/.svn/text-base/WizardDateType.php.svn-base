<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class WizardDateType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('duration')
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_wizarddatetype';
    }
}
