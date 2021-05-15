<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use phpDocumentor\Reflection\DocBlock\Description;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Objet', null,['label'=>false,'attr'=>['placeholder'=>'Objet']])
            ->add('Description',null,['label'=>false,'attr'=>['placeholder'=>'Description']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
