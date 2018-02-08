<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class LangueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('langueName',TextType::class, array('label' => 'Langue'));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Azimuth\AzimuthBundle\Entity\Langue'
        ));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_langue';
    }
}