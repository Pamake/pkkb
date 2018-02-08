<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class EquiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameEquite',TextType::class, array('label' => 'Equite'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Azimuth\AzimuthBundle\Entity\Equite'
        ));
    }
    public function getName()
    {
        return 'Azimuth_AzimuthBundle_equite';
    }
}