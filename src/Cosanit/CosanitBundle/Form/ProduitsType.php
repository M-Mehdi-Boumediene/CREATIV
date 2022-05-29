<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Cosanit\CosanitBundle\Form\MediaType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use FM\ElfinderBundle\Form\Type\ElFinderType;
class ProduitsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder



            ->add('exclusive', ChoiceType::class, array(
                'choices'  => array(
                    'non' => 'Non',
                    'oui' => 'Oui',


                ), 'required'=>true))



            ->add('titre','text',array(
                'label'  => 'Titre : ',
                'required'=> true,
                'attr' => array('class' => 'form-control')
            ))

            ->add('text1','text',array(
                'label'  => 'Sous titre : ',
                'required'=> false,
                'attr' => array('class' => 'form-control')
            ))

            ->add('categories',  'entity', array(
                'required'=> true,
                'class' => 'CosanitBundle:Categories',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.nom', 'ASC');
                },
                'choice_label' => 'nom',
            ))


            ->add('text2',CKEditorType::class, array(
                'config' => array(
                    'default' => 'full',
                    'filebrowserBrowseRoute' => 'elfinder',
                    'filebrowserBrowseRouteParameters' => array('instance' => 'default')
                )))

            ->add('image1', 'collection', array(
                'type' => new MediaType(),
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required'=>true,'label' => false,


            ))







        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Produits'
        ));
    }
}
