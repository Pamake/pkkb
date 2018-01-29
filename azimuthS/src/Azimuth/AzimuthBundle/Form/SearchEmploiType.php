
/**


namespace Azimuth\AzimuthBundle\Form;
/**
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SearchEmploiType extends AbstractType
{
/**
* @param FormBuilderInterface $builder
* @param array $options
*
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('nom')
->add('adresse')
->add('codePostal')
->add('ville')
->add('siteWeb')
->add('coordonnees')
->add('status')
->add('reouverture')
->add('fermetureAnnuelle')
->add('periodesOuverture')
;
}

/**
* @param OptionsResolver $resolver
*
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array(
'data_class' => 'AppBundle\Entity\Musee'
));
}
}

$builder
    ->add('nom')
    ->add('coordonnees', CollectionType::class)
    ->add('status', ChoiceType::class, array(
        'choices' => array(
            Musee::ouvert => Musee::ouvert ,
            Musee::ferme => Musee::ferme
        )))
    ->add('siteWeb', UrlType::class, ['required' => false])
    ->add('adresse', TextType::class, ['required' => false])
    ->add('codePostal', TextType::class,['required' => false])
    ->add('ville', TextType::class,['required' => false])
    ->add('reouverture', TextType::class,['required' => false])
    ->add('fermetureAnnuelle', TextType::class,['required' => false])
    ->add('periodesOuverture', TextAreaType::class,['required' => false])
    ->add('save', SubmitType::class)
**/