<?php

namespace ActiviteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class ModificationActivite extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {$builder
        ->add('type',TextType::class,array('label' => 'type'))
        ->add('ageMin',TextType::class,array('label' => 'ageMin'))
        ->add('adresse',TextType::class,array('label' => 'adresse'))
        ->add('date',TextType::class,array('label' => 'date'))
        ->add('heure',TextType::class,array('label' => 'heure   '))

        ->add('Modifier',SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }


    public function getBlockPrefix()
    {
        return 'activite_bundle_modification_activite';
    }
}
