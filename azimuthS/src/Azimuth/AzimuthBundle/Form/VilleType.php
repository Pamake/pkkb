<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class VilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomVille', TextType::class,array(
                'label' => 'nom de ville'))
            ->add('pays', EntityType::class,array('label' => 'Pays',
                'class' => 'Azimuth\AzimuthBundle\Entity\Pays',
                'choice_label' => 'paysNom',
                'placeholder' => '--Veuillez Selectionner--'))
            ->add('pays', PaysType::class);
        // ->add('Utilisateur', EntityType::class)
        // ->add('Langue', EntityType::class)
        // ->add('Adresse', EntityType::class);

    }



    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Azimuth\AzimuthBundle\Entity\Ville'
        ));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_ville';
    }
}
