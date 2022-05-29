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
class SearchNeufsType extends AbstractType
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

        ;
    }


}
