<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class MessagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('message',TextareaType::class, array(
            'label' => false,
            'attr' => array('class' => 'form-control word-count',
                            'required' =>false,
                            'placeholder' => 'Type your message here...',
                            'data-maxlength' => '100',
                            'rows' => '5'
                            )));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_message';
    }
}
