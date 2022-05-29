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
class DevisautosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('dure',ChoiceType::class, array(
                'choices'  => array(
                    '3mois' => '3 mois',
                    '6mois' => '6 mois',
                    '1an' => '1 an',
                ),
                'placeholder' => ' ',
                'required' => true,
            ))

            ->add('puissance',ChoiceType::class, array(
                'choices'  => array(
                    '3a4CH' => '3 à 4 CH',
                    '5a6CH' => '5 à 6 CH',
                    '7a10CH' => '7 à 10 CH',
                    '10a14CH' => '10 à 14CH',
                    '15etplus' => '15 et plus',

                ),
                'placeholder' => ' ',
                'required' => true,
            ))
            ->add('valeur',IntegerType::class, array('required' => true))

            ->add('garantie',ChoiceType::class, array(
                'choices'  => array(
                    'Tout risque' => 'Tout risque',
                    'DommageCollision10000DA' => 'Dommage Collision 10 000 DA',
                    'DommageCollision20000DA' => 'Dommage Collision 20 000 DA',
                    'DommageCollision30000DA' => 'Dommage Collision 30 000 DA',
                    'DommageCollision40000DA' => 'Dommage Collision 40 000 DA',
                    'DommageCollision50000DA' => 'Dommage Collision 50 000 DA',
                    'DommageCollisionvaleurvenale' => 'Dommage Collision Valeur Vénale',

                ),
                'placeholder' => ' ',
                'required' => true,
            ))

            ->add('vols', CheckboxType::class, [
                'label'    => 'Vols',
                'required' => false,
            ])
            ->add('incendies', CheckboxType::class, [
                'label'    => 'Incendies',
                'required' => false,
            ])

            ->add('bris', CheckboxType::class, [
                'label'    => 'Bris de glace',
                'required' => false,
            ])

            ->add('nom', TextType::class, [
                'label'    => 'Votre nom',
                'required' => false,
            ])

            ->add('telephone', TextType::class, [
                'label'    => 'téléphone',
                'required' => false,
            ])

            ->add('assistance1',ChoiceType::class, array(
                'choices'  => array(
                    'assistance1' => 'Assistance dépannage 50km',
                    'assistance2' => 'Assistance dépannage 200km',
                    'assistance3' => 'Assistance dépannage 350km',


                ),
                'placeholder' => ' ',
                'required' => false,
            ))

            ->add('assistance2', CheckboxType::class, [
                'label'    => 'assistance2',
                'required' => false,
            ])

            ->add('assistance3', CheckboxType::class, [
                'label'    => 'assistance3',
                'required' => false,
            ])
            ->add('defences', CheckboxType::class, [
                'label'    => 'defences',
                'required' => false,
                'attr' => array('checked' => 'checked', 'value' => '1')
            ])
        ;


        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosanit\CosanitBundle\Entity\Devisautos'
        ));
    }
}
