<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PaysType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('nomPays', CountryType::class);
            ->add("nomPays", CountryType::class, array(
                    "label" => "Pays",
                    "mapped" => false,
                    "required" => true,
                    "preferred_choices" => [
                        'FR', 'DE', 'US', 'ES', 'GB', 'IT', 'JP',
                    ],
           ));
        // ->add('Utilisateur', EntityType::class)
        // ->add('Langue', EntityType::class)
        // ->add('Adresse', EntityType::class);
        //->add('pays', CountryType::class, array()

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ' Azimuth\AzimuthBundle\Entity\Pays'
        ));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_pays';
    }
}
