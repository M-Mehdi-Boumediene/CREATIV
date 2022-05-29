<?php

namespace Cosanit\CosanitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom', 'text',array('required'=> true))

            ->add('telephone', 'text',array('required'=> true))

            ->add('email', 'email',array('required'=> true))

            ->add('message', 'textarea',array('required'=> true))

        ;

    }

}
