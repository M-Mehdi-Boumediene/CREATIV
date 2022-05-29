<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivationsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('wilaya')
            ->add('tel')
            ->add('email','email')
            ->add('date','datetime',array(
                'label'=>false,
            ))
            ->add('dateactive','datetime',array(
                'label'=>false,
                'attr'=>array('hidden'=>true)
            ))
            ->add('reference')
            ->add('serial')
            ->add('photo', new ScansType(),array(
                'required'=>true,
                'attr' => array(

                )



            ))
            ->add('message','textarea', array(
                'required'=>false,
      

            ))
            ->add('messagerie', 'entity', array(
                'class' => 'CosanitBundle:Messagerie',
                'property'     => 'message',
                'label'=>false,
                'required'=>true,
                'attr' => array(
                    'class' => 'hidden'
                )

            ))
            ->add('etat','checkbox', array(
                'attr'=>array('class'=>'hidden'),
                'required'=>false,
                ))



        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Activations'
        ));
    }
}
