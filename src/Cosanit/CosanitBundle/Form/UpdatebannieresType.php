<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class UpdatebannieresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id','hidden')
            ->add('file','file', array('required' => false,'label' =>'Image:','attr'  => array('class' => 'btn btn-default')))
            ->add('titre','text',array('required' => false,'label'=>false, 'attr'=>array('class'=>'form-control','placeholder'=>'TITRE...')))
            ->add('texte','text', array('required' => false))




        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Bannieres'
        ));
    }
}
