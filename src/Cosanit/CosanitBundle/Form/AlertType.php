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
class AlertType extends AbstractType
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


                        ;
                },

                'choice_label' => 'nom',
                'choice_value' => 'id'

            ))

            ->add('duree', ChoiceType::class, array(
                'choices'  => array(
                    'Courte-durée' => 'Court séjour',
                    'Longue-durée' => 'Long séjour',



                ),'expanded' => false,'multiple' => false, 'choices_as_values' => false , 'required'=>false))





            ->add('types',  'entity', array(
                'required'=> false,
                'class' => 'CosanitBundle:Types',
                'multiple' => true,
                'expanded' => true,
                'choice_label' => 'nom',
                'choice_value' => 'id',
            ))
            ->add('prixmin','text',array(
                'required'=> false,
                'label'  => false,
                'attr' => array('class' => 'big-input','placeholder' => 'Prix minimum',)
            ))

            ->add('prixmax','text',array(
                'required'=> false,
                'label'  => false,
                'attr' => array('class' => 'big-input','placeholder' => 'Prix maximum',)
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


            ->add('np', ChoiceType::class, array(
                    'multiple' => true,
                    'expanded' => true,
                    'read_only' => true,
                    'choices'  => array(


                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5 et +',

                    ))

            )


            ->add('criteres', ChoiceType::class, array(
                    'multiple' => true,
                    'expanded' => true,
                    'read_only' => true,
                    'choices'  => array(


                        '1' => 'Avec photos ou vidéo',
                        '2' => 'Notre sélection',
                        '3' => 'Récent (moins de 3 jours)',


                    ))

            )
        ;
    }


}
