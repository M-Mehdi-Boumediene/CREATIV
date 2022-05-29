<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class BannieresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file','file', array('required' => false,'label' =>'Image:','attr'  => array('class' => 'btn btn-default')))
            ->add('titre','text',array('label'=>'Titre:','required'=>false, 'attr'=>array('class'=>'form-control')))
            ->add('texte','textarea', array('label'=>'Texte:','required'=>false, 'attr'=>array('class'=>'form-control','placeholder'=>'TEXTE...')))



        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Bannieres'
        ));
    }
}
