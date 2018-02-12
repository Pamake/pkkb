<?php

namespace Azimuth\AzimuthBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ConnaissancesLinguistiquesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('langueNom',TextType::class, array('label' => 'Langue'))
                ->add('langueNiveauExpresionEcrite',EntityType::class, array('label' => 'Expression Ecrite',
                                                                                         'class' => 'Azimuth\AzimuthBundle\Entity\NiveauLinguistique',
                                                                                            'choice_label' => 'nameNiveau',
                                                                                            'placeholder' => '--Veuillez Selectionner--'))
                ->add('langueNiveauComprehensionEcrite',EntityType::class, array('label' => 'Comprehension Ecrite',
                                                                                             'class' => 'Azimuth\AzimuthBundle\Entity\NiveauLinguistique',
                                                                                                'choice_label' => 'nameNiveau',
                                                                                                    'placeholder' => '--Veuillez Selectionner--'))
                ->add('langueNiveauCompetenceOrale',EntityType::class, array('label' => 'Competence Orale',
                                                                                         'class' => 'Azimuth\AzimuthBundle\Entity\NiveauLinguistique',
                                                                                            'choice_label' => 'nameNiveau',
                                                                                                'placeholder' => '--Veuillez Selectionner--'));
    }


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Azimuth\AzimuthBundle\Entity\ConnaissancesLinguistiques'
        ));
    }


    public function getName()
    {
        return 'Azimuth_AzimuthBundle_connaisaance_linguistique';
    }
}