<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class WizardMetadataType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_wizardmetadatatype';
    }
}
