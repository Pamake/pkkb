<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;


class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre', TextType::class, array(
                                                        'label' => 'Titre du poste souhaite',
                                                        'attr' => array('placeholder' => 'Entrez votre titre'),
                                                        'constraints' => array(new NotBlank(
                                                                            array("message" => "Please provide your name")),
                )))
            ->add('Prenom', TextType::class, array(
                'label' => 'Prénom',
                'attr' => array('placeholder' => 'Your name'),
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide your name")),
                )
            ))
            ->add('Nom', TextType::class, array(
                'label' => 'Nom',
                'attr' => array('placeholder' => 'Your name'),
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide your name")),
                )
            ))
            ->add('Email', EmailType::class, array(
                'label' => 'Courriel',
                'attr' => array('placeholder' => 'Your email address'),
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide a valid email")),
                    new Email(array("message" => "Your email doesn't seems to be valid")),
                )
            ))
            ->add('Diplome', TextType::class, array(
                'label' => 'Diplome le plus haut obtenu',
                'attr' => array('placeholder' => 'Your name'),
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide your name")),
                )
            ))
            ->add('Cote',ChoiceType::class, array(
                'label' => ' cote de securite',
                'choices' => array(
                    'P' => 1,
                    'PA' => 2,
                    'PB'   => 3,
                    'PC' => 4,
                    'Classifie' => 5,
                    'Confidentiel' => 6,
                    'Secret' => 7,
                    'Tressecret' => 8
                ),))
            ->add('Datenaissance',BirthdayType::class, array(
                'label' => 'Date de naissance'))
            ->add('TelephoneMaison', TextType::class, array(
                'label' => 'Telephone domicile'))
            ->add('TelephoneMobile', TextType::class, array(
                'label' => 'Mobile'))
           // ->add('Utilisateur', EntityType::class)
           // ->add('Langue', EntityType::class)
           ->add('Address', AddressType::class,array(
               'label' => 'Addresse Postal'))
            ->add('submit', SubmitType::class, array(
                'label' => 'Save Changes',
                'attr' => array('class' => 'btn btn-primary fa fa-check')))
            ->add('cancel', SubmitType::class, array(
        'label' => 'Cancel',
        'attr' => array('class' => 'btn btn-default')));

    }

    public function getName()
    {
        return 'Azimuth_AzimuthBundle_candidat';
    }
}
