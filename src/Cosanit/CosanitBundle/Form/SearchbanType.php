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
class SearchbanType extends AbstractType
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
            ->add('quoi', ChoiceType::class, array(
                'choices'  => array(

                    'Immobilier' => 'Immobilier',
                    'Automobile' => 'Automobile',


                ),
                'required' => true,

                'empty_data'  => null))

            ->add('transaction', ChoiceType::class, array(
                'choices'  => array(
                    'Vente' => 'Acheter',
                    'Location' => 'Louer',


                ), 'required'=>true))

            ->add('duree', ChoiceType::class, array(

                'choices'  => array(
                    'Courte-durée' => 'Courte durée',
                    'Longue-durée' => 'Longue durée',


                ), 'required'=>true))



        ;
    }


}
