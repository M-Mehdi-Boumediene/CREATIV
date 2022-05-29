<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Cosanit\CosanitBundle\Form\MediaType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class SearchType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('categories',  'entity', array(
                'placeholder' => 'Où',
                'required'=> false,
                'class' => 'CosanitBundle:Categories',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')

                        ->where('u.inter = :inter')
                        ->setParameter('inter',0)
                        ;
                },

                'choice_label' => 'nom',
                'choice_value' => 'id'

            ))


            ->add('duree', ChoiceType::class, array(
                'placeholder' => 'Durée',
                'required'=> false,
                'attr'=>array('placeholder' => 'Durée'),
                'choices'  => array(

                    'Courte-durée' => 'Court séjour',
                    'Longue-durée' => 'Long séjour',




                )))
            ->add('ref','text',array(
                'label'  => 'Ref ',
                'required'=> false,
                'attr' => array('class' => 'form-control','placeholder' => 'Numéro de réf',)
            ))

            ->add('types',  'entity', array(
                'placeholder' => 'Type de bien',
                'required'=> false,
                'class' => 'CosanitBundle:Types',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')

                        ->orderBy('u.nom','ASC')

                        ;
                },

                'choice_label' => 'nom',
                'choice_value' => 'id',


            ))
            ->add('prixmin','text',array(
                'required'=> false,
                'label'  => false,
                'attr' => array('class' => 'form-control','placeholder' => 'Prix minimum',)
            ))

            ->add('prixmax','text',array(
                'required'=> false,
                'label'  => false,
                'attr' => array('class' => 'form-control','placeholder' => 'Prix maximum',)
            ))
            ->add('surfacemin','text',array(
                'required'=> false,
                'label'  => false,
                'attr' => array('class' => 'form-control','placeholder' => 'Surface minimum',)
            ))
            ->add('surfacemax','text',array(
                'required'=> false,
                'label'  => false,
                'attr' => array('class' => 'form-control','placeholder' => 'Surface maximum',)
            ))
            ->add('transaction', ChoiceType::class, array(
                'choices'  => array(
                    'Vente' => 'Acheter',
                    'Location' => 'Louer',


                ), 'required'=>true))

            ->add('nc', ChoiceType::class, array(
                    'placeholder' => 'Nombre de chambres',
                    'multiple' => false,
                    'expanded' => false,
                    'required'=> false,
                    'choices'  => array(


                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5 et +',

                    ))

            )
            ->add('np', ChoiceType::class, array(
                    'placeholder' => 'Nombre de Piéces',
                    'multiple' => false,
                    'expanded' => false,
                    'required'=> false,
                    'choices'  => array(


                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5 et +',

                    ))

            )

        ;
    }


}
