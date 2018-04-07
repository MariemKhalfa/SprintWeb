<?php

namespace BabysittingBundle\Form;

use FrontBundle\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BabysittingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class,
            array(
                'attr' => array(
                'placeholder' => 'Veuillez choisir le titre de votre annonce de babysitting'),
                'label' => false,
                )
                     )
            ->add('date', DateType::class)
            ->add('heureDeb', TimeType::class)
            ->add('heureFin', TimeType::class)
            ->add('adresse',TextType::class,
                array(
                    'attr' => array(
                        'placeholder' => 'Veuillez choisir votre adresse de babysitting'),
                    'label' => false,
                ))
            ->add('description',TextareaType::class,
                array(
                    'attr' => array(
                        'placeholder' => 'Veuillez remplir le champs de description de votre annonce de babysitting'),
                    'label' => false,
                ))
            ->add('nbrEnfants', NumberType::class,
                array(
                    'attr' => array(
                        'placeholder' => 'Veuillez choisir le nombre de places proposées'),
                    'label' => false,
                ))
           /* ->add('babysitteur', EntityType::class,
                array(
                    'class' => 'FrontBundle\Entity\User',
                    'choice_label' => 'username',
                    'query_builder' => function (UserRepository $ur) {
                        return $ur->SelectBabysitter();
                    },
                    'multiple' => false,))*/
            ->add('Ajouter', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BabysittingBundle\Entity\Babysitting'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'babysittingbundle_babysitting';
    }


}
