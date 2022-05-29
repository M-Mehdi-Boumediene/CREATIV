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
class InternationalbanType extends AbstractType
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
                        ->setParameter('inter',1)
                        ;
                },

                'choice_label' => 'nom',
                'choice_value' => 'id'

            ))


            ->add('transaction', ChoiceType::class, array(
                'choices'  => array(
                    'Vente' => 'Acheter',
                    'Location' => 'Louer',


                ), 'required'=>true))


            ->add('duree', ChoiceType::class, array(

                'choices'  => array(
                    'all' => ' ',
                    'Courte-durée' => 'courte durée',
                    'Longue-durée' => 'longue durée',


                ), 'required'=>true))

            ->add('quoi',  'entity', array(
                'placeholder' => 'Quoi',
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



        ;
    }


}
