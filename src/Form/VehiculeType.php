<?php

namespace App\Form;

use App\Entity\TypeOfVehicule;
use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country_of_registration')
            ->add('numberplate', TextType::class, [
                'required' => false, 
                'attr' => [ 
                        'class'=> 'custom-field-form', 
                        'pattern' => '[-0-9A-Z]{9}',
                        'maxlength' => '9'
                ]
            ])
            ->add('brand')
            ->add('model')
            ->add('color', ChoiceType::class, [
                'choices'  => [
                    'Blanche' => 'Blanche',
                    'Noir' => 'Noir',
                    'Rouge' => 'Rouge',
                    'Verte' => 'Verte',
                    'Jaune' => 'Jaune',
                    'Orange' => 'Orange',
                    'Bleu' => 'Bleu',
                    'Bleu Marine' => 'Bleu Marine',
                    'Grise' => 'Grise',
                    'Violette' => 'Violette',
                    'Rose' => 'Rose',
                    'Autre' => 'Autre',
                ],
            ])
            ->add('year')
            ->add('vehicule_picture',FileType::class, [
                'label' => 'profil picture',
                'attr' => [ 'class'=> 'custom-field-form'],

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypesMessage' => 'Please upload a valid picture document',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/pgn',
                            'image/gif'
                        ],
                    ])
                ],
            ])
            ->add('typeOfVehicule', EntityType::class, [
            'class' => TypeOfVehicule::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.type', 'ASC');
            },
            'choice_label' => 'type',
        ]) 
    
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
