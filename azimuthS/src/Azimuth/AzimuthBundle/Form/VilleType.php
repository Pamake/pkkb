<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class VilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomVille', TextType::class,array(
                'label' => 'nom de ville'))
            ->add('pays', PaysType::class);
        // ->add('Utilisateur', EntityType::class)
        // ->add('Langue', EntityType::class)
        // ->add('Adresse', EntityType::class);

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ' Azimuth\AzimuthBundle\Entity\Ville'
        ));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_ville';
    }
}
