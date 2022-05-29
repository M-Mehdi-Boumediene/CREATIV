<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
class EnvoisoffreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nbplace')

            ->add('datepermis', DateType::class,array('widget' => 'single_text', 'required'=>true))

            ->add('nom')
            ->add('adresse')
            ->add('email')
            ->add('telephone')
            ->add('npermis')
            ->add('catpermis',ChoiceType::class, array(
                'choices'  => array(
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C',
                ),
                'placeholder' => ' ',
                'required' => true,
            ))

            ->add('wilaya')
            ->add('matricule')
            ->add('nserie')
            ->add('ntype')
            ->add('anneecircule', DateType::class,array('widget' => 'single_text', 'required'=>true))

            ->add('marque')
            ->add('modele')
            ->add('genre',ChoiceType::class, array(
                'choices'  => array(
                    'Véhicule particulier ' => 'Véhicule particulier ',
                    'Camion' => 'Camion',
                    'Véhicule commerciale' => 'Véhicule commerciale',
                ),
                'placeholder' => ' ',
                'required' => true,
            ))
            ->add('usage')






        ;
    }


}
