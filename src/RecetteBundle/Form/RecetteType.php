<?php

namespace RecetteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('video',TextType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('description',TextareaType::class,array(
                'label'=>'DESCRIPTION',

                'attr' => array(
                    'class' => 'form-control'

                )

            ))
            ->add('titre',TextType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecetteBundle\Entity\Recette'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recettebundle_recette';
    }


}
