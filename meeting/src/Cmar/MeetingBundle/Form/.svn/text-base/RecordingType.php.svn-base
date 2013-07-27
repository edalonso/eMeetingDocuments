<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RecordingType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('url')
            ->add('dateCreated')
        ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_recordingtype';
    }
}
