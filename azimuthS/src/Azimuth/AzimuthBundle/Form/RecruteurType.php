<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecruteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('societeNom')
            ->add('societeSecteurActivite')
            ->add('societePhone')
            ->add('societeUrl')
            ->add('societeDescription')
            ->add('contactTitre')
            ->add('contactNom')
            ->add('contactPrenom')
            ->add('contactEmail')
            ->add('utilisateur');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Azimuth\AzimuthBundle\Entity\Recruteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'azimuth_azimuthbundle_recruteur';
    }


}
