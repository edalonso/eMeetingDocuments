<?php

namespace Cmar\MeetingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PasswordType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('password', 'repeated', array('type' => 'password',
                                                'invalid_message' => 'Las dos contraseñas deben coincidir',
                                                'options' => array('label' => 'Contraseña'),
                                                'required' => true
                                                ))
            ;
    }

    public function getName()
    {
        return 'cmar_meetingbundle_passwordtype';
    }
}