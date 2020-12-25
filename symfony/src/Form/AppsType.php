<?php

namespace App\Form;

use App\Entity\Apps;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AppsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['attr' => ['class' => 'form-control']])
            ->add('version', TextType::class, ['attr' => ['class' => 'form-control']])
            ->add('category', TextType::class, ['attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['attr' => ['class' => 'my-2 btn btn-info']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Apps::class,
        ]);
    }
}
