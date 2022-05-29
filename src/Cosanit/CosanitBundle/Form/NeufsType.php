<?php

namespace Cosanit\CosanitBundle\Form;

use Cosanit\CosanitBundle\Entity\Slideneufs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

use Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType;
use Ivory\GoogleMap\Place\AutocompleteComponentType;

class NeufsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('titre','text',array(
                'label'  => 'Titre : ',
                'required'=> true,
                'attr' => array('class' => 'form-control')
            ))

            ->add('soustitre','textarea',array('required'=>false))

            ->add('disponible', DateType::class,array(  'data' => new \DateTime(),'widget' => 'single_text', 'required'=>false,'label'=>' '))



            ->add('text2',CKEditorType::class, array(
                'config' => array(
                    'default' => 'full',
                    'filebrowserBrowseRoute' => 'elfinder',
                    'filebrowserBrowseRouteParameters' => array('instance' => 'default')
                )))

            ->add('image1', 'collection', array(
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
            'data_class' => 'Cosanit\CosanitBundle\Entity\Neufs'
        ));
    }
}
