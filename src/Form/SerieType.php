<?php

namespace App\Form;

use App\Entity\Serie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SerieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',
                null,
                [
                    "required" => false,
                    "attr" => [
                        "class" => "maclasse"
                    ]
                ]
            )
            ->add('overview')
            ->add('status')
            ->add('vote')
            ->add('popularity')
            ->add('genres')
            ->add('firstAirDate',
                null,
                [
                    "html5" => true,
                    "widget" => "single_text"
                ]
            )
            ->add('lastAirDate')
            ->add('backdrop')
            ->add('poster')
//            ->add('tmdbd')
            ->add('dateCreated')
            ->add('dateModified')

            ->add('Ajouter2', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Serie::class,
        ]);
    }
}
