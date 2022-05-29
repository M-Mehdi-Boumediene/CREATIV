<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
class CategoriesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom', null,array(
                'label'  => 'Categorie : ','required'=> true,'attr' => array('class' => 'form-control')))

                ->add('titre', null,array(
                    'label'  => 'Sous titre : ','required'=> true,'attr' => array('class' => 'form-control')))

            ->add('texte', 'textarea',array(
                'label'  => 'Description ','required'=> false,'attr' => array('class' => 'form-control')))
            ->add('photo', 'collection', array(
                'type' => new MediaType(),
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required'=>true,'label' => false,


            ))

         ;

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Categories'
        ));
    }
}
