<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ConnaissancesInformatiquesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('recherche',TextType::class, array('label' => false,
            'attr' => array('class' => 'input-medium search-query')));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_recherche';
    }
}