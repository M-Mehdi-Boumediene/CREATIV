<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscroptsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom')
            ->add('adresse')
            ->add('email')
            ->add('npermis')
            ->add('catpermis')
            ->add('genre')
            ->add('wilaya')
            ->add('matricule')
            ->add('nserie')
            ->add('ntype')
            ->add('anneecircule')
            ->add('marque')
            ->add('modele')





        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Souscropts'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cosanit_cosanitbundle_souscropts';
    }


}
