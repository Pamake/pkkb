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


class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', TextType::class,array(
                'label' => 'addresse 1er ligne'))
            ->add('address2', TextType::class,array(
                'label' => 'addresse 2er ligne'))
            ->add('district', TextType::class,array(
                'label' => 'region'))
            ->add('postalCode', TextType::class,array(
                'label' => 'code postal'))
            ->add('phone', TextType::class,array(
                'label' => 'telephone fixe'))
            ->add('ville', VilleType::class,array(
                'label' => 'ville'));
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
            'data_class' => ' Azimuth\AzimuthBundle\Entity\Address'
        ));
    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_address';
    }
}
